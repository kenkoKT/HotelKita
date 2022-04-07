@extends('layouts.app')

{{-- @include('partials.navbar') --}}

@section('content')
<style>
body {
    background-color: darkgrey
}

input {
    border: none;
    outline: none
}

.container {
    border-radius: 15px
}

@media(min-width:992px) {
    img {
        width: 500px;
        height: 500px
    }

    #circle {
        border: 10px solid rgba(255, 0, 234, 0.945);
        border-radius: 50%;
        position: absolute;
        height: 50px;
        width: 50px;
        left: 290px;
        top: -25px
    }

    .container {
        background-image: linear-gradient(to bottom, rgb(255, 255, 255) 80%, rgb(242, 242, 253), rgb(164, 164, 235))
    }
}

@media(max-width:991px) {
    img {
        display: none
    }

    #circle {
        border: 10px solid rgba(255, 0, 234, 0.945);
        border-radius: 50%;
        position: absolute;
        height: 50px;
        width: 50px;
        left: 100px;
        top: -25px
    }

    .container {
        background-image: linear-gradient(to bottom, rgb(255, 255, 255) 80%, rgb(242, 242, 253), rgb(164, 164, 235))
    }
}

@media(max-width:768px) {
    img {
        display: none
    }

    #circle {
        border: 10px solid rgba(255, 0, 234, 0.945);
        border-radius: 50%;
        position: absolute;
        height: 50px;
        width: 50px;
        left: 302px;
        top: -29px
    }
}

@media(max-width:567px) {
    img {
        display: none
    }

    .container {
        margin-left: 0px;
        margin-top: 30px
    }

    #circle {
        border: 10px solid rgba(255, 0, 234, 0.945);
        border-radius: 50%;
        position: absolute;
        height: 50px;
        width: 50px;
        left: 202px;
        top: -29px
    }
}
</style>
        <div class="container bg-white pb-5">
            <div class="row d-flex justify-content-start align-items-center mt-sm-5">
                <div class="col-lg-5 col-10">
                    <div class="pb-5"> <img src="img/hotel5.jpg" alt="" style="width: 600px; height:515px; margin-bottom:-100px; margin-left:-15px;"> </div>
                </div>
                <div class="col-lg-4 offset-lg-2 col-md-6 offset-md-3">
                    <div class="pt-4">
                        <h2><span class="fa fa-superpowers text-primary px-md-2"></span>{{ __('Empire Kenzo') }}</h2>
                    </div>
                    <div class="mt-3 mt-md-5">
                        <h6>{{ __('Login Akun Bro') }}</h6>
                        <form class="pt-4" method="POST" action="{{ route('login') }}">
                            @csrf

                                <div class="d-flex flex-column pb-3"> <label for="email">{{ __('Email Address') }}</label> <input type="email" name="email" id="emailId" class="border-bottom border-primary @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>


                                <div class="d-flex flex-column pb-3"> <label for="password">{{ __('Password') }}</label> <input type="password" name="password" id="password" class="border-bottom border-primary @error('password') is-invalid @enderror" name="password"
                                    required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror

                                </div>


                                <div class="d-flex jusity-content-end pb-4">
                                </div>
                                        <button type="submit" class="btn btn-primary btn-block mb-3">
                                            {{ __('Login') }}
                                        </button>


                                <div class="register mt-5">
                                    @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('register') }}">
                                                {{ __('belum punya aku bro?') }}
                                            </a>
                                        @endif
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
