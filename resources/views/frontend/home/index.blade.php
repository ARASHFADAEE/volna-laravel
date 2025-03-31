@extends('layouts.app')

@section('title', 'صفحه اصلی | ولنا موزیک')

@section('meta_description', 'ولنا موزیک، پلتفرم آنلاین موسیقی با مجموعه‌ای از آهنگ‌های کلاسیک و جدید ایرانی. جدیدترین موزیک‌ها و آلبوم‌ها را اینجا پیدا کنید.')

@section('meta_keywords', 'موسیقی ایرانی, آهنگ جدید, آلبوم موسیقی, ولنا موزیک')



@section('main')

    <!-- main -->
    <main>
      <!-- mood music section -->
      <section class="container mt-3">
        <!-- mood music header -->
        <div class="d-flex justify-content-between mb-3">
          <h2 class="fs-16px fs-md-20px text-white">حس و حال</h2>
          <!-- show all link -->
          <a
            href="/pages/mood.html"
            class="show-all-btn d-flex align-items-center justify-content-center gap-1 fs-12px"
          >
            <span class="text-gray-600">نمایش همه</span>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="14"
              height="14"
              fill="#4b4b4b"
              class="bi bi-chevron-left"
              viewBox="0 0 16 16"
            >
              <path
                fill-rule="evenodd"
                d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0"
              />
            </svg>
          </a>
        </div>
        <!-- music list container -->
        <div
          class="music-list-container pb-3 d-flex justify-content-between gap-3"
        >
          <!-- mood-card -->
          <a class="mood-card">
            <img
              class="mood-card_img"
              src="/assets/images/music-img.jpg"
              alt=""
            />
            <span class="mood-card_title">آرامش بخش</span>
          </a>
        </div>
      </section>
      <!-- albums -->
      <!-- new single music section -->
      <section class="container mt-3">
        <!-- mood music header -->
        <div class="d-flex justify-content-between mb-3">
          <h2 class="fs-16px fs-md-20px text-white">جدید ترین تک آهنگ ها</h2>
          <!-- show all link -->
          <a
            class="show-all-btn d-flex align-items-center justify-content-center gap-1 fs-12px"
          >
            <span class="text-gray-600">نمایش بیشتر</span>
            <svg
              xmlns="http://www.w3.org/2000/svg"
              width="14"
              height="14"
              fill="#4b4b4b"
              class="bi bi-chevron-left"
              viewBox="0 0 16 16"
            >
              <path
                fill-rule="evenodd"
                d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0"
              />
            </svg>
          </a>
        </div>
        <!-- music list container -->
        <div
          class="music-list-container pb-3 d-flex justify-content-between gap-3"
        >
          <!-- music-card -->
          <article class="music-card ltr-music-card d-flex flex-column p-2">
            <a href="/pages/music.html">
              <img
                class="music-card_img"
                src="/assets/images/music-img.jpg"
                alt="music name"
              />
            </a>
            <!-- music's or album's info -->
            <ul class="mt-2 d-flex flex-column gap-1">
              <!-- music name -->
              <li>
                <a href="#">
                  <!-- new comment 1/26/2025: add ltr-ellipsis text -->
                  <h3
                    class="music-card_title ltr-ellipsis text-white fs-6 fw-500"
                  >
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                    Tempora possimus ipsam, voluptas aperiam unde autem animi
                    dolorem sed esse in.
                  </h3>
                </a>
              </li>
              <!-- music artist -->
              <li>
                <a href="#">
                  <h3
                    class="text-brand music-card_title text-white fs-6 fw-500"
                  >
                    jony
                  </h3>
                </a>
              </li>
              <!-- release date -->
              <!-- <li><span class="text-gray-400">10-10-2022</span></li> -->
              <!-- Musical genres -->
              <li><span class="text-gray-400">pop</span></li>
            </ul>
          </article>


        </div>
      </section>
            <!-- new album music section -->
            <section class="container mt-3">
              <!-- mood music header -->
              <div class="d-flex justify-content-between mb-3">
                <h2 class="fs-16px fs-md-20px text-white">جدید ترین آلبوم ها</h2>
                <!-- show all link -->
                <a
                  class="show-all-btn d-flex align-items-center justify-content-center gap-1 fs-12px"
                >
                  <span class="text-gray-600">نمایش بیشتر</span>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="14"
                    height="14"
                    fill="#4b4b4b"
                    class="bi bi-chevron-left"
                    viewBox="0 0 16 16"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0"
                    />
                  </svg>
                </a>
              </div>
              <!-- music list container -->
              <div
                class="music-list-container pb-3 d-flex justify-content-between gap-3"
              >
                <!-- music-card -->
                <article class="music-card ltr-music-card d-flex flex-column p-2">
                  <a href="/pages/music.html">
                    <img
                      class="music-card_img"
                      src="/assets/images/music-img.jpg"
                      alt="music name"
                    />
                  </a>
                  <!-- music's or album's info -->
                  <ul class="mt-2 d-flex flex-column gap-1">
                    <!-- music name -->
                    <li>
                      <a href="#">
                        <!-- new comment 1/26/2025: add ltr-ellipsis text -->
                        <h3
                          class="music-card_title ltr-ellipsis text-white fs-6 fw-500"
                        >
                          Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                          Tempora possimus ipsam, voluptas aperiam unde autem animi
                          dolorem sed esse in.
                        </h3>
                      </a>
                    </li>
                    <!-- music artist -->
                    <li>
                      <a href="#">
                        <h3
                          class="text-brand music-card_title text-white fs-6 fw-500"
                        >
                          jony
                        </h3>
                      </a>
                    </li>
                    <!-- release date -->
                    <!-- <li><span class="text-gray-400">10-10-2022</span></li> -->
                    <!-- Musical genres -->
                    <li><span class="text-gray-400">pop</span></li>
                  </ul>
                </article>
      
      
              </div>
            </section>
      <section class="container my-5">
        <h2 class="fs-5 mb-4 text-white">پلی لیست در هر حس و حال</h2>
        <div
          class="music-list-container d-flex gap-3 justify-content-between pb-3"
        >
          <div
            class="mood-link d-flex justify-content-center align-items-center cursor-pointer"
          >
            <a class="text-white" href="/">مود موزیک</a>
          </div>
          <div
            class="mood-link d-flex justify-content-center align-items-center cursor-pointer"
          >
            <a class="text-white" href="/">مود موزیک</a>
          </div>
          <div
            class="mood-link d-flex justify-content-center align-items-center cursor-pointer"
          >
            <a class="text-white" href="/">مود موزیک</a>
          </div>
          <div
            class="mood-link d-flex justify-content-center align-items-center cursor-pointer"
          >
            <a class="text-white" href="/">مود موزیک</a>
          </div>
          <div
            class="mood-link d-flex justify-content-center align-items-center cursor-pointer"
          >
            <a class="text-white" href="/">مود موزیک</a>
          </div>
          <div
            class="mood-link d-flex justify-content-center align-items-center cursor-pointer"
          >
            <a class="text-white" href="/">مود موزیک</a>
          </div>
          <div
            class="mood-link d-flex justify-content-center align-items-center cursor-pointer"
          >
            <a class="text-white" href="/">مود موزیک</a>
          </div>
          <div
            class="mood-link d-flex justify-content-center align-items-center cursor-pointer"
          >
            <a class="text-white" href="/">مود موزیک</a>
          </div>
          <div
            class="mood-link d-flex justify-content-center align-items-center cursor-pointer"
          >
            <a class="text-white" href="/">مود موزیک</a>
          </div>
          <div
            class="mood-link d-flex justify-content-center align-items-center cursor-pointer"
          >
            <a class="text-white" href="/">مود موزیک</a>
          </div>
        </div>
      </section>
    </main>

@endsection    