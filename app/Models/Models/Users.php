<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'password',
        'userType',
        'birth_date',
        'description'
    ];

    protected $hidden = [
        'password'
    ];
}
