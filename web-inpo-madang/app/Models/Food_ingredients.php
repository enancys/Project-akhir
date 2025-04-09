<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Food_ingredients extends Model
{
    use HasFactory;
    protected $table = 'food_ingredients';
    protected $primaryKey = 'food_id';
    public $incrementing = false; 
    protected $fillable = [
        'food_id',
        'ingredient_id'
    ];

    public function foods() {
        return $this->belongsTo(Foods::class);
    }

    public function ingredient() {
        return $this->belongsToMany(Ingredients::class);
    }
}
