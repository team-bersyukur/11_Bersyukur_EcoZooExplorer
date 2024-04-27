@extends('userPage.main')
@section('content')
    <section id="hero">
        <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
            <h1 class="section-title">Temukan harta karun anda</h1>
            <h3 class="section-description text-white">Aktifkan <span class="text-warning fw-bold">kamera</span> anda untuk
                memindai barcode</h3>
        </div>
    </section>
    <div class="container my-5 w-50">
        <div id="reader" width="100px"></div>
    </div>
    <script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
    <script>
        function onScanSuccess(decodedText, decodedResult) {
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
                            text: data.message + ' | ' + data.waktu,
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

            html5QrcodeScanner.clear();
        }

        function onScanFailure(error) {
            console.warn(`Code scan error = ${error}`);
        }

        let html5QrcodeScanner = new Html5QrcodeScanner(
            "reader", {
                fps: 10,
                qrbox: {
                    width: 250,
                    height: 250
                }
            },
            false);
        html5QrcodeScanner.render(onScanSuccess, onScanFailure);
    </script>
@endsection
