@extends('layouts.Admin.adminLayout')
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All Crops</h4>
                            <a href="{{route('products.create')}}" class="btn btn-rounded btn-primary">
                            <span class="btn-icon-start text-primary">
                                <i class="fa fa-plus color-info"></i>
                            </span>Add
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-responsive-md">
                                    <thead>
                                    <tr>
                                        <th><strong>NAME</strong></th>
                                        <th><strong>Type</strong></th>
                                        <th><strong>Status</strong></th>
                                        <th><strong>Image</strong></th>
                                        <th><strong>Action</strong></th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($products as $product)
                                        <tr>
                                            <td>{{$product->name}}</td>
                                            <td>
                                                @switch($product->type)
                                                    @case(1)
                                                    Crop-Products
                                                    @break
                                                    @case(2)
                                                    Crop-Branch-Products
                                                    @break
                                                    @case(3)
                                                    Crop-Branch-Sub Branch-Products
                                                    @break

                                                @endswitch
                                            </td>
                                            <td>
                                                @switch($product->status)
                                                    @case(1)
                                                    Normal
                                                    @break
                                                    @case(2)
                                                    Special
                                                    @break
                                                    @case(3)
                                                    New
                                                    @break
                                                @endswitch
                                            </td>
                                            <td><img src="{{$product->getMedia('image')->first()->getUrl()}}" width="100" alt=""></td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{route('products.edit',$product)}}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                                    <form method="post" action="{{route('products.destroy',$product)}}">
                                                        @csrf
                                                        @method('delete')
                                                        <button  class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></button>
                                                    </form>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                                {{ $products->links() }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
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
            title: 'Deleted successfully'
        })
        @endif
        @if (session()->has('create'))
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
        @if (session()->has('edit'))
        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 5000,
            timerProgressBar: true,
        })

        Toast.fire({
            icon: 'success',
            title: 'Edited successfully'
        })
        @endif
    </script>
@stop
