<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ConversationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $user = Auth::user();
        $conversations = $user->conversations()->with('lastMessage')->get();

        $conversations->map(function ($conversation) {
            $conversation->otherParticipant = $conversation->otherParticipant();
            if ($conversation->lastMessage) {
                $conversation->last_message_date =
                    str_replace(
                        ['minutes', 'seconds', 'minute', 'second'],
                        ['min', 'sec', 'min', 'sec'],
                        $conversation->lastMessage->created_at->diffForHumans()
                    );
            } else {
                $conversation->last_message_date = null;
            }
            return $conversation;
        });
        if ($request->ajax()) {
            return response()->json([
                'data' => $conversations
            ]);
        }
        return view('dashboard.doctor.chat.index', compact('conversations'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Conversation $conversation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Conversation $conversation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Conversation $conversation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Conversation $conversation)
    {
        //
    }
}
