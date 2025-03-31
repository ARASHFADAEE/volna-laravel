<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Single;

class SongController extends Controller
{
    public function index()
    {
        // گرفتن تک آهنگ‌ها با صفحه‌بندی (10 تا در هر صفحه)
        $songs = Single::with('artist', 'genre')->latest()->paginate(10);
        return view('frontend.songs.index', compact('songs'));
    }

    public function show($slug)
    {
        // گرفتن تک آهنگ با slug و لود کردن ریلشن‌ها
        $song = Single::with('artist', 'genre', 'mood', 'comments.user')->where('slug', $slug)->firstOrFail();

        // تایتل و متا تگ‌ها برای سئو
        $title = "{$song->title} - {$song->artist->name} | ولنا موزیک";
        $metaDescription = "دانلود و پخش آنلاین آهنگ {$song->title} از {$song->artist->name} در ژانر {$song->genre->name} با حس و حال {$song->mood->name} در ولنا موزیک.";
        $metaKeywords = "{$song->title}, {$song->artist->name}, {$song->genre->name}, {$song->mood->name}, دانلود آهنگ, موسیقی ایرانی, ولنا موزیک";

        return view('frontend.songs.show', compact('song', 'title', 'metaDescription', 'metaKeywords'));
    }
}