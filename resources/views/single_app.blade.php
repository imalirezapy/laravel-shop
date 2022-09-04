@extends('layouts.master')
@section('title', $app->title)
@section('content')
<div class="single-content container-lg " >
    <div class="row" style="max-height: 1700px;">
        <div class="col-12 col-xl-6">
            {{--    app card--}}
            <div class="col-12  card mt-5 single-cards" style="min-height: 230px;">
                <div class="row ">
                    <div class="col-12 col-md-9 col-lg-9 col-sm-12">
                        <div class="d-flex">
                            <div class="ps-3">
                                <img class="rounded" src="{{$app->cover}}" alt="" height="128" width="128"/>
                            </div>
                            <div class="mt-4">
                                <p class="fw-bold">{{$app->title}}</p>
                                <div>
                                    <small> {{$app->owner}}</small>
                                </div>
                                <div>
                                    <small class="text-muted">نسخهٔ {{$app->version}} </small>

                                </div>
                            </div>
                        </div>

                        <div class="d-flex justify-content-between product-details " style="padding-top: 16px; max-width: 1700px;min-width: 400px">
                            <div class="product-detail ">
                                <a class="btn product-info-box text-dark border-0" style="min-width: 100px">
                                    <small>+۵۰ میلیون
                                    </small>
                                    <div><small class="text-muted">نصب</small></div>

                                </a>
                            </div>
                            <div class="product-detail ">
                                <div class="btn product-info-box text-dark  border-0" style="min-width: 100px">
                                    <small>۴
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star" viewBox="0 0 16 16">
                                            <path d="M2.866 14.85c-.078.444.36.791.746.593l4.39-2.256 4.389 2.256c.386.198.824-.149.746-.592l-.83-4.73 3.522-3.356c.33-.314.16-.888-.282-.95l-4.898-.696L8.465.792a.513.513 0 0 0-.927 0L5.354 5.12l-4.898.696c-.441.062-.612.636-.283.95l3.523 3.356-.83 4.73zm4.905-2.767-3.686 1.894.694-3.957a.565.565 0 0 0-.163-.505L1.71 6.745l4.052-.576a.525.525 0 0 0 .393-.288L8 2.223l1.847 3.658a.525.525 0 0 0 .393.288l4.052.575-2.906 2.77a.565.565 0 0 0-.163.506l.694 3.957-3.686-1.894a.503.503 0 0 0-.461 0z"/>
                                        </svg>
                                    </small>
                                    <div><small class="text-black-50">از ۱،۲۰۷،۰۳۶ رأی</small></div>

                                </div>
                            </div>
                            <div class="product-detail">
                                <div class="btn product-info-box text-dark border-0" style="min-width: 100px">
                                    <small>شبکه های اجتماعی
                                    </small>
                                    <div><small class="text-black-50">دسته بندی</small></div>

                                </div>
                            </div>
                            <div class="product-detail">
                                <div class="btn product-info-box text-dark border-0" style="min-width: 100px">
                                    <small>۴۹ مگابایت
                                    </small>
                                    <div><small class="text-muted">حجم</small></div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3 col-lg-3 col-sm-12 me-auto">
                        <a href="" class="btn btn-success w-100" style="height:44px;width:125px;margin-top: 40px;background-color: #0ea960;">دانلود</a>
                    </div>
                </div>

            </div>
            {{--preview--}}
            <div class="col-12 mt-2 border my-3 card p-3 bg-white" style="border-radius: 8px;">
                <div class="my-2 " >
                    <span href="#">تصاویر برنامه ها</span>
                </div>
                <div class="line "></div>
                <div class="owl-carousel " style="white-space: nowrap" >
                    @foreach(json_decode($app->preview) as $img)
                        <div >
                            <figure class="itemside align-items-center">
                                <img src="{{$img}}" class="rounded-3" style="height: 300px"/>
                            </figure>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="col-12 col-xl-6" style="overflow-y: auto;max-height: 1700px;">
            {{--descriptoin--}}
            <div class="col-12  " style="padding-top: 32px;">
{{--                <div class="row bg-white border rounded mt-3 " >--}}

                    <div class="col-12 mt-3 border my-3 card p-1 bg-white" style="border-radius: 8px;">
                        <div class="my-2 " >
                            <span href="#">معرفی برنامه</span>
                        </div>

                        <div style="max-height: 200px;overflow-y:auto">

                            {!! $app->description !!}
                        </div>
                    </div>

{{--                </div>--}}

            </div>
            {{--comments--}}
            <div class="col-12 mb-5 ">
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
                                <table class="text-left fs-14">
                                    <tr>
                                        <td>
                                            <i class="ms-1 fa-sharp fa-solid fa-star-sharp" style=""></i>5
                                        </td>
                                        <td class="rating-bar">
                                            <div class="bar-container">
                                                <div class="bar-5"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="d-flex">
                                            <i class="ms-1 fa-sharp fa-solid fa-star-sharp" style=""></i>4
                                        </td>
                                        <td class="rating-bar">
                                            <div class="bar-container">
                                                <div class="bar-4"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="">
                                            <i class="ms-1 fa-sharp fa-solid fa-star-sharp" style=""></i>3
                                        </td>
                                        <td class="rating-bar">
                                            <div class="bar-container">
                                                <div class="bar-3"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">
                                            <i class="ms-1 fa-sharp fa-solid fa-star-sharp" style=""></i>2
                                        </td>
                                        <td class="rating-bar">
                                            <div class="bar-container">
                                                <div class="bar-2"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-right">
                                            <i class="ms-1 fa-sharp fa-solid fa-star-sharp" style=""></i>1
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
</div>
{{--    <div class="container-md ">--}}
{{--        <div class="row " style="padding:16px">--}}


{{--        </div>--}}
{{--    </div>--}}
{{--    <div class="container-md">--}}
{{--        <div class="row p-16">--}}


{{--        </div>--}}
{{--    </div>--}}

@endsection
@section('script')
    <script src="https://sachinchoolur.github.io/lightslider/dist/js/lightslider.js"></script>
@endsection
