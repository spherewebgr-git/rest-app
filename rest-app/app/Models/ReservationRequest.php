<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReservationRequest extends Model
{
    protected $fillable = [
        'hashId',
        'customer_name',
        'reservation_date',
        'reservation_time',
        'customer_phone',
        'customer_email',
        'members'
    ];
}
