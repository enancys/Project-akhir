<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Panganan extends Model
{
    use HasFactory;

    protected $table = 'panganan';
    protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'description',
        'ingredients',
        'category',
        'image_url'
    ];
}
