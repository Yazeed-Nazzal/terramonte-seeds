@extends('layouts.Admin.adminLayout')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row invoice-card-row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">New Branch</h4>
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
                                <form action="{{route('variances.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label">Name</label>
                                                <input type="text" required name="name" class="form-control input-rounded" placeholder="Branch Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="form-label">Product</label>
                                            <select required class="default-select input-rounded form-control wide mb-3" name="product">
                                                <option value="">-- Select Crops --</option>
                                                @foreach($products as $product)
                                                <option value="{{$product->id}}">{{$product->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="form-label">Status</label>
                                            <select required class="default-select input-rounded form-control wide mb-3" name="status">
                                                <option value="">-- Select Status --</option>
                                                <option value="1">Normal</option>
                                                <option value="2">Special</option>
                                                <option value="3">New</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="form-label">Branch Image</label>
                                            <input type="file" required name="image" class="form-control input-rounded" placeholder="input-rounded">
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-rounded btn-primary mt-3">Save</button>
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
    </script>
@stop
