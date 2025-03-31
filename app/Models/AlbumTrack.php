<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class AlbumTrack extends Model
{
    protected $fillable = ['album_id', 'title', 'audio_file', 'duration'];

    // مشخص کردن نام جدول (چون اسم جدول album_tracks است)
    protected $table = 'album_tracks';

    // رابطه: یک موزیک آلبوم متعلق به یک آلبوم است
    public function album(): BelongsTo
    {
        return $this->belongsTo(Album::class);
    }
}