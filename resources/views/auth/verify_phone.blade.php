@extends('layouts.master')
@section('content')
    <div>
        <div class="">
            <div class="row">
                <div class="col-lg-6 pe-5">
                    <nav class="navbar">


                        <a class="navbar-brand nav-bar link-info" href="#">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="16"
                                height="16"
                                fill="currentColor"
                                class="bi bi-chevron-right"
                                viewBox="0 0 16 16"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"
                                />
                            </svg>
                            بازگشت به سایت
                        </a>

                    </nav>

                    <form>
                        <img class="" src="/defaults/brand-image.png" alt="">
                        <p>ورود به بازار</p>
                        <p>برای ورود یا ایجاد حساب کاربری در بازار، شمارهٔ موبایل خود را وارد کنید.</p>
                        <div class="form-group row">
                            <div class="col-sm-10">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="inputphone" placeholder=" شماره تلفن همراه خود را وارد کنید">
                                <button type="submit" class="btn btn-primary mt-2">ارسال پیامک ورود</button>
                                <p>
                                <hr>
                                توسعه دهنده هستید؟
                                </p>
                                <button type="submit" class="btn btn-primary mb-2">ورود به پنل توسعه دهندگان</button>
                            </div>
                        </div>
                    </form>

                </div>

                <div class="d-none col-lg-6 page-one d-lg-block" style="height:100vh;">


                    <img class="img-fluid" src="/defaults/login-pic.png" alt="">


                </div>


            </div>

        </div>
    </div>

@endsection

