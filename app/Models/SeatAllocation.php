<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SeatAllocation extends Model
{

    protected $table = 'seat_allocations';


    protected $fillable = [
        'trip_id',
        'user_id',
        'seat_number',

    ];


    public function trip()
    {
        return $this->belongsTo(Trip::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
