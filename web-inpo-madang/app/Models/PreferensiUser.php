<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PreferensiUser extends Model
{
    use HasFactory;
    
    protected $table = 'preferensi_user';
    protected $primaryKey = 'id';

    protected $fillable = [
        'user_id',
        'favorite_categories',
        'disliked_ingredients',
        'dietary_restrictions',
        'favorite_cuisines'
    ];

    
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }


}
