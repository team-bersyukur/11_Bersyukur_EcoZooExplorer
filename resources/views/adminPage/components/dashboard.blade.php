@extends('adminPage.layouts.main')
@section('content')
    <div class="container mb-4">
        <h2 class="fw-bolder" style="font-weight: bold">Master Data</h2>
        <div class="row mt-3">
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card shadow h-100 py-2" style="border-left: 4px solid yellowgreen">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1" style="color: yellowgreen">
                                    Total Hewan
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ count($hewans) }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fa fa-bug fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card shadow h-100 py-2" style="border-left: 4px solid green">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1" style="color: green">
                                    Total Zona
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ count($zonas) }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fa fa-map fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card shadow h-100 py-2" style="border-left: 4px solid red">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1" style="color: red">
                                    Total Bangunan
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ count($bangunans) }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fa fa-home fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card shadow h-100 py-2" style="border-left: 4px solid cadetblue">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1" style="color: cadetblue">
                                    Total Treasure (Benar)
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ count($treasuresTrue) }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fa fa-star fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card shadow h-100 py-2" style="border-left: 4px solid cadetblue">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-uppercase mb-1" style="color: cadetblue">
                                    Total Treasure (Salah)
                                </div>
                                <div class="h5 mb-0 font-weight-bold text-gray-800">{{ count($treasuresFalse) }}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fa fa-times fa-2x text-gray-300"></i>
                            </div>
                        </div>
                    </div>
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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endsection
