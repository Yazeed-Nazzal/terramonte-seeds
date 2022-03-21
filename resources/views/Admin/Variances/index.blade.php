@extends('layouts.Admin.adminLayout')
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All Branches</h4>
                            <a href="{{route('variances.create')}}" class="btn btn-rounded btn-primary">
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
                                        <th><strong>Status</strong></th>
                                        <th><strong>Crop</strong></th>
                                        <th><strong>Image</strong></th>
                                        <th><strong>Action</strong></th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($variances as $variance)
                                        <tr>
                                            <td>{{$variance->name}}</td>
                                            <td>
                                                @switch($variance->status)
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
                                            <td>
                                            <td><img src="{{$variance->getMedia('image')->first()->getUrl()}}" width="100" alt=""></td>
                                            </td>
                                            <td><a href="{{route('products.edit',$variance->product_id)}}">{{$variance->product->name}}</a></td>
                                            <td>
                                                <div class="d-flex">
                                                    <a href="{{route('variances.edit',$variance)}}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                                    <form method="post" action="{{route('variances.destroy',$variance)}}">
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
