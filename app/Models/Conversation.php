<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Conversation extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function doctor()
    {
        return $this->belongsTo(Doctor::class);
    }

    public function messages()
    {
        return $this->hasMany(Message::class);
    }
    public function lastMessage()
    {
        return $this->belongsTo(Message::class, 'last_message_id')
            ->withDefault();
    }
    public function otherParticipant()
    {
        $currentUser = Auth::user();
        if ($currentUser instanceof Doctor) {
            $participant = $this->patient;
            $type = 'patients';
        } elseif ($currentUser instanceof Patient) {
            $participant = $this->doctor;
            $type = 'doctors';
        }
        $unreadMessagesCount = $currentUser->unreadMessagesInConversation($this->id);

        return [
            'id' => $participant->id,
            'name' => $participant->trans_full_name,
            'image' => $participant->image
                ? asset('uploads/' . $type . '/' . $participant->image)
                : 'https://ui-avatars.com/api/?background=random&name=' . urlencode($participant->trans_full_name),
            'unread_messages_count' => $unreadMessagesCount,
        ];
    }
}
