@extends('layouts.User.userLayout')

@section('content')

<!-- about section start -->
<section class="about-section section-ptb">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 order-lg-last pr-xl-5">
                <div class="about-content mb-4 mb-lg-0 pr-lg-5">
                    <h3>{{$about->title}}</h3>
                    <p style="line-height:30px">{!!$about->description!!}</p>
                </div>
            </div>
            <div class="col-lg-5 order-lg-first">
                <div class="about-image">
                    <img src="{{$about->getMedia('about')[0]->getUrl()}}" alt="about image">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about section end -->


@endsection
