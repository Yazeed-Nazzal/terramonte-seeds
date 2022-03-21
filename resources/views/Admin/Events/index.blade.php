@extends('layouts.Admin.adminLayout')

@section('content')
<div class="content-body">
    <div class="container-fluid">
        <div class="row invoice-card-row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Events</h4>
                        <a href="{{route('events.create')}}" class="btn btn-rounded btn-primary">
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
                                        <th><strong>ID</strong></th>
                                        <th><strong>Title</strong></th>
                                        <th><strong>Date Event</strong></th>
                                        <th><strong>Status</strong></th>
                                        <th><strong>Action</strong></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if(count($events) > 0)
                                    @foreach($events as $event)
                                    <tr>
                                        <td><strong>{{$event->id}}</strong></td>
                                        <td>{{$event->title}}</td>
                                        <td>{{$event->events_date}}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                @if($event->status == 1)
                                                <i class="fa fa-circle text-success me-1"></i> Active
                                                @else
                                                <i class="fa fa-circle text-danger me-1"></i> UnActive
                                                @endif

                                            </div>
                                        </td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{route('events.edit',$event)}}" class="btn btn-primary shadow btn-xs sharp me-1"><i class="fa fa-pencil"></i></a>
                                               <form action="{{route('events.destroy',$event)}}" method="post">
                                                    @csrf
                                                    @method('DELETE')
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
