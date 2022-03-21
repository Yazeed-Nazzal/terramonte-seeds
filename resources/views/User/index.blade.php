@extends('layouts.User.userLayout')
@section('head')
<style>
    .banner-slider-container .swiper-pagination {
      display: flex;
      width: auto;
      left: 50%;
      bottom: 35px;
      transform: translateX(-50%);
      background-color: #f9f9f9;
      padding: 15px 5px;
      border-radius: 20px;
      padding: 12px 15px;
      box-shadow: 0px 0px 10px 0px rgba(0, 0, 0, 0.1);
    }
    @media only screen and (max-width: 991px) {
      .banner-slider-container .swiper-pagination {
        bottom: 10px;
      }
    }
    .banner-slider-container .swiper-pagination .swiper-pagination-bullet {
      display: block;
      width: 10px;
      height: 10px;
      opacity: 1;
      background-color: #e9e9e9;
    }
    .banner-slider-container .swiper-pagination .swiper-pagination-bullet.swiper-pagination-bullet-active {
      background-color: #6BD640;
    }

    .product-thumb img{
        background-position: center;
        background-size: cover;
        height: 200px;
        width: 100% !important;
    }
    @media only screen and (max-width: 700px) {
      .slider-banner{
          height: 416px !important;
      }
        .slider-image
        {
            background-size: cover !important;
        }
    }
</style>
@stop
@section('content')

<!-- admin Modal -->
<div class="modal fade" id="useradmin1" tabindex="-1" aria-labelledby="useradmin1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="header-top-action-dropdown">
                    <ul>
                        <li class="signin-option"><a onclick="OpenSignUpForm()" href="#" data-dismiss="modal"><i class="fas fa-user mr-2"></i>Sign In</a></li>
                        <li class="site-phone"><a href="tel:000-000-000"><i class="fas fa-phone"></i> 000 000 000</a></li>
                        <li class="site-help"><a href="#"><i class="fas fa-question-circle"></i> Help & More</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!--siteinfo Modal -->
<div class="modal fade" id="siteinfo1" tabindex="-1" aria-labelledby="siteinfo1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="header-top-action-dropdown">
                    <ul>
                        <li class="site-phone"><a href="tel:000-000-000"><i class="fas fa-phone"></i> 000 000 000</a></li>
                        <li class="site-help"><a href="#"><i class="fas fa-question-circle"></i> Help & More</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!--search Modal -->
