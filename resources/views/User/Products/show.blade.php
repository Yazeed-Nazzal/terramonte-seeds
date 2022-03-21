@extends('layouts.User.userLayout')
@section('head')
    <style>
        .carousel {
            position: relative;

        }
        .carousel-item img {
            object-fit: cover;
        }
        .Main-Item img {
            height: 500px;
        }
        .carousel-item .col-4
        {
            padding: 0px;
        }
        .carousel-item .col-4 img
        {
            height: 150px;
        }
        #carousel-thumbs {
            background: rgba(255,255,255,.3);
            bottom: 0;
            left: 0;
            padding: 0px 0px !important;
            right: 0;
        }
        #carousel-thumbs img {
            border: 5px solid transparent;
            cursor: pointer;
        }
        #carousel-thumbs img:hover {
            border-color: rgba(255,255,255,.3);
        }
        #carousel-thumbs .selected img {
            border-color: #fff;
        }
        .carousel-control-prev,
        .carousel-control-next {
            width: 50px;
            background: #6BD640 !important;
        }
        @media all and (max-width: 767px) {
            .carousel-container #carousel-thumbs img {
                border-width: 3px;
            }
        }
        @media all and (min-width: 576px) {
            .carousel-container #carousel-thumbs {
                position: relative;
            }
        }
        @media all and (max-width: 576px) {
            .carousel-container #carousel-thumbs {
                background: #ccccce;
            }
        }
    </style>
    <style>
        .product-container
        {
            margin-top:20px;
        }
        .banner-section
        {
            background-size: cover;
            border-radius: 5px;
        }
        .style-slider-img{
            width: 100% !important;
            background-size: cover;
            height: 300px;
        }
        .hide-thumb{
            background: #ddd;
            opacity: 0.2;
        }

    </style>
@stop
@section('content')
    <!-- banner-section start -->
    <div class="container">
        <div class="row" style="margin: 30px 0px">
            <div class="col-md-5">
                <div class="container ">
                    <div class="carousel-container position-relative row">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner " style="width: 100%">
                                @foreach($product->media as $key=>$image)
                                    <div style="width: 100%" class="carousel-item @if($key ==0) active @endif " data-6++-number="{{$key}}">
                                        <img style="width: 400px !important;" src="{{$image->getUrl()}}" class="d-block w-100 style-slider-img" alt="..." data-remote="https://source.unsplash.com/Pn6iimgM-wo/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- Carousel Navigation -->
                        <div id="carousel-thumbs" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row mx-0">
                                        @foreach($product->media as $key=>$image)
                                            <div id="carousel-selector-0" class="thumb col-4   selected @if($key != 0) hide-thumb @endif" data-target="#myCarousel" data-slide-to="{{$key}}">
                                                <img src="{{$image->getUrl()}}" class="img-fluid style-slider-img" alt="...">
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            {{--                            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">--}}
                            {{--                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>--}}
                            {{--                                <span class="sr-only">Previous</span>--}}
                            {{--                            </a>--}}
                            {{--                            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">--}}
                            {{--                                <span class="carousel-control-next-icon" aria-hidden="true"></span>--}}
                            {{--                                <span class="sr-only">Next</span>--}}
                            {{--                            </a>--}}
                        </div>

                    </div> <!-- /row -->
                </div> <!-- /container -->            </div>
            <div class="col-md-7">
                <h1>{{$product->name}}</h1>
                <p>{!! $product->description !!}</p>
            </div>
        </div>

    </div>
    <!-- banner-section end -->
@stop
@section('scripts')
<script>
    $('.thumb').on('click',function (){
        $('.thumb').each(function(i, obj) {
                $(obj).addClass('hide-thumb')
        });
      $(this).removeClass('hide-thumb');
    });
</script>
@stop
