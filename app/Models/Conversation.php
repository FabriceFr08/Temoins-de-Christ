<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conversation extends Model
{
    use HasFactory;

    protected $fillable = [
        'participant_id1',
        'participant_id2',
        'last_message_id',
    ];

    public function lastMessage()
    {
        return $this->belongsTo(Message::class, 'last_message_id');
    }

    public function participant1(){
        return $this->belongsTo(Participant::class, 'participant_id1');
    }

    public function participant2(){
        return $this->belongsTo(Participant::class, 'participant_id2');
    }
}
