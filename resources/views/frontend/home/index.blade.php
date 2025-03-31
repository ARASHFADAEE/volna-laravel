@extends('layouts.app')

@section('title', 'صفحه اصلی | ولنا موزیک')

@section('meta_description', 'ولنا موزیک، پلتفرم آنلاین موسیقی با مجموعه‌ای از آهنگ‌های کلاسیک و جدید ایرانی. جدیدترین موزیک‌ها و آلبوم‌ها را اینجا پیدا کنید.')

@section('meta_keywords', 'موسیقی ایرانی, آهنگ جدید, آلبوم موسیقی, ولنا موزیک')

@section('main')
    <main>
        <!-- mood music section -->
        <section class="container mt-3">
            <div class="d-flex justify-content-between mb-3">
                <h2 class="fs-16px fs-md-20px text-white">حس و حال</h2>
                <a href="{{ route('moods.index') }}" class="show-all-btn d-flex align-items-center justify-content-center gap-1 fs-12px">
                    <span class="text-gray-600">نمایش همه</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#4b4b4b" class="bi bi-chevron-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
                    </svg>
                </a>
            </div>
            <div class="music-list-container pb-3 d-flex justify-content-between gap-3">
                @foreach($moods as $mood)
                    <a href="{{ route('moods.show', $mood->slug) }}" class="mood-card">
                        <img class="mood-card_img" src="{{ $mood->image ?? asset('images/default-mood.jpg') }}" alt="{{ $mood->name }}" />
                        <span class="mood-card_title">{{ $mood->name }}</span>
                    </a>
                @endforeach
            </div>
        </section>

        <!-- new single music section -->
        <section class="container mt-3">
            <div class="d-flex justify-content-between mb-3">
                <h2 class="fs-16px fs-md-20px text-white">جدیدترین تک آهنگ‌ها</h2>
                <a href="{{ route('songs.index') }}" class="show-all-btn d-flex align-items-center justify-content-center gap-1 fs-12px">
                    <span class="text-gray-600">نمایش بیشتر</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#4b4b4b" class="bi bi-chevron-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
                    </svg>
                </a>
            </div>
            <div class="music-list-container pb-3 d-flex justify-content-between gap-3">
                @foreach($newSingles as $single)
                    <article class="music-card ltr-music-card d-flex flex-column p-2">
                        <a href="{{ route('songs.show', $single->slug) }}">
                            <img class="music-card_img" src="{{ $single->cover_image ?? asset('images/default-song.jpg') }}" alt="{{ $single->title }}" />
                        </a>
                        <ul class="mt-2 d-flex flex-column gap-1">
                            <li>
                                <a href="{{ route('songs.show', $single->slug) }}">
                                    <h3 class="music-card_title ltr-ellipsis text-white fs-6 fw-500">{{ $single->title }}</h3>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('artists.show', $single->artist->slug) }}">
                                    <h3 class="text-brand music-card_title text-white fs-6 fw-500">{{ $single->artist->name }}</h3>
                                </a>
                            </li>
                            <li><span class="text-gray-400">{{ $single->genre->name }}</span></li>
                        </ul>
                    </article>
                @endforeach
            </div>
        </section>

        <!-- new album music section -->
        <section class="container mt-3">
            <div class="d-flex justify-content-between mb-3">
                <h2 class="fs-16px fs-md-20px text-white">جدیدترین آلبوم‌ها</h2>
                <a href="{{ route('albums.index') }}" class="show-all-btn d-flex align-items-center justify-content-center gap-1 fs-12px">
                    <span class="text-gray-600">نمایش بیشتر</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="#4b4b4b" class="bi bi-chevron-left" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0" />
                    </svg>
                </a>
            </div>
            <div class="music-list-container pb-3 d-flex justify-content-between gap-3">
                @foreach($newAlbums as $album)
                    <article class="music-card ltr-music-card d-flex flex-column p-2">
                        <a href="{{ route('albums.show', $album->slug) }}">
                            <img class="music-card_img" src="{{ $album->cover_image ?? asset('images/default-album.jpg') }}" alt="{{ $album->title }}" />
                        </a>
                        <ul class="mt-2 d-flex flex-column gap-1">
                            <li>
                                <a href="{{ route('albums.show', $album->slug) }}">
                                    <h3 class="music-card_title ltr-ellipsis text-white fs-6 fw-500">{{ $album->title }}</h3>
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('artists.show', $album->artist->slug) }}">
                                    <h3 class="text-brand music-card_title text-white fs-6 fw-500">{{ $album->artist->name }}</h3>
                                </a>
                            </li>
                            <li><span class="text-gray-400">{{ $album->release_date }}</span></li>
                        </ul>
                    </article>
                @endforeach
            </div>
        </section>


    </main>
@endsection