<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'first_name',
        'last_name',
        'language',
        'contact_number',
        'email',
        'password',
        'is_reseller',
        'neq_number',
        'status',
        'country',
    ];
    

    protected $hidden = [
        'password',
        'remember_token',
    ];
}
