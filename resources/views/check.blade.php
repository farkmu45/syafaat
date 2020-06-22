<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Syafaat | Cek Pesanan</title>
    <link rel="icon" href="{{asset('img/favicon.png')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <!-- nice select CSS -->
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/price_rangs.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>

    @include('partials.navbar')

    <!--================Home Banner Area =================-->
    <!-- breadcrumb start-->

    <!-- breadcrumb start-->

    <!--================ confirmation part start =================-->
    <section class="confirmation_part padding_top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="mb-2">Cari informasi pesanan</h2>
                    <p class="mb-5">Silahkan ketik kode pesanan untuk mengetahui lebih lanjut tentang pesanan qurban
                        anda</p>
                    <div class="confirmation_title mb-5">
                        <form action="/check" method="get">
                            <input type="text" class="form-control" name="order_id" id="" placeholder="Kode Pesanan">
                        </form>
                    </div>

                    @if ($order)

                    @if ($order->status == 1)    
                    <div class="alert alert-danger" role="alert">
                        Anda belum melakukan transfer uang. Pesanan akan diproses setelah anda melakukan transfer
                        <br>
                        <br>
                        Agar proses verifikasi lebih cepat, Harap upload bukti pembayaran 
                    </div>
                    <a href="https://wa.me/6281311000300" class="button mb-4">Upload Bukti Pembayaran</a>
                    @elseif($order->status == 2)
                    <div class="alert alert-warning" role="alert">
                        Pesanan anda sedang kami proses. Harap tunggu ya :)    
                    </div>
                    @elseif($order->status == 3)
                    <div class="alert alert-warning" role="alert">
                        Pesanan anda telah kami proses. Semoga qurban anda berkah :)    
                    </div>
                    @endif
                        
                    @endif

                </div>

                @if ($order)
                    
                
                <div class="col-lg-6 col-lx-4">
                    <div class="single_confirmation_details">
                        <h4>Detail Pesanan</h4>
                        <ul>
                            <li>
                                <p>Kode Pesanan :</p> <span>: {{$order->code}}</span>
                            </li>
                            <li>
                                <p>Nama</p><span>: {{$order->username}}</span>
                            </li>
                            <li>
                                <p>Email</p><span>: {{strtolower($order->email)}}</span>
                            </li>
                            <li>
                                <p>No. HP</p><span>: {{$order->phone}}</span>
                            </li>
                            <li>
                                <p>Total Bayar</p><span>: {{"Rp " . number_format($order->total,0,',','.')}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-lx-4">
                    <div class="single_confirmation_details">
                        <h4>Transfer Bank</h4>
                        <ul>
                            <li>
                                <p>Bank</p><span>: {{$order->payment->name}}</span>
                            </li>
                            <li>
                                <p>No. Rekening</p><span>: {{$order->payment->account_number}}</span>
                            </li>
                            <li>
                                <p>Atas Nama</p><span>: PRIMALAND</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="order_details_iner">
                        <h3>Detail Qurban</h3>
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col" colspan="2">Item</th>
                                    <th scope="col">Jumlah</th>
                                    <th scope="col">Harga</th>
                                    <th scope="col">Atas Nama</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order->items as $qurban)
                                <tr>
                                    <th colspan="2"><span>{{$qurban->item->name}}</span></th>
                                    <th>x {{$qurban->quantity}}</th>
                                    <th> <span>{{"Rp " . number_format($qurban->item->price,0,',','.')}}</span></th>
                                    <th>{{$qurban->behalf_of}}</th>
                                    <th> <span>{{"Rp " . number_format($qurban->item->price * $qurban->quantity,0,',','.')}}</span></th>
                                </tr>
                                @endforeach
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th scope="col" colspan="3"></th>
                                    <th scope="col"></th>
                                    <th scope="col"></th>
                                </tr>
                                <tr>
                                    <th scope="col" colspan="3">Total Bayar (+ Kode unik)</th>
                                    <th scope="col"><th>
                                    <th scope="col">{{"Rp " . number_format($order->total,0,',','.')}}</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>

            @endif
        </div>
    </section>
    <!--================ confirmation part end =================-->

    @include('partials.footer')

    <!-- jquery plugins here-->
    <!-- jquery -->
    <script src="{{asset('js/jquery-1.12.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{asset('js/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- easing js -->
    <script src="{{asset('js/jquery.magnific-popup.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('js/swiper.min.js')}}"></script>
    <!-- swiper js -->
    <script src="{{asset('js/masonry.pkgd.js')}}"></script>
    <!-- particles js -->
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
    <!-- slick js -->
    <script src="{{asset('js/slick.min.js')}}"></script>
    <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
    <script src="{{asset('js/waypoints.min.js')}}"></script>
    <script src="{{asset('js/contact.js')}}"></script>
    <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
    <script src="{{asset('js/jquery.form.js')}}"></script>
    <script src="{{asset('js/jquery.validate.min.js')}}"></script>
    <script src="{{asset('js/mail-script.js')}}"></script>
    <script src="{{asset('js/stellar.js')}}"></script>
    <script src="{{asset('js/price_rangs.js')}}"></script>
    <!-- custom js -->
    <script src="{{asset('js/custom.js')}}"></script>
</body>

</html>

</html>

</html>

</html>

</html>

</html>