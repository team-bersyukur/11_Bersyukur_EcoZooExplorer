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
                <a href="index.html"><img src="{{ asset('assets_front/assets/img/KBS-Logo-1.png') }}"
                        style="max-width: 165px" alt=""></a>
                <!-- Uncomment below if you prefer to use a text logo -->
                <!--<h1><a href="index.html">Regna</a></h1>-->
            </div>

            <nav id="navbar" class="navbar">
                <ul >
                    <li><a class="nav-link scrollto text-warning" href="#hero">Home</a></li>
                    <li><a class="nav-link scrollto text-warning" href="#contact">Lokasi</a></li>
                    <li><a class="nav-link scrollto text-warning" href="#portfolio">Hewan</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->
        </div>
    </header><!-- End Header -->
    <main id="main">
        
        <section id="team">
            <div class="container-fluid" data-aos="fade-up">
                <div class="section-header">
                    <h3 class="section-title">Map Zona Kebun Binatang Surabaya</h3>
                    <h5 class="section-description">Aktifkan <span class="text-danger">GPS</span> anda untuk mengetahui lokasi akurat</h5>
                </div>
                <div class="row">
                    <div class="container">
                        <div class="row">
                            @foreach ($zonas as $zona)
                                <div class="col-md-4 g-0 zona-item">
                                    <img src="{{ asset('storage/' . $zona->foto_zona_detail) }}" class="img-fluid map"
                                        data-id="{{ $zona->id }}">
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header headerCard text-center">
                        <h3 id="card-title" class="card-title mt-2"></h3>
                    </div>
                    <div class="card-body">
                        <div class="d-flex p-3 rounded" style="background-color: rgba(218, 218, 218, 0.384)">
                            <p id="deskripsi"></p>
                        </div>
                        <ul id="hewan" class="mt-5 d-flex row justify-content-center "></ul>
                    </div>
                </div>
            </div>
        </section><!-- End Team Section -->
        <section id="portfolio" class="portfolio">
            <div class="container" data-aos="fade-up">
                <div class="section-header">
                    <h3 class="section-title">Hewan</h3>
                    <p class="section-description">Berikut hewan-hewan yang dilestarikan di Kebun Binatang Surabaya</p>
                </div>
                <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">
                    @foreach ($hewans as $hewan)    
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app">
                        <img src="{{ asset('storage/' . $hewan->foto) }}" class="img-fluid"
                            alt="">
                        <div class="portfolio-info">
                            <h4>{{ $hewan->nama_hewan }}</h4>
                            <p style="font-style: italic">{{ $hewan->nama_ilmiah_hewan }}</p>
                            <button type="button" class="btn details-link" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="showModal('{{ $hewan->nama_hewan }}', '{{ $hewan->nama_ilmiah_hewan }}', '{{ $hewan->deskripsi }}', '{{ $hewan->jenis_hewan }}', '{{ $hewan->zona->nama_zona }}')">
                                <i class="bi bi-eye"></i>
                            </button>
                        </div>
                    </div>
                    @endforeach
                </div>

            </div>
        </section><!-- End Portfolio Section -->

    </main><!-- End #main -->
    <footer id="footer">
        <div class="footer-top">
          <div class="container">
    
          </div>
        </div>
    
        <div class="container">
          <div class="credits">
            Designed by <a href="https://bootstrapmade.com/">Team Bersyukur</a>
          </div>
        </div>
      </footer><!-- End Footer -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header headerModal">
              <h1 class="modal-title fs-5 " id="zona_hewan"></h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <h2 id="nama_hewan" class="fw-bold"></h2>
              <h5 id="nama_ilmiah" class="fst-italic"></h4>
              <h6 id="jenis"></h6>
              <p id="deskripsiHewan"></p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>

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
            let warna1 = '#8C52FF'
            let warna2 = '#ffc0cb'
            let warna3 = '#FF914D'
            let warna4 = '#004AAD'
            let warna5 = '#A83D01'
            let warna6 = '#31F3FF'

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
                            let header = document.querySelector('.headerCard');

                            if(data.data.nama_zona == 'Zona 1') {
                                header.style.backgroundColor = warna1;
                                header.style.color = 'white';
                            } else if (data.data.nama_zona == 'Zona 2'){
                                header.style.backgroundColor = warna2;
                                header.style.color = 'black';
                            } else if (data.data.nama_zona == 'Zona 3'){
                                header.style.backgroundColor = warna3;
                                header.style.color = 'white'
                            } else if (data.data.nama_zona == 'Zona 4'){
                                header.style.backgroundColor = warna4;
                                header.style.color = 'white';
                            } else if (data.data.nama_zona == 'Zona 5'){
                                header.style.backgroundColor = warna5;
                                header.style.color = 'white';
                            } else {
                                header.style.backgroundColor = warna6;
                                header.style.color = 'black';
                            }

                            document.getElementById('card-title').innerText = data.data
                                .nama_zona;
                            document.getElementById('deskripsi').innerHTML = data.data
                                .deskripsi_zona;
                            // document.getElementById('detail_zona').src = 'storage/' + data.data.foto_zona_detail;
                            document.getElementById('hewan').innerHTML = '';
                            data.data.hewan.forEach(hewan => {
                                document.getElementById('hewan').innerHTML += `
                                <div class="card col-md-4 mx-3 mb-3" style="width: 18rem;background-color: #C4FB49;">
                                    <div class="card-body ps-3 pt-2">
                                        <img class="card-img-top my-3 rounded" src="storage/${hewan.foto}" alt="Card image cap">
                                        <div class="container" style="background-color: #FFFFFF; padding: 10px; border-radius: 5px;">
                                            <h5 class="card-title fw-bold" style="color: #564A19">${hewan.nama_hewan} (${hewan.nama_ilmiah_hewan})</h5>
                                            <div class="card-body">
                                                <p class="card-text" style="color: #000000">${hewan.deskripsi}</p>
                                            </div>
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
    <script>
        let warna1 = '#8C52FF'
        let warna2 = '#ffc0cb'
        let warna3 = '#FF914D'
        let warna4 = '#004AAD'
        let warna5 = '#A83D01'
        let warna6 = '#31F3FF'
        function showModal(nama_hewan, nama_ilmiah, deskripsi, jenis, zona) {
            let header = document.querySelector('.headerModal');
                if(zona == 'Zona 1') {
                    header.style.backgroundColor = warna1;
                    header.style.color = 'white';
                } else if (zona == 'Zona 2'){
                    header.style.backgroundColor = warna2;
                    header.style.color = 'black';
                } else if (zona == 'Zona 3'){
                    header.style.backgroundColor = warna3;
                    header.style.color = 'white'
                } else if (zona == 'Zona 4'){
                    header.style.backgroundColor = warna4;
                    header.style.color = 'white';
                } else if (zona == 'Zona 5'){
                    header.style.backgroundColor = warna5;
                    header.style.color = 'white';
                } else {
                    header.style.backgroundColor = warna6;
                    header.style.color = 'black';
                }
            document.getElementById('nama_hewan').innerText = nama_hewan;
            document.getElementById('nama_ilmiah').innerText = '('+nama_ilmiah+')';
            document.getElementById('jenis').innerText = 'Jenis : '+jenis;
            document.getElementById('deskripsiHewan').innerText = deskripsi;
            document.getElementById('zona_hewan').innerText = zona;
        }
    </script>


</body>

</html>
