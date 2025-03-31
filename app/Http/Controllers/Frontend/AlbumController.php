<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Album;

class AlbumController extends Controller
{
    public function index()
    {
        // گرفتن آلبوم‌ها با صفحه‌بندی (10 تا در هر صفحه)
        $albums = Album::with('artist')->latest()->paginate(10);
        return view('frontend.albums.index', compact('albums'));
    }

    public function show($slug)
    {
        // گرفتن آلبوم با slug و لود کردن ریلشن‌ها
        $album = Album::with('artist', 'tracks', 'comments.user')->where('slug', $slug)->firstOrFail();

        // تایتل و متا تگ‌ها برای سئو
        $title = "{$album->title} - {$album->artist->name} | ولنا موزیک";
        $metaDescription = "دانلود و پخش آنلاین آلبوم {$album->title} از {$album->artist->name} شامل {$album->tracks->count()} موزیک در ولنا موزیک.";
        $metaKeywords = "{$album->title}, {$album->artist->name}, آلبوم موسیقی, دانلود آلبوم, موسیقی ایرانی, ولنا موزیک";

        return view('frontend.albums.show', compact('album', 'title', 'metaDescription', 'metaKeywords'));
    }
}