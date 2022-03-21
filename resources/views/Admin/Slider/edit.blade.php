@extends('layouts.Admin.adminLayout')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row invoice-card-row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Image Slider</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">

                            <form action="{{route('slider.update',$slider)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-lg-6">
                                        <label class="form-label">Image</label>
                                        <input type="file" name="image_slider" class="form-control input-rounded" placeholder="input-rounded">
                                        <img src="{{$slider->getMedia('slider')[0]->getUrl()}}" style="width:100px;height:100px;margin-top:10px" alt="">
                                    </div>
                                    <div class="col-lg-6 mt-4">
                                        <button type="submit" class="btn btn-rounded btn-primary">Update</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
