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
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <form action="{{route('events.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Title</label>
                                            <input type="text" name="title" class="form-control input-rounded" placeholder="Enter Title Event">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label">Date Events</label>
                                        <input type="date" name="events_date" class="form-control input-rounded" placeholder="2017-06-04" id="mdate">
                                    </div>
                                    <div class="col-lg-12">
                                        <label class="form-label">Description</label>
                                        <textarea class="form-control" name="editor2"  rows="5" id="editor2"></textarea>
                                    </div>
                                    <div class="col-lg-6 mt-2">
                                        <label class="form-label">Image</label>
                                        <input type="file" name="image_event" class="form-control input-rounded" placeholder="input-rounded">
                                    </div>
                                    <div class="col-lg-6 mt-2">
                                        <label class="form-label">Status</label>
                                        <select class="default-select form-control wide mb-3 input-rounded" name="status">
                                            <option value="">-- Select Status --</option>
                                            <option value="1">Active</option>
                                            <option value="0">UnActive</option>
                                        </select>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-rounded btn-primary">Save</button>
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

        CKEDITOR.replace( 'editor2' );
    </script>
@stop

