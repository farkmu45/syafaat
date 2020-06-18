<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor">{{$title}}</h3>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/admin/dashboard">Home</a></li>
            <li class="breadcrumb-item active">{{$title}}</li>
        </ol>
    </div>
    <div class="col-md-7 col-4 align-self-center">
        <div class="d-flex m-t-10 justify-content-end">
            <div class="d-flex m-r-20 m-l-10 hidden-md-down">
                @if (Route::current()->getName() == strtolower($title) . '.index')
                    <a type="button" href="/admin/{{strtolower($title)}}/create" class="btn waves-effect waves-light btn-info"><i class="ti-plus text"></i> New {{$title}}</a>
                @endif
            </div>
        </div>
    </div>
</div>