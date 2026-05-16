<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'member_name',
        'equipment_name',
        'booking_date',
        'status'
    ];
}