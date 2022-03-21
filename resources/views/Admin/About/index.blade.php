@extends('layouts.Admin.adminLayout')

@section('head')
    <style>
        .about-img
        {
            width: 424px;
            height: 400px;
            margin-bottom: 21px;
            margin-top: 31px;
        }
    </style>
@stop
@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row invoice-card-row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">About Page</h4>
                    </div>
                    <div class="card-body">
                        <div class="basic-form">

                            <form action="{{route('about.update',$about)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Title</label>
                                            <input type="text" name="title" value="{{$about->title}}" class="form-control input-rounded" placeholder="input-rounded">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <label class="form-label">Description</label>
                                        <textarea class="form-control" name="editor10" rows="5" id="comment">{{$about->description}}</textarea>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label">Image</label>
                                        <input type="file" name="image_about" class="form-control input-rounded" placeholder="input-rounded">

                                        <img class="about-img" src="{{$about->getMedia('about')[0]->getUrl()}}"  alt="">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-rounded btn-primary">Update</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
    <script>
        CKEDITOR.replace( 'editor10' );
    </script>
@stop
