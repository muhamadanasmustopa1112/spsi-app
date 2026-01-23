<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FieldEmployee extends Model
{
    use HasFactory;

     protected $fillable = [
        'name',
        'slug',
        'position',
        'phone',
        'email',
        'photo',
        'address',
    ];
}
