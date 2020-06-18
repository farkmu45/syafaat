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
                    <p class="mb-5">Silahkan ketik kode pesanan untuk mengetahui lebih lanjut tentang pesanan qurban anda</p>
                    <div class="confirmation_title mb-5">
                        <form action="" method="post">
                            @csrf
                            <input type="text" class="form-control" name="" id="" placeholder="Kode Pesanan">
                        </form>
                    </div>
                </div>
                <div class="col-lg-6 col-lx-4">
                    <div class="single_confirmation_details">
                        <h4>order info</h4>
                        <ul>
                            <li>
                                <p>order number</p><span>: 60235</span>
                            </li>
                            <li>
                                <p>data</p><span>: Oct 03, 2017</span>
                            </li>
                            <li>
                                <p>total</p><span>: USD 2210</span>
                            </li>
                            <li>
                                <p>mayment methord</p><span>: Check payments</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-lx-4">
                    <div class="single_confirmation_details">
                        <h4>Billing Address</h4>
                        <ul>
                            <li>
                                <p>Street</p><span>: 56/8</span>
                            </li>
                            <li>
                                <p>city</p><span>: Los Angeles</span>
                            </li>
                            <li>
                                <p>country</p><span>: United States</span>
                            </li>
                            <li>
                                <p>postcode</p><span>: 36952</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-lx-4">
                    <div class="single_confirmation_details">
                        <h4>shipping Address</h4>
                        <ul>
                            <li>
                                <p>Street</p><span>: 56/8</span>
                            </li>
                            <li>
                                <p>city</p><span>: Los Angeles</span>
                            </li>
                            <li>
                                <p>country</p><span>: United States</span>
                            </li>
                            <li>
                                <p>postcode</p><span>: 36952</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="order_details_iner">
                        <h3>Order Details</h3>
                        <table class="table table-borderless">
                            <thead>
                                <tr>
                                    <th scope="col" colspan="2">Product</th>
                                    <th scope="col">Quantity</th>
                                    <th scope="col">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th colspan="2"><span>Pixelstore fresh Blackberry</span></th>
                                    <th>x02</th>
                                    <th> <span>$720.00</span></th>
                                </tr>
                                <tr>
                                    <th colspan="2"><span>Pixelstore fresh Blackberry</span></th>
                                    <th>x02</th>
                                    <th> <span>$720.00</span></th>
                                </tr>
                                <tr>
                                    <th colspan="2"><span>Pixelstore fresh Blackberry</span></th>
                                    <th>x02</th>
                                    <th> <span>$720.00</span></th>
                                </tr>
                                <tr>
                                    <th colspan="3">Subtotal</th>
                                    <th> <span>$2160.00</span></th>
                                </tr>
                                <tr>
                                    <th colspan="3">shipping</th>
                                    <th><span>flat rate: $50.00</span></th>
                                </tr>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th scope="col" colspan="3">Quantity</th>
                                    <th scope="col">Total</th>
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
</body>

</html>

</html>

</html>

</html>

</html>

</html>