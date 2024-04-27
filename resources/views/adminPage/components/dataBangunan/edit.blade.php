@extends('adminPage.layouts.main')
@section('content')
    <a href="/master/data-bangunan" class=" btn btn-secondary text-decoration-none my-4">Kembali</a>
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
                        Ubah Data Bangunan
                    </h4>
                </div>
                <div class="card-body">

                    <form method="POST" action="/master/data-bangunan/{{ $bangunan->id }}" enctype="multipart/form-data">
                        @method('put')
                        @csrf
                        <div class="mb-4">
                            <label for="zona_id">Zona</label>
                            <select class="custom-select" id="zona_id" name="zona_id" required>
                                <option value="">Pilih Zona</option>
                                @foreach ($zonas as $zona)
                                    <option {{ $zona->id == $bangunan->zona_id ? 'selected' : '' }}
                                        value="{{ $zona->id }}">{{ $zona->nama_zona }}</option>
                                @endforeach
                            </select>
                            @error('zona_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="mb-4">
                            <label for="nama_bangunan">Nama Bangunan</label>
                            <input class="form-control @error('nama_bangunan') is-invalid @enderror" id="nama_bangunan"
                                type="text" name="nama_bangunan"
                                value="{{ old('nama_bangunan', $bangunan->nama_bangunan) }}" required autocomplete="off">
                            @error('nama_bangunan')
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
    </script>
@endsection
