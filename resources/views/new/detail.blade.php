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

    <div class="jumbotron jumbotron-fluid detail bg-light mt-3">
        <div class="container">
            <div class="row justify-content-between mt-5">
                <div class="col-lg-12">
                    <p>Daftar Harga -> Produk -> <span class="text-primary">{{$qurban->name}}</span></p>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="image mb-3">
                                <img src="{{asset($qurban->photo)}}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="row">
                                <div class="col-lg-8 col-md-8">
                                    <h1>{{$qurban->name}}</h1>
                                </div>
                                <div class="col-lg-4 col-md-4 mt-2 mb-2">
                                    <span class="badge badge-success">Stock Ready</span>
                                </div>
                            </div>
                            <p>Berat : {{$qurban->weight}}</p>
                            <p>Kuantitas : </p>
                            <form action="/baru/qurban/{{$qurban->id}}" method="post">
                                <div class="def-number-input number-input safari_only">
                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepDown()" type="button" class="minus"></button>
                                    <input class="quantity" min="1" name="quantity" value="1" type="number">
                                    <button onclick="this.parentNode.querySelector('input[type=number]').stepUp();" type="button" class="plus"></button>
                                </div>
                                <p class="mt-3">Harga :</p>
                                <h2 class="mb-2">{{"Rp " . number_format($qurban->price,0,',','.')}}</h2>
                                
                                @csrf
                                <input type="hidden" name="name" value="{{$qurban->name}}">
                                <input type="hidden" name="qurban_id" value="{{$qurban->id}}">
                                <input type="hidden" name="qurban_price" value="{{$qurban->price}}">
                                <input type="hidden" name="photo" value="{{$qurban->photo}}">
                                <button type="submit" class="btn btn-success mr-4 mt-2"><i class="fa fa-shopping-cart"></i>
                                    Tambah ke Keranjang</button>
                                <button type="submit" class="btn btn-success btn-2 mt-2">Beli Sekarang</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="jumbotron jumbotron-fluid desc bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <button class="btn btn-outline-success">Deskripsi</button>
                    <p class="font-italic">{!!$qurban->description!!}</p>
                </div>
            </div>
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