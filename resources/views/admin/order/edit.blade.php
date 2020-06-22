@extends('admin.templates.layout')

@section('content')
<div class="container-fluid">
    
    @include('admin.templates.heading')

    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card card-outline-info">
                <div class="card-header">
                <h4 class="m-b-0 text-white">Form {{$title}}</h4>
                </div>
                <div class="card-body">
                <form action="/admin/orders/{{$order->id}}" method="POST">
                        @method('PATCH')
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group @error('username') has-danger @enderror">
                                        <label class="control-label">Username</label>
                                        <input type="text" name="username" class="form-control @error('username') form-control-danger @enderror" placeholder="" value="{{ $order->username }}">
                                        @error('username')
                                            <small class="form-control-feedback">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group @error('email') has-danger @enderror">
                                        <label class="control-label">Email</label>
                                        <input type="text" name="email" class="form-control @error('email') form-control-danger @enderror" placeholder="" value="{{ $order->email }}">
                                        @error('email')
                                            <small class="form-control-feedback">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group @error('phone') has-danger @enderror">
                                        <label class="control-label">No Telepon</label>
                                        <input type="text" name="phone" class="form-control @error('phone') form-control-danger @enderror" placeholder="" value="{{ $order->phone }}">
                                        @error('phone')
                                            <small class="form-control-feedback">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group @error('payment_id') has-danger @enderror">
                                        <label class="control-label">Pembayaran</label>
                                        <select class="form-control custom-select" name="payment_id">
                                            <option value=""> --Pilih Payment-- </option>
                                            @foreach ($payment as $q)
                                                <option value="{{$q->id}}" {{$q->id == $q->id ? 'selected' : ''}}>{{$q->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('payment_id')
                                        <small class="form-control-feedback">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group @error('status') has-danger @enderror">
                                        <label class="control-label">Status</label>
                                        <select class="form-control custom-select" name="status">
                                            <option value=""> --Pilih Status-- </option>
                                            <option value="1" {{$order->status == 1 ? 'selected' : ''}}>Pending</option>
                                            <option value="2" {{$order->status == 2 ? 'selected' : ''}}>Proses</option>
                                            <option value="3" {{$order->status == 3 ? 'selected' : ''}}>Berhasil</option>
                                        </select>
                                        @error('status')
                                            <small class="form-control-feedback">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group @error('code') has-danger @enderror">
                                        <label class="control-label">Code Pembayaran</label>
                                        <input type="text" name="code" disabled class="form-control @error('code') form-control-danger @enderror" placeholder="" value="{{ $order->code }}">
                                        @error('code')
                                            <small class="form-control-feedback">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group @error('total') has-danger @enderror">
                                        <label class="control-label">Total</label>
                                        <input type="text" name="total" disabled class="form-control @error('total') form-control-danger @enderror" placeholder="" value="{{ $order->total }}">
                                        @error('username')
                                            <small class="form-control-feedback">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> {{$title}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection