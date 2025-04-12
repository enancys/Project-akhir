<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ratings extends Model
{
    use HasFactory;
    protected $table = 'ratings';
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'food_id',
        'rating'
    ];

    public function user() {
        return $this->belongsToMany(User::class);
    }
    public function foods() {
        return $this->belongsToMany(Foods::class);
    }
}