<div class="modal fade" id="search-select-id" tabindex="-1" aria-labelledby="search-select-id" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="select-search-option">
                    <form action="#" class="search-form">
                        <input type="text" name="search" placeholder="Search for Products">
                        <button class="submit-btn"><i class="fas fa-search"></i></button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="main-content-area">
    <!-- banner-section start -->
    <div class="container" style="max-width: 1367px !important;">
        <div class="row justify-content-center">
            <div class="col-12">
                <section class="slider-banner" style="    height: 540px;">
                    <div class="banner-slider-container">
                        <div class="swiper-wrapper">
                            @foreach($sliders as $slider)
                                <div class="swiper-slide">
                                    <div class="banner-content-area">
                                        <div class="slider-image slider-image2" style="background-image: url('{{$slider->getMedia('slider')->first()->getUrl()}}')"></div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </section>

            </div>
        </div>

    </div>
    <!-- banner-section end -->

    <!--New  product-section start -->
    <section class="trending-product-section">
        <div class="container">
            <div class="section-heading">
                <h4 class="heading-title"><span class="heading-circle"></span> New Products</h4>
            </div>

            <div class="section-wrapper">
                <!-- Add Arrows -->
                <div class="slider-btn-group">
                    <div class="slider-btn-prev trending-slider-prev">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 443.52 443.52" style="enable-background:new 0 0 443.52 443.52;" xml:space="preserve">
                            <g>
                                <path d="M143.492,221.863L336.226,29.129c6.663-6.664,6.663-17.468,0-24.132c-6.665-6.662-17.468-6.662-24.132,0l-204.8,204.8
                        c-6.662,6.664-6.662,17.468,0,24.132l204.8,204.8c6.78,6.548,17.584,6.36,24.132-0.42c6.387-6.614,6.387-17.099,0-23.712
                        L143.492,221.863z" />
                            </g>
                        </svg>
                    </div>
                    <div class="slider-btn-next trending-slider-next">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.002 512.002" style="enable-background:new 0 0 512.002 512.002;" xml:space="preserve">
                            <g>
                                <path d="M388.425,241.951L151.609,5.79c-7.759-7.733-20.321-7.72-28.067,0.04c-7.74,7.759-7.72,20.328,0.04,28.067l222.72,222.105
                        L123.574,478.106c-7.759,7.74-7.779,20.301-0.04,28.061c3.883,3.89,8.97,5.835,14.057,5.835c5.074,0,10.141-1.932,14.017-5.795
                        l236.817-236.155c3.737-3.718,5.834-8.778,5.834-14.05S392.156,245.676,388.425,241.951z" />
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="mlr-20">
                    <div class="trending-product-container">
                        <div class="swiper-wrapper">
                            @foreach($new_products as $product)
                                <div class="swiper-slide">
                                    <div class="product-item">
                                        <div class="product-thumb">
                                            <a href="{{url('product/'.$product->id)}}"><img src="{{$product->getMedia('main_image_seed')->first()->getUrl()}}" alt="product"></a>
                                            <span class="batch sale">New</span>
                                        </div>
                                        <div class="product-content">
                                            <h6><a href="{{url('product/'.$product->id)}}" class="product-title">{{$product->name}}</a></h6>
                                            <div class="d-flex justify-content-between align-items-center">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </div>
                    <div class="text-center pt-3">
                        <a href="{{url('new-crops')}}" class="more-product-btn">More Products</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- New product-section end -->
    <!--Special  product-section start -->
    <section class="trending-product-section">
        <div class="container">
            <div class="section-heading">
                <h4 class="heading-title"><span class="heading-circle"></span> Special Products</h4>
            </div>

            <div class="section-wrapper">
                <!-- Add Arrows -->
                <div class="slider-btn-group">
                    <div class="slider-btn-prev trending-slider-prev">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 443.52 443.52" style="enable-background:new 0 0 443.52 443.52;" xml:space="preserve">
                            <g>
                                <path d="M143.492,221.863L336.226,29.129c6.663-6.664,6.663-17.468,0-24.132c-6.665-6.662-17.468-6.662-24.132,0l-204.8,204.8
                        c-6.662,6.664-6.662,17.468,0,24.132l204.8,204.8c6.78,6.548,17.584,6.36,24.132-0.42c6.387-6.614,6.387-17.099,0-23.712
                        L143.492,221.863z" />
                            </g>
                        </svg>
                    </div>
                    <div class="slider-btn-next trending-slider-next">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512.002 512.002" style="enable-background:new 0 0 512.002 512.002;" xml:space="preserve">
                            <g>
                                <path d="M388.425,241.951L151.609,5.79c-7.759-7.733-20.321-7.72-28.067,0.04c-7.74,7.759-7.72,20.328,0.04,28.067l222.72,222.105
                        L123.574,478.106c-7.759,7.74-7.779,20.301-0.04,28.061c3.883,3.89,8.97,5.835,14.057,5.835c5.074,0,10.141-1.932,14.017-5.795
                        l236.817-236.155c3.737-3.718,5.834-8.778,5.834-14.05S392.156,245.676,388.425,241.951z" />
                            </g>
                        </svg>
                    </div>
                </div>
                <div class="mlr-20">
                    <div class="trending-product-container">
                        <div class="swiper-wrapper">
                            @foreach($special_products  as $key => $special)
                            <div class="swiper-slide">
                                <div class="product-item">
                                    <div class="product-thumb">
                                        <a href="{{url('product/'.$special->id)}}"><img src="{{$special->getMedia('main_image_seed')->first()->getUrl()}}" alt="product"></a>
                                        <span class="batch sale">special</span>
                                    </div>
                                    <div class="product-content">
                                        <h6><a href="{{url('product/'.$special->id)}}" class="product-title">{{$special->name}}</a></h6>
                                        <div class="d-flex justify-content-between align-items-center">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
{{--                            <div class="swiper-slide">--}}
{{--                                <div class="product-item">--}}
{{--                                    <div class="product-thumb">--}}
{{--                                        <a href="{{url('product')}}"><img src="User/assets/images/products/Tomato_je.jpg" alt="product"></a>--}}
{{--                                        <span class="batch sale">special</span>--}}
{{--                                    </div>--}}
{{--                                    <div class="product-content">--}}
{{--                                        <h6><a href="{{url('product')}}" class="product-title">Green Graves</a></h6>--}}
{{--                                        <div class="d-flex justify-content-between align-items-center">--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                    <div class="text-center pt-3">
                        <a href="{{url('special-crops')}}" class="more-product-btn">More Products</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- New product-section end -->

    <!-- advertisement-section start -->
{{--    <div class="advertisement-section pb-5">--}}
{{--        <div class="container">--}}
{{--            <div class="row mb-4">--}}
{{--                <div class="col-lg-6">--}}
{{--                    <a href="#"><img src="User/assets/images/advertise/01.jpg" alt="advertise"></a>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6">--}}
{{--                    <a href="#"><img src="User/assets/images/advertise/02.jpg" alt="advertise"></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- advertisement-section start -->

    <!-- advertisement-section start -->
{{--    <div class="advertisement-section pb-5">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-lg-4">--}}
{{--                    <a href="#"><img src="User/assets/images/advertise/10.jpg" alt="advertise"></a>--}}
{{--                </div>--}}

{{--                <div class="col-lg-4">--}}
{{--                    <a href="#"><img src="User/assets/images/advertise/11.jpg" alt="advertise"></a>--}}
{{--                </div>--}}
{{--                <div class="col-lg-4">--}}
{{--                    <a href="#"><img src="User/assets/images/advertise/12.jpg" alt="advertise"></a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
    <!-- advertisement-section start -->
</div>




<!-- product-details-popup start -->
<section id="product-details-popup" class="product-details-popup">
    <div class="modal-overlay" onclick="closeModal()"></div>
    <div class="container">
        <div class="product-zoom-info-container">
            <div id="closed-modal" class="closed-modal" onclick="closeModal()">X</div>
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="product-zoom-area">
                        <span class="batch">30%</span>
                        <div class="cart-btn-toggle d-lg-none">
                            <span class="cart-btn"><i class="fas fa-shopping-cart"></i> Cart</span>

                            <div class="price-btn">
                                <div class="price-increase-decrese-group d-flex">
                                    <span class="decrease-btn">
                                        <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">-
                                        </button>
                                    </span>
                                    <input type="text" name="quantity" class="form-controls input-number" value="1">
                                    <span class="increase">
                                        <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">+
                                        </button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="product-slick">
                            <div><img src="User/assets/images/product-detail/01.jpg" alt="" class="img-fluid blur-up lazyload image_zoom_cls-0"></div>
                            <div><img src="User/assets/images/product-detail/02.jpg" alt="" class="img-fluid blur-up lazyload image_zoom_cls-1"></div>
                            <div><img src="User/assets/images/product-detail/03.jpg" alt="" class="img-fluid blur-up lazyload image_zoom_cls-2"></div>
                            <div><img src="User/assets/images/product-detail/01.jpg" alt="" class="img-fluid blur-up lazyload image_zoom_cls-3"></div>
                            <!-- <div><img src="User/assets/images/product-detail/02.jpg" alt=""
                                        class="img-fluid blur-up lazyload image_zoom_cls-4"></div> -->
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="slider-nav">
                                    <div><img src="User/assets/images/product-detail/01.jpg" alt="" class="img-fluid blur-up lazyload"></div>
                                    <div><img src="User/assets/images/product-detail/02.jpg" alt="" class="img-fluid blur-up lazyload"></div>
                                    <div><img src="User/assets/images/product-detail/03.jpg" alt="" class="img-fluid blur-up lazyload"></div>
                                    <div><img src="User/assets/images/product-detail/01.jpg" alt="" class="img-fluid blur-up lazyload"></div>
                                    <!-- <div><img src="User/assets/images/product-detail/02.jpg" alt=""
                                                class="img-fluid blur-up lazyload"></div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="product-details-content">
                        <a href="#" class="cata">Catagory</a>
                        <h2>Product Title Here</h2>
                        <p class="quantity">1kg</p>
                        <h3 class="price">$329 <del>$400</del></h3>
                        <div class="price-increase-decrese-group d-flex">
                            <span class="decrease-btn">
                                <button type="button" class="btn quantity-left-minus" data-type="minus" data-field="">-
                                </button>
                            </span>
                            <input type="text" name="quantity" class="form-controls input-number" value="1">
                            <span class="increase">
                                <button type="button" class="btn quantity-right-plus" data-type="plus" data-field="">+
                                </button>
                            </span>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penas et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem.</p>
                        <div class="d-flex justify-content-end">
                            <a href="#" class="buy-now">Buy Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- product-details-popup end -->



<!-- login-area -->
<section id="login-area" class="login-area">
    <div onclick="CloseSignUpForm()" class="overlay"></div>
    <div class="login-body-wrapper">
        <div class="login-body">
            <div class="close-icon" onclick="CloseSignUpForm()">
                <i class="fas fa-times"></i>
            </div>
            <div class="login-header">
                <h4>Create Your Account</h4>
                <p>Login with your email & password</p>
            </div>
            <div class="login-content">
                <form action="#" class="login-form">
                    <input type="text" name="name" placeholder="Name">
                    <input type="email" name="email" placeholder="Email">
                    <button type="submit" class="submit">Sign Up</button>
                </form>
                <div class="text-center seperator">
                    <span>Or</span>
                </div>
                <div class="othersignup-option">
                    <a class="facebook" href="#"><i class="fab fa-facebook-square"></i>Continue with Facebook</a>
                    <a class="google" href="#"><i class="fab fa-google-plus"></i>Continue with Google</a>
                </div>
                <div class="text-center dont-account py-4">
                    <p class="mb-0">Don't have any account <a href="#">Sing Up</a></p>
                </div>
            </div>
        </div>
        <div class="forgot-password text-center">
            <p>forgot Passowrd? <a href="#">Reset It</a></p>
        </div>
    </div>
</section>
<!-- login-area -->


@endsection
