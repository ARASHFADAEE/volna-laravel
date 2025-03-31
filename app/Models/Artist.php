<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Artist extends Model
{
    protected $fillable = ['name', 'bio', 'profile_image'];

    // رابطه: یک هنرمند چند آلبوم دارد
    public function albums(): HasMany
    {
        return $this->hasMany(Album::class);
    }

    // رابطه: یک هنرمند چند موزیک تکی دارد
    public function singles(): HasMany
    {
        return $this->hasMany(Single::class);
    }
}