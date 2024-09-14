<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;

    protected $fillable = [
        'avatar',
        'name',
        'email',
        'email_verified_at',
        'identification_number',
        'password',
        'is_admin'
    ];

    public function groups()
    {
        return $this->belongsToMany(Group::class, 'group_participants');
    }
}
