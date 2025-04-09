<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_preferences extends Model
{
    use HasFactory;
    protected $table = 'user_preferences';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
        'favorite_categories',
        'disliked_ingredients',
        'dietary_restrictions',
        'favorite_cuisines'
    ];

    protected $casts = [
        'favorite_categories' => 'array',
        'disliked_ingredients' => 'array',
        'dietary_restrictions' => 'array',
        'favorite_cuisines' => 'array',
    ];

    public function users() {
        return $this->belongsTo(User::class);
    }
}
