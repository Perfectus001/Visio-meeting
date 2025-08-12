<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    //

    protected $fillable = [
        'user_id',
        'start_time',
        'end_time',
        'description',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }


}
