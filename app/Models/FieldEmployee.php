<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FieldEmployee extends Model
{
    use HasFactory;

     protected $fillable = [
         'name',
        'nik',
        'slug',
        'company',
        'position',
        'phone',
        'email',
        'photo',
        'address',
    ];
}
