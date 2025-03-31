<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Artist;

class ArtistController extends Controller
{
    public function index()
    {
        // گرفتن همه هنرمندان
        $artists = Artist::all();
        return view('frontend.artists.index', compact('artists'));
    }

    public function show($slug)
    {
        // گرفتن هنرمند با slug و لود کردن موزیک‌ها و آلبوم‌ها
        $artist = Artist::with('singles.genre', 'singles.mood', 'albums')->where('slug', $slug)->firstOrFail();

        // تایتل و متا تگ‌ها برای سئو
        $title = "موزیک‌های {$artist->name} | ولنا موزیک";
        $metaDescription = "دانلود و پخش آنلاین موزیک‌ها و آلبوم‌های {$artist->name} در ولنا موزیک. جدیدترین آثار {$artist->name} را اینجا پیدا کنید.";
        $metaKeywords = "{$artist->name}, موزیک {$artist->name}, آلبوم {$artist->name}, دانلود موزیک, موسیقی ایرانی, ولنا موزیک";

        return view('frontend.artists.show', compact('artist', 'title', 'metaDescription', 'metaKeywords'));
    }
}