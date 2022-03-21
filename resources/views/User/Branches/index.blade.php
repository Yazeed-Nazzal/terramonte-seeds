@extends('layouts.User.userLayout')
@section('head')
    <style>
        .product-container
        {
            margin-top:20px;
        }
    </style>
@stop
@section('content')
    <div class="container product-container">
        <div class="row" style="margin-bottom: 50px">
            @foreach($branches as $branche)
                <div class="col-6 col-md-3">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img src="{{$branche->getMedia('image')->first()->getUrl()}}" style="height: 250px; width: 250px " alt="product">
                        </div>
                        <div class="product-content">
                            <h6><a
                                    @switch($crops->type)
                                        @case(2)
                                         href="/branch-products/{{$crops->id}}/{{$branche->id}}"
                                        @case(3)
                                        href="/sub-branches/{{$crops->id}}/{{$branche->id}}"
                                    @endswitch

                                    class="product-title">{{$branche->name}}</a></h6>
                            <div class="d-flex justify-content-between align-items-center">
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{$branches->links()}}
    </div>
@stop
