@extends('layouts.master')

@section('content')

    <div  class="home-content">
        @foreach($categories as $category)

            <div class="container-md bg-white my-3 card custom-card ">
                    <div class="d-flex my-card-header" >

                        <p>{{$category->name}}</p>

                        <a class="more text-decoration-none text- me-auto " >
                            بیشتر
                            <i class="fa fa-chevron-left me-1"  ></i>
                        </a>

                    </div>

                    <div class="line"></div>

                    <div class="card-body">
                        <div class="owl-carousel ">
                            @foreach($category->app()->take(15)->get() as $app)
                                <div class="carousel-response">
                                    <a class="decoration-none" href="{{route('app.show', $app->slug)}}">
                                    <figure class="SimpleAppItem align-items-center " >
                                        <img src="{{$app->cover}}" class=" SimpleAppItem__image"  />
                                        <figcaption>
                                            <div class="SimpleAppItem__text">
                                                <div class="SimpleAppItem__title fs-14" style="direction: rtl;">{{$app->title}}
                                                </div>
                                                <div class="SimpleAppItem__subtitle fs-12">
                                            <span>شبکه‌های اجتماعی&nbsp;
                                            </span>
                                                </div>
                                            </div>
                                        </figcaption>

                                    </figure>
                                    </a>
                                </div>


                            @endforeach
                        </div>
                    </div>
            </div>
        @endforeach

    </div>
@endsection
