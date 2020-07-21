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

    @if (Cookie::get('qurban') == null)
    <div class="jumbotron jumbotron-fluid cart bg-light mt-5 mb-0" style="margin-bottom: 50px !important;">
        <div class="container">
            <div class="row justify-content-between mt-5">
                <div class="col-lg-12 col-md-12">
                    <div class="card" style="overflow-x: scroll !important;">
                        <div class="card-body">
                            <table class="table">
                                <thead style="border: none !important;">
                                    <tr>
                                        <th scope="col">Foto</th>
                                        <th scope="col">Qurban</th>
                                        <th scope="col">Harga</th>
                                        <th scope="col">Kuantitas</th>
                                        <th scope="col">Atas Nama</th>
                                        <th scope="col">Opsi</th>
                                    </tr>
                                </thead>
                            </table>
                            <h5 class="text-center text-danger">Anda belum menambahkan item ke keranjang</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @else
    <form id="checkout" action="/detail" method="post" novalidate="novalidate">
        @csrf
        <div class="jumbotron jumbotron-fluid cart bg-light mt-5 mb-0">
            <div class="container">
                <div class="row justify-content-between mt-5">
                    <div class="col-lg-12 col-md-12">
                        <div class="card" style="overflow-x: scroll !important;">
                            <div class="card-body">
                                <table class="table">
                                    <thead style="border: none !important;">
                                        <tr>
                                            <th scope="col">Foto</th>
                                            <th scope="col">Qurban</th>
                                            <th scope="col">Harga</th>
                                            <th scope="col">Kuantitas</th>
                                            <th scope="col">Atas Nama</th>
                                            <th scope="col">Opsi</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tmpdata">
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
    
                <div class="row mt-5 mb-5">
                    <div class="col-lg-6">
                        <div class="card mt-3">
                            <div class="card-body">
                                <p class="text-center font-weight-bold">LENGKAPI DATA DIRI ANDA</p>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="username" placeholder="Nama Lengkap">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="phone" placeholder="No. Telepon">
                                </div>
                                <div class="input-group mb-3">
                                    <select class="custom-select" name="payment_id">
                                        <option selected>Metode Pembayaran</option>
                                        @foreach ($payments as $payment)
                                            <option value="{{$payment->id}}">{{$payment->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card mt-3">
                            <div class="card-body">
                                <p class="text-center font-weight-bold text-uppercase">Rincian Transaksi Anda</p>
                                <table class="table justify-content-between">
                                    <thead style="border: none !important;">
                                        <tr>
                                            <th scope="col">Item</th>
                                            <th scope="col">Kuantitas</th>
                                            <th scope="col">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tempatdata">
                                        
                                    </tbody>
                                </table>
                                <button type="submit" class="btn btn-success btn-2 mt-2 button">Proses Pembayaran</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @endif

    @include('new.layouts.footer')
    <script src="{{asset('new/js/jquery-3.5.1.min.js')}}"></script>

    <script>
        window.addEventListener("load", function(event){
            loadData();
        })
        var data = <?php echo json_encode($data ?? ''); ?>;
        console.log("data",data);
        //  data = JSON.parse(data);
        function loadData() {
            var html='';
            var rincian = '';
            var total=0;
            data.forEach((element, index) => {
                html+="<tr><td><img src='https://safaat.com//"+ element.photo +"' width='80'></td><td>"+element.name+"</td>";
                html+="<td>"+formatRupiah(element.price.toString())+"</td>";
                html+="<td><div class='def-number-input number-input safari_only'><button onclick='minus("+ index +")' class='minus' type='button'></button><input type='hidden' name='qurban_id[]' value='"+element.qurban_id+"' /><input type='number' name='qty[]' value='"+element.quantity.toString()+"' />";
                html+="<button onclick='tambah("+ index +")' class='plus' type='button'></button></div></td>";
                html+="<td><input type='text' class='input' name='nama_pembeli[]' required placeholder='Nama Pembeli'></td>";
                html+="<td><a href='#' onclick='hapus("+index+")' class='text-danger' style='font-size: 20px !important;'><i class='fa fa-trash'></i></a></tr>";
                total += element.total_price; 

                rincian+= "<tr><td>"+ element.name +"</td><td>"+ element.quantity +"</td>" +
                          "<td>" + formatRupiah(element.total_price.toString()) +"</td></tr>";
            });
            rincian+= "<tr><td>Total</td><td></td><td class='text-primary font-weight-bold text-center'>"+ formatRupiah(total.toString()) +"</td></tr>";
            document.getElementById("tmpdata").innerHTML = html;
            document.getElementById("tempatdata").innerHTML = rincian;
            console.log("data", data);
        }

        function formatRupiah(angka){
			var number_string = angka.replace(/[^,\d]/g, '').toString(),
			split   		= number_string.split(','),
			sisa     		= split[0].length % 3,
			rupiah     		= split[0].substr(0, sisa),
			ribuan     		= split[0].substr(sisa).match(/\d{3}/gi);

			// tambahkan titik jika yang di input sudah menjadi angka ribuan
			if(ribuan){
				separator = sisa ? '.' : '';
				rupiah += separator + ribuan.join('.');
			}

			rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
			return "Rp " + rupiah;
        }
        
        function tambah(urutan) {
            var tmp = [];
            data.forEach((element, index) => {
                if(urutan == index) {
                    element['quantity'] = parseInt(element.quantity) + 1;
                    element['total_price'] = parseInt(element.quantity) * element.price;
                    tmp.push(element);
                } else {
                    tmp.push(element)
                }
            });
            data = tmp;
            loadData();
            postcart();
        }

        
        function customQty(isi, urutan) {
            console.log(isi);
            if(parseInt(isi) >= 1){

                var tmp = [];
            data.forEach((element, index) => {
                if(urutan == index) {
                    element['quantity'] = parseInt(element.quantity) + 1;
                    element['total_price'] = parseInt(element.quantity) * element.price;
                    tmp.push(element);
                } else {
                    tmp.push(element)
                }
            });
            data = tmp;
            loadData();
            postcart();
            }
        }

        function minus(urutan) {
            if((parseInt(data[urutan]['quantity']) - 1) >= 1){
                var tmp = [];
                data.forEach((element, index) => {
                    if(urutan == index) {
                        element['quantity'] = parseInt(element.quantity) - 1;
                        element['total_price'] = parseInt(element.quantity) * element.price;
                        tmp.push(element);
                    } else {
                        tmp.push(element)
                    }
                });
                loadData();
            }
        }
        function hapus(urutan) {
            data.splice(urutan, 1);
            loadData();
        }

        function postcart() {
            $.ajax({
                type: "POST",
                url: '/api/updatecart',
                data: {
                    data: data,
                    _token: '{{ csrf_token() }}'
                }
            });
        }
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/js/all.min.js"></script>
    
</body>

</html>