<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Single;

class SongController extends Controller
{
    public function index()
    {
        $songs = Single::with('artist', 'genre')->latest()->paginate(10);
        return view('frontend.songs.index', compact('songs'));
    }

    public function show($slug)
    {
        // گرفتن تک آهنگ با slug و لود کردن ریلشن‌ها
        $song = Single::with('artist', 'genre', 'mood')->where('slug', $slug)->firstOrFail();

        // گرفتن موزیک‌های مشابه (موزیک‌هایی که توی همون مود این آهنگ هستن)
        $similarSongs = Single::where('mood_id', $song->mood_id)
            ->where('id', '!=', $song->id) // خود این آهنگ رو حذف کن
            ->with('artist', 'genre')
            ->take(5) // حداکثر 5 موزیک مشابه
            ->get();

        // تایتل و متا تگ‌ها برای سئو
        $title = "{$song->title} - {$song->artist->name} | ولنا موزیک";
        $metaDescription = "دانلود و پخش آنلاین آهنگ {$song->title} از {$song->artist->name} در ژانر {$song->genre->name} با حس و حال {$song->mood->name} در ولنا موزیک.";
        $metaKeywords = "{$song->title}, {$song->artist->name}, {$song->genre->name}, {$song->mood->name}, دانلود آهنگ, موسیقی ایرانی, ولنا موزیک";

        return view('frontend.songs.show', compact('song', 'similarSongs', 'title', 'metaDescription', 'metaKeywords'));
    }
}