@extends('layouts.Admin.adminLayout')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row invoice-card-row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Slider Image</h4>
                        <a href="{{route('slider.create')}}" class="btn btn-rounded btn-primary">
                            <span class="btn-icon-start text-primary">
                                <i class="fa fa-plus color-info"></i>
                            </span>Add Image
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-responsive-md">
                                <thead>
                                    <tr>
                                        <th><strong>ID</strong></th>
                                        <th><strong>Image</strong></th>
                                        <th><strong>Action</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($sliders) > 0)
                                    @foreach($sliders as $slider)
                                    <tr>
                                        <td><strong>{{$slider->id}}</strong></td>
                                        <td><a href="{{$slider->getMedia('slider')[0]->getUrl()}}"><img src="{{$slider->getMedia('slider')[0]->getUrl()}}" style="width:100px;height:100px" alt=""></a></td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{route('slider.edit',$slider)}}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                                <form method="post" action="{{route('slider.destroy',$slider)}}">
                                                    @csrf
                                                    @method('delete')
                                                    <button  class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></button>

                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @else
                                    <tr>
                                        No Event Added
                                    </tr>
                                    @endif

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
