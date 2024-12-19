<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RestaurantMeal extends Model
{
    /** @use HasFactory<\Database\Factories\RestaurantMealFactory> */
    use HasFactory;
    protected $fillable = [
        'meal_id',
        'restaurant_id',
        'price'
    ];
}
