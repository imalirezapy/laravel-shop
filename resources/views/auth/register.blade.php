@extends('layouts.master')

@section('title', 'ثبت نام')

@section('content')

    <div class="container-fluid">
        <div class="row h-100vh" >
            <div class="col-12 col-lg-6 col-md-10  vazir-rb">
                <div class=" row">
                    <header class="col-12 back-to-site-header" >
                        <a class="decoration-none back-to-site me-1 me-lg-5 me-md-4 me-sm-2" href="{{route('home')}}" >
                        <i class="fa-solid fa-angle-right"></i>
                            <span >
                                    بازگشت به سایت
                            </span>
                        </a>
                    </header>
                    <div class=" col-12 text-right">
                        <div class="center-register me-auto " >
                            <img src="/defaults/brand-image.png" class="mb-1r"  width="48" height="48">
                            <h1 class="mb-1r login-to-bazar" >
                                ثبت&zwnj;نام در بازار
                            </h1>

                            <span class="opacity-8">
                                برای ایجاد حساب کاربری در بازار، شماره موبایل و اطلاعات خود را وارد کنید.
                            </span>
                            <form action="{{route('register')}}" method="post">
                                @csrf

                                <input value="{{old('name')}}" type="text" placeholder=" نام خود را وارد کنید"  class=" form-control auth-input dir-auto" name="name" id="name-input">
                                @error('name')
                                    <strong class="text-danger">{{ $message }}</strong>
                                @enderror

                                <input value="{{old('email')}}" type="email" placeholder="پست الکترونیک خود را وارد کنید"  class=" form-control auth-input dir-auto" name="email" id="email-input">
                                @error('email')
                                    <strong class="text-danger">{{ $message }}</strong>
                                @enderror

                                <input minlength="4" value="{{old('phone')}}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')" maxlength="14" placeholder="شماره تلفن همراه خود را وارد کنید"  class=" form-control auth-input dir-auto" name="phone" id="phone-input">
                                @error('phone')
                                    <strong class="text-danger">{{ $message }}</strong>
                                @enderror

                                <button type="submit" class="btn  send-code-btn disabled" disabled  id="send-code-btn">ارسال پیامک ورود</button>

                            </form>
                            <label class="are-you-developer"><span>قبلا ثبت&zwnj;نام کردید؟</span></label>
                            <a href="{{route('login')}}" class="btn btn-outline-primary login-link-button w-100" >ورود</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-none col-lg-6  d-lg-block bg-light-gray" >
                <div class="center " >
                    <img class="mt-10p" src="/defaults/login-pic.png" width="495" height="331">
                </div>
            </div>
        </div>
    </div>

@endsection


