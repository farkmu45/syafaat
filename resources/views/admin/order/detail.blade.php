@extends('admin.templates.layout')

@section('content')
<div class="container-fluid">
    
    @include('admin.templates.heading')

    <div class="row">
        <div class="col-lg-10">
            <div class="card card-outline-info">
                <div class="card-header">
                    <h4 class="m-b-0 text-white">Form {{$title}}</h4>
                </div>
                <div class="card-body">
                    <form class="form-horizontal" role="form">
                        <div class="form-body">
                            <h3 class="box-title">Detail Order</h3>
                            <hr class="m-t-0 m-b-40">
                            @foreach ($order as $o)
                                
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Atas Nama:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> {{$o->behalf_of}} </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Qurban:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> {{$o->item->name}} </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Berat Qurban:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> {{$o->item->weight}} </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="control-label text-right col-md-3">Harga:</label>
                                        <div class="col-md-9">
                                            <p class="form-control-static"> {{"Rp " . number_format($o->item->price,0,',','.')}} </p>
                                        </div>
                                    </div>
                                </div>
                                <!--/span-->
                            </div>

                            @endforeach
                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="row">
                                        <div class="col-md-offset-3 col-md-9">
                                            {{-- <button type="submit" class="btn btn-info"> <i class="fa fa-pencil"></i> Edit</button> --}}
                                            {{-- <button type="button" class="btn btn-inverse">Cancel</button> --}}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6"> </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection