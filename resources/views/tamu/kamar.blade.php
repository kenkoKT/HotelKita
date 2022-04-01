@extends('layouts.app')

@include('partials.navbary')

@section('content')
    <div class="container px-4 " id="custom-cards">
        <h2 class="pb-2 border-bottom">Kamar </h2>
        <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-4">
            <div class="col">
                <div class="card card-cover h-100 overflow-hidden text-white bg-dark rounded-5 shadow-lg"
                    style="background-image: url('/img/deluxe.jpg');">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h2 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Deluxe Room</h2>
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="d-flex align-items-center">
                                <a data-toggle="collapse" href="#collapseExample1" class="btn btn-primary" role="button"
                                aria-expanded="false" aria-controls="collapseExample1">Detail</a>
                            </li>
                        </ul>
                    </div>
                    <div class="collapse" id="collapseExample1">
                        <ul class="d-flex list-unstyled mt-auto">
                            <li class="d-flex align-items-center me-3">
                                <h4>Sisa 1O Kamar</h4>
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
                                    <a data-toggle="collapse" href="#collapseExample2" class="btn btn-primary" role="button"
                                    aria-expanded="false" aria-controls="collapseExample2">Detail</a>
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
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
