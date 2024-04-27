@extends('adminPage.layouts.main')
@section('content')
    <div class="d-flex">
        <a href="/master/data-treasure/create" class="btn btn-info mb-4"><i class=" fas fa-solid fa-plus"></i> Tambah Data
            Treasure</a>
        {{-- <a href="/acak-treasure" class="btn btn-primary mb-4 ml-2"><i class=" fas fa-solid fa-random"></i> Acak Treasure</a> --}}
        <form action="/acak-treasure" method="post">
            @method('put')
            @csrf
            <button type="submit" class="btn btn-primary mb-4 ml-2"><i class=" fas fa-solid fa-random"></i> Acak
                Treasure</button>
        </form>
    </div>
    {{-- <form action="/kode-unik" method="POST" class="my-4">
        @csrf
        <div class="form-group">
            <label for="kode_unik">Kode Unik</label>
            <input type="text" class="form-control" id="kode_unik" name="kode_unik" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form> --}}

    <div class="row my-4">
        <div class="col-md-4">
            <div id="reader" width="200"></div>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Treasure</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>No.</th>
                            <th>Zona</th>
                            <th>Kode Unik</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($treasures as $treasure)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="text-center">{{ $treasure->zona->nama_zona }}</td>
                                <td class="text-center">{{ $treasure->kode_unik }}</td>
                                <td class="text-center">
                                    <a href="/master/data-treasure/{{ $treasure->id }}/edit"
                                        class="btn btn-success btn-sm"><i class="fas fa-solid fa-pen"></i></a>
                                    <button class="btn btn-sm btn-danger hapus" data-id="{{ $treasure->id }}"><i
                                            class="fas fa-solid fa-trash"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
@section('script')
    @if (session('success'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 1500,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal
                        .stopTimer)
                    toast.addEventListener('mouseleave', Swal
                        .resumeTimer)
                }
            })
            Toast.fire({
                icon: 'success',
                title: '{{ session('success') }}'
            }).then((result) => {
                location.reload();
            })
        </script>
    @endif
    @if (session('error'))
        <script>
            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 1500,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal
                        .stopTimer)
                    toast.addEventListener('mouseleave', Swal
                        .resumeTimer)
                }
            })
            Toast.fire({
                icon: 'error',
                title: '{{ session('error') }}'
            }).then((result) => {
                location.reload();
            })
        </script>
    @endif
    <script>
        $('#dataTable').on('click', '.hapus', function() {
            Swal.fire({
                title: 'Yakin Menghapus Data?',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, Hapus!',
                preConfirm: () => {
                    return $.ajax({
                        url: '/master/data-treasure/' + $(this).data('id'),
                        method: 'POST',
                        data: {
                            _token: "{{ csrf_token() }}",
                            _method: 'DELETE'
                        },
                        success: function(data) {
                            const Toast = Swal.mixin({
                                toast: true,
                                position: 'top-end',
                                showConfirmButton: false,
                                timer: 1500,
                                timerProgressBar: true,
                                didOpen: (toast) => {
                                    toast.addEventListener('mouseenter', Swal
                                        .stopTimer)
                                    toast.addEventListener('mouseleave', Swal
                                        .resumeTimer)
                                }
                            })
                            Toast.fire({
                                icon: 'success',
                                title: 'Data Terhapus'
                            }).then((result) => {
                                location.reload();
                            })
                        }
                    })
                }
            })
        })
    </script>

    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
    <script>
        function onScanSuccess(decodedText, decodedResult) {
            // handle the scanned code as you like, for example:
            console.log(`Code matched = ${decodedText}`, decodedResult);

            fetch('/kode-unik', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        kode_unik: decodedText
                    })
                })
                .then(response => response.json())
                .then(data => {
                    if (data.status == 'success') {
                        Swal.fire({
                            icon: 'success',
                            title: 'Berhasil',
                            text: data.message,
                        }).then((result) => {
                            location.reload();
                        })
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Gagal',
                            text: data.message,
                        }).then((result) => {
                            location.reload();
                        })
                    }
                })
                .catch((error) => {
                    console.error('Error:', error);
                });


            // Stop the scanner to avoid scanning of other codes after the match.
            html5QrcodeScanner.clear();
        }

        function onScanFailure(error) {
            console.warn(`Code scan error = ${error}`);
        }

        let html5QrcodeScanner = new Html5QrcodeScanner(
            "reader", {
                fps: 20,
                qrbox: {
                    width: 250,
                    height: 250
                }
            },
            /* verbose= */
            false);
        html5QrcodeScanner.render(onScanSuccess, onScanFailure);
    </script>
@endsection
