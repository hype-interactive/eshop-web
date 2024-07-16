<?php

namespace App\Models;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Authenticatable
{
    use HasFactory;

    protected $fillable=['first_name','password','middle_name','last_name','phone','email','image_url'];

    protected $hidden = [
        'password','remember_token',
    ];

    protected function casts(): array
    {
        return [
            'password' => 'hashed',
        ];
    }
}
