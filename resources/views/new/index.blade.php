<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
    integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

  <link href="https://fonts.googleapis.com/css2?family=El+Messiri:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link
    href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
  <link rel="stylesheet" href="{{asset('new/css/all.min.css')}}">

  <link rel="stylesheet" href="{{asset('new/css/style.css')}}">

  <title>Syafaat</title>
</head>

<body>

  @include('new.layouts.navbar')

  <div class="jumbotron jumbotron-fluid header">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="text">
            <div class="heading">
              <p class="hastag">#IndonesiaBerqurban</p>
              <h1 class="title">Qurban</h1>
              <span class="subtitle">Menerima dan menyalurkan hewan qurban</span>
            </div>
            <p class="desc">“Tidak ada suatu amalan pun yang dilakukan oleh manusia pada hari raya qurban yang lebih
              dicintai Allah
              SWT
              dari menyembelih hewan qurban”.</p>
            <p class="desc"><b>HR. Tirmidzi</b></p>
          </div>
        </div>
        <div class="col-lg-4 text-center">
          <img src="{{asset('new/img/header.png')}}" class="img-fluid" alt="Responsive image">
        </div>
      </div>
    </div>
  </div>

  <div class="jumbotron jumbotron-fluid qurban bg-white" id="daftarharga">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="title">Daftar Harga hewan</h2>
        </div>
        <div class="col-lg-12 col-sm-12 text-center mt-3">
          <button type="button" class="btn btn-primary">Qurban</button>
          <button type="button" class="btn btn-light mt-2">Aqiqah</button>
        </div>
      </div>

      <div class="row mt-4">
        @foreach ($qurban as $q)
        <div class="col-lg-4">
            <a href="/baru/{{$q->name}}" style="color: black; text-decoration: none;">
                <div class="card mt-3">
                    <img src="{{asset($q->photo)}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <div class="row justify-content-between">
                        <div class="col-lg-6 col-sm-6">
                          <h5 class="small">{{$q->name}}</h5>
                          <p class="text-muted">Berat : {{$q->weight}}</p>
                        </div>
                        <div class="col-lg-6 col-sm-6 text-right">
                          <h5 class="small">{{"Rp " . number_format($q->price,0,',','.')}}</h5>
                          <p class="text-muted">Min. Harga</p>
                        </div>
                      </div>
                    </div>
                </div>
            </a>
        </div>
        @endforeach
      </div>

      <div class="row text-center mt-5">
        <div class="col-lg-12">
          <a href="/qurban" class="btn btn-success text-center">Lihat Produk Lainnya</a>
        </div>
      </div>
    </div>
  </div>

  <div class="jumbotron jumbotron-fluid video bg-white" id="kelebihan">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="title">Kelebihan Qurban di Masjid Asy Syafaat</h2>
        </div>
      </div>

      <div class="row mt-5">
        <div class="col-lg-12">
          <iframe width="100%" height="598px" style="border-radius: 30px;"
            src="https://www.youtube.com/embed/H6ZentxPwtc" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>

  <div class="jumbotron jumbotron-fluid alasan bg-white" id="alasan">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="title">Mengapa memilih hewan Qurban di Syafaat</h2>
        </div>
      </div>

      <div class="row mt-1">
        <div class="col-lg-4">
          <div class="card text-center mt-4">
            <img src="{{asset('new/img/icon1.png')}}" alt="">
            <div class="card-body">
              <h5 class="card-title text-white">Pakan hewan bermutu</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card text-center mt-4">
            <img src="{{asset('new/img/icon2.png')}}" alt="">
            <div class="card-body">
              <h5 class="card-title text-white">Kondisi hewan sesuai syariat
                (sehat, cukup usia, tidak cacat
                dan sesui timbangan)</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card text-center mt-4">
            <img src="{{asset('new/img/icon3.png')}}" alt="">
            <div class="card-body">
              <h5 class="card-title text-white">Gratis biaya pengantaran
                dan biaya operasional</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card text-center mt-4">
            <img src="{{asset('new/img/icon4.png')}}" alt="">
            <div class="card-body">
              <h5 class="card-title text-white">Hewan qurban sudah tersedia
                H-7 hari raya idul adha</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card text-center mt-4">
            <img src="{{asset('new/img/icon5.png')}}" alt="">
            <div class="card-body">
              <h5 class="card-title text-white">Terdapat banyak pilihan hewan
                (Kambing, Sapi dan Domba)</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="card text-center mt-4">
            <img src="{{asset('new/img/icon6.png')}}" alt="">
            <div class="card-body">
              <h5 class="card-title text-white">Harga terjangkau mulai 1-jutaan</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="jumbotron jumbotron-fluid blog bg-white" id="blog">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="title">Berita Terbaru</h2>
          <p>Informasi terbaru dari Syafaat Indonesia</p>
        </div>
      </div>

      <div class="row">
        <div class="col-lg-4">
          <div class="card mt-3">
            <div class="image">
              <img src="{{asset('new/img/blog.png')}}" alt="">
              <div class="thum">
                <p class="date">12</p>
                <p class="moon">Juni</p>
              </div>
            </div>
            <div class="card-body text-center">
              <h5 class="card-title">Budayakan membaca</h5>
              <p class="card-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                galley of type and scrambled it to make a type specimen book […]</p>
              <a href="#" class="btn btn-success">Baca Selengkapnya</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @include('new.layouts.footer')

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js"></script>
</body>

</html>