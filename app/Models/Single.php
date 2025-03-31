<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Single extends Model
{
    protected $fillable = ['title', 'artist_id', 'genre_id', 'mood_id', 'audio_file', 'duration'];

    // رابطه: یک موزیک تکی متعلق به یک هنرمند است
    public function artist(): BelongsTo
    {
        return $this->belongsTo(Artist::class);
    }

    // رابطه: یک موزیک تکی متعلق به یک ژانر است
    public function genre(): BelongsTo
    {
        return $this->belongsTo(Genre::class);
    }

    // رابطه: یک موزیک تکی متعلق به یک مود است
    public function mood(): BelongsTo
    {
        return $this->belongsTo(Mood::class);
    }

    // رابطه: یک موزیک تکی چند نظر دارد
    public function comments(): HasMany
    {
        return $this->hasMany(Comment::class);
    }
}