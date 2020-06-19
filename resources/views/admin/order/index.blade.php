@extends('admin.templates.layout')

@section('content')
<div class="container-fluid">
    
    @include('admin.templates.heading')

    <div class="row justify-content-center">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data {{$title}}</h4>
                    <div class="table-responsive m-t-5">
                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Code</th>
                                    <th>Username</th>
                                    <th>User Email</th>
                                    <th>User Telepon</th>
                                    <th>Atas Nama</th>
                                    <th>Payment Name</th>
                                    <th>Account Number</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order as $s)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$s->code}}</td>
                                        <td>{{$s->username}}</td>
                                        <td>{{$s->email}}</td>
                                        <td>{{$s->phone}}</td>
                                        <td>{{$s->behalf}}</td>
                                        <td>{{$s->payment->name}}</td>
                                        <td>{{$s->payment->account_number}}</td>
                                        <td>{{$s->total}}</td>
                                        <td>{{$s->status}}</td>
                                        <td>{{$s->description}}</td>
                                        <td>
                                            <a href="/admin/orders/{{$s->id}}/edit" class="btn btn-info"><i class="ti-pencil"></i></a>
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
@endsection