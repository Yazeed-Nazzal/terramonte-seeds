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
{{--    <div class="container-fluid">--}}
{{--        <div class="row">--}}
{{--            <div class="col-12">--}}
{{--                <img width="100%" style="height: 500px" src="{{$crops->getMedia('cover_image')->first()->getUrl()}}" alt="">--}}

{{--            </div>--}}

{{--        </div>--}}

{{--    </div>--}}
    <div class="container product-container">
        <div class="row" style="margin-bottom: 50px">
            @foreach($products as $product)
                <div class="col-6 col-md-3">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img src="{{$product->getMedia('main_image_seed')->first()->getUrl()}}" style="height: 250px; width: 250px " alt="product">
                        </div>
                        <div class="product-content">
                            <h6><a href="/product/{{$product->id}}" class="product-title">{{$product->name}}</a></h6>
                            <div class="d-flex justify-content-between align-items-center">
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{$products->links()}}
    </div>
@stop
