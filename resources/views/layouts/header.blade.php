<div class="nav-lg z-index-20" id="navbar-lg" >
    <nav class="navbar  navbar-expand navbar-light  container-fluid vazir-rb "  >

        <div class="container-md">
            <a href="/">
                <img class="navbar-brand img-fluid " src="/storage/defaults/bazaar-logo.svg" >
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav  mb-2 mb-lg-0">
                    @foreach($nav_lg as $item)
                        <li class="nav-item">
                            <a class="nav-link " aria-current="page" href="{{$item->link}}">{{$item->name}}</a>
                        </li>
                    @endforeach

                    <li class="more-nav-block nav-item dropstart">
                        <a class="nav-link " href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            {{$dropdown_menu->name}}
                        </a>
                        <ul class="dropdown-menu text-end nav-dropdown "  aria-labelledby="navbarDropdown" style="margin-right: -37px;top: calc(100% + 15px);" >
                            @foreach($dropdown_items as $item)
                                <li><a class="dropdown-item ListItem" href="{{$item->link}}">{{$item->name}}</a></li>
                            @endforeach
                        </ul>
                    </li>
                    @foreach($dropdown_items as $item)
                    <li class="more-nav-none nav-item">
                        <a class="nav-link " href="{{$item->link}}" tabindex="-1" aria-disabled="true">{{$item->name}}</a>
                    </li>
                    @endforeach

                </ul>

                <ul class="navbar-nav mb-2 mb-lg-0 me-auto">
                    <li class="nav-item">
                        <input data-size="sm" data-color="background" data-has-icon="" data-arrow-focusable="" tabindex="0" placeholder="جست‌وجو در بازار" class="newinput SearchInput">
                       <i class="fa-light fa-magnifying-glass"></i>
                    </li>
                    <li class="nav-item dropend">
                        @guest
                            <a class="nav-link mx-2 " href="{{route('login')}}" ><i class="fa-solid fa-user "></i></a>

                        @else
                            <a class="nav-link mx-2 pt-0" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <div class="circle-background">
                                    <div class="user-auth-icon" >
                                        <img  src="/storage/defaults/auth-user.png" height="36" width="36">
                                    </div>
                                </div>
                            </a>
                            <ul class="dropdown-menu text-end nav-dropdown "  aria-labelledby="profileDropdown" style="margin-left: -55px;top: calc(100% - 5px);" >

                                <li><a class="dropdown-item ListItem" href="?subscription">
                                        <i class="fa-solid fa-clipboard-list" style="margin-left: 0.5rem;color: #6b6b6b"></i>
                                        اشتراک&zwnj;های من
                                    </a></li>
                                <li><a class="dropdown-item ListItem" href="?subscription">
                                        <i class="fa-solid fa-grid" style="margin-left: 0.5rem;color: #6b6b6b"></i>
                                        تراکنش&zwnj;های من
                                    </a></li>
                                <li><a class="dropdown-item ListItem" href="?subscription">
                                        <i class="fa-solid fa-memo-pad" style="margin-left: 0.5rem;color: #6b6b6b"></i>

                                        تراکنش&zwnj;های من
                                    </a></li>
                                <li><a class="dropdown-item ListItem" href="{{route('logout')}}">
                                        <i class="fa fa-arrow-right-to-bracket" style="margin-left: 0.5rem;color: #6b6b6b"></i>

                                        خروج
                                    </a></li>

                            </ul>
                        @endguest
                    </li>
                    <li class="nav-item">
                        <a href="#" class="decoration-none DownloadButton newbtn only-desktop ms-1" data-size="sm" data-color="primary"> دانلود بازار </a>
                    </li>
                    <li class="nav-item points-menu" >
                        <a href="#"  class="nav-link  ms-1" data-size="sm" data-color="primary"><svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg" class=""><path d="M12 8c1.1 0 2-.9 2-2s-.9-2-2-2-2 .9-2 2 .9 2 2 2zm0 2c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2zm0 6c-1.1 0-2 .9-2 2s.9 2 2 2 2-.9 2-2-.9-2-2-2z" fill="#757575"></path></svg></a>
                    </li>

                </ul>

            </div>
        </div>

    </nav>
</div>

<div class="nav-sm z-index-20" id="navbar-sm" style="z-index: 20">
    <nav class="navbar navbar-expand navbar-light  container-fluid vazir-rb ">

        <div class="w-100" id="navbarSupportedContent" >
            <ul class="navbar-nav  mb-2 mb-lg-0 w-100">
                <li class="nav-item" id="collapse-menu">
                    <button data-arrow-focusable="" title="" id="humber-bar" class="icon-button" style="width: 36px; height: 36px;"><svg width="24" height="24" fill="none" xmlns="http://www.w3.org/2000/svg" class=""><path d="M3.643 6.273h16.714A.631.631 0 0021 5.636.631.631 0 0020.357 5H3.643A.631.631 0 003 5.636c0 .358.281.637.643.637zm16.714 5.09H3.643A.631.631 0 003 12c0 .358.281.636.643.636h16.714A.631.631 0 0021 12a.631.631 0 00-.643-.636zm0 6.364H3.643a.631.631 0 00-.643.637c0 .358.281.636.643.636h16.714a.631.631 0 00.643-.636.631.631 0 00-.643-.637z" fill="#20222A"></path></svg></button>
                </li>
                <li class="nav-item w-100 me-2">
                    <input data-size="sm" data-color="background" data-has-icon="" data-arrow-focusable="" tabindex="0" placeholder="جست‌وجو در بازار" class="newinput SearchInput">
                    <i class="fa-light fa-magnifying-glass"></i>
                </li>

                <li class="nav-item dropend">
                    @guest
                        <a class="nav-link mx-2" href="{{route('login')}}" ><i class="fa-solid fa-user mt-2"></i></a>

                    @else
                        <a class="nav-link mx-2" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <div class="circle-background">
                                <div class="user-auth-icon " >
                                    <img  src="/storage/defaults/auth-user.png" height="36" width="36">
                                </div>
                            </div>
                        </a>
                        <ul class="dropdown-menu text-end nav-dropdown "  aria-labelledby="profileDropdown" style="margin-left: -55px;top: calc(100% - 5px);" >

                            <li><a class="dropdown-item ListItem" href="?subscription">
                                    <i class="fa-solid fa-clipboard-list" style="margin-left: 0.5rem;color: #6b6b6b"></i>
                                    اشتراک&zwnj;های من
                            </a></li>
                            <li><a class="dropdown-item ListItem" href="?subscription">
                                    <i class="fa-solid fa-grid" style="margin-left: 0.5rem;color: #6b6b6b"></i>
                                    تراکنش&zwnj;های من
                            </a></li>
                            <li><a class="dropdown-item ListItem" href="?subscription">
                                    <i class="fa-solid fa-memo-pad" style="margin-left: 0.5rem;color: #6b6b6b"></i>

                                    تراکنش&zwnj;های من
                            </a></li>
                            <li><a class="dropdown-item ListItem" href="{{route('logout')}}">
                                    <i class="fa fa-arrow-right-to-bracket" style="margin-left: 0.5rem;color: #6b6b6b"></i>

                                    خروج
                            </a></li>

                        </ul>
                    @endguest

                </li>
            </ul>
            <ul class="navbar-nav  mb-lg-0" >
                @foreach($nav_sm as $item)
                    <li class="nav-item sm-nav-item  fs-14 ">
                        <a class="nav-link active" aria-current="page" href="{{$item->link}}">{{$item->name}}</a>
                    </li>
                @endforeach

            </ul>
        </div>

    </nav>

</div>
