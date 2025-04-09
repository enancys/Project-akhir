<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foods extends Model
{
    use HasFactory;
    protected $table = 'foods';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'description',
        'ingredients',
        'category',
        'image_url'
    ];
}
