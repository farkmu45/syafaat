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
                <form action="/admin/payments/{{$payment->id}}"  method="POST">
                        @method('PATCH')
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group @error('name') has-danger @enderror">
                                        <label class="control-label">Nama Bank</label>
                                        <input type="text" name="name" class="form-control @error('name') form-control-danger @enderror" placeholder="" value="{{ $payment->name }}">
                                        @error('name')
                                            <small class="form-control-feedback">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group @error('account_number') has-danger @enderror">
                                        <label class="control-label">Nomor Rekening</label>
                                        <input type="text" id="firstName" name="account_number" class="form-control @error('account_number') form-control-danger @enderror" placeholder="" value="{{ $payment->account_number }}">
                                        @error('account_number')
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