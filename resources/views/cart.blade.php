<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Syafaat | Keranjang</title>
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

    <!--================Cart Area =================-->
    <section class="cart_area padding_top">
        <div class="container">
            <div class="cart_inner">
                @if (Cookie::get('qurban') == null)
                <h2>Anda belum menambahkan item ke keranjang</h2>
                @else
                
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                               
                                <th scope="col">Qurban</th>
                                <th scope="col">Harga</th>
                                <th scope="col">Jumlah</th>
                                <th scope="col">Atas Nama<b> *Wajib diisi</b></th>
                                <th scope="col">Total</th>
                                <th scope="col">Opsi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <form action="/cart/" method="post" id="edit">
                                    @csrf
                                    @method('PATCH')
                                    <input type="hidden" id="checkout" name="checkout" value="false">
                            @foreach ($data as $key => $qurban)
                            <tr>
                                <td>
                                    <div class="media">
                                        <div class="d-flex">
                                            <img src="{{asset($qurban->photo)}}"
                                                style="width:146px; height:99px; object-fit:scale-down" alt="" />
                                        </div>
                                        <div class="media-body">
                                            <p>{{$qurban->name}}</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <h5>{{"Rp " . number_format($qurban->price,0,',','.')}}</h5>
                                </td>
                                
                                    <td>
                                        <div class="product_count">
                                            <input class="input-number" name="quantity[]" required type="number" value="{{$qurban->quantity}}">
                                        </div>
                                    </td>
                                    <td>
                                    <input class="form-control" type="text" required name="behalf_of[]" required value="{{$qurban->behalf_of}}" placeholder="" id="">
                                    </td>
                                
                                <td>
                                    <h5>{{"Rp " . number_format($qurban->total_price,0,',','.')}}</h5>
                                </td>
                                <td>
                                <a href="/cart?order_id={{$key}}"><i class="ti-trash"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </form>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <h5>Harga Total</h5>
                                </td>
                                <td>
                                    <h5>{{"Rp " . number_format($total,0,',','.')}}</h5>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                    <div class="checkout_btn_inner float-right">
                        <a class="btn_1" href="javascript:{}" onclick="document.getElementById('edit').submit(); ">Perbarui Keranjang</a>
                        <a class=" btn_1" href="/qurban">Lanjut qurban</a>
                        <a class="btn_1 checkout_btn_1" href="javascript:{}" onclick="document.getElementById('checkout').setAttribute('value', 'true');document.getElementById('edit').submit()">Proses ke pembayaran</a>
                    </div>
                </div>
                 @endif
            </div>
    </section>
    <!--================End Cart Area =================-->

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