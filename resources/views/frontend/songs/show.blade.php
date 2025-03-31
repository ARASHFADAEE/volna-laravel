@extends('layouts.app')

@section('title', $title)

@section('meta_description', $metaDescription)

@section('meta_keywords', $metaKeywords)

@section('main')
    <main class="container">
        <!-- breadcrumb -->
        <div class="py-4">
            <ul class="d-flex text-white fw-light gap-2 flex-wrap lh-base">
                <li>
                    <a href="{{ route('home') }}">ولنا موزیک</a>
                    <span>/</span>
                </li>
                <li>
                    <a href="{{ route('artists.show', $song->artist->slug) }}">{{ $song->artist->name }}</a>
                    <span>/</span>
                </li>
                <li>
                    <a href="{{ route('songs.show', $song->slug) }}">دانلود آهنگ {{ $song->title }} از {{ $song->artist->name }} با کیفیت 320 + متن آهنگ</a>
                </li>
            </ul>
        </div>
        <div class="row flex-row-reverse">
            <div class="col-lg-8 px-0 flex-row">
                <!-- music information -->
                <div class="d-flex container flex-row-reverse">
                    <div class="music-page-img-container">
                        <figure>
                            <img class="music-page-img" src="{{ $song->cover_image ? asset('storage/' . $song->cover_image) : asset('images/default-song.jpg') }}" alt="{{ $song->title }}" />
                        </figure>
                        <button class="music-play_btn bg-transparent rounded-pill d-flex justify-content-center align-items-center">
                            <img class="play-btn-icon" src="{{ asset('frontend/assets/icons/play-btn_icon.svg') }}" alt="پخش" />
                        </button>
                        <!-- save music -->
                        <div class="bookmark-music-container d-flex rounded-2 justify-content-center align-items-center">
                            <button class="bg-transparent bookmark-music-btn">
                                <img src="{{ asset('frontend/assets/icons/bookmark-outline_icon.svg') }}" alt="ذخیره" />
                                <span class="bookmark-count d-flex justify-content-center align-items-center">{{ $song->bookmarks_count ?? '+99' }}</span>
                            </button>
                        </div>
                    </div>
                    <div class="ps-0 pe-3 py-2 text-end">
                        <!-- music-name -->
                        <h2 class="text-white fs-md-34px fw-semibold" data-bs-toggle="tooltip" data-bs-placement="top" title="{{ $song->title }}">
                            {{ $song->title }}
                        </h2>
                        <!-- music-artist-name -->
                        <div>
                            <a class="text-brand my-3 d-inline-block text-hover-white fs-5" href="{{ route('artists.show', $song->artist->slug) }}">{{ $song->artist->name }}</a>
                        </div>
                        <!-- music genre -->
                        <div>
                            <a class="d-inline-block text-white-50 text-hover-gray fw-light" href="{{ route('genres.show', $song->genre->slug) }}">{{ $song->genre->name }}</a>
                        </div>
                    </div>
                </div>
                <!-- track list -->
                <div class="container my-2">
                    <ul id="song-list" class="mt-4 track-list d-flex gap-1 flex-column w-100">
                        <li data-src="{{ $song->audio_file ?? '' }}" class="track-list_item d-flex justify-content-between cursor-pointer p-2 rounded-1">
                            <!-- right -->
                            <div class="d-flex justify-content-between gap-4 align-items-center">
                                <!-- track time -->
                                <p class="text-brand fw-500">{{ $song->duration ?? '05:00' }}</p>
                                <!-- dropdown download btn's -->
                                <div class="dropdown-center">
                                    <button class="download-btn rounded-1 d-flex align-items-center justify-content-center" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        <img src="{{ asset('frontend/assets/icons/download_icon.svg') }}" alt="دانلود" />
                                    </button>
                                    <ul class="dropdown-menu py-0 rounded-0 bg-gray-800 text-white">
                                        <li>
                                            <a class="download-dropdown text-white d-flex align-items-center gap-2 p-3" href="{{ $song->audio_file ?? '#' }}">
                                                <img src="{{ asset('frontend/assets/icons/download_icon-white.svg') }}" alt="دانلود" />
                                                <span>دانلود</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- left -->
                            <div class="d-flex gap-3 align-items-center">
                                <div class="d-flex flex-column gap-2 text-end">
                                    <p class="track-neme text-brand fw-500">{{ $song->title }}</p>
                                    <p class="track-neme text-gray-600">{{ $song->artist->name }}</p>
                                </div>
                                <p class="text-brand">1</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- track desc or verse -->
                <div class="container">
                    <p class="text-start lh-base text-white-50 fs-14px pt-3 border-top border-gray">
                        {{ $song->description ?? 'توضیحاتی برای این آهنگ ثبت نشده است.' }}
                    </p>
                </div>
            </div>
            <!-- similar music -->
            <aside class="col-lg-4 similar-music-aside mt-3 mt-md-0 z-1">
                <div class="pb-3 d-flex align-items-center">
                    <span class="text-white w-200px fs-16px">از همین حس و حال</span>
                    <div class="gray-line"></div>
                </div>
                <div>
                    <ul>
                        @foreach($similarSongs as $similarSong)
                            <li dir="ltr" class="similar-vibe-music d-flex gap-2 py-2 px-md-3 rounded-2">
                                <figure>
                                    <a href="{{ route('songs.show', $similarSong->slug) }}">
                                        <img class="similar-vibe-music_img" src="{{ $similarSong->cover_image ? asset('storage/' . $similarSong->cover_image) : asset('images/default-song.jpg') }}" alt="{{ $similarSong->title }}" />
                                    </a>
                                </figure>
                                <div class="d-flex flex-column gap-2 text-end">
                                    <a href="{{ route('songs.show', $similarSong->slug) }}" class="similar-music_title d-inline-block lh-base text-white w-100">{{ $similarSong->title }}</a>
                                    <a class="text-gray-400 fs-14px hover-gray-600" href="{{ route('artists.show', $similarSong->artist->slug) }}">{{ $similarSong->artist->name }}</a>
                                    <a class="text-gray-400 fs-14px hover-gray-600" href="{{ route('genres.show', $similarSong->genre->slug) }}">{{ $similarSong->genre->name }}</a>
                                </div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </aside>
        </div>
    </main>
    <!-- music player -->
    <div dir="ltr" class="d-flex justify-content-center">
        <div class="audio-player container d-flex flex-column flex-sm-row align-items-center gap-3 z-3 gap-md-4 justify-content-between">
            <h2 id="current-song-title">{{ $song->title }}</h2>
            <div class="progress-container flex-grow-1 d-flex gap-2 align-items-center w-100 w-sm-unset">
                <input class="custom-progress-bar" type="range" id="progress" value="0" step="1" />
                <div class="time-info d-flex">
                    <span id="current-time">00:00</span> /
                    <span id="duration">{{ $song->duration ?? '00:00' }}</span>
                </div>
            </div>
            <div class="controls">
                <button id="prev" class="music-player-btn bg-transparent">
                    <svg width="36" height="36" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="icomoon-ignore"></g>
                        <path d="M16 15.999l14.928 8.531v-17.060l-14.928 8.529zM29.861 22.693l-11.712-6.693 11.712-6.692v13.385z" fill="#fff"></path>
                        <path d="M1.073 15.999l14.928 8.531v-17.060l-14.928 8.529zM14.934 22.693l-11.712-6.693 11.712-6.692v13.385z" fill="#fff"></path>
                    </svg>
                </button>
                <button id="play" class="music-player-btn bg-transparent">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="currentColor" class="bi bi-pause" viewBox="0 0 16 16">
                        <path d="M6 3.5a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0V4a.5.5 0 0 1 .5-.5m4 0a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-1 0V4a.5.5 0 0 1 .5-.5" />
                    </svg>
                </button>
                <button id="next" class="music-player-btn bg-transparent">
                    <div class="next-icon-btn">
                        <svg width="36" height="36" viewBox="0 0 32 32" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="icomoon-ignore"></g>
                            <path d="M16 15.999l14.928 8.531v-17.060l-14.928 8.529zM29.861 22.693l-11.712-6.693 11.712-6.692v13.385z" fill="#fff"></path>
                            <path d="M1.073 15.999l14.928 8.531v-17.060l-14.928 8.529zM14.934 22.693l-11.712-6.693 11.712-6.692v13.385z" fill="#fff"></path>
                        </svg>
                    </div>
                </button>
                <button id="loop" class="music-player-btn bg-transparent">
                    <svg width="36" height="36" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M8 18H7C5.34315 18 4 16.6569 4 15V9C4 7.34315 5.34315 6 7 6H17C18.6569 6 20 7.34315 20 9V15C20 16.6569 18.6569 18 17 18H12M12 18L15 15M12 18L15 21" stroke="#fff" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <audio id="audio" src="{{ $song->audio_file ?? '' }}"></audio>
        </div>
    </div>
@endsection