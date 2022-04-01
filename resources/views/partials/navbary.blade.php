<nav class="navbar navbar-expand-md navbar-light text-white bg-black border-bottom py-3">
    <div class="container">
        <a class="navbar-brand text-white" href="{{ url('/') }}">
            {{ config('app.name', 'Empire Kenzo Hotel') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                <li class="nav-item ">
                    <a class="nav-link active text-white" href="{{ route('tamu/dashboard') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white" href="/tamu/bukti_pemesanan">Pesanan</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active text-white" href="/tamu/fasilitas_hotel">Fasilitas</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link active" href="{{ route('admin/fkamar/dashboard') }}">Fasilitas Kamar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="{{ route('admin/fhotel/dashboard') }}">Fasilitas Umum Hotel</a>
                </li> --}}
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item ">
                            <a class="nav-link active text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    {{-- @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif --}}
                @else
                    <li class="nav-item dropdown text-white">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle active text-white" href="#" role="button"
                            data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
