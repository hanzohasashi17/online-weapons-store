<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Weapon
 *
 * @mixin Builder
 */
class Weapon extends Model
{
    use HasFactory;

    public function getImageUrlAttribute()
    {
        return url($this->image);
    }
}
