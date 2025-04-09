<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurant_foods extends Model
{
    use HasFactory;
    protected $table = 'restaurant_foods';

    protected $fillable = [
        'restaurant_id',
        'food_id'
    ];

    public function restaurant() {
        return $this->belongsTo(Restaurants::class);
    }

    public function food() {
        return $this->belongsToMany(Foods::class);
    }
}
