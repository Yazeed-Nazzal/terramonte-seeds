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
                            <div class="carousel-inner ">
                                <div class="carousel-item Main-Item active" data-slide-number="0">
                                    <img src="https://www.seeds-gallery.shop/8003-large_default/tomato-seeds-saint-pierre.jpg" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/Pn6iimgM-wo/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                                </div>
                                <div class="carousel-item Main-Item" data-slide-number="1">
                                    <img src="https://www.seedsavers.org/site/img/seo-images/0118-igleheart-yellow-cherry-tomato-organic.jpg" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/tXqVe7oO-go/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                                </div>
                                <div class="carousel-item Main-Item" data-slide-number="2">
                                    <img src="https://www.brooksidenursery.co.uk/user/products/large/Tomatom-gardeners-delight-on-plant.jpg" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/qlYQb7B9vog/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                                </div>
                                <div class="carousel-item Main-Item" data-slide-number="3">
                                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4JfhoKaK4h2cLbzzz3UgIm0EpC0UcQjqo1g&usqp=CAU" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/qlYQb7B9vog/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery">
                                </div>
                            </div>
                        </div>
                        <!-- Carousel Navigation -->
                        <div id="carousel-thumbs" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                <div class="carousel-item active">
                                    <div class="row mx-0">
                                        <div id="carousel-selector-0" class="thumb col-4   selected" data-target="#myCarousel" data-slide-to="0">
                                            <img src="https://www.seeds-gallery.shop/8003-large_default/tomato-seeds-saint-pierre.jpg" class="img-fluid" alt="...">
                                        </div>
                                        <div id="carousel-selector-1" class="thumb col-4  " data-target="#myCarousel" data-slide-to="1">
                                            <img src="https://www.seedsavers.org/site/img/seo-images/0118-igleheart-yellow-cherry-tomato-organic.jpg" class="img-fluid" alt="...">
                                        </div>
                                        <div id="carousel-selector-2" class="thumb col-4  " data-target="#myCarousel" data-slide-to="2">
                                            <img src="https://www.brooksidenursery.co.uk/user/products/large/Tomatom-gardeners-delight-on-plant.jpg" class="img-fluid" alt="...">
                                        </div>
                                        <div id="carousel-selector-2" class="thumb col-4  " data-target="#myCarousel" data-slide-to="3">
                                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR4JfhoKaK4h2cLbzzz3UgIm0EpC0UcQjqo1g&usqp=CAU" class="img-fluid" alt="...">
                                        </div>
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
                <h1>Test</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab, assumenda beatae corporis deserunt doloremque dolores et exercitationem, explicabo fugiat fugit magnam maiores molestias neque quas quasi quo temporibus ullam voluptate.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A exercitationem harum iure nisi, perferendis placeat quidem. Aspernatur dolor dolorum illo ipsam ipsum minima, nisi non nostrum perspiciatis tempora, ut, voluptatibus.</p>
            </div>
        </div>

    </div>
    <!-- banner-section end -->
@stop
@section('scripts')
    <script>
        $('#myCarousel').carousel({
            interval: false
        });
        $('#carousel-thumbs').carousel({
            interval: false
        });

        // handles the carousel thumbnails
        // https://stackoverflow.com/questions/25752187/bootstrap-carousel-with-thumbnails-multiple-carousel
        $('[id^=carousel-selector-]').click(function() {
            var id_selector = $(this).attr('id');
            var id = parseInt( id_selector.substr(id_selector.lastIndexOf('-') + 1) );
            $('#myCarousel').carousel(id);
        });
        // Only display 3 items in nav on mobile.
        if ($(window).width() < 575) {
            $('#carousel-thumbs .row div:nth-child(4)').each(function() {
                var rowBoundary = $(this);
                $('<div class="row mx-0">').insertAfter(rowBoundary.parent()).append(rowBoundary.nextAll().addBack());
            });
            $('#carousel-thumbs .carousel-item .row:nth-child(even)').each(function() {
                var boundary = $(this);
                $('<div class="carousel-item">').insertAfter(boundary.parent()).append(boundary.nextAll().addBack());
            });
        }
        // Hide slide arrows if too few items.
        if ($('#carousel-thumbs .carousel-item').length < 2) {
            $('#carousel-thumbs [class^=carousel-control-]').remove();
            $('.machine-carousel-container #carousel-thumbs').css('padding','0 5px');
        }
        // when the carousel slides, auto update
        $('#myCarousel').on('slide.bs.carousel', function(e) {
            var id = parseInt( $(e.relatedTarget).attr('data-slide-number') );
            $('[id^=carousel-selector-]').removeClass('selected');
            $('[id=carousel-selector-'+id+']').addClass('selected');
        });
        // when user swipes, go next or previous
        $('#myCarousel').swipe({
            fallbackToMouseEvents: true,
            swipeLeft: function(e) {
                $('#myCarousel').carousel('next');
            },
            swipeRight: function(e) {
                $('#myCarousel').carousel('prev');
            },
            allowPageScroll: 'vertical',
            preventDefaultEvents: false,
            threshold: 75
        });
        /*
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
          event.preventDefault();
          $(this).ekkoLightbox();
        });
        */

        $('#myCarousel .carousel-item img').on('click', function(e) {
            var src = $(e.target).attr('data-remote');
            if (src) $(this).ekkoLightbox();
        });
    </script>
@stop
