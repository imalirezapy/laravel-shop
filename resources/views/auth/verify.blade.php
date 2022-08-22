@extends('auth.master')

@section('title', 'تایید کد')

@section('auth-content')

        <div class="center-verify me-auto " >

            <span class="opacity-7">
                کد ورود به شماره {{session('phone')}} ارسال شد. برای ادامه، کد را وارد کنید.
            </span>

            <form action="{{route('verify')}}" method="post">
                @csrf
                <input oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1')" onkeyup="verify(this)" maxlength="14" placeholder="کد ورود"  class=" form-control auth-input code-input" name="code" value="{{old('phone')}}" id="code-input">
                @error('code')
                <strong class="text-danger">{{ $message }}</strong>
                @enderror

                <button type="submit" class="btn send-code-btn disabled mb-4" disabled  id="send-code-btn">ورود</button>
            </form>

            <div class="opacity-7"> <span id="timer"></span> ثانیه تا ارسال مجدد.</div>

            <a class="link-none opacity-7" href="{{url()->previous()}}">{{session('phone')}} شماره شما نیست؟</a>
        </div>


@endsection


@section('script')

<script>
    function verify(input) {
        let btn = document.getElementById('send-code-btn');
        if (input.value.length>=6){
            btn.disabled = false;
            btn.className = 'btn send-code-btn mb-4';
        } else {
            btn.disabled = true;
            btn.className = 'btn send-code-btn disabled mb-4';
        }
    }


    timer({{$time}}, '{{route('login')}}');
</script>
@endsection
