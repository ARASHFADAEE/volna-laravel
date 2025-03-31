<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    protected $fillable = ['user_id', 'song_id', 'album_id', 'content'];

    // رابطه: یک نظر متعلق به یک کاربر است
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // رابطه: یک نظر متعلق به یک موزیک تکی است (اختیاری)
    public function song(): BelongsTo
    {
        return $this->belongsTo(Single::class, 'song_id');
    }

    // رابطه: یک نظر متعلق به یک آلبوم است (اختیاری)
    public function album(): BelongsTo
    {
        return $this->belongsTo(Album::class);
    }
}