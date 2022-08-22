@extends('auth.master')

@section('title', 'ورود')

@section('auth-content')

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
                <input  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')"
                        maxlength="14" placeholder="شماره تلفن همراه خود را وارد کنید"  class=" form-control auth-input"
                        name="phone" value="{{old('phone')}}" id="phone-input">
                @error('phone')
                    <strong class="text-danger">{{ $message }}</strong>
                @enderror
                <button type="submit" class="btn send-code-btn disabled"  id="send-code-btn">ارسال پیامک ورود</button>
            </form>

            <label class="are-you-developer"><span>ثبت&zwnj;‌نام نکرده&zwnj;اید؟</span></label>

            <a href="{{route('register')}}" class="btn button-48-primary register-link-botton" ><span>ثبت&zwnj;نام</span></a>
        </div>


@endsection


