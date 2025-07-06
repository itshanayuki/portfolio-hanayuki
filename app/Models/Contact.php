<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
    'first_name',
    'last_name',
    'email',
    'country_code',
    'phone_number',
    'company_name',
    'country',
    'heard_about',
    'message',
];


}
