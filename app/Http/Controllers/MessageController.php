<?php

namespace App\Http\Controllers;

use App\Events\MessageCreated;
use App\Models\Conversation;
use App\Models\Doctor;
use App\Models\Message;
use App\Models\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Throwable;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $receiver_id = $id;
        $user = Auth::user();
        // $conversation = null;
        if ($user instanceof Doctor) {
            $participant = Patient::FindOrFail($receiver_id);
            $conversation = Conversation::where(function ($query) use ($user, $participant) {
                $query->where('patient_id', $participant->id)
                    ->where('doctor_id', $user->id);
            })->first();
        } elseif ($user instanceof Patient) {
            $participant = Doctor::FindOrFail($receiver_id);
            $conversation = Conversation::where(function ($query) use ($user, $participant) {
                $query->where('doctor_id', $participant->id)
                    ->where('patient_id', $user->id);
            })->first();
        }

        $messages = $conversation->messages;

        $messages->each(function ($message) {
            $message->sender_name = $message->sender->trans_full_name;
            $message->sender_avatar = $message->sender->image ?? 'default-avatar.png';
            $message->created  = str_replace(
                ['minutes', 'seconds', 'minute', 'second'],
                ['min', 'sec', 'min', 'sec'],
                $message->created_at->diffForHumans()
            );
        });
        return response()->json([
            'data' => $messages,
            'conversation' => $conversation,
            'user_type' => get_class($user),
            'user_id' => $user->id,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sender = auth::user();
        $guard = Auth::guard()->name;

        if ($guard == 'doctor') {
            $request->validate([
                'message' => ['required', 'string'],
                'receiver_id' => ['required']
            ]);
            $receiver = Patient::findOrFail($request->receiver_id);
        } elseif ($guard == 'web') {
            $request->validate([
                'message' => ['required', 'string'],
                'receiver_id' => ['required']
            ]);
            $receiver = Doctor::findOrFail($request->receiver_id);
        }
        DB::beginTransaction();
        try {

            $conversation = Conversation::where(function ($query) use ($sender, $receiver) {
                $query->where('doctor_id', $sender->id)
                    ->where('patient_id', $receiver->id);
            })->orWhere(function ($query) use ($sender, $receiver) {
                $query->where('doctor_id', $receiver->id)
                    ->where('patient_id', $sender->id);
            })->first();

            if (!$conversation) {
                if ($guard == 'doctor') {
                    $conversation = Conversation::create([
                        'doctor_id' => $sender->id, // تأكد أن الحقل يمثل المرسل الصحيح
                        'patient_id' => $receiver->id, // تأكد أن الحقل يمثل المستقبل الصحيح
                    ]);
                } elseif ($guard == 'web') {
                    $conversation = Conversation::create([
                        'doctor_id' => $receiver->id,
                        'patient_id' => $sender->id,
                    ]);
                }
            }
            $message = $conversation->messages()->create([
                'sender_id' => $sender->id,
                'sender_type' => get_class($sender),
                'receiver_id' => $receiver->id,
                'receiver_type' => get_class($receiver),
                'body' => $request->message,
            ]);
            $conversation->update([
                'last_message_id' => $message->id,
            ]);
            DB::commit();
            broadcast(new MessageCreated($message));
            $message->sender_name = $message->sender->trans_full_name;
            $message->sender_avatar = $message->sender->image ?? 'default-avatar.png';
        } catch (Throwable $e) {
            DB::rollBack();
            throw $e;
        }
        return  response()->json($message);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        //
    }
}
