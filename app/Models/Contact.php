<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable =[
      'name', 'mobile', 'phone', 'slug', 'email', 'address', 'post_code', 'city', 'birthday'
    ];
}
