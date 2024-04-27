@extends('adminPage.layouts.main')
@section('content')
    <a href="/master/data-treasure" class=" btn btn-secondary text-decoration-none my-4">Kembali</a>
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
                        Tambah Data Treasure
                    </h4>
                </div>
                <div class="card-body">

                    <form method="POST" action="/master/data-treasure" enctype="multipart/form-data">
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
