<!-- header section start -->
<div>
    <div class="tm-cover d-none d-lg-block d-xl-block">

    </div>
</div>
<header class="header">
    <div class="header-top" style="display: none">
        <div class="mobile-header d-flex justify-content-between align-items-center d-xl-none">
            <div class="all-catagory-option mobile-device" style="display: none">
                <a class="bar-btn"><i class="fas fa-bars"></i><span class="ml-2 d-none d-md-inline">All crops</span></a>
                <a class="close-btn"><i class="fas fa-times"></i><span class="ml-2 d-none d-md-inline">All crops</span></a>
            </div>
            <a href="{{url('/')}}" class="logo"><img style="max-width: 115px;    height: 127px;" src="/User/assets/images/TmLogo2.png" alt="logo"></a>
            <!-- search select -->
            <div class="text-center mobile-search">
                <button type="button" data-toggle="modal" data-target="#search-select-id"><i class="fas fa-search"></i></button>
            </div>
            <!-- menubar -->
            <div>
                <button class="menu-bar" type="button" data-toggle="modal" data-target="#menu-id">
                    Home<i class="fas fa-caret-down"></i>
                </button>
            </div>

        </div>
        <div class="d-none d-xl-flex row align-items-center" style="display: none">
            <div class="col-5 col-md-2">
                <a href="{{url('/')}}" class="logo"><img style="width: 170px;  height: 127px;" src="/User/assets/images/TmLogo2.png" alt="logo"></a>
            </div>
            <div class="col-5 col-md-9 col-lg-5">

{{--                <div class="select-search-option d-none d-md-flex">--}}
{{--                    <form action="#" class="search-form">--}}
{{--                        <input type="text" name="search" placeholder="Search for Products">--}}
{{--                        <button class="submit-btn"><i class="fas fa-search"></i></button>--}}
{{--                    </form>--}}
{{--                </div>--}}
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="row m-0 align-items-center mega-menu-relative">
            <div class="col-md-2 p-0 d-none d-xl-block">
                <div class="all-catagory-option" style="display: none">
                    <a class="bar-btn"><i class="fas fa-bars"></i>All crops </a>
                    <a class="close-btn"><i class="fas fa-times"></i>All crops</a>
                </div>
                <img style="width: 170px;  height: 127px;" src="/User/assets/images/TmLogo2.png" alt="logo">
            </div>
            <div class="col-md-10">
                <div class="menu-area d-none d-xl-flex justify-content-between align-items-center">
                    <ul class="menu d-xl-flex flex-wrap list-unstyled">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li><a href="{{route('about-us.index')}}">About Us</a></li>
                        <li><a href="{{route('events')}}">Event's</a></li>
                        <li><a href="{{url('/crops')}}">crops</a></li>
                        <li><a href="{{url('/new-crops')}}">New crops</a></li>
                        <li><a href="{{url('/special-crops')}}">Special crops</a></li>
                        <li><a href="{{route('contact')}}">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header section end -->
