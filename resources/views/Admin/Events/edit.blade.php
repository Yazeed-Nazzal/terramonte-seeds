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

                            <form action="{{route('events.update',$event)}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label class="form-label">Title</label>
                                            <input type="text" name="title" value="{{$event->title}}" class="form-control input-rounded" placeholder="input-rounded">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label">Date Events</label>
                                        <input type="date" name="events_date" value="{{$event->events_date}}" class="form-control" placeholder="2017-06-04" id="mdate">
                                    </div>
                                    <div class="col-lg-12">
                                        <label class="form-label">Description</label>
                                        <textarea class="form-control" name="editor1" rows="5" id="editor1">{{$event->description}}</textarea>
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label">Image</label>
                                        <input type="file" name="image_event" class="form-control input-rounded" placeholder="input-rounded">

                                        <img src="{{$event->getMedia('event')[0]->getUrl()}}" style="width:100px;height:100px;margin-top:10px" alt="">
                                    </div>
                                    <div class="col-lg-6">
                                        <label class="form-label">Status</label>
                                        <select class="default-select form-control wide mb-3" name="status">
                                            <option value="">-- Select Status --</option>
                                            <option value="1" @if($event->status == 1) selected @endif>Active</option>
                                            <option value="0" @if($event->status == 0) selected @endif>UnActive</option>
                                        </select>
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
