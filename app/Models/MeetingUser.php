<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MeetingUser extends Model
{
    use HasFactory;

    protected $fillable=[
        "meeting_id",
        "user_id",

    ];
    public function meeting(){

        $this->belongsTo(Meeting::class,'meeting_id','id');
    }
    public function user(){

        $this->belongsTo(User::class,'user_id','id');
    }
}
