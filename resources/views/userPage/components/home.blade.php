@extends('userPage.main')
@section('content')
    <section id="hero">
        <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
            <h1 class="section-title">Map Zona Kebun Binatang Surabaya</h1>
            <h3 class="section-description text-white" >Aktifkan <span class="text-danger fw-bold">GPS</span> anda untuk mengetahui lokasi akurat</h3>
        </div>
    </section>
    <section id="lokasi">
        <div class="container-fluid" data-aos="fade-up">
            {{-- <div class="section-header">
                <h3 class="section-title">Map Zona Kebun Binatang Surabaya</h3>
                <h5 class="section-description">Aktifkan <span class="text-danger">GPS</span> anda untuk mengetahui lokasi akurat</h5>
            </div> --}}
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
    <section id="hewan" class="hewan">
        <div class="container" data-aos="fade-up">
            <div class="section-header">
                <h3 class="section-title">Hewan</h3>
                <p class="section-description">Berikut hewan-hewan yang dilestarikan di Kebun Binatang Surabaya</p>
            </div>
            <div class="row hewan-container" data-aos="fade-up" data-aos-delay="200">
                @foreach ($hewans as $hewan)    
                    <div class="col-lg-4 col-md-6 hewan-item filter-app">
                        <img src="{{ asset('storage/' . $hewan->foto) }}" class="img-fluid"
                            alt="">
                        <div class="hewan-info">
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
    </section>
@endsection