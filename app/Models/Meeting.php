<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Meeting extends Model
{
    use HasFactory;
    
    protected $fillable=[
        "subject",
        "description",
        "start_time",
        "end_time",
        "location",
      
    ];


    public function meetingUser(){
        
        $this->hasMany(MeetingUser::class,'meeting_id','id');
    }


}


