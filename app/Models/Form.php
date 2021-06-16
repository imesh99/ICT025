<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    public $fillable = [
        'Name',
        'Username',
        'Date of Birth',
        'Email',
        'Teliphone-No',
        'NIC No',
        'Gender',
        'Password',
        'Reenter Password'
    ];
}
