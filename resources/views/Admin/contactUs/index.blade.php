@extends('layouts.Admin.adminLayout')
@section('content')
    <div class="content-body">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">All Messages</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-responsive-md">
                                    <thead>
                                    <tr>
                                        <th><strong>NAME</strong></th>
                                        <th><strong>Message</strong></th>
                                        <th><strong>Email</strong></th>
                                        <th><strong>Phone</strong></th>
                                        <th><strong>Company</strong></th>
                                        <th><strong>Country</strong></th>
                                        <th><strong></strong></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($messages as $message)
                                            <tr>
                                                <td><div class="d-flex align-items-center"><img src="images/avatar/1.jpg" class="rounded-lg me-2" width="24" alt=""/> <span class="w-space-no"><a
                                                                href="/admin/message/{{$message->id}}">{{$message->name}}</a></span></div></td>
                                                <td>{{$message->message}}</td>
                                                <td>{{$message->email}}</td>
                                                <td>{{$message->phone}}</td>
                                                <td>{{$message->company}}</td>
                                                <td>{{$message->country}}</td>
                                                <td>
                                                    <div class="d-flex">
                                                        <a href="/admin/message/delete/{{$message->id}}" class="btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a>
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
            timer: 3000,
            timerProgressBar: true,
        })

        Toast.fire({
            icon: 'success',
            title: 'Deleted successfully'
        })
        @endif
    </script>
@stop
