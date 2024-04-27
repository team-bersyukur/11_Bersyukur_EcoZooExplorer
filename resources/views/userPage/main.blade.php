<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>EcoZooExplorer</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png {{ asset('assets_front/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('assets_front/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets_front/assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_front/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_front/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_front/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_front/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets_front/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets_front/assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Regna
  * Template URL: https://bootstrapmade.com/regna-bootstrap-onepage-template/
  * Updated: Mar 17 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

    <style>
        .map {
            filter: grayscale(100%);
        }

        .map.clicked,
        .map:hover {
            /* transform: scale(1.1); */
            transition: 0.4s;
            filter: grayscale(0%)
        }
    </style>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center header-transparent">
        <div class="container d-flex justify-content-between align-items-center">

            <div id="logo">
                <a href="index.html"><img src="{{ asset('assets_front/assets/img/Logo-KBS-1.png') }}"
                        style="max-width: 165px" alt=""></a>
                <!-- Uncomment below if you prefer to use a text logo -->
                <!--<h1><a href="index.html">Regna</a></h1>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto" href="#about">About</a></li>
                    <li><a class="nav-link scrollto" href="#services">Event</a></li>
                    <li><a class="nav-link scrollto " href="#portfolio">Hewan</a></li>
                    <li><a class="nav-link scrollto" href="#team">PD KBS</a></li>
                    <li><a class="nav-link scrollto" href="#contact">Lokasi</a></li>
                    @guest
                        <li class="dropdown"><a href="#"><span>Login</span> <i class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="/login">Login</a></li>
                                <li><a href="/register">Register</a></li>
                            </ul>
                        </li>
                    @endguest
                    @auth
                        <li class="dropdown"><a href="#"><span>{{ auth()->user()->name }}</span> <i
                                    class="bi bi-chevron-down"></i></a>
                            <ul>
                                <li><a href="#">Profil</a></li>
                                <li>
                                    <form action="/logout" method="post">
                                        @csrf
                                        <button type="submit" class="btn btn-sm ms-2">Logout</button>
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endauth
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
            <h1>Selamat Datang</h1>
            <h2>Di Kebun Binatang Surabaya</h1>
                <a href="#about" class="btn-get-started">Get Started</a>
                <div class="row col-lg-4 col-md-2 justify-content-center">
                    <div class="social-links">
                        <a target="_blank" href="https://x.com/surabayazoo?t=v8LpE5eNyxm_Lj6YLjeo_w&s=08"
                            class="twitter mx-1">
                            <i class="bi bi-twitter-x"></i></a>
                        <a target="_blank"
                            href="https://www.facebook.com/profile.php?id=100016964654721&mibextid=ZbWKwL"
                            class="facebook mx-1"><i class="bi bi-facebook"></i></a>
                        <a target="_blank"
                            href="https://www.instagram.com/kebunbinatangsurabaya?igsh=MXhqcjN6eXVxdWx2Yg=="
                            class="instagram mx-1"><i class="bi bi-instagram"></i></a>
                        <a target="_blank" href="https://youtube.com/@kebunbinatangsurabaya?si=O2OEd2eTcGNbQD30"
                            class="youtube mx-1"><i class="bi bi-youtube"></i></a>
                        <a target="_blank" href="https://www.tiktok.com/@kebunbinatangsurabaya?_t=8lqvwtZ8YA4&_r=1"
                            class="tiktok mx-1"><i class="bi bi-tiktok"></i></a>
                    </div>
                </div>
        </div>
    </section><!-- End Hero Section -->

    <main id="main">

        <!-- ======= About Section ======= -->
        <section id="about">
            <div class="container" data-aos="fade-up">
                <div class="row about-container">

                    <div class="col-lg-6 content order-lg-1 order-2">
                        <h2 class="title">Kebung Binatang Surabaya</h2>
                        <p>
                            didirikan oleh seorang jurnalis yang memiliki hobi mengumpulkan binatang yakni, H.F.K.
                            Kommer pada 31 Agustus 1916, dengan nama vereeninging “Soerabaiasche Planten-en Dierentuin”
                            yang berlokasi di Kaliondo. Kemudian pada tanggal 28 september 1917 berpindah lokasi ke
                            jalan Groedo.
                        </p>

                        <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon"><i class="bi bi-briefcase"></i></div>
                            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                            <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero
                                tempore, cum soluta nobis est eligendi</p>
                        </div>
                    </div>

                    <div class="col-lg-6 background order-lg-2 d-flex" data-aos="fade-left" data-aos-delay="100">
                    </div>
                </div>
            </div>
        </section><!-- End About Section -->

        <!-- ======= Facts Section ======= -->
        <section id="facts">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h3 class="section-title">Fakta</h3>
                    <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem
                        accusantium doloremque</p>
                </div>
                <div class="row counters">
                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="107" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Tahun</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="2179" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Hewan</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="500" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Pengunjung</p>
                    </div>

                    <div class="col-lg-3 col-6 text-center">
                        <span data-purecounter-start="0" data-purecounter-end="105" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p>Pekerja</p>
                    </div>

                </div>
            </div>
        </section><!-- End About Section -->


        <!-- ======= Services Section ======= -->
        <section id="services">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h3 class="section-title">Event</h3>
                    <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit
                        voluptatem
                        accusantium doloremque</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                        <div class="box">
                            <div class="icon"><a href=""><i class="bi bi-briefcase"></i></a></div>
                            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas
                                molestias
                                excepturi sint occaecati cupiditate non provident</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                        <div class="box">
                            <div class="icon"><a href=""><i class="bi bi-card-checklist"></i></a>
                            </div>
                            <h4 class="title"><a href="">Dolor Sitema</a></h4>
                            <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi
                                ut
                                aliquip ex ea commodo consequat tarad limino ata</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                        <div class="box">
                            <div class="icon"><a href=""><i class="bi bi-bar-chart"></i></a></div>
                            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit
                                esse
                                cillum dolore eu fugiat nulla pariatur</p>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                        <div class="box">
                            <div class="icon"><a href=""><i class="bi bi-binoculars"></i></a></div>
                            <h4 class="title"><a href="">Magni Dolores</a></h4>
                            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in
                                culpa qui
                                officia deserunt mollit anim id est laborum</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                        <div class="box">
                            <div class="icon"><a href=""><i class="bi bi-brightness-high"></i></a>
                            </div>
                            <h4 class="title"><a href="">Nemo Enim</a></h4>
                            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus
                                qui
                                blanditiis praesentium voluptatum deleniti atque</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6" data-aos="zoom-in">
                        <div class="box">
                            <div class="icon"><a href=""><i class="bi bi-calendar4-week"></i></a>
                            </div>
                            <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
                            <p class="description">Et harum quidem rerum facilis est et expedita distinctio.
                                Nam libero
                                tempore, cum soluta nobis est eligendi</p>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Services Section -->

        <!-- ======= Call To Action Section ======= -->
        <section id="call-to-action">
            <div class="container">
                <div class="row" data-aos="zoom-in">
                    <div class="col-lg-9 text-center text-lg-start">
                        <h3 class="cta-title">Call To Action</h3>
                        <p class="cta-text"> Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum
                            dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident,
                            sunt in
                            culpa qui officia deserunt mollit anim id est laborum.</p>
                    </div>
                    <div class="col-lg-3 cta-btn-container text-center">
                        <a class="cta-btn align-middle" href="#">Call To Action</a>
                    </div>
                </div>
            </div>
        </section><!-- End Call To Action Section -->

        <!-- ======= Portfolio Section ======= -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h3 class="section-title">Hewan</h3>
                    <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit
                        voluptatem accusantium doloremque</p>
                </div>

                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="{{ asset('assets_front/assets/img/portfolio/portfolio-1.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>App 1</h4>
                            <p>App</p>
                            <a href="{{ asset('assets_front/assets/img/portfolio/portfolio-1.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="App 1"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="{{ asset('assets_front/assets/img/portfolio/portfolio-2.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <a href="{{ asset('assets_front/assets/img/portfolio/portfolio-2.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="{{ asset('assets_front/assets/img/portfolio/portfolio-3.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>App 2</h4>
                            <p>App</p>
                            <a href="{{ asset('assets_front/assets/img/portfolio/portfolio-3.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="App 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <img src="{{ asset('assets_front/assets/img/portfolio/portfolio-4.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Card 2</h4>
                            <p>Card</p>
                            <a href="{{ asset('assets_front/assets/img/portfolio/portfolio-4.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Card 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="{{ asset('assets_front/assets/img/portfolio/portfolio-5.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Web 2</h4>
                            <p>Web</p>
                            <a href="{{ asset('assets_front/assets/img/portfolio/portfolio-5.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Web 2"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="{{ asset('assets_front/assets/img/portfolio/portfolio-6.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>App 3</h4>
                            <p>App</p>
                            <a href="{{ asset('assets_front/assets/img/portfolio/portfolio-6.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="App 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <img src="{{ asset('assets_front/assets/img/portfolio/portfolio-7.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Card 1</h4>
                            <p>Card</p>
                            <a href="{{ asset('assets_front/assets/img/portfolio/portfolio-7.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Card 1"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-card">
                        <img src="{{ asset('assets_front/assets/img/portfolio/portfolio-8.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Card 3</h4>
                            <p>Card</p>
                            <a href="{{ asset('assets_front/assets/img/portfolio/portfolio-8.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Card 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 portfolio-item filter-web">
                        <img src="{{ asset('assets_front/assets/img/portfolio/portfolio-9.jpg') }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>Web 3</h4>
                            <p>Web</p>
                            <a href="{{ asset('assets_front/assets/img/portfolio/portfolio-9.jpg') }}"
                                data-gallery="portfolioGallery" class="portfolio-lightbox preview-link"
                                title="Web 3"><i class="bx bx-plus"></i></a>
                            <a href="portfolio-details.html" class="details-link" title="More Details"><i
                                    class="bx bx-link"></i></a>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Portfolio Section -->

        <!-- ======= Team Section ======= -->
        <section id="team">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h3 class="section-title">Map Zona Kebun Binatang Surabaya</h3>
                    <p class="section-description">Rute Kalian Dimulai Dari Zona Berwarna</p>
                </div>
                <div class="row">
                    @foreach ($zonas as $zona)
                        <div class="col-md-4 g-0 zona-item">
                            @if ($zona->nama_zona == 'Zona Ketiga')
                                <img src="{{ asset('storage/' . $zona->foto_zona) }}" class="img-fluid map"
                                    data-id="{{ $zona->id }}" style="filter: grayscale(0%)">
                            @else
                                <img src="{{ asset('storage/' . $zona->foto_zona) }}" class="img-fluid map"
                                    data-id="{{ $zona->id }}">
                            @endif
                        </div>
                    @endforeach
                </div>
                <div class="card">
                    <div class="card-header">
                        <h3 id="card-title" class="card-title"></h3>
                    </div>
                    <div class="card-body">
                        <div class="d-flex">
                            <img id="detail_zona" class="me-4" src="" width="400px">
                            <p id="deskripsi"></p>
                        </div>
                        <ul id="hewan" class="mt-5"></ul>
                    </div>
                </div>
            </div>
        </section><!-- End Team Section -->

        <!-- ======= Contact Section ======= -->
        <section id="contact">
            <div class="container">
                <div class="section-header">
                    <h3 class="section-title">Lokasi</h3>
                    <p class="section-description">berikut adalah lokasi dari Kebun
                        Binatang Surabaya</p>
                </div>
                <div class="info text-center">
                    <div class="row align-items-center justify-content-center mb-4">
                        <div class="col-auto">
                            <i class="bi bi-geo-alt"></i>
                            <p class="mb-0">Jl. Setail No.1, Darmo, Kec.
                                Wonokromo,<br>Surabaya, Jawa Timur 60241</p>
                        </div>
                        <div class="col-auto">
                            <i class="bi bi-phone"></i>
                            <p class="mb-0 ml-2">031-5678703</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-md-4">
                        <iframe
                            src="https://maps.google.com/maps?q=Jl.+Setail+No.1%2C+Darmo%2C+Kec.+Wonokromo%2C+Surabaya%2C+Jawa+Timur+60241&t=&z=15&ie=UTF8&iwloc=&output=embed"
                            width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="{{ asset('assets_front/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
    <script src="{{ asset('assets_front/assets/vendor/aos/aos.js') }}"></script>
    <script src="{{ asset('assets_front/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets_front/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('assets_front/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets_front/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets_front/assets/vendor/php-email-form/validate.j') }}s"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('assets_front/assets/js/main.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
        crossorigin="anonymous"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let map = document.querySelectorAll('.map');

            map.forEach(function(item) {
                item.addEventListener('click', function() {
                    // Menghapus kelas tambahan 'clicked' dari semua gambar
                    map.forEach(function(img) {
                        img.classList.remove('clicked');
                    });

                    // Menambahkan kelas tambahan 'clicked' ke gambar yang diklik
                    item.classList.add('clicked');

                    // Mengambil data dan menampilkan informasi zona
                    fetch('/zona/' + item.getAttribute('data-id'))
                        .then(response => response.json())
                        .then(data => {
                            console.log(data);
                            document.getElementById('card-title').innerText = data.data
                                .nama_zona;
                            document.getElementById('deskripsi').innerHTML = data.data
                                .deskripsi_zona;
                            document.getElementById('detail_zona').src = 'storage/' + data.data
                                .foto_zona_detail;
                            document.getElementById('hewan').innerHTML = '';
                            data.data.hewan.forEach(hewan => {
                                document.getElementById('hewan').innerHTML += `
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="storage/${hewan.foto}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">${hewan.nama_hewan} (${hewan.nama_ilmiah_hewan})</h5>
                                <div class="card-body">
                                    <p class="card-text">${hewan.deskripsi}</p>
                                </div>
                            </div>
                        </div>
                        `;
                            });
                        });
                });
            });
        });
    </script>


</body>

</html>
