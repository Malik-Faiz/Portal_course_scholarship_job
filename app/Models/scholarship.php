<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class scholarship extends Model
{
    use HasFactory;
    public function university()
    {
        return $this->belongsTo(University::class);
    }
    public function wishlistscholarship()
    {
        return $this->hasMany(wishlistscholarship::class);
    }
}
