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

    <div class="jumbotron jumbotron-fluid cart bg-light mt-5 mb-0">
        <div class="container">
            <div class="row justify-content-between text-center mt-5">
                <div class="col-lg-3 col-md-3 text-left">
                    <p><i class="fa fa-arrow-left"></i></p>
                </div>
                <div class="col-lg-6 text-center">
                    <h3>Detail Pemesanan</h3>
                </div>
                <div class="col-lg-3 col-md-3 text-right">
                    <p>[{{$result->code}}]</p>
                </div>
            </div>

            <div class="row mt-5 mb-5">
                <div class="col-lg-6">
                    <div class="card mt-3">
                        <div class="card-body">
                            <p class="text-center font-weight-bold text-uppercase">Identitas Pembeli</p>
                            <table class="table justify-content-between small">
                                <tbody>
                                    <tr>
                                        <td>Nama Pembeli</td>
                                        <td class="text-right">{{$result->username}}</td>
                                    </tr>
                                    <tr>
                                        <td>Email Pembeli</td>
                                        <td class="text-right">{{$result->email}}</td>
                                    </tr>
                                    <tr>
                                        <td>No. Handphone</td>
                                        <td class="text-right">{{$result->phone}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                    <div class="card mt-3">
                        <div class="card-body">
                            <p class="text-center font-weight-bold text-uppercase">Metode Pembayaran</p>
                            <table class="table justify-content-between small">
                                <tbody>
                                    <tr>
                                        <td>Nama Bank</td>
                                        <td class="text-right">{{$result->payment->name}}</td>
                                    </tr>
                                    <tr>
                                        <td>No. Rekening</td>
                                        <td class="text-right">{{$result->payment->account_number}}</td>
                                    </tr>
                                    <tr>
                                        <td>Atas Nama</td>
                                        <td class="text-right">MASJID ASY SYAFAAT AL MUBARAKAH</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="card mt-3">
                        <div class="card-body">
                            <p class="font-weight-bold text-uppercase">Rincian Transaksi Anda</p>
                            <div class="row small">
                                <div class="col-lg-6">
                                    <p>tanggal Pembelian <span class="text-primary">{{ date("d-m-Y") }}</span></p>
                                </div>
                                <div class="col-lg-6">
                                    <p class="text-right">Bayar Sebelum <span class="text-danger">{{ date("d-m-Y", time() + 86400) }}</span></p>
                                </div>
                            </div>
                            <table class="table justify-content-between small">
                                <thead style="border: none !important;">
                                    <tr>
                                        <th scope="col">Item</th>
                                        <th scope="col">Kuantitas</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Atas Nama</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($result->items as $qurban)
                                    <tr>
                                        <td>{{$qurban->item->name}}</td>
                                        <td>x{{$qurban->quantity}}</td>
                                        <td>{{"Rp " . number_format($qurban->item->price,0,',','.')}}</td>
                                        <td>{{$qurban->behalf_of}}</td>
                                    </tr>
                                    @endforeach
                                    <tr>
                                        <td>Kode Unik</td>
                                        <td></td>
                                        <td></td>
                                        <td>{{"Rp " . number_format($unique,0,',','.')}}</td>
                                    </tr>
                                    <tr>
                                        <td>Total</td>
                                        <td></td>
                                        <td></td>
                                        <td class="font-weight-bold">{{"Rp " . number_format($result->total,0,',','.')}}</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="https://api.whatsapp.com/send?phone=6281311000300&text=Nama Pembeli : {{$result->username}}            Kode Pesanan {{$result->code}}           Bukti Transfer : " class="btn btn-success btn-2 mt-2 button">Kirim Bukti Transaksi</a>
                        </div>
                    </div>
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