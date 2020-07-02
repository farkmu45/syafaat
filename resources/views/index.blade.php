<!doctype html>
<html lang="zxx">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Syafaat</title>
    <link rel="icon" href="{{asset('img/favicon.png')}}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <!-- animate CSS -->
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <!-- flaticon CSS -->
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <!-- swiper CSS -->
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>

    @include('partials.navbar')

    <!-- banner part start-->
    <section class="banner_part">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="banner_slider owl-carousel">
                        <div class="single_banner_slider">
                            <div class="row">
                                <div class="col-lg-5 col-md-8">
                                    <div class="banner_text">
                                        <div class="banner_text_iner">
                                            <h1>Qurban Terbaik Untuk Anda</h1>
                                            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Facilis magnam est reiciendis dolores magni, distinctio iure unde eveniet. Quos, quis consectetur! A incidunt aspernatur mollitia exercitationem odit ipsum quidem blanditiis?</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner_img d-none d-lg-block">
                                    <img src="{{asset('cow.png')}}" style="width: 600px;" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="slider-counter"></div> --}}
                </div>
            </div>
        </div>
    </section>
    <!-- banner part start-->

    <section class="feature_part padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_tittle text-center">
                        <h2>Faq? safaat.com</h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                          <div class="card-header" id="headingOne">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Bagaiman sistem berqurban?
                              </button>
                            </h2>
                          </div>
                      
                          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                            <div class="card-body">
                                Masjid Asy syafaat menerima, menyalurkan, dan menjual hewan qurban
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingTwo">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Apa kelebihan membeli hewan qurban di masjid asy syafaat?
                              </button>
                            </h2>
                          </div>
                          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                            <div class="card-body">
                                Kelebihan membeli hewan qurban di masjid asy syafaat: pakan hewan qurban bermutu, sehat, sesuai dengan timbangan, hewan qurban diambil dari peternak desa terdampak kristenisasi, Gratis biaya pengantaran dan biaya operasional serta akan disediakan display hewan qurban H-7.
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingThree">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Kapan pelaksanaan penyembelihan qurban?
                              </button>
                            </h2>
                          </div>
                          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                            <div class="card-body">
                                Pelaksanaan penyembelihan qurban akan dilaksanakan insyaAllah tanggal 11 Dzulhijjah atau 1 Agustus 2020 di Perum De Prima Tunggulwulung. Jika ada perubahan tanggal pelaksanaan akan diinfokan lebih lanjut.
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingFour">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Bagaimana penyaluran daging qurban?
                              </button>
                            </h2>
                          </div>
                          <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordionExample">
                            <div class="card-body">
                                Hewan qurban akan disalurkan kepada para penerima manfaat area Tunggulwulung kota Malang
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingFive">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Bagaimana alur pembeliannya?
                              </button>
                            </h2>
                          </div>
                          <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordionExample">
                            <div class="card-body">
                                Alur pembelian hewan qurban dapat dilakukan melalui : <br>
                                a. website <a target="_blank" href="https://safaat.com">Safaat.com</a> <br>
                                b. menghubungi call center Yayasan Asy syafaat WA 0813 1100 0300 atau datang ke kantor Yayasan Asy syafaat di Masjid Peradaban Asy syafaat, Perum De Prima Tunggulwulung, Malang
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingSix">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Berapa harga hewan qurban?
                              </button>
                            </h2>
                          </div>
                          <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordionExample">
                            <div class="card-body">
                                Ada beberapa jenis hewan qurban yaitu : <br>
                                <b>a. Kambing</b> <br>
                                -	Bobot ± 17 Kg seharga 1.200.000 <br>
                                -	Bobot   ± 20 Kg seharga 1.800.000 <br>
                                -	Bobot  ± 27-30 Kg seharga 2.050.000 <br>
                                -	Bobot  ± 31-35 Kg seharga 2.700.000 <br>
                                -	Bobot  ±40 Kg seharga 3.000.000 <br>
                                -	Bobot  ±50 Kg seharga 3.850.000 (tipe premium) <br>
                                
                                <b>b. Sapi</b> <br>
                                -	Bobot  ± 250-350 Kg seharga 17.850.000 <br>
                                -	Bobot  ±350-450 Kg seharga 23.625.000 <br>
                                -	Bobot 450-600 Kg seharga 28.875.000 <br>

                                <b>c. Domba</b> <br>
                                -   Bobot  ±30 Kg seharga 2.250.000 <br>
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="headingSeven">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                Bagaimana kondisi hewan qurban?
                              </button>
                            </h2>
                          </div>
                          <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven" data-parent="#accordionExample">
                            <div class="card-body">
                                Kondisi hewan qurban telah sesuai syariat yaitu mencapai usia yang telah ditetapkan syariat, sehat, tidak cacat, dan sesuai timbangan
                            </div>
                          </div>
                        </div>
                        <div class="card">
                          <div class="card-header" id="heading8">
                            <h2 class="mb-0">
                              <button class="btn btn-link btn-block text-left collapsed" type="button" data-toggle="collapse" data-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
                                Apakah pequrban bisa mendatangi lokasi penyembelihan qurbannya?
                              </button>
                            </h2>
                          </div>
                          <div id="collapse8" class="collapse" aria-labelledby="heading8" data-parent="#accordionExample">
                            <div class="card-body">
                                Lokasi penyembelihan insyaAllah akan dilaksanakan di perum De Prima Tunggulwulung dengan mempehatikan protokol kesehatan yang dianjurkan.
                            </div>
                          </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    

    <!-- feature_part start-->
    <section class="feature_part padding_top">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section_tittle text-center">
                        <h2>Hewan Qurban Terbaik</h2>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-4 col-sm-12">
                    <div class="single_feature_post_text">
                        <p>Pas untuk banyak orang</p>
                        <h3>Sapi</h3>
                        <a href="/qurban?type=1" class="feature_btn">Cari Ini <i class="fas fa-play"></i></a>
                        <img src="{{asset('cow.png')}}" style="height: 250px;">
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12">
                    <div class="single_feature_post_text">
                        <p>Harga murah, daging medium</p>
                        <h3>Kambing</h3>
                        <a href="/qurban?type=2" class="feature_btn">Cari ini <i class="fas fa-play"></i></a>
                        <img src="{{asset('sheep.png')}}" style="height: 250px;">
                    </div>
                </div>
                {{-- <div class="col-lg-5 col-sm-6">
                    <div class="single_feature_post_text">
                        <p>Daging versi jumbo</p>
                        <h3>Unta</h3>
                        <a href="/qurban?type=3" class="feature_btn">Cari Ini <i class="fas fa-play"></i></a>
                        <img src="{{asset('camel.png')}}" style="height: 250px;">
                    </div>
                </div> --}}
                <div class="col-lg-4 col-sm-12">
                    <div class="single_feature_post_text">
                        <p>Versi hemat</p>
                        <h3>Domba</h3>
                        <a href="/qurban?type=3" class="feature_btn">Cari Ini <i class="fas fa-play"></i></a>
                        <img src="{{asset('sheep1.png')}}" style="height: 250px;">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- upcoming_event part start-->

    <!-- product_list part start-->
    <section class="product_list best_seller section_padding">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section_tittle text-center">
                        <h2>Daftar Harga Hewan Qurban</h2>
                    </div>
                </div>
            </div>
        <div class="row align-items-center justify-content-between">
        <div class="col-lg-12">
          <div class="best_product_slider owl-carousel">
            @foreach ($list as $qurban)      
            <div class="single_product_item">
              <img src="{{asset($qurban->photo)}} " alt="" style="height: 190px; width:100%; object-fit:cover">
              <div class="single_product_text">
              <h4>{{$qurban->name}}</h4>
                <h3>{{"Rp " . number_format($qurban->price,0,',','.')}}</h3>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
        </div>
    </section>

    <!-- awesome_shop start-->
    <section class="our_offer section_padding">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6 col-md-6">
                    <div class="offer_img">
                        <img src="{{asset('qurban.png')}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="offer_text">
                        <h2>Kami Pastikan Qurban Anda Barokah</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('partials.footer')

    <!-- jquery plugins here-->
    <script src="{{asset('js/jquery-1.12.1.min.js')}}"></script>
    <!-- popper js -->
    <script src="{{asset('js/popper.min.js')}}"></script>
    <!-- bootstrap js -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- particles js -->
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
    <script>
          //single banner slider
  $('.banner_slider').on('initialized.owl.carousel changed.owl.carousel', function (e) {
    function pad2(number) {
      return (number < 10 ? '0' : '') + number
    }

    var carousel = e.relatedTarget;
    $('.slider-counter').text(pad2(carousel.current()));

  }).owlCarousel({
    items: 1,
    loop: true,
    dots: false,
    autoplay: true,
    autoplayHoverPause: true,
    autoplayTimeout: 5000,
    nav: true,
    navText: ["sebelumnya", "selanjutnya"],
    smartSpeed: 1000,
    responsive: {
      0: {
        nav: false
      },
      600: {
        nav: false
      },
      768: {
        nav: true
      }
    }
  });

   var best_product_slider = $('.best_product_slider');
    best_product_slider.owlCarousel({
      items: 4,
      loop: true,
      dots: false,
      autoplay: true,
      autoplayHoverPause: true,
      autoplayTimeout: 3000,
      nav: true,
      navText: ["sebelumnya", "selanjutnya"],
      responsive: {
        0: {
          margin: 15,
          items: 1,
          nav: false
        },
        576: {
          margin: 15,
          items: 2,
          nav: false
        },
        768: {
          margin: 30,
          items: 3,
          nav: true
        },
        991: {
          margin: 30,
          items: 4,
          nav: true
        }
      }
    });
    </script>
</body>

</html>