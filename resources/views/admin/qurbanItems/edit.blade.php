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
                    <form action="/admin/qurbans/{{$qurban->id}}" enctype="multipart/form-data" method="POST">
                        @method('patch')
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group @error('name') has-danger @enderror">
                                        <label class="control-label">Judul</label>
                                        <input type="text" id="firstName" name="name" class="form-control @error('name') form-control-danger @enderror" placeholder="" value="{{ $qurban->name }}">
                                        @error('name')
                                            <small class="form-control-feedback">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group @error('qurban_id') has-danger @enderror">
                                        <label class="control-label">Jenis Qurban</label>
                                        <select class="form-control custom-select" name="qurban_id">
                                            <option value=""> --Pilih Jenis Qurban-- </option>
                                            @foreach ($qurbans as $q)
                                                <option value="{{$q->id}}" {{$q->id == $q->id ? 'selected' : ''}}>{{$q->name}}</option>
                                            @endforeach
                                        </select>
                                        @error('qurban_id')
                                        <small class="form-control-feedback">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group @error('price') has-danger @enderror">
                                        <label class="control-label">Harga Qurban</label>
                                        <input type="number" id="firstName" name="price" class="form-control @error('price') form-control-danger @enderror" placeholder="Rp..." value="{{ $qurban->price }}">
                                        @error('price')
                                            <small class="form-control-feedback">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group @error('weight') has-danger @enderror">
                                        <label class="control-label">Berat Qurban</label>
                                        <input type="text" id="firstName" name="weight" class="form-control @error('weight') form-control-danger @enderror" placeholder="Dalam satuan kg." value="{{ $qurban->weight }}">
                                        @error('weight')
                                            <small class="form-control-feedback">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group @error('description') has-danger @enderror">
                                        <label class="control-label">Deskripsi</label>
                                        <textarea id="mymce" name="description" class="form-control @error('description') form-control-danger @enderror">{{ $qurban->description }}</textarea>
                                        @error('description')
                                        <small class="form-control-feedback">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <label for="input-file-now">Foto Qurban</label>
                                            <input type="file" id="input-file-now" name="photo" class="dropify" data-default-file={{asset($qurban->photo)}}  />
                                            @error('photo')
                                                <small class="form-control-feedback text-danger">{{$message}}</small>
                                            @enderror
                                        </div>
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