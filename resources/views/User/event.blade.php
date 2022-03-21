@extends('layouts.User.userLayout')

@section('content')
<!-- about section start -->

    <div class="container">
        @foreach($events as $event)
            <div class="row justify-content-center mt-5">
                <div class="col-lg-9  main-content">
                    <div class="entry-wrapper">
                        <div class="entry-single">
                            <div class="entry-header">
                                <img src="{{$event->getMedia('event')->first()->getUrl()}}" alt="thumb">
                            </div>
                            <div class="entry-content">
                                <ul class="meta-post list-unstyled pl-0 d-flex">
                                    <li>
                                        <span class="icon"><i class="far fa-clock"></i></span>
                                        <span class="meta-content">{{$event->events_date}}</span>
                                    </li>
                                </ul>
                                <h2 class="title mb-3">{{$event->title}}</h2>
                                <div style="color: #000">
                                    {!! $event->description !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

<!-- about section end -->

@endsection
