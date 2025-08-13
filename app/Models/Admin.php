<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;  // agar admin bhi login karega to
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
    use Notifiable;

    protected $table = 'admins';   // yeh table explicitly define karo

    protected $fillable = ['name', 'email', 'password'];

    protected $hidden = ['password', 'remember_token'];  // agar remember_token use kar rahe ho

}
