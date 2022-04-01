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

            <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                        aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>


                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="bd-placeholder-img" width="800px" height="400px" src="/img/hotel.jpg" aria-hidden="true"
                            preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="800px" height="100%" fill="#777" />
                        </img>

                        <div class="container">
                            <div class="carousel-caption text-start">
                                <h1>Empire Kenzo Hotel</h1>
                                <p>Hotelnya Para Humanoid (Pancen Oye)</p>
                                <p><a class="btn btn-lg btn-primary" href="#">Pesan Sekarang</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="bd-placeholder-img" width="800px" height="400px" src="/img/hotel1.jpg"
                            aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#777" />
                        </img>

                    </div>
                    <div class="carousel-item">
                        <img class="bd-placeholder-img" width="800px" height="400px" src="/img/hotel2.jpg"
                            aria-hidden="true" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <rect width="100%" height="100%" fill="#777" />
                        </img>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

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
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nama Pemesan</label>
                            <input name="nama_pemesanan" type="text" class="form-control" id="nama_pemesan"
                                placeholder="Nama Pemesanan">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input name="email" type="email" class="form-control" id="email" aria-describedby="emailHelp"
                                placeholder="Enter email">
                        </div>
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
                                <option value="deluxe_room">Deluxe Room</option>
                                <option value="superior_room">Superior Room</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary"><a> Konfirmasi
                                    Pemasanan</a></button>
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

                <div class="container px-4 " id="custom-cards">
                    <h2 class="pb-2 border-bottom">Kamar Tersedia Beserta Fasilitas</h2>
                    <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-4">
                        <div class="col">
                            <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                                style="background-image: url('/img/deluxe.jpg');">
                                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                                    <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Deluxe Room</h2>
                                    <ul class="d-flex list-unstyled mt-auto">
                                        <li class="d-flex align-items-center">
                                            <a data-toggle="collapse" href="#collapseExample1" class="btn btn-primary"
                                                role="button" aria-expanded="false"
                                                aria-controls="collapseExample1">Detail</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="collapse" id="collapseExample1">
                                    <ul class="d-flex list-unstyled mt-auto">
                                        <li class="d-flex align-items-center me-3">
                                            <h4>Sisa 1O Kamar</h4>
                                        </li>
                                    </ul>
                                    <ul class="d-flex list-unstyled mt-auto">
                                        <li class="d-flex align-items-center me-3">
                                            <h4>Dengan Fasilitas Wifi Dan Tv Full HD</h4>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col">
                            <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                                style="background-image: url('/img/superior.jpeg');">
                                <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
                                    <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Superior Room</h2>
                                    <ul class="d-flex list-unstyled mt-auto">
                                        <ul class="d-flex list-unstyled mt-auto">
                                            <li class="d-flex align-items-center">
                                                <a data-toggle="collapse" href="#collapseExample2" class="btn btn-primary"
                                                    role="button" aria-expanded="false"
                                                    aria-controls="collapseExample2">Detail</a>
                                            </li>
                                        </ul>
                                    </ul>
                                </div>
                                <div class="collapse" id="collapseExample2">
                                    <ul class="d-flex list-unstyled mt-auto">
                                        <li class="d-flex align-items-center me-3">
                                            <h4>Sisa 1O Kamar</h4>
                                        </li>
                                    </ul>
                                    <ul class="d-flex list-unstyled mt-auto">
                                        <li class="d-flex align-items-center me-3">
                                            <h4>Dengan Fasilitas Wifi Dan Tv Full HD</h4>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <hr class="featurette-divider">
                <!-- /END THE FEATURETTES -->

            </div><!-- /.container -->


            <!-- FOOTER -->
            <footer class="container">
                <p class="float-end"><a href="#">Back to top</a></p>
                <p>&copy; 2017–2021 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
            </footer>
        </main>


        <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>


    </body>

    </html>


    {{-- Akhir Jumbotron --}}
@endsection
