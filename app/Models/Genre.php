<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Genre extends Model
{
    protected $fillable = ['name', 'slug', 'description'];

    // خودکار ساختن slug موقع ذخیره
    public static function boot()
    {
        parent::boot();

        static::saving(function ($genre) {
            $genre->slug = Str::slug($genre->name, '-');
        });
    }

    // رابطه: یک ژانر چند موزیک تکی دارد
    public function singles(): HasMany
    {
        return $this->hasMany(Single::class);
    }
}