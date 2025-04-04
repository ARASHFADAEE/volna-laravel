<!DOCTYPE html>
<html lang="fa_IR" dir="rtl">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'ولنا موزیک')</title>
    {{-- add meta description seo --}}
    <meta name="description" content="@yield('meta_description', 'ولنا موزیک، پلتفرم آنلاین موسیقی با مجموعه‌ای از آهنگ‌های کلاسیک و جدید ایرانی')">
    <meta name="keywords" content="@yield('meta_keywords', 'موسیقی ایرانی, آهنگ جدید, آلبوم موسیقی, ولنا موزیک')">
    {{-- end meta description seo --}}

    <link rel="stylesheet" href="/frontend/styles/bootstrap.rtl.min.css" />
    <link rel="stylesheet" href="/frontend/styles/normalize.min.css" />
    <link rel="stylesheet" href="/frontend/styles/style.css" />
  </head>
  <body>
    <!-- main header-desktop -->
    <header class="mt-3">
      <nav class="main-header navbar navbar-expand-md d-flex flex-column px-3">
        <div
          class="container border-gray-400 px-0 pb-2 d-flex justify-content-between"
        >
          <div
            class="d-flex align-items-center gap-3 justify-content-between justify-content-md-center w-100 w-md-unset"
          >
            <button
              class="navbar-toggler size-40px d-flex justify-content-center align-items-center shadow-none border-0"
              type="button"
              data-bs-toggle="offcanvas"
              data-bs-target="#offcanvasNavbar"
              aria-controls="offcanvasNavbar"
            >
              <img src="/frontend/assets/icons/navbar-toggler-icon.svg" />
            </button>
            <div>
              <a href="/">
                <img
                  src="/frontend/assets/icons/volna-music_logo.svg"
                  alt="logo"
                  class="logo-img"
                />
              </a>
            </div>
          </div>
          <!-- left-header -->
          <div class="d-flex gap-3 flex-wrap">
            <div class="position-relative">
              <form
                class="main-search-box d-none bg-gray-800 px-2 fs-14px d-md-flex align-items-center py-2 rounded-3"
              >
                <input
                  class="h-100 bg-transparent flex-grow-1 text-white"
                  placeholder="هنرمند ، اهنگ "
                  type="text"
                />
                <img src="/frontend/assets/icons/search-normal-icon.svg" alt="" />
              </form>
            </div>
            <a
              class="login-singUp-btn d-none d-md-flex rounded-3 align-items-center gap-1"
              href="#"
            >
              <img src="/frontend/assets/icons/user-icon.svg" alt="" />
              <span class="fs-14px">ورود / ثبت نام </span>
            </a>
          </div>
        </div>
      </nav>
      <!-- new comment 1/26/2025: mobile search form -->
      <div class="d-flex d-sm-none justify-content-center">
        <form
          class="w-100 mx-3 bg-gray-800 px-2 py-12px fs-14px d-flex align-items-center rounded-3"
        >
          <input
            class="h-100 bg-transparent flex-grow-1 text-white"
            placeholder="هنرمند ، اهنگ "
            type="text"
          />
          <img src="/frontend/assets/icons/search-normal-icon.svg" alt="" />
        </form>
      </div>
      <div
        class="side-bar offcanvas offcanvas-start bg-gray-800 d-flex flex-column justify-content-between w-75 w-md-25"
        tabindex="-1"
        id="offcanvasNavbar"
        aria-labelledby="offcanvasNavbarLabel"
      >
        <div>
          <div class="offcanvas-header p-3">
            <a class="navbar-brand nav-bar-logo" href="#">
              <img
                src="/frontend/assets/icons/volna-music_logo.svg"
                alt="shik-land-logo"
                class="logo-img"
              />
            </a>
            <button
              class="border-0 bg-black rounded-2 p-2 d-flex justify-content-center align-items-center"
              data-bs-dismiss="offcanvas"
              aria-label="Close"
            >
              <img src="/frontend/assets/icons/left-arrow_line.svg" alt="" />
            </button>
          </div>
          <div class="mt-2 mt-md-0">
            <div class="mx-2">
              <!-- fix: fix form background color add bg-black to form class name -->
              <form
                class="d-flex px-2 align-items-center bg-black w-100 bg-brad-100 h-56px rounded-3"
              >
                <input
                  class="h-100 flex-grow-1 bg-black text-white-50 px-2 py-3 rounded-2 fs-14px text-white"
                  placeholder="جستجو ..."
                  type="text"
                />
                <img src="/frontend/assets/icons/search-normal-icon.svg" alt="" />
              </form>
            </div>
            <ul class="navbar-nav fs-xs gap-2 py-2 text-white mx-3">
              <li class="nav-item">
                <a
                  class="nav-link hover-bg-gray-200 d-flex align-items-center gap-2 rounded-1 py-3 ps-3"
                  aria-current="page"
                  href="/pages/music-album.html"
                >
                  <img src="/frontend/assets/icons/cassette_icon.svg" alt="" />
                  <span>آلبوم موسیقی</span>
                </a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link hover-bg-gray-200 d-flex align-items-center gap-2 rounded-1 py-3 ps-3"
                  aria-current="page"
                  href="/"
                >
                  <img src="/frontend/assets/icons/music-note-beamed_icon.svg" alt="" />
                  <span>تک آهنگ</span>
                </a>
              </li>
              <li class="nav-item">
                <a
                  class="nav-link hover-bg-gray-200 d-flex align-items-center gap-2 rounded-1 py-3 ps-3"
                  aria-current="page"
                  href="/"
                >
                  <img src="/frontend/assets/icons/file-music-fill_icon.svg" alt="" />
                  <span>پلی لیست</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </header>


