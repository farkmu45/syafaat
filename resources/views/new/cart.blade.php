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

    @if (Cookie::get('qurban') == null)
    <div class="jumbotron jumbotron-fluid cart bg-light mt-5 mb-0" style="margin-bottom: 50px !important;">
        <div class="container">
            <div class="row justify-content-between mt-5">
                <div class="col-lg-12 col-md-12">
                    <div class="card" style="overflow-x: scroll !important;">
                        <div class="card-body">
                            <table class="table">
                                <thead style="border: none !important;">
                                    <tr>
                                        <th scope="col">Foto</th>
                                        <th scope="col">Qurban</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Kuantitas</th>
                                        <th scope="col">Atas Nama</th>
                                        <th scope="col">Opsi</th>
                                    </tr>
                                </thead>
                            </table>
                            <h5 class="text-center text-danger">Anda belum menambahkan item ke keranjang</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <form id="checkout" action="/baru/checkout" method="post" novalidate="novalidate">
        @csrf
        <div class="jumbotron jumbotron-fluid cart bg-light mt-5 mb-0">
            <div class="container">
                <div class="row justify-content-between mt-5">
                    <div class="col-lg-12 col-md-12">
                        <div class="card" style="overflow-x: scroll !important;">
                            <div class="card-body">
                                <table class="table">
                                    <thead style="border: none !important;">
                                        <tr>
                                            <th scope="col">Foto</th>
                                            <th scope="col">Qurban</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">Kuantitas</th>
                                            <th scope="col">Atas Nama</th>
                                            <th scope="col">Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $key => $qurban)
                                        <tr>
                                            <td><img src="{{asset($qurban->photo)}}" width="80" alt=""></td>
                                            <td>{{$qurban->name}}</td>
                                            <td>{{"Rp " . number_format($qurban->price,0,',','.')}}</td>
                                            <td>
                                                <div class="def-number-input number-input safari_only">
                                                    <button
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown()"
                                                        class="minus"></button>
                                                    <input class="quantity" min="1" name="quantity[]" value="{{$qurban->quantity}}" type="number">
                                                    <button
                                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp()"
                                                        class="plus"></button>
                                                </div>
                                            </td>
                                            <td>
                                                <input type="text" class="input" name="behalf_of[]" required value="{{$qurban->behalf_of}}" placeholder="Nama Pembeli">
                                            </td>
                                            <td>
                                                <a href="/baru/keranjang?order_id={{$key}}" class="text-danger" style="font-size: 20px !important;"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="row mt-5 mb-5">
                    <div class="col-lg-6">
                        <div class="card mt-3">
                            <div class="card-body">
                                <p class="text-center font-weight-bold">LENGKAPI DATA DIRI ANDA</p>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="username" placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="phone" placeholder="No. Telepon">
                                </div>
                                <div class="input-group mb-3">
                                    <select class="custom-select" name="payment_id">
                                        <option selected>Metode Pembayaran</option>
                                        @foreach ($payments as $payment)
                                            <option value="{{$payment->id}}">{{$payment->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card mt-3">
                            <div class="card-body">
                                <p class="text-center font-weight-bold text-uppercase">Rincian Transaksi Anda</p>
                                <table class="table justify-content-between">
                                    <thead style="border: none !important;">
                                        <tr>
                                            <th scope="col">Item</th>
                                            <th scope="col">Kuantitas</th>
                                            <th scope="col">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($data as $key => $qurban)
                                        <tr>
                                            <td>{{$qurban->name}}</td>
                                            <td>x{{$qurban->quantity}}</td>
                                            <td>{{"Rp " . number_format($qurban->price,0,',','.')}}</td>
                                        </tr>
                                        @endforeach
                                        <tr>
                                            <td>Total</td>
                                            <td></td>
                                            <td class="text-primary font-weight-bold">
                                                {{"Rp " . number_format($qurban->total_price,0,',','.' )}}
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <button type="submit" class="btn btn-success btn-2 mt-2 button">Proses Pembayaran</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @endif

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