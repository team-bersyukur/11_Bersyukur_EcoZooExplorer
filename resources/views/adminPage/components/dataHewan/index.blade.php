@extends('adminPage.layouts.main')
@section('content')
    <a href="/master/data-hewan/create" class="btn btn-info mb-4"><i class=" fas fa-solid fa-plus"></i> Tambah Data Hewan</a>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Hewan</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead class="text-center">
                        <tr>
                            <th>No.</th>
                            <th>Nama Hewan (Nama Ilmiah)</th>
                            <th>Jenis Hewan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        @foreach ($hewans as $hewan)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td class="text-center">{{ $hewan->nama_hewan }} ({{ $hewan->nama_ilmiah_hewan }})</td>
                                <td class="text-center">{{ $hewan->jenis_hewan }}</td>
                                <td class="text-center">
                                    <a href="/master/data-hewan/{{ $hewan->id }}/edit" class="btn btn-success btn-sm"><i
                                            class="fas fa-solid fa-pen"></i></a>
                                    <button type="button" class="btn btn-sm btn-primary" data-toggle="modal"
                                        data-target="#hewanDetail"
                                        onclick="showImage('{{ $hewan->foto }}', '{{ $hewan->nama_hewan }}', '{{ $hewan->nama_ilmiah_hewan }}', '{{ $hewan->jenis_hewan }}', '{{ $hewan->deskripsi }}')">
                                        <i class="fas fa-solid fa-eye"></i>
                                    </button>
                                    <button class="btn btn-sm btn-danger hapus" data-id="{{ $hewan->id }}"><i
                                            class="fas fa-solid fa-trash"></i></button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="hewanDetail" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="namaHewan"></h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img id="fotoHewan" alt="foto" width="100%">
                    <table class="table table-borderless">
                        <tr>
                            <td>Nama Ilmiah</td>
                            <td>:</td>
                            <td id="ilmiah"></td>
                        </tr>
                        <tr>
                            <td>Jenis</td>
                            <td>:</td>
                            <td id="jenis"></td>
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
                        url: '/master/data-hewan/' + $(this).data('id'),
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
        function showImage(image, nama_hewan, nama_ilmiah, jenis_hewan, deskripsi) {
            $('#fotoHewan').attr('src', '/storage/' + image);
            $('#namaHewan').text(nama_hewan);
            $('#ilmiah').text(nama_ilmiah);
            $('#jenis').text(jenis_hewan);
            $('#deskripsi').html(deskripsi);
        }
    </script>
@endsection
