@extends('layouts.Admin.adminLayout')

@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row invoice-card-row">
                <div class="col-xl-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Edit Crop</h4>
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
                                <form action="{{route('products.update',$product)}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="mb-3">
                                                <label class="form-label">Name</label>
                                                <input type="text" value="{{$product->name}}" required name="name" class="form-control input-rounded" placeholder="Product Name">
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="form-label">Status</label>
                                            <select required class="default-select input-rounded form-control wide mb-3" name="status">
                                                <option value="">-- Select Status --</option>
                                                <option @if($product->status == 1) selected @endif value="1">Normal</option>
                                                <option @if($product->status == 2) selected @endif value="2">Special</option>
                                                <option @if($product->status == 3) selected @endif value="3">New</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-4">
                                            <label class="form-label">Type</label>
                                            <select required class="default-select  input-rounded form-control wide mb-3" name="type">
                                                <option value="">-- Select Type --</option>
                                                <option value="1" @if($product->type == 1) selected @endif>Crop-Products</option>
                                                <option value="2" @if($product->type == 2) selected @endif>Crop-Branch-Products</option>
                                                <option value="3" @if($product->type == 3) selected @endif>Crop-Branch-Sub Branch-Products</option>
                                            </select>
                                        </div>
                                        <div class="col-lg-6">
                                            <label class="form-label">Crops Cover Image</label>
                                            <input type="file"  name="cover_image" class="form-control input-rounded" placeholder="input-rounded">
                                            <a href="{{$product->getMedia('cover_image')->first()->getUrl()}}"><img src="{{$product->getMedia('cover_image')->first()->getUrl()}}" width="200" alt=""></a>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-rounded btn-primary mt-3">Update</button>
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
