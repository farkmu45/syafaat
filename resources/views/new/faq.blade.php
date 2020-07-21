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
            <div class="row mt-5">
                <div class="col-lg-12">
                    <h1 class="text-center">Frequently Asked Questions</h1>
                    <h3 class="text-center font-weight-light">FAQ</h3>
                    <h4 class="text-center text-primary">Tentang Syafaat</h4>
                </div>
                <div class="col-lg-12 mt-3">
                    <div class="accordion" id="accordionExample">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-primary text-left" type="button"
                                        data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        Bagaiman sistem berqurban?
                                    </button>
                                </h2>
                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    Masjid Asy syafaat menerima, menyalurkan, dan menjual hewan qurban
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-primary text-left collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        Apa kelebihan membeli hewan qurban di masjid asy syafaat?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    Kelebihan membeli hewan qurban di masjid asy syafaat: pakan hewan qurban bermutu,
                                    sehat,
                                    sesuai dengan timbangan, hewan qurban diambil dari peternak desa terdampak
                                    kristenisasi,
                                    Gratis biaya pengantaran dan biaya operasional serta akan disediakan display hewan
                                    qurban H-7.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingThree">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-primary text-left collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Kapan pelaksanaan penyembelihan qurban?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    Pelaksanaan penyembelihan qurban akan dilaksanakan insyaAllah tanggal 11 Dzulhijjah
                                    atau
                                    1 Agustus 2020 di Perum De Prima Tunggulwulung. Jika ada perubahan tanggal
                                    pelaksanaan
                                    akan diinfokan lebih lanjut.
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-primary text-left collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseFour" aria-expanded="false"
                                        aria-controls="collapseFour">
                                        Bagaimana penyaluran daging qurban?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    Hewan qurban akan disalurkan kepada para penerima manfaat area Tunggulwulung kota
                                    Malang
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFive">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-primary text-left collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseFive" aria-expanded="false"
                                        aria-controls="collapseFive">
                                        Bagaimana alur pembeliannya?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    Alur pembelian hewan qurban dapat dilakukan melalui : <br>
                                    a. website <a target="_blank" href="https://safaat.com">Safaat.com</a> <br>
                                    b. menghubungi call center Yayasan Asy syafaat WA 0813 1100 0300 atau datang ke
                                    kantor
                                    Yayasan Asy syafaat di Masjid Peradaban Asy syafaat, Perum De Prima Tunggulwulung,
                                    Malang
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingSix">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-primary text-left collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseSix" aria-expanded="false"
                                        aria-controls="collapseSix">
                                        Berapa harga hewan qurban?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseSix" class="collapse" aria-labelledby="headingSix"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    Ada beberapa jenis hewan qurban yaitu : <br>
                                    <b>a. Kambing</b> <br>
                                    - Bobot ± 17 Kg seharga 1.200.000 <br>
                                    - Bobot ± 20 Kg seharga 1.800.000 <br>
                                    - Bobot ± 27-30 Kg seharga 2.050.000 <br>
                                    - Bobot ± 31-35 Kg seharga 2.700.000 <br>
                                    - Bobot ±40 Kg seharga 3.000.000 <br>
                                    - Bobot ±50 Kg seharga 3.850.000 (tipe premium) <br>

                                    <b>b. Sapi</b> <br>
                                    - Bobot ± 250-350 Kg seharga 17.850.000 <br>
                                    - Bobot ±350-450 Kg seharga 23.625.000 <br>
                                    - Bobot 450-600 Kg seharga 28.875.000 <br>

                                    <b>c. Domba</b> <br>
                                    - Bobot ±30 Kg seharga 2.250.000 <br>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingSeven">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-primary text-left collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false"
                                        aria-controls="collapseSeven">
                                        Bagaimana kondisi hewan qurban?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapseSeven" class="collapse" aria-labelledby="headingSeven"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    Kondisi hewan qurban telah sesuai syariat yaitu mencapai usia yang telah ditetapkan
                                    syariat, sehat, tidak cacat, dan sesuai timbangan
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="heading8">
                                <h2 class="mb-0">
                                    <button class="btn btn-link btn-block text-primary text-left collapsed" type="button"
                                        data-toggle="collapse" data-target="#collapse8" aria-expanded="false"
                                        aria-controls="collapse8">
                                        Apakah pequrban bisa mendatangi lokasi penyembelihan qurbannya?
                                    </button>
                                </h2>
                            </div>
                            <div id="collapse8" class="collapse" aria-labelledby="heading8"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    Lokasi penyembelihan insyaAllah akan dilaksanakan di perum De Prima Tunggulwulung
                                    dengan
                                    mempehatikan protokol kesehatan yang dianjurkan.
                                </div>
                            </div>
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