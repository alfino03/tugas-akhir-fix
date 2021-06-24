<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/layout-template/css/bootstrap.min.css">
    <!-- css -->
    <link rel="stylesheet" href="/layout-template/css/style.css">
    <link rel="stylesheet" href="/layout-template/css/produk.css">
    <link rel="stylesheet" href="/layout-template/css/profile.css">

    <!-- fa -->
    <link rel="stylesheet" href="/layout-template/fontawesome-free/css/all.min.css">
    <style>
        .badge {
            font-size: 8px;
            vertical-align: top;
            margin-left: -0.8em;
        }
    </style>
    <title>Tuku Emas | Brand</title>
</head>


<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <!-- Left navbar links -->
            <a class="navbar-brand" href="/home">
                <img src="/layout-template/img/tukuemas1.png" alt="">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav">
                    <li class="nav-item d-none d-sm-inline-block">
                        <a class="nav-link" href="/home">Home</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a class="nav-link" href="/produk">Produk</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a class="nav-link" href="/brand">Brand</a>
                    </li>
                    <li class="nav-item d-none d-sm-inline-block">
                        <a class="nav-link" href="/lokasi">Atur Lokasi</a>
                    </li>

                </ul>

                <!-- Right navbar links -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                    <a class="nav-item nav-link btn btn-warning mr-2" data-toggle="modal" data-target="#loginModal">
                        {{ __('Login') }}
                    </a>
                    <!-- <a class="nav-item nav-link btn btn-warning mr-3" href="{{ route('login') }}">{{ __('Login') }}</a> -->
                    @if (Route::has('register'))

                    <a class="nav-item nav-link btn btn-warning" href="{{ route('register') }}">{{ __('Register') }}</a>

                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">


                            <a class="btn btn-xs btn-danger mt-3 w-100" href="{{ route('logout') }}" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>

            </div>
        </div>
    </nav>

    <ul class="nav nav-tabs justify-content-center">
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">ANTAM</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">EOA GOLD</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">MINI GOLD</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">UBS</a>
        </li>
    </ul>

    <div class="container">
        <div class="row">
            <div class="col-3">
                <div class="card" style="width: 15rem;">
                    <img src="/layout-template/img/produk-emas/ubs1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Emas UBS 3gram</h5>
                        <p class="card-text">Rp.1000.000</p>
                        <p class="card-text">Wahono, Kebumen</p>
                        <a href="#" class="btn btn-warning">Beli</a>
                        <a href="#" class="btn btn-warning">Pesan</a>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card" style="width: 15rem;">
                    <img src="/layout-template/img/produk-emas/antam1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Emas Antam 10gram</h5>
                        <p class="card-text">Rp.950.000</p>
                        <p class="card-text">Dewi, Klaten</p>
                        <a href="#" class="btn btn-warning">Beli</a>
                        <a href="#" class="btn btn-warning">Pesan</a>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card" style="width: 15rem;">
                    <img src="/layout-template/img/produk-emas/mini1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Emas Mini 0,5gram</h5>
                        <p class="card-text">Rp.750.000</p>
                        <p class="card-text">Fajar, Jakarta</p>
                        <a href="#" class="btn btn-warning">Beli</a>
                        <a href="#" class="btn btn-warning">Pesan</a>
                    </div>
                </div>
            </div>

            <div class="col-3">
                <div class="card" style="width: 15rem;">
                    <img src="/layout-template/img/produk-emas/eoa1.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Emas EOA 0,5gram</h5>
                        <p class="card-text">Rp.500.000</p>
                        <p class="card-text">Alfino, Wonogiri</p>
                        <a href="#" class="btn btn-warning">Beli</a>
                        <a href="#" class="btn btn-warning">Pesan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>