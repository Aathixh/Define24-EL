<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodStore extends Model
{
    use HasFactory;
    protected $fillable = [
        'photo',
        'category',
        'name',
        'quantity',
        'price',
    ];
}
