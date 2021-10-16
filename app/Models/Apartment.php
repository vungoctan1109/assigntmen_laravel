<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apartment extends Model
{
    protected $fillable = [
        'name',
        'address',
        'price',
        'description',
        'detail',
        'thumbnail',
        'status'
    ];
    use HasFactory;
}
