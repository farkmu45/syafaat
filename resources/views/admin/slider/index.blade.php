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
                                    <th>Title</th>
                                    <th>Image</th>
                                    <th>Option</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sliders as $s)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$s->title}}</td>
                                        <td><img width="60" src="{{asset($s->photo)}}" alt=""></td>
                                        <td>
                                            <a href="/admin/slides/{{$s->id}}/edit" class="btn btn-info"><i class="ti-pencil"></i></a>
                                            <form action="/admin/slides/{{$s->id}}" method="POST" class="d-inline">
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