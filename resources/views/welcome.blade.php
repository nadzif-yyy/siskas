<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sahabat Yatim</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link rel="icon" href="{{ asset('/img/primary logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <link href="fontawesome/css/fontawesome.css" rel="stylesheet"/>
    <link href="fontawesome/css/solid.css" rel="stylesheet"/>
    <link href="fontawesome/css/brands.css" rel="stylesheet"/>
  </head>
  <body>
    {{-- navbar --}}
    @if (Route::has('login'))
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-lg fixed-top">
            <div class="container">
            <a class="navbar-brand" href="#">Sahabat Yatim</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse text-right" id="navbarText">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#program">Program</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#tentang">Tentang kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#kontak">Kontak</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      @if (Auth::check('login'))
                          Logout
                      @else
                          Login
                      @endif
                    </a>
                    <ul class="dropdown-menu">
                      <li>
                        @auth
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <x-responsive-nav-link :href="route('logout')"
                                    style="text-decoration: none"
                                    onclick="event.preventDefault();
                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-responsive-nav-link>
                                <br>
                                @if (Auth::user()->usertype == 'admin')
                                <a href="{{ route('dashboard') }}" id="button" style="text-decoration: none" class="rounded-md px-2 py-2 text-black">
                                    Dashboard
                                </a>
                                @else
                                    
                                @endif
                                {{-- <a href="{{ route('dashboard') }}" id="button" style="text-decoration: none" class="rounded-md px-2 py-2 text-black">
                                    Dashboard
                                </a> --}}
                            </form>
                                @else
                                <a href="{{ route('login') }}" id="button" style="text-decoration: none" class="rounded-md px-3 py-2 text-black">
                                    Log in
                                </a>
                                    @if (Route::has('register'))
                                <a href="{{ route('register') }}" id="button" style="text-decoration: none" class="rounded-md px-3 py-2 text-black">
                                     Register
                                </a>
                            @endif
                         @endauth
                      </li>
                    </ul>
                  </li>
                </ul>
            </div>
            </div>
        </nav>
    @endif
    {{-- banner --}}
    <div class="container-fluid banner" id="home">
        <div class="container text-center">
            <h4 class="display-6">
                Selamat datang
            @if (Auth::check('login'))
                {{ Auth::user()->name }}
            @else
                
            @endif
            </h4>
            <h3 class="display-1">Sahabat Yatim</h3>
            <p>
                Sahabat Yatim merupakan lembaga sosial yang resmi ditetapkan menjadi Lembaga Amil Zakat Nasional (LAZNAS) pada 30 Desember 2020. Bergerak dalam bidang pengasuhan dan pemberdayaan anak – anak yatim dan dhuafa.
            </p>
            <a href="#program">
                <button type="button" class="btn btn-primary btn-lg ">
                    Cek Selengkapnya
                </button>
            </a>
        </div>
    </div>
    {{-- program --}}
    <div class="container-fluid program pt-5 pb-5">
        <div class="container text-center">
            <h2 class="display-4 pt-5" id="program">Program</h2>
            <p>
                Program Unggulan Sahabat Yatim
            </p>
            <div class="row pt-5">
                <div class="col-md-4">
                <span class="lingkaran"><i class="fa-solid fa-house fa-5x"></i></span>
                    <h3 class="mt-5">Yatim Center</h3>
                    <p>Program pengasuhan yang sudah dijalankan oleh Sahabat Yatim diantaranya adalah Asrama Yatim. Sahabat Yatim memiliki 26 Asrama Yatim yang tersebar di Pulau Sumatera, Jawa, Kalimantan, dan Sulawesi. Ada ribuan anak yatim baik mukim maupun non mukim yang masuk dalam program pengasuhan Sahabat Yatim setiap bulannya</p>
                </div>
                <div class="col-md-4">
                <span class="lingkaran"><i class="fa-solid fa-school fa-5x"></i></span>
                    <h3 class="mt-5">Pedidikan</h3>
                    <p>Setiap warga negara berhak mendapatkan pendidikan adalah isi dari Pasal 31 ayat (1) Undang – Undang Dasar 1945.
                        Untuk itu Sahabat Yatim merasa perlu berperan aktif dalam menjalankan amanat Undang – undang diantaranya memberikan kesempatan anak yatim dan dhuafa untuk memperoleh Pendidikan yang layak untuk masa depan mereka yang lebih baik.</p>
                </div>
                <div class="col-md-4">
                <span class="lingkaran"><i class="fa-solid fa-suitcase-medical fa-5x"></i></span>
                    <h3 class="mt-5">Kesehatan</h3>
                    <p>Sahabat Yatim adalah Lembaga Amil Zakat Nasional yang mengelola zakat, infak,   sedekah dengan berbagai program diantaranya adalah Program Kesehatan.
                        Program Kesehatan yang dilakukan oleh Sahabat Yatim berfokus untuk memberikan Pelayanan kesehatan untuk anak Yatim dan Dhuafa yang membutuhkan pelayanan kesehatan tetapi terkendala terhadap biaya kesehatan yang mahal.</p>
                </div>
            </div>
        </div>
    </div>
    {{-- tentang kami --}}
    <div class="container-fluid pt-5 pb-5 bg-light">
        <div class="container">
            <h2 class="display-3 text-center pt-5" id="tentang">Tentang Kami</h2>
            <p class="text-center">
                Lembaga Amil Zakat Nasional
            </p>
            <div class="clearfix pt-5">
                <img src="https://www.sahabatyatim.com/wp-content/uploads/2023/02/foto-anak-terimakasih.png" class="col-md-6 float-md-end mb-3 crop-img" width="300" height="300">
                <p>
                    Sahabat Yatim merupakan lembaga sosial yang resmi ditetapkan menjadi Lembaga Amil Zakat Nasional (LAZNAS) pada 30 Desember 2020. Bergerak dalam bidang pengasuhan dan pemberdayaan anak – anak yatim dan dhuafa.
                </p>
                <p>
                    Berdiri sejak 1 september 2009, Sahabat Yatim mengawal mereka menuju masa depan yang lebih gemilang ditengah kesulitan dan ketidakberdayaan karena kehilangan orang tua dan himpitan kemiskinan
                </p>
                <p>
                    Hingga saat ini Sahabat Yatim telah mewujudkan 25 asrama yang menampung ribuan anak yatim dan dhuafa. adapun lokasi asrama asuh Sahabat Yatim tersebar di 12 kota di Indonesia, diantaranya yaitu di Tangerang, Bogor, Bekasi, Balikpapan, Samarinda, Banjarbaru, dan Surabaya.
                </p>
                <p>
                    Sahabat Yatim siap menjadi fasilitator antara Anda yang diberikan kelapangan rezeki dengan mereka yang hidup dalam keterbatasan. Mari bersama kami menjadi sahabat mereka.
                </p>
            </div>
        </div>
    </div>
    {{-- social media --}}
    <div class="container-fluid sosmed pt-5 pb-5">
        <div class="container text-center">
            <div class="row pt-4 gx-4 gy-4">
                <div class="col">
                    <img src="https://cdn1.iconfinder.com/data/icons/logotypes/32/square-facebook-1024.png">
                </div>
                <div class="col">
                    <img src="https://cdn2.iconfinder.com/data/icons/social-media-2285/512/1_Twitter3_colored_svg-1024.png">
                </div>
                <div class="col">
                    <img src="https://cdn2.iconfinder.com/data/icons/social-icons-33/128/Instagram-1024.png">
                </div>
                <div class="col">
                    <img src="https://cdn2.iconfinder.com/data/icons/social-media-2285/512/1_Linkedin_unofficial_colored_svg-1024.png">
                </div>
                <div class="col">
                    <img src="https://cdn1.iconfinder.com/data/icons/logotypes/32/youtube-1024.png">
                </div>
            </div>
        </div>
    </div>
    {{-- kontak kami --}}
    <form action="{{ route('contac.store') }}" method="POST">
        @csrf
        <div class="container-fluid pt-5 pb-5~ kontak">
            <div class="container">
                <h2 class="display-3 text-center" id="kontak">kontak Kami</h2>
                <p class="text-center">
                    Dana yang disalurkan melalui Sahabat Yatim bukan bersumber dan bukan untuk tujuan pencucian uang (money laundry), termasuk terorisme maupun tindak kejahatan lainnya
                </p>
                <div class="row pb-3">
                    <div class="col-md-6">
                        <input type="text" class="form-control form-control-lg mb-3" placeholder="Nama" name="name" id="name" required>
                        <input type="email" class="form-control form-control-lg mb-3" placeholder="Email" name="email" id="email" required>
                        <input type="number" class="form-control form-control-lg mb-3" placeholder="No. Phone" name="phone" id="phone" required>
                    </div>
                    <div class="col-md-6">
                        <textarea class="form-control form-control-lg" rows="5" name="message" id="message" required></textarea>
                    </div>  
                </div>
                <div class="col-md-3 mx-auto text-center mt-1">
                    <button type="button" class="btn btn-danger btn-lg">Kirim Pesan</a></button>
                </div>
            </div>
        </div>
    </form>
        {{-- footer --}}
        <div class="container text-center pt-3 pb-3">
            All Rights Reserved &copy; 2024 By: Nadzif Zikri
        </div>

        {{-- scrip --}}
    {{-- <script>
        function sendMessage() {
            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const phone = document.getElementById('phone').value;
            const message = document.getElementById('message').value;

            const url = "https://api.whatsapp.com/send?phone=6283185850672&text=Halo%20Admin%2C%20%0Asaya%20*"+ name +"*%20%0Aemail%20saya%20*"+ email+"*%0A%0A*"+ message +"*"
            
            window.open(url);
        }
    </script> --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>