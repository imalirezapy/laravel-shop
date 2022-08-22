@extends('layouts.master')
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
                        @yield('auth-content')

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
