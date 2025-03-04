<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        'reservation_id',
        'reservation_date',
        'reservation_time',
        'table_id',
        'customer_id',
        'stuff_id',
        'people_number',
    ];
}
