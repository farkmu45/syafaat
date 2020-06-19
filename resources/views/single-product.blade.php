<!doctype html>
<html lang="zxx">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>Syafaat | {{$qurban->name}}</title>
  <link rel="icon" href="{{asset('img/favicon.png')}}">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
  <!-- animate CSS -->
  <link rel="stylesheet" href="{{asset('css/animate.css')}}">
  <!-- owl carousel CSS -->
  <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
  <link rel="stylesheet" href="{{asset('css/lightslider.min.css')}}">
  <!-- font awesome CSS -->
  <link rel="stylesheet" href="{{asset('css/all.css')}}">
  <!-- flaticon CSS -->
  <link rel="stylesheet" href="{{asset('css/flaticon.css')}}">
  <link rel="stylesheet" href="{{asset('css/themify-icons.css')}}">
  <!-- font awesome CSS -->
  <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
  <!-- style CSS -->
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
</head>

<body>
   
  @include('partials.navbar')
  <!--================End Home Banner Area =================-->

  <!--================Single Product Area =================-->
  <div class="product_image_area section_padding">
    <div class="container">
      <div class="row s_product_inner justify-content-between">
        <div class="col-lg-7 col-xl-7">
        <img src="{{asset($qurban->photo)}}" style="height: 600px; width: 90%; object-fit: scale-down;" />
        </div>
        <div class="col-lg-5 col-xl-4">
          <div class="s_product_text">
            <h3>{{$qurban->name}}</h3>
            <ul class="list">
              <li>
                <a class="active" href="#">
                  <span>Kategori</span> : {{$qurban->qurban->name}}</a>
              </li>
              <li>
                <a href="#">
                  <span>Berat</span> : {{$qurban->weight}} kg</a>
              </li>
              <li>
                <h5 style="margin-top: 200px; margin-bottom: 10px !important;">Harga</h5>
                <h1>{{"Rp " . number_format($qurban->price,0,',','.')}}</h1>
              </li>
            </ul>
              <form action="/qurban/{{$qurban->id}}" method="post">
            <div class="card_area d-flex justify-content-between align-items-center">
              <div class="product_count">
                <span class="inumber-decrement"> <i class="ti-minus"></i></span>
                <input class="input-number" name="quantity" type="text" value="1" min="0" max="10">
                <span class="number-increment"> <i class="ti-plus"></i></span>
              </div>
                @csrf
              <input type="hidden" name="name" value="{{$qurban->name}}">
              <input type="hidden" name="qurban_id" value="{{$qurban->id}}">
              <input type="hidden" name="qurban_price" value="{{$qurban->price}}">
              <input type="hidden" name="photo" value="{{$qurban->photo}}">
                <button class="btn_3">+ keranjang</button>
              </div>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!--================End Single Product Area =================-->

  <!--================Product Description Area =================-->
  <section class="product_description_area">
    <div class="container">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home"
            aria-selected="true">Deskripsi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile"
            aria-selected="false">Spesifikasi</a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
            {!!$qurban->description!!}
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
          <div class="table-responsive">
            <table class="table">
              <tbody>

                <tr>
                  <td>
                    <h5>Nama</h5>
                  </td>
                  <td>
                  <h5>{{$qurban->name}}</h5>
                  </td>
                </tr>

                <tr>
                  <td>
                    <h5>Jenis</h5>
                  </td>
                  <td>
                  <h5>{{$qurban->qurban->name}}</h5>
                  </td>
                </tr>

                <tr>
                  <td>
                    <h5>Berat</h5>
                  </td>
                  <td>
                  <h5>{{$qurban->weight}} kg</h5>
                  </td>
                </tr>

                <tr>
                  <td>
                    <h5>Harga per ekor</h5>
                  </td>
                  <td>
                  <h5>{{"Rp " . number_format($qurban->price,0,',','.')}}</h5>
                  </td>
                </tr>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================End Product Description Area =================-->

  <!-- product_list part start-->
  <section class="product_list best_seller">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="section_tittle text-center">
            <h2>Qurban Lainnya</h2>
          </div>
        </div>
      </div>
      <div class="row align-items-center justify-content-between">
        <div class="col-lg-12">
          <div class="best_product_slider owl-carousel">

            <div class="single_product_item">
              <img src="{{asset('img/product/product_5.png')}}" alt="">
              <div class="single_product_text">
                <h4>Quartz Belt Watch</h4>
                <h3>$150.00</h3>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- product_list part end-->


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
  <script src="{{asset('js/lightslider.min.js')}}"></script>
  <!-- swiper js -->
  <script src="{{asset('js/masonry.pkgd.js')}}"></script>
  <!-- particles js -->
  <script src="{{asset('js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('js/jquery.nice-select.min.js')}}"></script>
  <!-- slick js -->
  <script src="{{asset('js/slick.min.js')}}"></script>
  <script src="{{asset('js/swiper.jquery.js')}}"></script>
  <script src="{{asset('js/jquery.counterup.min.js')}}"></script>
  <script src="{{asset('js/waypoints.min.js')}}"></script>
  <script src="{{asset('js/contact.js')}}"></script>
  <script src="{{asset('js/jquery.ajaxchimp.min.js')}}"></script>
  <script src="{{asset('js/jquery.form.js')}}"></script>
  <script src="{{asset('js/jquery.validate.min.js')}}"></script>
  <script src="{{asset('js/mail-script.js')}}"></script>
  <script src="{{asset('js/stellar.js')}}"></script>
  <!-- custom js -->
  <script src="{{asset('js/theme.js')}}"></script>
  <script src="{{asset('js/custom.js')}}"></script>
</body>

</html>