<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="{{ Storage::url('public/src/assets/vFavicon2.svg') }}" type="image/x-icon">
    <title>{{ config('app.name') }}</title>


    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/@phosphor-icons/web@2.0.3/src/regular/style.css" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap');

        * {
            font-family: 'Roboto', sans-serif;
        }

        ::-webkit-scrollbar {
            display: none;
        }
    </style>
    @livewireStyles

</head>

<body>

    @yield('content')

    @livewireScripts

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function() {
            $('#formPinjam').submit(function() {
                var form = $(this);
                var token = $('meta[name="csrf-token"]').attr('content');
                var url = form.attr('action');
                var method = form.attr('method');
                var keperluan = $('#keperluan').val();
                var no_barang = $('#no_barang').val();
                var tglPengembalian = $('#tglPengembalian').val();
                var file = null;
                
                if (imageData) {
                    console.log('data masuk');
                    file = dataURItoBlob(imageData);
                }
                
                var formData = new FormData();
                formData.append('_token', token);
                formData.append('keperluan', keperluan);
                formData.append('no_barang', no_barang);
                formData.append('tglPengembalian', tglPengembalian);
                formData.append('file', file);

                
                $.ajax({
                    type: method,
                    url: url,
                    data: formData,
                    contentType: false, 
                    processData: false,
                    success: function(response) {
                        console.log('sukses');
                    },
                    error: function(xhr, status, error) {
                        console.log('Error:', error);
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
