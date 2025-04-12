<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Restaurants extends Model
{
    use HasFactory;

    protected $table = 'restaurants';
    protected $primaryKey = 'id';
    protected $fillable = [
        'name',
        'location',
        'phone',
        'website_url',
        'opening_hours',
        'cuisine_id',
        'rating',
        'image_url'
    ];

    public function cuisine() {
        return $this->belongsTo(Cuisines::class);
    }

    public function foods() {
        return $this->belongsToMany(Foods::class);
    }
}
