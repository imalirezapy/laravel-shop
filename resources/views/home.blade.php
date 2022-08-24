@extends('layouts.master')

@section('content')

    <div  style="border-radius: 80px">
    <div class="container-md bg-white my-3 card custom-card ">
        <div class="d-flex my-card-header" style=" font-size: 1rem;font-weight: 450;">

            <p>بروزرسانی‌های منتخب سردبیران</p>

            <a class="more text-decoration-none text- me-auto " >
                بیشتر
                <i class="fa fa-chevron-left me-1" style="font-size: 11px;padding-top: 3px;"></i>
            </a>

        </div>

        <div class="line"></div>

        <div class="card-body">
            <div class="owl-carousel">
                <div>
                    <figure class="align-items-center">
                        <img src="/images/insta.webp" class="w-75 h-75 rounded-3" />
                        <figcaption>
                            <div class="text-center fw-bold">Instagram</div>
                            <div class="text-start fw-lighter">شبکه های اجتماعی</div>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>

    </div>
    </div>
@endsection
