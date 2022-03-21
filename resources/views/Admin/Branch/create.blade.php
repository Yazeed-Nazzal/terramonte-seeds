@extends('layouts.Admin.adminLayout')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row invoice-card-row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">New Sub Branch</h4>
                        </div>
                        <div class="card-body">
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            <div class="basic-form">
                                <form action="{{route('branches.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Name</label>
                                                <input type="text" name="name" class="form-control input-rounded" placeholder="Sub Branch Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="form-label">Status</label>
                                            <select class="default-select input-rounded form-control wide mb-3" name="status">
                                                <option value="">-- Select Status --</option>
                                                <option value="1">Normal</option>
                                                <option value="2">Special</option>
                                                <option value="3">New</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="form-label">Branch</label>
                                            <select class="default-select input-rounded form-control wide mb-3" name="variance_id">
                                                <option value="">-- Select Branch --</option>
                                                @foreach($variances as $variance)
                                                <option value="{{$variance->id}}">{{$variance->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-lg-6">
                                            <label class="form-label">Image</label>
                                            <input type="file" name="image_branch" class="form-control input-rounded" placeholder="input-rounded">
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
