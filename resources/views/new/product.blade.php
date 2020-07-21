<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('new/css/all.min.css')}}">

    <link rel="stylesheet" href="{{asset('new/css/style.css')}}">

    <title>Syafaat</title>
</head>

<body>

    @include('new.layouts.navbar')

    <div class="jumbotron jumbotron-fluid qurban bg-white mt-5">
        <div class="container">
            <div class="row justify-content-between mt-5">
                <div class="col-lg-2">
                    <p class="font-weight-bold">Kategori Qurban</p>
                    <div class="row">
                        <div class="col-lg-12">
                            @foreach ($qurban as $qurban)
                            <form action="/baru/qurban" id="{{$qurban->id}}" method="get">
                                <input type="hidden" name="type" value="{{$qurban->id}}">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="{{$qurban->id}}" id="{{$qurban->id}}">
                                    <label class="form-check-label" for="{{$qurban->id}}" 
                                    onclick="document.getElementById('{{$qurban->id}}').submit();">
                                        {{$qurban->name}}
                                    </label>
                                </div>
                            </form>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="dropdown text-right">
                        <button class="dropdown-toggle font-weight-bold" type="button" id="price" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Filter Harga
                        </button>
                        <div class="dropdown-menu" aria-labelledby="price">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                        <button class="dropdown-toggle font-weight-bold" type="button" id="dropdownMenu2"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Dropdown
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
                            <button class="dropdown-item" type="button">Action</button>
                            <button class="dropdown-item" type="button">Another action</button>
                            <button class="dropdown-item" type="button">Something else here</button>
                        </div>
                    </div>

                    <div class="row item">
                        @foreach ($list as $qurban)
                        <div class="col-lg-4">
                            <a href="/qurban/{{$qurban->name}}" style="color: black; text-decoration: none;">
                                <div class="card mt-3">
                                    <img src="{{asset($qurban->photo)}}" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <div class="row justify-content-between">
                                            <div class="col-lg-6 col-sm-6">
                                                <h5>{{$qurban->name}}</h5>
                                                <p class="text-muted">Berat : {{$qurban->weight}} Kg</p>
                                            </div>
                                            <div class="col-lg-6 col-sm-6 text-right">
                                                <h5>{{$qurban->price}}</h5>
                                                <p class="text-muted">Min. Harga</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- <div class="row mt-5">
                <div class="col-lg-12">
                    <div class="text-center">
                        <ul class="pagination">
                            <li class="page-item">
                                <a class="page-link" href="#" tabindex="-1" aria-disabled="true"><i class="fa fa-arrow-left"></i></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active" aria-current="page">
                                <a class="page-link" href="#">2</a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#"><i class="fa fa-arrow-right"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div> --}}
        </div>
    </div>

    @include('new.layouts.footer')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js"></script>
</body>

</html>