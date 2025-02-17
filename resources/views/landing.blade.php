<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>{{ config('Laundry', 'Rama Laundry') }}</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <!-- Javascript -->
    <script defer src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script defer src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="">{{ config('Laundry', 'Rama Laundry') }}</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item mr-sm-3 mb-2 mb-sm-0">
                        <div class="dropdown">
                            {{-- <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                @lang('landing.langtext')
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{url('id')}}">Indonesia</a>
                                <a class="dropdown-item" href="{{url('en')}}">English</a>
                            </div> --}}
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-success" href="{{url('login')}}">Masuk / Daftar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header -->
    <header class="bg-blue py-5">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-6">
                    <h1 class="display-4 text-white mt-5 mb-2">Selamat datang di Rama Laundry</h1>
                    <p class="lead mb-5 text-white-50">Dapatkan pengalaman terbaik dalam layanan laundry</p>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid d-none d-lg-block" src="{{asset('img/landing/header.png')}}" alt="" srcset="">
                </div>
            </div>
        </div>
    </header>

    <section class="p-5 text-center">
        <h3>Kenapa memilih layanan laundry kami?</h3>
    </section>

    <!-- Page Content -->
    <section class="kelebihan bg-blue text-white">
        <div class="container p-5">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="display-12 text-white mt-5 mb-2">Peralatan Lengkap dan Canggih</h1>
                    <p class="lead mb-8 text-white-40">Laundry kami menggunakan peralatan yang cukup lengkap dan canggih. Peralatan kami memungkinkan baju tidak perlu dijemur dan mengurangi debu pada baju</p>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid d-none d-lg-block" src="{{asset('img/landing/alat.png')}}" alt="" srcset="">
                </div>
            </div>
        </div>
    </section>

    <section class="kelebihan bg-blue text-white">
        <div class="container p-5">
            <div class="row">
                <div class="col-lg-6">
                    <img class="img-fluid d-none d-lg-block" src="{{asset('img/landing/tipebaju.png')}}" alt=""
                        srcset="">
                </div>
                <div class="col-lg-6">
                    <h1 class="display-12 text-white mt-5 mb-2">Segala Tipe Pakaian</h1>
                    <p class="lead mb-8 text-white-40">Laundry kami menerima segala tipe pakaian mulai dari baju, celana, jas, gorden, bed cover, selimut, seprei, karpet, dan lain lain.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="kelebihan bg-blue text-white">
        <div class="container p-5">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="display-12 text-white mt-5 mb-2">Pegawai Profesional</h1>
                    <p class="lead mb-8 text-white-40">Laundry kami terdiri dari pegawai-pegawai yang profesional yang mampu bekerja dalam tim dengan cukup baik dan handal di bidangnya sehingga membuat laundry kami minim kesalahan</p>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid d-none d-lg-block" src="{{asset('img/landing/pegawai.png')}}" alt=""
                        srcset="">
                </div>
            </div>
        </div>
    </section>

    <section class="p-5 text-center">
        <h3>Apa saja yang bisa kami laundry?</h3>
    </section>

    <section class="bg-blue p-5 text-center">
        <div class="container">
            <div class="row flex-row flex-nowrap kategori">
                <div class="col-4 mb-2">
                    <div class="card">
                        <img src="{{asset('img/landing/Baju.jpg')}}" class="card-img-top" alt="">
                        <div class="card-body d-none d-lg-block">
                            <h3>Baju</h3>
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-2">
                    <div class="card">
                        <img src="{{asset('img/landing/Celana.jpg')}}" class="card-img-top" alt="">
                        <div class="card-body d-none d-lg-block">
                            <h3>Celana</h3>
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-2">
                    <div class="card">
                        <img src="{{asset('img/landing/Jas.jpg')}}" class="card-img-top" alt="">
                        <div class="card-body d-none d-lg-block">
                            <h3>Jas</h3>
                        </div>
                    </div>
                </div>
                <div class="col-4 mb-2">
                    <div class="card">
                        <img src="{{asset('img/landing/Selimut.jpg')}}" class="card-img-top" alt="">
                        <div class="card-body d-none d-lg-block">
                            <h3>Selimut</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="p-5 text-center">
        <h3>Temukan kami!</h3>
    </section>

    <section class="text-white bg-blue">
        <div class="container p-5">
            <div class="row">
                <div class="col-md-6 mb-4 mb-sm-0">
                    <h5>Alamat</h5>
                    <p>Desa Pendarungan RT 1 RW 1, Kec.Kabat, Banyuwangi</p>
                    <br>
                    <h5>Kontak</h5>
                    <p>Email    (tutikhidayanti2004@gmail.com)</p>
                    <p>No Tlpn (+62 838-4694-6185)</p>
                </div>
                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3948.6475976857364!2d114.32309541478111!3d-8.238145894071865!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdce7e280d9b0d8f1!2zOMKwMTQnMTcuMyJTIDExNMKwMTknMzEuMCJF!5e0!3m2!1sid!2sid!4v1670035487819!5m2!1sid!2sid"
                     width="450" height="450" style="border:10;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>
            </div>
        </div>
    </section>
    </footer>

</body>

</html>