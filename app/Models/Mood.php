<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Str;

class Mood extends Model
{
    protected $fillable = ['name', 'slug', 'description'];

    // خودکار ساختن slug موقع ذخیره
    public static function boot()
    {
        parent::boot();

        static::saving(function ($mood) {
            $mood->slug = Str::slug($mood->name, '-');
        });
    }

    // رابطه: یک مود چند موزیک تکی دارد
    public function singles(): HasMany
    {
        return $this->hasMany(Single::class);
    }
}