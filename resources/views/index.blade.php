<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ Storage::url('public/src/assets/vFavicon2.svg') }}" type="image/x-icon">
    <title>{{ config('app.name') }}</title>

    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

        * {
            font-family: 'Roboto', sans-serif;
        }

        ::-webkit-scrollbar {
            display: none;
        }

        *{
            scroll-behavior: smooth;
        }
    </style>
    @livewireStyles

</head>

<body>

    @yield('content')

    @livewireScripts

    <script src="/asset/jquery.js"></script>

    <script>
        $(document).ready(function() {
            $('#formKembali').submit(function(event) {
                event.preventDefault(); // Prevent the form from submitting via the browser
                var form = $(this);
                var token = $('meta[name="csrf-token"]').attr('content');
                var url = form.attr('action');
                var method = form.attr('method');
                var no_barang = $('#no_barang').val();
                var file = null;

                var imageData = $('#canvas')[0].toDataURL('image/jpg');
                var fileBlob = dataURItoBlob(imageData);

                var formData = new FormData();
                formData.append('_token', token);
                formData.append('no_barang', no_barang);
                formData.append('file', fileBlob);

                $('#buttonKembali').prop('disabled', true);

                $.ajax({
                    type: method,
                    url: url,
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        console.log('sukses');
                        sessionStorage.setItem('successMessage',
                            'Anda berhasil meminjam barang');
                        window.location.href = '/profile/barang';
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                        alert('Error submitting form!');
                    },
                    complete: function() {
                        // Re-enable the submit button after the request is complete
                        $('#buttonKembali').prop('disabled', false);
                    }
                });
            });

            function dataURItoBlob(dataURI) {
                var byteString = atob(dataURI.split(',')[1]);
                var mimeString = dataURI.split(',')[0].split(':')[1].split(';')[0];
                var ab = new ArrayBuffer(byteString.length);
                var ia = new Uint8Array(ab);
                for (var i = 0; i < byteString.length; i++) {
                    ia[i] = byteString.charCodeAt(i);
                }
                var blob = new Blob([ia], {
                    type: mimeString
                });
                return blob;
            }
        });
    </script>

    <script>
        $(document).ready(function() {
            $('#formPinjam').submit(function(event) {
                event.preventDefault(); // Prevent the form from submitting via the browser
                var form = $(this);
                var token = $('meta[name="csrf-token"]').attr('content');
                var url = form.attr('action');
                var method = form.attr('method');
                var keperluan = $('#keperluan').val();
                var no_barang = $('#no_barang').val();
                var tglPengembalian = $('#tglPengembalian').val();
                var file = null;

                var imageData = $('#canvas')[0].toDataURL(
                    'image/jpg'); // Assuming imageData is from a canvas element
                if (!imageData || imageData === 'data:,') {
                    console.error('Harap ambil foto terlebih dahulu sebelum melanjutkan.');
                    return;
                }
                var file = dataURItoBlob(imageData);

                // Validations
                if (!keperluan || !tglPengembalian || !file) {
                    $('#keperluan').before(
                        '<div class="absolute text-red-500 text-sm -translate-y-6" id="alert1">Semua kolom harus diisi.</div>'
                    );
                    return;
                }

                var today = new Date().toISOString().split('T')[0];
                if (tglPengembalian < today) {
                    $('#keperluan').before(
                        '<div class="absolute text-red-500 text-sm -translate-y-6" id="alert2">Tanggal pengembalian tidak boleh lebih awal dari hari ini.</div>'
                    );
                    $('#alert1').remove(); // Remove alert 1 if alert 2 is shown
                    return;
                }

                var formData = new FormData();
                formData.append('_token', token);
                formData.append('keperluan', keperluan);
                formData.append('no_barang', no_barang);
                formData.append('tglPengembalian', tglPengembalian);
                formData.append('file', file);

                // Disable the submit button
                $('#buttonPinjam').prop('disabled', true);

                $.ajax({
                    type: method,
                    url: url,
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        console.log('sukses');
                        window.location.href = '/profile/barang';
                    },
                    error: function(xhr, status, error) {
                        console.error('Error:', error);
                        alert('Error submitting form!');
                    },
                    complete: function() {
                        // Re-enable the submit button after the request is complete
                        $('#buttonPinjam').prop('disabled', false);
                    }
                });
            });

            function dataURItoBlob(dataURI) {
                var byteString = atob(dataURI.split(',')[1]);
                var mimeString = dataURI.split(',')[0].split(':')[1].split(';')[0];
                var ab = new ArrayBuffer(byteString.length);
                var ia = new Uint8Array(ab);
                for (var i = 0; i < byteString.length; i++) {
                    ia[i] = byteString.charCodeAt(i);
                }
                var blob = new Blob([ia], {
                    type: mimeString
                });
                return blob;
            }
        });
    </script>

</body>

</html>
