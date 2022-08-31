@extends('layouts.master')
@section('title', $app->title)
@section('content')
    <div class="container-fluid px-5">
        <div class="row product-details" style="padding: 16px">
            <div
                class="col-xl-6 col-lg-12 col-md-12 col-12 border card mt-5 custom-card product-card"
                style="min-height: 230px; max-height: 612px"
            >
                <div class="row">
                    <div class="top-p col-12 col-md-8 col-lg-9 col-sm-12 product-card">
                        <div class="d-flex">
                            <div class="ps-3">
                                <img
                                    class="rounded"
                                    src="images/com.instagram.android-4c81b387-55df-4987-9b34-56d195169939_128x128.webp"
                                    alt=""
                                />
                            </div>
                            <div>
                                <p class="fw-bold">Instagram</p>
                                <div>
                                    <small> Instagram </small>
                                </div>
                                <div>
                                    <small class="text-muted">نسخهٔ ۲۴۷.۰.۰.۱۷.۱۱۳ </small>
                                </div>
                            </div>
                        </div>

                        <div
                            class="d-flex justify-content-between"
                            style="
                  padding-top: 16px;
                  height: 52px;
                  max-width: 600px;
                  min-width: 420px;
                "
                        >
                            <div>
                                <a
                                    class="btn product-info-box text-dark border-0"
                                    style="min-width: 100px"
                                >
                                    <small>+۵۰ میلیون </small>
                                    <div><small class="text-muted">نصب</small></div>
                                </a>
                            </div>
                            <div>
                                <div
                                    class="btn product-info-box text-dark border-0"
                                    style="min-width: 100px"
                                >
                                    <small
                                    >۴
                                        <svg
                                            xmlns="http://www.w3.org/2000/svg"
                                            width="16"
                                            height="16"
                                            fill="currentColor"
                                            class="bi bi-star"
                                            viewBox="0 0 16 16"
                                        >
                                            <path
                                                d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"
                                            />
                                        </svg>
                                    </small>
                                    <div>
                                        <small class="text-black-50">از ۱،۲۰۷،۰۳۶ رأی</small>
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div
                                    class="btn product-info-box text-dark border-0"
                                    style="min-width: 100px"
                                >
                                    <small>شبکه های اجتماعی </small>
                                    <div><small class="text-black-50">دسته بندی</small></div>
                                </div>
                            </div>
                            <div class="">
                                <div
                                    class="btn product-info-box text-dark border-0"
                                    style="min-width: 100px"
                                >
                                    <small>۴۹ مگابایت </small>
                                    <div><small class="text-muted">حجم</small></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3 col-sm-12 me-auto product-card">
                        <a
                            href=""
                            class="btn btn-success w-100"
                            style="
                  height: 44px;
                  width: 125px;
                  margin-top: 40px;
                  background-color: #0ea960;
                "
                        >دانلود</a
                        >
                    </div>
                </div>
            </div>
            <div
                class="col-xl-6 col-lg-12 col-md-12 col-12  "
                style="padding-top: 32px"
            >
                <div class="row bg-white border rounded mt-3 product-card custom-card">
                    <div class="col-12 m-1 ex3">
                        <p>
                            معرفی برنامه
                            <br />
                            تصاویر و ویدیوهای مورد علاقه‌ات را به‌اشتراک بگذار، از روزمرگی و
                            اتفاق‌های جالب خودت استوری بگیر، پست و استوری دوستانت را ببین و
                            از حالشان خبردار شو. این جملات شما را به یاد کدام شبکه اجتماعی
                            محبوب می‌اندازد؟!
                            <br /><br />
                            <span class="fw-bolder">
                  اینستاگرام؛ لذت اشتراک‌گذاری شیرین‌ترین لحظه‌ها
                </span>
                            <br />
                            <span class="fw-bold">Instagram</span> همان شبکه اجتماعی محبوبی
                            است که تمام مردم دنیا را بیش از پیش به هم نزدیک کرد. عکس‌های
                            زیبا از بهترین لحظات زندگی، ویدیوهای جذاب از فرهنگ‌های مختلف و
                            لایوهای هیجان‌انگیز، چیزی نیست که به‌سادگی بتوان از آن گذشت.
                            <br /><br />
                            این روزها کمتر کسی هست که
                            <span class="fw-bold">برنامه اینستا</span> را روی گوشی‌اش نداشته
                            باشد؛ زیرا این اپلیکیشن جذاب با موفقیت توانسته دل پیر و جوان را
                            به دست آورد. اگر شما هم می‌خواهید به جمع میلیون‌ها کاربر Insta
                            وارد شده و زیبایی‌های زندگی را با دوستانتان شریک شوید، همراهمان
                            باشید.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid px-5">
        <div class="row p-16">
            <div
                class="col-xl-6 col-lg-12 col-md-12 col-12 mb-5 border bg-white"
                style="border-radius: 8px; max-height: 400px"
            >
                <div class="my-2">
                    <p href="#">تصاویر برنامه ها</p>
                </div>
                <hr style="border-width: 0px; line-height: 0px" class="d-600-none" />
                <div class="owl-carousel">
                    <div>
                        <figure class="itemside align-items-center">
                            <img src="images/instagram.jpeg" class="rounded-3" />
                        </figure>
                    </div>
                    <div>
                        <figure class="itemside align-items-center">
                            <img src="images/instagram1.png" class="rounded-3" />
                        </figure>
                    </div>
                    <div>
                        <figure class="itemside align-items-center">
                            <img src="images/instagram2.png" class="rounded-3" />
                        </figure>
                    </div>
                    <div>
                        <figure class="itemside align-items-center">
                            <img src="images/instagram3.jpeg" class="rounded-3" />
                        </figure>
                    </div>
                    <div>
                        <figure class="itemside align-items-center">
                            <img src="images/instagram4.jpeg" class="rounded-3" />
                        </figure>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-12 col-md-12 col-12 mb-5 ">
                <div class="product-card border" style="border-radius: 8px">
                    <div class="d-flex justify-content-between">
                        <div>
                            <p>نظرات کاربران - ۱،۲۰۷،۳۷۷ رأی</p>
                        </div>
                        <div>
                            <p>
                                ۴ از ۵
                                <i class="fa-solid fa-star" style="color: #0ea960"></i>
                            </p>
                        </div>
                    </div>
                    <div class="row justify-content-left d-flex">
                        <div class="col-12">
                            <div class="rating-bar d-inline">
                                <table class="text-left">
                                    <tr>
                                        <td>
                                            <i class="fa-solid fa-star" style="color: #0ea960"></i>5
                                        </td>
                                        <td class="rating-bar">
                                            <div class="bar-container">
                                                <div class="bar-5"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="d-flex">
                                            <i class="fa-solid fa-star" style="color: #0ea960"></i>4
                                        </td>
                                        <td class="rating-bar">
                                            <div class="bar-container">
                                                <div class="bar-4"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">
                                            <i class="fa-solid fa-star" style="color: #0ea960"></i>3
                                        </td>
                                        <td class="rating-bar">
                                            <div class="bar-container">
                                                <div class="bar-3"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">
                                            <i class="fa-solid fa-star" style="color: #0ea960"></i>2
                                        </td>
                                        <td class="rating-bar">
                                            <div class="bar-container">
                                                <div class="bar-2"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">
                                            <i class="fa-solid fa-star" style="color: #0ea960"></i>1
                                        </td>
                                        <td class="rating-bar">
                                            <div class="bar-container">
                                                <div class="bar-1"></div>
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>

                    <div class="d-flex row">
                        <div class="col-md-12">
                            <div class="p-3 bg-white rounded">
                                <div class="review mt-4">
                                    <div class="d-flex flex-row comment-user">
                                        <img
                                            class="rounded"
                                            src="https://i.imgur.com/xxJl1D7.jpg"
                                            width="40"
                                        />
                                        <span class="name font-weight-bold"> کاربر بی‌نام</span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <span class="date">۱۴۰۱/۰۶/۰۱</span>
                                    </div>
                                    <div class="mt-2">
                                        <p class="comment-text">
                                            اگه استوری زمانش بیشتر از پانزده ثانیه میشد عالی بود، و
                                            یکی اینکه اخیرا بازدیدها خیلی خیلی زیاد ریزش کرده
                                        </p>
                                    </div>
                                </div>
                                <div class="review mt-4">
                                    <div class="d-flex flex-row comment-user">
                                        <img
                                            class="rounded"
                                            src="https://i.imgur.com/xxJl1D7.jpg"
                                            width="40"
                                        />
                                        <span class="name font-weight-bold">amirali</span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <span class="date">۱۴۰۱/۰۶/۰۱</span>
                                    </div>
                                    <div class="mt-2">
                                        <p class="comment-text">قابل قبول</p>
                                    </div>
                                </div>
                                <div class="review mt-4">
                                    <div class="d-flex flex-row comment-user">
                                        <img
                                            class="rounded"
                                            src="https://i.imgur.com/xxJl1D7.jpg"
                                            width="40"
                                        />
                                        <span class="name font-weight-bold">yegane</span>
                                    </div>
                                    <div class="d-flex justify-content-between">
                                        <div class="rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <span class="date">۱۳۹۹/۰۴/۲۲ </span>
                                    </div>
                                    <div class="mt-2">
                                        <p class="comment-text">
                                            چرااااااااااا استوری بیشتر از 15 ثانیه درست نمیشه برا ی
                                            سریا
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid mt-5 px-5">
        <div class="card bg-white p-0">
            <div class="row mb-4 footer-row">
                <div class="col-9">
                    <table class="table">
                        <tbody>
                        <tr>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        <tr>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-3">
                    <div class="footer-text pull-left">
                        <div class="d-flex">
                            <img class="border" src="images/logo (1).png" alt="" />
                            <img class="border" src="images/saman.png" alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="divider">
                <div class="row" style="font-size: 10px">
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="pull-left mt-4">
                            <p class="fw-bolder">
                                تمامی حقوق این سایت متعلق به شرکت آوای همراه هوشمند هزاردستان
                                (فروشگاه برنامه‌های موبایلی اندروید بازار) است.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-6">
                        <div class="pull-right mr-4 d-flex policy justify-content-end">
                            <a href="">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="20"
                                    height="20"
                                    fill="currentColor"
                                    class="bi bi-linkedin m-3"
                                    viewBox="0 0 16 16"
                                >
                                    <path
                                        d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z"
                                    />
                                </svg>
                            </a>
                            <a href=""
                            ><svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="20"
                                    height="20"
                                    fill="currentColor"
                                    class="bi bi-instagram m-3"
                                    viewBox="0 0 16 16"
                                >
                                    <path
                                        d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"
                                    />
                                </svg>
                            </a>
                            <a href=""
                            ><svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="20"
                                    height="20"
                                    fill="currentColor"
                                    class="bi bi-twitter m-3"
                                    viewBox="0 0 16 16"
                                >
                                    <path
                                        d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334 0-.14 0-.282-.006-.422A6.685 6.685 0 0 0 16 3.542a6.658 6.658 0 0 1-1.889.518 3.301 3.301 0 0 0 1.447-1.817 6.533 6.533 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.325 9.325 0 0 1-6.767-3.429 3.289 3.289 0 0 0 1.018 4.382A3.323 3.323 0 0 1 .64 6.575v.045a3.288 3.288 0 0 0 2.632 3.218 3.203 3.203 0 0 1-.865.115 3.23 3.23 0 0 1-.614-.057 3.283 3.283 0 0 0 3.067 2.277A6.588 6.588 0 0 1 .78 13.58a6.32 6.32 0 0 1-.78-.045A9.344 9.344 0 0 0 5.026 15z"
                                    />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="https://sachinchoolur.github.io/lightslider/dist/js/lightslider.js"></script>
@endsection
