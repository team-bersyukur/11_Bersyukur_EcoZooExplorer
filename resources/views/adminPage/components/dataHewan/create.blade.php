@extends('adminPage.layouts.main')
@section('content')
    <a href="/master/data-hewan" class=" btn btn-secondary text-decoration-none my-4">Kembali</a>
    @if ($errors->any())
        <div class="alert alert-danger" role="alert">
            {{ implode('', $errors->all(':message')) }}
        </div>
    @endif
    <div class="row">
        <div class="col-lg-10">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-primary">
                        Tambah Data Hewan
                    </h4>
                </div>
                <div class="card-body">

                    <form method="POST" action="/master/data-hewan" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label for="zona_id">Zona</label>
                            <select class="custom-select" id="zona_id" name="zona_id" required>
                                <option value="">Pilih Zona</option>
                                @foreach ($zonas as $zona)
                                    <option value="{{ $zona->id }}">{{ $zona->nama_zona }}</option>
                                @endforeach
                            </select>
                            @error('zona_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="nama_hewan">Nama Hewan</label>
                            <input class="form-control @error('nama_hewan') is-invalid @enderror" id="nama_hewan" type="text"
                                name="nama_hewan" value="{{ old('nama_hewan') }}" required autocomplete="off">
                            @error('nama_hewan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="nama_ilmiah_hewan">Nama Ilmiah Hewan</label>
                            <input class="form-control @error('nama_ilmiah_hewan') is-invalid @enderror" id="nama_ilmiah_hewan" type="text"
                                name="nama_ilmiah_hewan" value="{{ old('nama_ilmiah_hewan') }}" required autocomplete="off">
                            @error('nama_ilmiah_hewan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="jenis_hewan">Jenis Hewan</label>
                            <select class="custom-select" id="jenis_hewan" name="jenis_hewan" required>
                                <option value="">Pilih Jenis Hewan</option>
                                <option value="Aves">Aves</option>
                                <option value="Reptil">Reptil</option>
                                <option value="Pisces">Pisces</option>
                                <option value="Mammalia">Mammalia</option>
                            </select>
                            @error('jenis_hewan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="imageFile" class="form-label">Foto</label>
                            <img class="imgPreview img-fluid col-sm-5 d-block mb-3" style="width: 100px">
                            <input type="file" class="form-control @error('foto') is-invalid @enderror" name="foto"
                                id="imageFile" onchange="tampilImage()">
                            @error('foto')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="deskripsi">Deskripsi</label>
                            <input id="deskripsi" type="hidden" name="deskripsi" value="{{ old('deskripsi') }}" required>
                            <trix-editor input="deskripsi"></trix-editor>
                            @error('deskripsi')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-4 mt-5">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script>
        $(document).ready(function() {
            $(".selector").flatpickr({
                dateFormat: "Y-m-d",
                altFormat: "Y-m-d",
                ariaDateFormat: "Y-m-d",
            });
            $(".selectorTime").flatpickr({
                enableTime: true,
                noCalendar: true,
                dateFormat: "H:i",
                time_24hr: true
            });

        });

        function tampilImage() {
            const image = document.querySelector('#imageFile');
            const imgPreview = document.querySelector('.imgPreview');

            const oFReader = new FileReader();

            oFReader.readAsDataURL(image.files[0]);

            oFReader.onload = function(oFREvent) {
                imgPreview.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
