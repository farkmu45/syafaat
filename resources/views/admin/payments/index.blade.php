@extends('admin.templates.layout')

@section('content')
<div class="container-fluid">
    
    @include('admin.templates.heading')

    <div class="row justify-content-center">
        <div class="col-10">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Data {{$title}}</h4>
                    <div class="table-responsive m-t-5">
                        <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Name</th>
                                    <th>Account Number</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($payments as $payment)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                    <td>{{$payment->name}}</td>
                                    <td>{{$payment->account_number}}</td>
                                        <td>
                                            <a href="/admin/payments/{{$payment->id}}/edit" class="btn btn-info"><i class="ti-pencil"></i></a>
                                            <form action="/admin/payments/{{$payment->id}}" method="POST" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button type="submit" class="btn btn-danger"><i class="ti-trash"></i></button>
                                            </form>
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