@yield('main')



    <!-- main footer -->
    <footer class="container">
      <div class="row flex-wrap text-white-50 fs-14px mb-4">
        <div class="col-6 col-lg-3 d-flex flex-column gap-3 pt-4 pt-md-3">
          <div>
            <img src="/assets/icons/volna-music_logo.svg" alt="" />
          </div>
          <p class="lh-lg">
            ولناموزیک، یک پلتفرم آنلاین شامل مجموعه‌ای از اهنگ‌های کلاسیک قدیمی
            و اهنگ‌های جدید ایرانی یا قدیمی به زبان فارسی است
          </p>
          <div class="d-flex gap-2">
            <a class="text-brand-hover" href="mailto:info@volnamusic.ir"
              >info@volnamusic.ir</a
            >
          </div>
          <div class="d-flex gap-2">
            <a class="text-brand-hover" href="tel:09140065379">09140065379</a>
          </div>
        </div>
        <div class="col-6 col-lg-3 d-flex flex-column gap-3 pt-4 pt-md-3">
          <div>
            <h6 class="text-white fs-15px">دسترسی سریع</h6>
            <ul class="d-flex flex-column gap-4 mt-4">
              <li>
                <a class="text-brand-hover" href="#">درباره ما</a>
              </li>
              <li>
                <a class="text-brand-hover" href="#">پروفایل من</a>
              </li>
              <li>
                <a class="text-brand-hover" href="#">خرید اشتراک</a>
              </li>
              <li>
                <a class="text-brand-hover" href="#">تماس باما</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-6 col-lg-3 d-flex flex-column gap-3 pt-4 pt-md-3">
          <div>
            <h6 class="text-white fs-15px">محتوای ویژه</h6>
            <ul class="d-flex flex-column gap-4 mt-4">
              <li>
                <a class="text-brand-hover" href="#">برنامه نویسان</a>
              </li>
              <li>
                <a class="text-brand-hover" href="#">اهنگ های انگیزشی شایع</a>
              </li>
              <li>
                <a class="text-brand-hover" href="#">هنرمندان</a>
              </li>
              <li>
                <a class="text-brand-hover" href="#">نویسندگان</a>
              </li>
              <li>
                <a class="text-brand-hover" href="#">یادگیری</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-6 col-lg-3 d-flex flex-column gap-3 pt-4 pt-md-3">
          <div>
            <h6 class="text-white fs-15px">پشتیبانی</h6>
            <ul class="d-flex flex-column gap-4 mt-4">
              <li>
                <a class="text-brand-hover" href="#">حساب و صورتحساب</a>
              </li>
              <li>
                <a class="text-brand-hover" href="#">اشتراک ها و قیمت گذاری</a>
              </li>
              <li>
                <a class="text-brand-hover" href="#">دستگاه های پشتیبانی شده</a>
              </li>
              <li>
                <a class="text-brand-hover" href="#">دسترسی</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div
        class="footer__content d-flex gap-4 flex-column flex-md-row justify-content-between align-items-lg-center my-5"
      >
        <small class="footer__copyright text-white-50"
          >طراحی و توسعه توسط آریاس کد .
        </small>
        <div class="footer__social d-flex gap-2">
          <a href="#" target="_blank"
            ><svg
              width="30"
              height="30"
              viewBox="0 0 30 30"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M0 15C0 6.71573 6.71573 0 15 0C23.2843 0 30 6.71573 30 15C30 23.2843 23.2843 30 15 30C6.71573 30 0 23.2843 0 15Z"
                fill="#3B5998"
              ></path>
              <path
                d="M16.5634 23.8197V15.6589H18.8161L19.1147 12.8466H16.5634L16.5672 11.4391C16.5672 10.7056 16.6369 10.3126 17.6904 10.3126H19.0987V7.5H16.8457C14.1394 7.5 13.1869 8.86425 13.1869 11.1585V12.8469H11.4999V15.6592H13.1869V23.8197H16.5634Z"
                fill="white"
              ></path></svg
          ></a>
          <a href="#" target="_blank"
            ><svg
              width="30"
              height="30"
              viewBox="0 0 30 30"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M0 15C0 6.71573 6.71573 0 15 0C23.2843 0 30 6.71573 30 15C30 23.2843 23.2843 30 15 30C6.71573 30 0 23.2843 0 15Z"
                fill="#55ACEE"
              ></path>
              <path
                d="M14.5508 12.1922L14.5822 12.7112L14.0576 12.6477C12.148 12.404 10.4798 11.5778 9.06334 10.1902L8.37085 9.50169L8.19248 10.0101C7.81477 11.1435 8.05609 12.3405 8.843 13.1455C9.26269 13.5904 9.16826 13.654 8.4443 13.3891C8.19248 13.3044 7.97215 13.2408 7.95116 13.2726C7.87772 13.3468 8.12953 14.3107 8.32888 14.692C8.60168 15.2217 9.15777 15.7407 9.76631 16.0479L10.2804 16.2915L9.67188 16.3021C9.08432 16.3021 9.06334 16.3127 9.12629 16.5351C9.33613 17.2236 10.165 17.9545 11.0883 18.2723L11.7388 18.4947L11.1723 18.8337C10.3329 19.321 9.34663 19.5964 8.36036 19.6175C7.88821 19.6281 7.5 19.6705 7.5 19.7023C7.5 19.8082 8.78005 20.4014 9.52499 20.6344C11.7598 21.3229 14.4144 21.0264 16.4079 19.8506C17.8243 19.0138 19.2408 17.3507 19.9018 15.7407C20.2585 14.8827 20.6152 13.315 20.6152 12.5629C20.6152 12.0757 20.6467 12.0121 21.2343 11.4295C21.5805 11.0906 21.9058 10.7198 21.9687 10.6139C22.0737 10.4126 22.0632 10.4126 21.5281 10.5927C20.6362 10.9105 20.5103 10.8681 20.951 10.3915C21.2762 10.0525 21.6645 9.43813 21.6645 9.25806C21.6645 9.22628 21.5071 9.27924 21.3287 9.37458C21.1398 9.4805 20.7202 9.63939 20.4054 9.73472L19.8388 9.91479L19.3247 9.56524C19.0414 9.37458 18.6427 9.16273 18.4329 9.09917C17.8978 8.95087 17.0794 8.97206 16.5967 9.14154C15.2852 9.6182 14.4563 10.8469 14.5508 12.1922Z"
                fill="white"
              ></path></svg
          ></a>
          <a href="#" target="_blank"
            ><svg
              width="30"
              height="30"
              viewBox="0 0 30 30"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M0 15C0 6.71573 6.71573 0 15 0C23.2843 0 30 6.71573 30 15C30 23.2843 23.2843 30 15 30C6.71573 30 0 23.2843 0 15Z"
                fill="black"
              ></path>
              <mask x="0" y="0" width="30" height="30">
                <path
                  fill-rule="evenodd"
                  clip-rule="evenodd"
                  d="M0 15C0 6.71573 6.71573 0 15 0C23.2843 0 30 6.71573 30 15C30 23.2843 23.2843 30 15 30C6.71573 30 0 23.2843 0 15Z"
                  fill="white"
                ></path>
              </mask>
              <path
                fill-rule="evenodd"
                clip-rule="evenodd"
                d="M15.0007 7C12.8281 7 12.5554 7.0095 11.702 7.04833C10.8504 7.08733 10.269 7.22217 9.76036 7.42C9.23419 7.62434 8.78785 7.89768 8.34318 8.34251C7.89818 8.78719 7.62484 9.23352 7.41984 9.75953C7.2215 10.2684 7.0865 10.8499 7.04817 11.7012C7.01 12.5546 7 12.8274 7 15.0001C7 17.1728 7.00967 17.4446 7.04833 18.298C7.0875 19.1496 7.22234 19.731 7.42 20.2396C7.62451 20.7658 7.89784 21.2121 8.34268 21.6568C8.78719 22.1018 9.23352 22.3758 9.75936 22.5802C10.2684 22.778 10.8499 22.9128 11.7014 22.9518C12.5547 22.9907 12.8272 23.0002 14.9997 23.0002C17.1726 23.0002 17.4444 22.9907 18.2978 22.9518C19.1495 22.9128 19.7315 22.778 20.2405 22.5802C20.7665 22.3758 21.2121 22.1018 21.6567 21.6568C22.1017 21.2121 22.375 20.7658 22.58 20.2398C22.7767 19.731 22.9117 19.1495 22.9517 18.2981C22.99 17.4448 23 17.1728 23 15.0001C23 12.8274 22.99 12.5547 22.9517 11.7014C22.9117 10.8497 22.7767 10.2684 22.58 9.7597C22.375 9.23352 22.1017 8.78719 21.6567 8.34251C21.2116 7.89751 20.7666 7.62417 20.24 7.42C19.73 7.22217 19.1483 7.08733 18.2966 7.04833C17.4433 7.0095 17.1716 7 14.9983 7H15.0007ZM14.2831 8.4417C14.4225 8.44148 14.5724 8.44155 14.7341 8.44162L15.0008 8.4417C17.1368 8.4417 17.39 8.44936 18.2335 8.4877C19.0135 8.52337 19.4368 8.6537 19.7188 8.7632C20.0922 8.9082 20.3583 9.08154 20.6382 9.36154C20.9182 9.64154 21.0915 9.90821 21.2368 10.2815C21.3463 10.5632 21.4769 10.9866 21.5124 11.7666C21.5507 12.6099 21.559 12.8632 21.559 14.9983C21.559 17.1333 21.5507 17.3866 21.5124 18.23C21.4767 19.01 21.3463 19.4333 21.2368 19.715C21.0918 20.0883 20.9182 20.3542 20.6382 20.634C20.3582 20.914 20.0923 21.0873 19.7188 21.2323C19.4372 21.3423 19.0135 21.4723 18.2335 21.508C17.3901 21.5463 17.1368 21.5547 15.0008 21.5547C12.8646 21.5547 12.6114 21.5463 11.7681 21.508C10.9881 21.472 10.5647 21.3417 10.2826 21.2322C9.90923 21.0872 9.64256 20.9138 9.36256 20.6338C9.08256 20.3538 8.90922 20.0878 8.76389 19.7143C8.65438 19.4326 8.52388 19.0093 8.48838 18.2293C8.45005 17.386 8.44238 17.1326 8.44238 14.9963C8.44238 12.8599 8.45005 12.6079 8.48838 11.7646C8.52405 10.9846 8.65438 10.5612 8.76389 10.2792C8.90889 9.90588 9.08256 9.63921 9.36256 9.35921C9.64256 9.0792 9.90923 8.90587 10.2826 8.76053C10.5646 8.65053 10.9881 8.52053 11.7681 8.4847C12.5061 8.45136 12.7921 8.44136 14.2831 8.4397V8.4417ZM18.3112 10.7295C18.3112 10.1994 18.7412 9.76987 19.2712 9.76987V9.76953C19.8012 9.76953 20.2312 10.1995 20.2312 10.7295C20.2312 11.2595 19.8012 11.6896 19.2712 11.6896C18.7412 11.6896 18.3112 11.2595 18.3112 10.7295ZM15.0008 10.8916C12.7321 10.8917 10.8926 12.7312 10.8926 15C10.8926 17.2688 12.7322 19.1075 15.001 19.1075C17.2699 19.1075 19.1087 17.2688 19.1087 15C19.1087 12.7311 17.2697 10.8916 15.0008 10.8916ZM17.6677 14.9999C17.6677 13.5271 16.4737 12.3333 15.001 12.3333C13.5281 12.3333 12.3343 13.5271 12.3343 14.9999C12.3343 16.4726 13.5281 17.6666 15.001 17.6666C16.4737 17.6666 17.6677 16.4726 17.6677 14.9999Z"
                fill="white"
              ></path></svg
          ></a>
          <a href="#" target="_blank"
            ><svg
              width="30"
              height="30"
              viewBox="0 0 30 30"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M0 15C0 6.71573 6.71573 0 15 0C23.2843 0 30 6.71573 30 15C30 23.2843 23.2843 30 15 30C6.71573 30 0 23.2843 0 15Z"
                fill="#4C6C91"
              ></path>
              <path
                d="M15.7848 19.9226C15.7848 19.9226 16.0736 19.8911 16.2215 19.7351C16.3568 19.5922 16.3521 19.3226 16.3521 19.3226C16.3521 19.3226 16.3341 18.0636 16.9297 17.8777C17.5166 17.6949 18.2702 19.0952 19.07 19.6337C19.6741 20.0408 20.1327 19.9517 20.1327 19.9517L22.2699 19.9226C22.2699 19.9226 23.3874 19.855 22.8576 18.9923C22.8137 18.9216 22.5485 18.354 21.269 17.1879C19.9284 15.9673 20.1084 16.1647 21.7221 14.053C22.705 12.7672 23.0978 11.9821 22.975 11.6464C22.8584 11.3253 22.1353 11.4106 22.1353 11.4106L19.7297 11.4252C19.7297 11.4252 19.5513 11.4014 19.419 11.4789C19.2899 11.555 19.2061 11.7324 19.2061 11.7324C19.2061 11.7324 18.8258 12.7272 18.3179 13.5737C17.2466 15.3589 16.8185 15.4534 16.6433 15.3428C16.2355 15.0839 16.3373 14.3042 16.3373 13.7504C16.3373 12.0197 16.6049 11.2984 15.8169 11.1118C15.5555 11.0495 15.363 11.0088 14.6939 11.0019C13.8354 10.9935 13.1092 11.005 12.6976 11.2024C12.4237 11.3338 12.2124 11.6272 12.3415 11.6441C12.5004 11.6648 12.8604 11.7394 13.0513 11.9944C13.2978 12.3239 13.2892 13.0629 13.2892 13.0629C13.2892 13.0629 13.4308 15.1 12.9582 15.3528C12.6342 15.5264 12.1897 15.1723 11.2342 13.5522C10.7451 12.7226 10.3757 11.8054 10.3757 11.8054C10.3757 11.8054 10.3045 11.6341 10.177 11.5419C10.0228 11.4306 9.80759 11.396 9.80759 11.396L7.52173 11.4106C7.52173 11.4106 7.17818 11.4198 7.05219 11.5665C6.94029 11.6963 7.04358 11.966 7.04358 11.966C7.04358 11.966 8.8333 16.0764 10.8601 18.1481C12.7187 20.047 14.8285 19.9226 14.8285 19.9226H15.7848Z"
                fill="white"
              ></path></svg
          ></a>
          <a href="#" target="_blank"
            ><svg
              width="30"
              height="30"
              viewBox="0 0 30 30"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M0 15C0 6.71573 6.71573 0 15 0C23.2843 0 30 6.71573 30 15C30 23.2843 23.2843 30 15 30C6.71573 30 0 23.2843 0 15Z"
                fill="#010101"
              ></path>
              <path
                d="M13.2143 13.1245V12.4195C12.9696 12.3808 12.7224 12.3595 12.4747 12.356C10.0763 12.3509 7.95291 13.9051 7.23271 16.1928C6.51252 18.4805 7.36263 20.9708 9.33138 22.3405C7.85664 20.7622 7.44716 18.4646 8.28583 16.474C9.1245 14.4834 11.0547 13.1716 13.2143 13.1245Z"
                fill="#25F4EE"
              ></path>
              <path
                d="M13.3472 21.1097C14.6881 21.1079 15.7904 20.0515 15.8491 18.7118V6.75693H18.0332C17.9886 6.50713 17.9673 6.25373 17.9696 6H14.9824V17.9433C14.9327 19.2898 13.8279 20.3564 12.4804 20.3586C12.0778 20.3552 11.6817 20.2561 11.3248 20.0697C11.794 20.7197 12.5456 21.1062 13.3472 21.1097Z"
                fill="#25F4EE"
              ></path>
              <path
                d="M22.1125 10.8133V10.1489C21.3087 10.1491 20.5227 9.91193 19.8533 9.46704C20.4401 10.1493 21.2332 10.6219 22.1125 10.8133Z"
                fill="#25F4EE"
              ></path>
              <path
                d="M19.8534 9.46693C19.1939 8.71597 18.8304 7.75063 18.8306 6.75122H18.0333C18.2414 7.86795 18.8996 8.84996 19.8534 9.46693Z"
                fill="#FE2C55"
              ></path>
              <path
                d="M12.4747 15.343C11.324 15.3489 10.325 16.1372 10.0517 17.2551C9.77836 18.3729 10.3009 19.5333 11.3191 20.0695C10.7674 19.3078 10.6895 18.301 11.1174 17.4635C11.5453 16.626 12.4067 16.0992 13.3472 16.0999C13.598 16.103 13.8471 16.1419 14.0868 16.2155V13.1762C13.842 13.1395 13.5948 13.1202 13.3472 13.1184H13.2143V15.4296C12.9733 15.365 12.7242 15.3358 12.4747 15.343Z"
                fill="#FE2C55"
              ></path>
              <path
                d="M22.1125 10.813V13.1242C20.6245 13.1214 19.1751 12.6503 17.9696 11.7779V17.8507C17.9632 20.881 15.5049 23.3341 12.4746 23.3341C11.3493 23.3361 10.251 22.9889 9.33136 22.3403C10.8662 23.991 13.2547 24.5344 15.3525 23.71C17.4504 22.8857 18.8301 20.8616 18.8306 18.6076V12.5522C20.0401 13.4189 21.4913 13.8838 22.9792 13.8812V10.9054C22.6879 10.9045 22.3975 10.8735 22.1125 10.813Z"
                fill="#FE2C55"
              ></path>
              <path
                d="M17.9696 17.851V11.7782C19.1787 12.6456 20.6301 13.1105 22.1182 13.1071V10.7959C21.2391 10.6102 20.4441 10.1438 19.8532 9.46693C18.8994 8.84996 18.2413 7.86795 18.0331 6.75122H15.849V18.7119C15.8053 19.779 15.0906 20.7013 14.0682 21.01C13.0458 21.3186 11.9401 20.9459 11.3132 20.0813C10.295 19.5451 9.77243 18.3847 10.0457 17.2669C10.319 16.1491 11.3181 15.3607 12.4688 15.3548C12.7197 15.357 12.9688 15.396 13.2084 15.4704V13.1591C11.0368 13.1959 9.09197 14.5124 8.25091 16.5149C7.40985 18.5174 7.83142 20.8277 9.32553 22.4041C10.2543 23.0313 11.3541 23.3562 12.4746 23.3344C15.5049 23.3344 17.9632 20.8812 17.9696 17.851Z"
                fill="white"
              ></path></svg
          ></a>
          <a href="#" target="_blank"
            ><svg
              width="30"
              height="30"
              viewBox="0 0 30 30"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M14.9999 0C6.71586 0 0 6.71569 0 14.9997C0 23.2847 6.71586 30 14.9999 30C23.2843 30 30 23.2847 30 14.9997C30 6.71569 23.2843 0 14.9999 0"
                fill="#1ED760"
              ></path>
              <path
                d="M21.5494 21.3091C21.2839 21.7445 20.717 21.8809 20.2832 21.6156C16.814 19.4952 12.4472 19.0164 7.30464 20.191C6.80908 20.3046 6.31511 19.9941 6.2022 19.4987C6.08859 19.0032 6.39803 18.5092 6.89464 18.3961C12.5224 17.1097 17.3497 17.6633 21.2438 20.0428C21.678 20.308 21.8147 20.8751 21.5494 21.3091"
                fill="white"
              ></path>
              <path
                d="M23.3571 17.2862C23.023 17.8283 22.3141 17.9984 21.7727 17.6655C17.8025 15.2251 11.7482 14.518 7.05106 15.9438C6.44207 16.1278 5.79867 15.7845 5.6136 15.1764C5.43013 14.5674 5.77361 13.9252 6.38173 13.74C11.7475 12.1117 18.4181 12.9003 22.9781 15.7027C23.5196 16.0361 23.69 16.7453 23.3571 17.2862"
                fill="white"
              ></path>
              <path
                d="M23.5131 13.0974C18.7508 10.2692 10.8956 10.0092 6.34947 11.389C5.61927 11.6105 4.84726 11.1984 4.62621 10.4684C4.40498 9.73787 4.81656 8.96639 5.54711 8.74445C10.7659 7.16039 19.4411 7.4663 24.9235 10.7207C25.5803 11.1106 25.7956 11.9586 25.4064 12.6142C25.0169 13.2708 24.1681 13.4873 23.5131 13.0974"
                fill="white"
              ></path></svg
          ></a>
          <a href="#" target="_blank"
            ><svg
              width="30"
              height="30"
              viewBox="0 0 30 30"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M0 15C0 6.71573 6.71573 0 15 0C23.2843 0 30 6.71573 30 15C30 23.2843 23.2843 30 15 30C6.71573 30 0 23.2843 0 15Z"
                fill="#FF0000"
              ></path>
              <path
                d="M22.6656 11.2958C22.4816 10.5889 21.9395 10.0322 21.251 9.84333C20.0034 9.5 15 9.5 15 9.5C15 9.5 9.99664 9.5 8.74891 9.84333C8.06045 10.0322 7.51827 10.5889 7.33427 11.2958C7 12.5769 7 15.25 7 15.25C7 15.25 7 17.923 7.33427 19.2042C7.51827 19.9111 8.06045 20.4678 8.74891 20.6568C9.99664 21 15 21 15 21C15 21 20.0034 21 21.251 20.6568C21.9395 20.4678 22.4816 19.9111 22.6656 19.2042C23 17.923 23 15.25 23 15.25C23 15.25 23 12.5769 22.6656 11.2958"
                fill="white"
              ></path>
              <path
                d="M13.5 18V13L17.5 15.5001L13.5 18Z"
                fill="#FF0000"
              ></path></svg
          ></a>
        </div>
      </div>
    </footer>

    <!-- script's -->
    <script src="/frontend/js/script.js"></script>
    <script src="/frontend/js/bootstrap/bootstrap.bundle.min.js"></script>
  </body>
</html>