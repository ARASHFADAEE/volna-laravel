<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Genre;

class GenreController extends Controller
{
    public function index()
    {
        // گرفتن همه ژانرها
        $genres = Genre::all();
        return view('frontend.genres.index', compact('genres'));
    }

    public function show($slug)
    {
        // گرفتن ژانر با slug و لود کردن موزیک‌های مرتبط
        $genre = Genre::with('singles.artist', 'singles.mood')->where('slug', $slug)->firstOrFail();

        // تایتل و متا تگ‌ها برای سئو
        $title = "موزیک‌های ژانر {$genre->name} | ولنا موزیک";
        $metaDescription = "لیست موزیک‌های ژانر {$genre->name} در ولنا موزیک. دانلود و پخش آنلاین موزیک‌های ایرانی در ژانر {$genre->name}.";
        $metaKeywords = "{$genre->name}, موزیک {$genre->name}, دانلود موزیک, موسیقی ایرانی, ولنا موزیک";

        return view('frontend.genres.show', compact('genre', 'title', 'metaDescription', 'metaKeywords'));
    }
}