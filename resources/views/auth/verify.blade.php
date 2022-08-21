@extends('layouts.master')

@section('title', 'تایید کد')

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
                        <div class="center-verify me-auto " >
                            <span class="opacity-7">
                                کد ورود به شماره {{session('phone')}} ارسال شد. برای ادامه، کد را وارد کنید.
                            </span>
                            <form action="" method="post">
                                @csrf
                                <input  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')" maxlength="14" placeholder="کد ورود"  class=" form-control auth-input code-input" name="code" value="{{old('phone')}}" id="phone-input">
                                @error('phone')
                                <strong class="text-danger">{{ $message }}</strong>
                                @enderror

                                <button type="submit" class="btn send-code-btn disabled mb-4"  id="send-code-btn">ورود</button>
                            </form>
                            <div class="opacity-7"> <span id="timer"></span> ثانیه تا ارسال مجدد.</div>
{{--                            <span class="opacity-7"></span><br>--}}

                            <a class="link-none opacity-7" href="{{url()->previous()}}">{{session('phone')}} شماره شما نیست؟</a>
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


