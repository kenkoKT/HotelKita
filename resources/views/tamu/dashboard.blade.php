@extends('layouts.app')

@include('partials.navbary')

@section('content')
    <!doctype html>
    <html lang="en">

    <head>

        <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/carousel/">



        <!-- Bootstrap core CSS -->
        <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

        <style>
            /* body {
          padding-top: 3rem;
          padding-bottom: 3rem;
          color: #5a5a5a;
        } */


            /* CUSTOMIZE THE CAROUSEL
        -------------------------------------------------- */

            /* Carousel base class */
            .carousel {
                margin-bottom: auto;
            }

            /* Since positioning the image, we need to help out the caption */
            .carousel-caption {
                bottom: 3rem;
                z-index: 10;
            }

            /* Declare heights because of positioning of img element */
            .carousel-item {
                height: 35rem;
            }

            .carousel-item>img {
                position: absolute;
                top: 0;
                left: 0;
                min-width: 100%;
                height: 35rem;
            }

            .bd-placeholder-img {
                font-size: 1.5rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }

        </style>


        <!-- Custom styles for this template -->
        <link href="carousel.css" rel="stylesheet">
    </head>

    <body>

        <main>

            <img src="/img/hotel2.jpg" alt="" style="width:100%; height:607px;">
<main class="px-3" >
        <div class="container">
            <div class="carousel-caption text-start">
                <h1>Kenzo Empire  Hotel</h1>
                <p>Hotelnya Para Humanoid (Pancen Oye)</p>
            </div>
        </div>
  </main>

            <hr class="featurette-divider">

            <div class="container marketing">

                <form action="{{ route('datareservasi.store') }}" method="post">
                    @csrf
                    <div class="row g-2">
                        <div class="col-md-4 py-2">
                            <div class="form-floating">
                                <input type="date" name="tgl_checkin" class="form-control" id="tgl_checkin" value="">
                                <label for="floatingInputGrid">Tanggal Check In</label>
                            </div>
                        </div>
                        <div class="col-md-4 py-2">
                            <div class="form-floating">
                                <input type="date" name="tgl_checkout" class="form-control" id="tgl_checkout" value="">
                                <label for="floatingInputGrid">Tanggal Check Out</label>
                            </div>
                        </div>
                        <div class="col-md-4 py-2">
                            <div class="form-floating">
                                <input type="number" name="jumlah_kamar" class="form-control" id="jumlah_kamar" value=""
                                    required="required">
                                <label for="floatingInputGrid">Jumlah Kamar</label>
                            </div>
                        </div>
                        <div class="col-md-2 py-3">
                            <div class="form-floating">
                                <button style="width : 680%" class="btn btn-primary" type="button" data-toggle="collapse"
                                    data-target="#mycollapse" aria-expanded="false" aria-controls="#mycollapse">
                                    Pesan
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="collapse" id="mycollapse">
                        </br>
                        </br>
                        <h3>Form Pemesanan Kamar</h3>
                        </br>
                    @foreach ( $users as $u)
                        <input type="hidden" name="id" value="{{ $u->id }}">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Pemesan</label>
                            <input name="nama_pemesanan" type="text" class="form-control" id="nama_pemesan"
                                placeholder="Nama Pemesanan" value="{{ $u->name }}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                placeholder="Enter email" value="{{ $u->email }}">
                        </div>
                    @endforeach
                        <div class="form-group">
                            <label for="exampleInputEmail1">No Handphone</label>
                            <input name="no_hp" type="number" class="form-control" id="no_hp" placeholder="No Handphone">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Tamu</label>
                            <input name="nama_tamu" type="text" class="form-control" id="nama_tamu"
                                placeholder="Nama Tamu">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Tipe Kamar</label>
                            <select name="tipe_kamar" id="tipe_kamar" class="form-control" id="exampleFormControlSelect1">
                            @foreach ( $kamar as $k)
                            <option value="{{ $k->tipe_kamar }}">Kamar {{ $k->tipe_kamar }} Yang tersedia -> {{ $k->jumlah_kamar }}</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <a href="tamu/bukti_pemesanan"><button type="submit" class="btn btn-primary"> Konfirmasi
                                    Pemasanan</button></a>
                        </div>
                    </div>
                </form>
                <!-- START THE FEATURETTES -->

                <hr class="featurette-divider">
                </br>
                </br>

                <div class="container px-4 " id="custom-cards">
                    <h2 class="pb-2 border-bottom">Tentang Kami </h2>

                    <p>
                        Hotel berasal dari kata hostel, konon diambil dari bahasa Prancis kuno. Bangunan publik ini sudah
                        disebut-sebut sejak akhir abad ke-17. Maknanya kira-kira, "tempat penampungan buat pendatang" atau
                        bisa juga "bangunan penyedia pondokan dan makanan untuk umum".</p>
                    <p>Hotel Kami Mengusung Tema Sosial Yang Mengharapakan Bapak dan Ibu" yang Disini Tetap Peduli Sekitar
                        dan Sesama</p>

                </div>

                <hr class="featurette-divider">
                </br>
                </br>

                <hr class="featurette-divider">
                <!-- /END THE FEATURETTES -->

            </div><!-- /.container -->


            <!-- FOOTER -->
            <footer class="container">
                <button class="btn-btn-lg btn-primary float-end"><a class="text-white" href="#">Back to top</a></button>
                <p>&copy; 2022 Company Kenzo Empire &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
            </footer>
        </main>


        <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>


    </body>

    </html>


    {{-- Akhir Jumbotron --}}
@endsection
