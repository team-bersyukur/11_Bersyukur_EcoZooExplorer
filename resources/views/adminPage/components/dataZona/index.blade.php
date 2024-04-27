{{-- @dd($zonas) --}}
@extends('adminPage.layouts.main')
@section('content')
    <a href="/master/data-zona/create" class="btn btn-info mb-4"><i class=" fas fa-solid fa-plus"></i> Tambah Data Zona</a>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Zona</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>No.</th>
                            <th>Zona</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($zonas as $zona)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="text-center">{{ $zona->nama_zona }}</td>
                                <td class="text-center">
                                    <a href="/master/data-zona/{{ $zona->id }}/edit" class="btn btn-success btn-sm"><i
                                            class="fas fa-solid fa-pen"></i></a>
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                        data-target="#zonaDetail"
                                        onclick="showImage('{{ $zona->foto_zona_detail }}', {{ $zona->hewan }}, '{{ $zona->nama_zona }}', '{{ $zona->deskripsi_zona }}')">
                                        <i class="fas fa-solid fa-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger hapus" data-id="{{ $zona->id }}"><i
                                            class="fas fa-solid fa-trash"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="zonaDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="namaZona"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="fotoZona" alt="foto" width="100%">
                    <table class="table table-borderless">
                        <tr>
                            <td>Hewan-hewan</td>
                            <td>:</td>
                            <td id="ilmiah">
                                <ul></ul>
                            </td>
                        </tr>
                        <tr>
                            <td>Deskripsi</td>
                            <td>:</td>
                            <td id="deskripsi"></td>
                        </tr>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
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
                        url: '/master/data-zona/' + $(this).data('id'),
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

    <script>
        function showImage(image, hewans, nama_zona, deskripsi) {
            $('#fotoZona').attr('src', '/storage/' + image);
            $('#namaZona').text(nama_zona);
            $('#deskripsi').html(deskripsi);

            let hewan = '';
            hewans.forEach((item) => {
                hewan += `<li>${item.nama_hewan} (${item.nama_ilmiah_hewan})</li>`;
            });
            $('#ilmiah ul').html(hewan);
        }
    </script>
@endsection
