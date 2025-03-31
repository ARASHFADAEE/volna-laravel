<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Mood;

class MoodController extends Controller
{
    public function index()
    {
        // گرفتن همه مودها
        $moods = Mood::all();
        return view('frontend.moods.index', compact('moods'));
    }

    public function show($slug)
    {
        // گرفتن مود با slug و لود کردن موزیک‌های مرتبط
        $mood = Mood::with('singles.artist', 'singles.genre')->where('slug', $slug)->firstOrFail();

        // تایتل و متا تگ‌ها برای سئو
        $title = "موزیک‌های {$mood->name} | ولنا موزیک";
        $metaDescription = "لیست موزیک‌های با حس و حال {$mood->name} در ولنا موزیک. دانلود و پخش آنلاین موزیک‌های ایرانی با حس و حال {$mood->name}.";
        $metaKeywords = "{$mood->name}, موزیک {$mood->name}, دانلود موزیک, موسیقی ایرانی, ولنا موزیک";

        return view('frontend.moods.show', compact('mood', 'title', 'metaDescription', 'metaKeywords'));
    }
}