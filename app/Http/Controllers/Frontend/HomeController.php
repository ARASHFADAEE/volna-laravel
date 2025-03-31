<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Single;
use App\Models\Album;
use App\Models\Mood;

class HomeController extends Controller
{
    public function index()
    {
        // گرفتن 5 مود آخر
        $moods = Mood::latest()->take(5)->get();

        // گرفتن 5 تک آهنگ جدید با اطلاعات هنرمند و ژانر
        $newSingles = Single::with('artist', 'genre')->latest()->take(5)->get();

        // گرفتن 5 آلبوم جدید با اطلاعات هنرمند
        $newAlbums = Album::with('artist')->latest()->take(5)->get();

        // ارسال داده‌ها به ویو
        return view('frontend.home.index', compact('moods', 'newSingles', 'newAlbums'));
    }
}