<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Syafaat | Qurban</title>
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

    <!--================Category Product Area =================-->
    <section class="cat_product_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="left_sidebar_area">
                        <aside class="left_widgets p_filter_widgets">
                            <div class="l_w_title">
                                <h3>Jenis Qurban</h3>
                            </div>
                            <div class="widgets_inner">
                                <ul class="list">
                                    @foreach ($qurban as $qurban)
                                    <li>
                                        <form id="{{$qurban->id}}" action="/qurban" method="get">
                                            <input type="hidden" name="type" value="{{$qurban->id}}">
                                            <a href="javascript:{}"
                                                onclick="document.getElementById('{{$qurban->id}}').submit();"
                                                class="submit">{{$qurban->name}}</a>
                                        </form>
                                        <span>{{$qurban->items_count}}</span>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </aside>
                        {{-- 
                        <aside class="left_widgets p_filter_widgets">
                            <div class="l_w_title">
                                <h3>Color Filter</h3>
                            </div>
                            <div class="widgets_inner">
                                <ul class="list">
                                    <li>
                                        <a href="#">Black</a>
                                    </li>
                                    <li>
                                        <a href="#">Black Leather</a>
                                    </li>
                                    <li class="active">
                                        <a href="#">Black with red</a>
                                    </li>
                                    <li>
                                        <a href="#">Gold</a>
                                    </li>
                                    <li>
                                        <a href="#">Spacegrey</a>
                                    </li>
                                </ul>
                            </div>
                        </aside> --}}
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="product_top_bar d-flex justify-content-between align-items-center">
                                <div class="single_product_menu">
                                    <p><span>{{$list->count()}}</span> Qurban ditemukan</p>
                                </div>
                                <div class="single_product_menu d-flex">
                                    <h5>Urut : </h5>
                                    <select>
                                        <option data-display="Pilih">Urut Berdasarkan</option>
                                        <option value="1">Harga Tertinggi</option>
                                        <option value="2">Harga Terendah</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row align-items-center latest_product_inner">

                        @foreach ($list as $qurban)
                        <div class="col-lg-4 col-sm-6">
                            <div class="single_product_item">
                                <a href="/qurban/{{$qurban->id}}"><img src="{{asset($qurban->photo)}}" alt=""></a>
                                <div class="single_product_text">
                                    <h4>{{$qurban->name}}</h4>
                                    <h3>{{"Rp " . number_format($qurban->price,0,',','.')}}</h3>
                                <form action="/qurban/{{$qurban->id}}" id="qurban{{$qurban->id}}" method="post">
                                        @csrf
                                        <input type="hidden" name="name" value="{{$qurban->name}}">
                                        <input type="hidden" name="qurban_id" value="{{$qurban->id}}">
                                        <input type="hidden" name="quantity" value="1">
                                        <input type="hidden" name="qurban_price" value="{{$qurban->price}}">
                                        <input type="hidden" name="photo" value="{{$qurban->photo}}">
                                        <a href="javascript:{}"
                                                onclick="document.getElementById('qurban{{$qurban->id}}').submit()" class="add_cart">+ Keranjang</a>
                                    </form>
                                </div>
                            </div>
                        </div>
                        @endforeach

                        <div class="col-lg-12">
                            @include('pagination.default', ['paginator' => $list])
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================End Category Product Area =================-->

    @include('partials.footer')

    <!-- jquery plugins here-->
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
    <script>
        var window = window
        $("#price").on("submit", function (event) {
            event.preventDefault(); //prevent submission
            let formData = $(this).serialize(); //outputs firstname=blah&lastname=moreblah

            let fullUrl = "{{url()->full()}}";
            let queryPart = fullUrl.split("?")[1]; //here you have country=usa&state=ny

            let finalForm = queryPart + "&" + formData;
            window.location = 'qurban?' + finalForm;
        });

        $('#btn_price').on('click', function (event) {
            $("#price").submit()
        })
    </script>
</body>

</html>