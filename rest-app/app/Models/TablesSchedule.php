<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TablesSchedule extends Model
{
    protected $fillable = [
        'table_id',
        'customer_id',
        'reservation_date',
        'reservation_time',
    ];
}
