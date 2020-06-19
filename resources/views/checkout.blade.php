<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Syafaat | Checkout</title>
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
    <!--================Checkout Area =================-->
    <section class="checkout_area padding_top">
        <div class="container">
            <div class="billing_details">
                <div class="row">
                    <div class="col-lg-12">
                        <h3>Detail Pembayaran</h3>
                        <form class="row contact_form" id="checkout" action="/checkout" method="post" novalidate="novalidate">
                            @csrf
                            <div class="col-md-12 form-group">
                            <input type="text" name="username" placeholder="Nama Lengkap" required="" class="form-control" value="{{old('user_name')}}">
                            </div>
                            <div class="col-md-6 form-group">
                            <input type="email" name="email" placeholder="Email" required="" class="form-control" value="{{old('user_email')}}">
                            </div>
                            <div class="col-md-6 form-group">
                            <input type="text" name="phone" placeholder="Nomor Handphone" required="" class="form-control" value="{{old('user_phone')}}">
                            </div>
                            <div class="col-md-12 form-group">
                                <select class="country_select" name="payment_id">
                                    <option value="">Metode Pembayaran</option>
                                    @foreach ($payments as $payment)
                                <option value="{{$payment->id}}">{{$payment->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-12">
                        <div class="order_box">
                            <h2>Qurban Anda</h2>
                            <ul class="list">
                                <li>
                                    <a href="#">Item
                                        <span>Total</span>
                                    </a>
                                </li>

                                @foreach ($data as $qurban)      
                                <li>
                                    <a href="#">{{$qurban->name}}
                                    <span class="middle">x {{$qurban->quantity}}</span>
                                        <span class="last">{{"Rp " . number_format($qurban->price,0,',','.')}}</span>
                                    </a>
                                </li>
                                @endforeach
                            </ul>
                            <ul class="list list_2">
                                <li>
                                    <a href="#">Total Harga
                                    <span>{{"Rp " . number_format($total,0,',','.')}}</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="creat_account">
                                <input type="checkbox" id="f-option4" name="selector" />
                                <label for="f-option4">I’ve read and accept the </label>
                                <a href="#">terms & conditions*</a>
                            </div>
                            <a class="btn_3" href="javascript:{}"
                                                onclick="document.getElementById('checkout').submit();">Proses Pembayaran</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Checkout Area =================-->

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