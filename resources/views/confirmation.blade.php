<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Syafaat | Konfirmasi</title>
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
                    <div class="confirmation_tittle d-flex flex-column justify-content-center align-items-center">
                        <span>Terima Kasih. Pesanan anda akan kami proses. <br>Harap lakukan transfer uang sesuai total harga pesanan ke rekening dibawah<br>Catat kode pesanan anda untuk tracking</span>
                        <button data-clipboard-target="#target" class="button mt-5" style="display: block" id="copy">Salin Kode</button>
                    </div>
                </div>
                <div class="col-lg-6 col-lx-4">
                    <div class="single_confirmation_details">
                        <h4>Detail Pesanan</h4>
                        <ul>
                            <li>
                                <p>Kode Pesanan </p> : <span id="target">{{$result->code}}</span>
                            </li>
                            <li>
                                <p>Nama</p><span>: {{$result->username}}</span>
                            </li>
                            <li>
                                <p>Email</p><span>: {{$result->email}}</span>
                            </li>
                            <li>
                                <p>No. HP</p><span>: {{$result->phone}}</span>
                            </li>
                            <li>
                                <p>Total Bayar</p><span>: {{"Rp " . number_format($result->total,0,',','.')}}</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-lx-4">
                    <div class="single_confirmation_details">
                        <h4>Transfer Bank</h4>
                        <ul>
                            <li>
                                <p>Bank</p><span>: {{$result->payment->name}}</span>
                            </li>
                            <li>
                                <p>No. Rekening</p><span>: {{$result->payment->account_number}}</span>
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
                                    <th scope="col">Total</th>
                                    <th scope="col">Atas Nama</th>
                                </tr>
                            </thead>
                            <tbody>
                                 @foreach ($result->items as $qurban)    
                                <tr>
                                <th colspan="2"><span>{{$qurban->item->name}}</span></th>
                                <th>x {{$qurban->quantity}}</th>
                                    <th> <span>{{"Rp " . number_format($qurban->item->price,0,',','.')}}</span></th>
                                <th>{{$qurban->behalf_of}}</th>
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
                                    <th scope="col" colspan="3">Kode Unik</th>
                                    <th scope="col"></th>
                                    <th scope="col">{{"Rp " . number_format($unique,0,',','.')}}</th>
                                </tr>
                                <tr>
                                    <th scope="col" colspan="3">Total Bayar</th>
                                    <th scope="col"></th>
                                    <th scope="col">{{"Rp " . number_format($result->total,0,',','.')}}</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
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
    <script src="https://unpkg.com/clipboard@2/dist/clipboard.min.js"></script>

    <script>
        new ClipboardJS('#copy');
    </script>
</body>

</html>

</html>

</html>

</html>

</html>

</html>