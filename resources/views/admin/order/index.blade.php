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
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Telepon</th>
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
                                        <td><a href="/admin/orders/{{$s->id}}">{{$s->code}}</a></td>
                                        <td>{{$s->username}}</td>
                                        <td>{{$s->email}}</td>
                                        <td>{{$s->phone}}</td>
                                        <td>{{$s->payment->name}}</td>
                                        <td>{{$s->payment->account_number}}</td>
                                        <td>{{"Rp " . number_format($s->total,0,',','.')}}</td>
                                        <td>
                                            @if ($s->status == 1)
                                                Pending
                                            @elseif($s->status == 2)
                                                Proses
                                            @elseif($s->status == 3)
                                                Berhasil
                                            @endif
                                        </td>
                                        {{-- <td>{{$s->description}}</td> --}}
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