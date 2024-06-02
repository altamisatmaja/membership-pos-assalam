@extends('pelanggan.layouts.app')

@section('title', 'Dashboard | QR')

@section('content')
    <div class="bg-green-100 flex justify-center items-center h-screen">
        <div class="shadow-md rounded-lg bg-white p-4">
            <h1 class="text-2xl font-bold mb-2">QR untuk pembayaran</h1>
            <div class="mt-7" id="qrcode-container">
                {!! DNS1D::getBarcodeSVG($nomor_pas, 'EAN13', 5, 100) !!}
                <p class="items-center flex items-center justify-center">{{ $member->nama_member }}</p>
            </div>
            <button id="download-button"
                class="bg-green-800 w-full hover:bg-green-700 text-white font-bold py-2 px-4 rounded my-2 mt-5">
                Download QR code
            </button>
            <div class="text-center">
                <p class="text-gray-500 text-sm mt-3">Gunakan untuk setiap pembayaran anda ya</p>
            </div>
        </div>
    </div>
@endsection

@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/1.4.1/html2canvas.min.js"></script>
    <script>
        document.getElementById('download-button').addEventListener('click', function() {
            var qrCodeContainer = document.getElementById('qrcode-container');

            html2canvas(qrCodeContainer).then(canvas => {
                var dataURL = canvas.toDataURL('image/png');

                var downloadLink = document.createElement('a');
                downloadLink.href = dataURL;
                downloadLink.download = 'qrcode.png';

                document.body.appendChild(downloadLink);
                downloadLink.click();
                document.body.removeChild(downloadLink);
            }).catch(function(error) {
                console.error('Gagal mendownload QR:', error);
            });
        });
    </script>
@endpush
