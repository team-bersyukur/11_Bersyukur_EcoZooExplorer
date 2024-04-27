@extends('userPage.main')
@section('content')
    <section id="hero">
        <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
            <h1 class="section-title">Map Zona Kebun Binatang Surabaya</h1>
            <h3 class="section-description text-white">Aktifkan <span class="text-danger fw-bold">GPS</span> anda untuk
                mengetahui lokasi akurat</h3>
        </div>
    </section>
    <section id="lokasi">
        <div class="container-fluid" data-aos="fade-up">
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
            <div id="mapTracker"></div>
        </div>
    </section>
    <div class="container my-5" data-aos="fade-up">
        <div class="section-header">
            <h3 class="section-title">Daerah/Tempat Mana Yang Ingin Kamu Cari?</h3>
            <p class="section-description">Cari Tempat Yang Ingin Kamu Kunjungi Disini</p>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-6">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Cari Tempat" id="search">
                    <button class="btn btn-primary" type="button" onclick="searchLokasi()">Cari</button>
                </div>
            </div>
        </div>
        <div class="row d-flex justify-content-center" id="outputLokasi"></div>
    </div>
    <section id="hewan" class="hewan">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h3 class="section-title">Hewan</h3>
                <p class="section-description">Berikut hewan-hewan yang dilestarikan di Kebun Binatang Surabaya</p>
            </div>
            <div class="row hewan-container" data-aos="fade-up" data-aos-delay="200">
                @foreach ($hewans as $hewan)
                    <div class="col-lg-4 col-md-6 hewan-item filter-app">
                        <img src="{{ asset('storage/' . $hewan->foto) }}" class="img-fluid" alt="">
                        <div class="hewan-info">
                            <h4>{{ $hewan->nama_hewan }}</h4>
                            <p style="font-style: italic">{{ $hewan->nama_ilmiah_hewan }}</p>
                            <button type="button" class="btn details-link" data-bs-toggle="modal"
                                data-bs-target="#exampleModal"
                                onclick="showModal('{{ $hewan->nama_hewan }}', '{{ $hewan->nama_ilmiah_hewan }}', '{{ $hewan->deskripsi }}', '{{ $hewan->jenis_hewan }}', '{{ $hewan->zona->nama_zona }}')">
                                <i class="bi bi-eye"></i>
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <script>
        function searchLokasi() {
    let search = document.getElementById('search').value;
    let warna1 = '#8C52FF'
            let warna2 = '#ffc0cb'
            let warna3 = '#FF914D'
            let warna4 = '#004AAD'
            let warna5 = '#A83D01'
            let warna6 = '#31F3FF'
    fetch('/search-lokasi?param=' + search)
        .then(response => response.json())
        .then(data => {
            console.log(data);
            let output = document.getElementById('outputLokasi');
            output.innerHTML = '';

            if (data.hewans != null) {
                data.hewans.forEach(element => {
                    let cardColor, textColor;
                            if(element.zona.nama_zona == 'Zona 1') {
                                cardColor = warna1;
                                textColor = 'white';
                            } else if (element.zona.nama_zona == 'Zona 2'){
                                cardColor = warna2;
                                textColor = 'black';
                            } else if (element.zona.nama_zona == 'Zona 3'){
                                cardColor = warna3;
                                textColor = 'white'
                            } else if (element.zona.nama_zona == 'Zona 4'){
                                cardColor = warna4;
                                textColor = 'white';
                            } else if (element.zona.nama_zona == 'Zona 5'){
                                cardColor = warna5;
                                textColor = 'white';
                            } else {
                                cardColor = warna6;
                                textColor = 'black';
                            }

                    output.innerHTML += `
                        <div class="col-md-3 my-2">
                            <div class="card" style="background-color: ${cardColor}; color: ${textColor};">
                                <div class="card-body">
                                    <h5 class="card-title fw-medium">${element.nama_hewan}</h5>
                                    <p class="card-text">Berada di <b>${element.zona.nama_zona}</b></p>
                                </div>
                            </div>
                        </div>
                    `;
                });
            }

            if (data.bangunans != null) {
                data.bangunans.forEach(element => {
                    let cardColor, textColor;
                            if(element.zona.nama_zona == 'Zona 1') {
                                cardColor = warna1;
                                textColor = 'white';
                            } else if (element.zona.nama_zona == 'Zona 2'){
                                cardColor = warna2;
                                textColor = 'black';
                            } else if (element.zona.nama_zona == 'Zona 3'){
                                cardColor = warna3;
                                textColor = 'white'
                            } else if (element.zona.nama_zona == 'Zona 4'){
                                cardColor = warna4;
                                textColor = 'white';
                            } else if (element.zona.nama_zona == 'Zona 5'){
                                cardColor = warna5;
                                textColor = 'white';
                            } else {
                                cardColor = warna6;
                                textColor = 'black';
                            }

                    output.innerHTML += `
                        <div class="col-md-3 my-2">
                            <div class="card" style="background-color: ${cardColor}; color: ${textColor};">
                                <div class="card-body">
                                    <h5 class="card-title fw-medium">${element.nama_bangunan}</h5>
                                    <p class="card-text">Berada di <b>${element.zona.nama_zona}</b></p>
                                </div>
                            </div>
                        </div>
                    `;
                });
            }
        });
}
    </script>
@endsection