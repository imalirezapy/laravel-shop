@extends('layouts.master')

@section('title', 'ورود')

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
                        <div class="center-login me-auto " >
                            <img src="/defaults/brand-image.png" class="mb-1r"  width="48" height="48">
                            <h1 class="mb-1r login-to-bazar" >
                                ورود به بازار
                            </h1>

                            <span class="opacity-8">
                                برای ورود به حساب کاربری در بازار، شمارهٔ موبایل خود را وارد کنید.
                            </span>
                            <form action="" method="post">
                                @csrf
                                <input  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')" maxlength="14" placeholder="شماره تلفن همراه خود را وارد کنید"  class=" form-control auth-input" name="phone" value="{{old('phone')}}" id="phone-input">
                                @error('phone')
                                    <strong class="text-danger">{{ $message }}</strong>
                                @enderror
                                <button type="submit" class="btn send-code-btn disabled"  id="send-code-btn">ارسال پیامک ورود</button>
                            </form>
                            <label class="are-you-developer"><span>ثبت&zwnj;‌نام نکرده&zwnj;اید؟</span></label>
                            <a href="{{route('register')}}" class="btn btn-outline-dark register-link-botton" >ثبت&zwnj;نام</a>
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


