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
            @foreach($subBranches as $subBranche)
                <div class="col-6 col-md-3">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img src="{{$subBranche->getMedia('branch')->first()->getUrl()}}" style="height: 250px; width: 250px " alt="product">
                        </div>
                        <div class="product-content">
                            <h6><a href="/sub-branches-products/{{$subBranche->id}}/{{$crops->id}}" class="product-title">{{$subBranche->name}}</a></h6>
                            <div class="d-flex justify-content-between align-items-center">
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        {{$subBranches->links()}}
    </div>
@stop
