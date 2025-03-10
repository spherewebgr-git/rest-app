<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    use HasFactory;

    protected $fillable = [
        'person_name',
        'person_lastname',
        'phone_number',
        'mail_address',
        'stuff_type',
    ];
}
