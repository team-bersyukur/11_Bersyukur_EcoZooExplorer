@extends('adminPage.layouts.main')
@section('content')
    <a href="/master/data-zona" class=" btn btn-secondary text-decoration-none my-4">Kembali</a>
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
                        Tambah Data Zona
                    </h4>
                </div>
                <div class="card-body">

                    <form method="POST" action="/master/data-zona" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-4">
                            <label for="nama_zona">Nama Zona</label>
                            <input class="form-control @error('nama_zona') is-invalid @enderror" id="nama_zona" type="text"
                                name="nama_zona" value="{{ old('nama_zona') }}" required autocomplete="off">
                            @error('nama_zona')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="imageFile" class="form-label">Foto</label>
                            <img class="imgPreview img-fluid col-sm-5 d-block mb-3" style="width: 100px">
                            <input type="file" class="form-control @error('foto_zona') is-invalid @enderror" name="foto_zona"
                                id="imageFile" onchange="tampilImage()">
                            @error('foto_zona')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="deskripsi_zona">Deskripsi</label>
                            <input id="deskripsi_zona" type="hidden" name="deskripsi_zona" value="{{ old('deskripsi_zona') }}" required>
                            <trix-editor input="deskripsi_zona"></trix-editor>
                            @error('deskripsi_zona')
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
