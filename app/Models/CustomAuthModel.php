<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomAuthModel extends Model
{
    use HasFactory;
    protected $table = 'custom_auth_users';
}