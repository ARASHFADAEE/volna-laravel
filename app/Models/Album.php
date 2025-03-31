<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Album extends Model
{
    protected $fillable = ['title', 'artist_id', 'cover_image', 'release_date'];

    // رابطه: یک آلبوم متعلق به یک هنرمند است
    public function artist(): BelongsTo
    {
        return $this->belongsTo(Artist::class);
    }

    // رابطه: یک آلبوم چند موزیک دارد
    public function tracks(): HasMany
    {
        return $this->hasMany(AlbumTrack::class);
    }

    // رابطه: یک آلبوم چند نظر دارد
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}