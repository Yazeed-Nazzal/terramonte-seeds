@extends('layouts.Admin.adminLayout')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row invoice-card-row">
            <div class="col-xl-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Input Style</h4>
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
                                            <input type="text" name="title" value="{{$about->title}}" class="form-control input-rounded" placeholder="Enter Title About Page">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <label class="form-label">Description</label>
                                        <textarea class="form-control" name="description" rows="5" id="editor3">{{$about->description}}</textarea>

                                    </div>
                                    <div class="col-lg-6 mt-2">
                                        <label class="form-label">Image</label>
                                        <input type="file" name="image_about" class="form-control input-rounded" placeholder="input-rounded">

                                        <img src="{{isset($about->getMedia('about')[0]) ? $about->getMedia('about')[0]->getUrl() : ''}}" style="width:100px;height:100px" alt="">
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
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>

        @if (session()->has('success'))
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 5000,
            timerProgressBar: true,
        })

        Toast.fire({
            icon: 'success',
            title: 'Created successfully'
        })
        @endif

        CKEDITOR.replace( 'editor3' );
    </script>
@stop

