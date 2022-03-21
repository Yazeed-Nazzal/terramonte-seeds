@extends('layouts.Admin.adminLayout')

@section('content')


    <!--**********************************
    Nav header start
***********************************-->
    @include('layouts.Admin.navBar')
    <!--**********************************
    Nav header end
***********************************-->



    <!--**********************************
        Sidebar start
    ***********************************-->
    @include('layouts.Admin.sideBar')
    <!--**********************************
    Sidebar end
***********************************-->
<div class="content-body">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header border-0 pb-0">
                        <h5 class="card-title">{{$contactUs->name}}</h5>
                    </div>
                    <div class="card-body">
                        <p class="card-text"><strong>Message :</strong>{{"  ". $contactUs->message}}</p>
                        <p class="card-text"><strong>Phone :</strong>{{"  ". $contactUs->phone}}</p>
                        <p class="card-text"><strong>Email :</strong>{{"  ". $contactUs->email}}</p>
                        @if(isset($contactUs->company))
                            <p class="card-text"><strong>Company :</strong>{{"  ". $contactUs->company}}</p>
                        @endif
                        @if(isset($contactUs->country))
                            <p class="card-text"><strong>Company :</strong>{{"  ". $contactUs->country}}</p>
                        @endif
                    </div>
                    <div class="card-footer border-0 pt-0">
                        <p class="card-text d-inline">{{$contactUs->created_at}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
