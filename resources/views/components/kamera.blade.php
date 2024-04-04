<div class="">
    <div data-dialog-backdrop="dialogKamera" data-dialog-backdrop-close="true"
        class="pointer-events-none fixed inset-0 z-[999] grid h-screen w-screen bg-black bg-opacity-60 opacity-0 backdrop-blur-sm transition-opacity duration-300">
        <div data-dialog="dialogKamera"
            class="relative rounded-lg font-sans text-base font-light leading-relaxed text-blue-gray-500 antialiased shadow-2xl">
            <div class="w-full h-[85%]">
                <video src="" class="w-full h-full border-2" id="kamera" autoplay></video>
            </div>
            <div class="w-full h-full ">
                <buttton class="h-[15%] flex justify-center items-center ">
                    <i class="ph ph-camera bg-white rounded-full text-black p-2 text-5xl hover:cursor-pointer"
                        onclick="ambilGambar()" data-dialog-close="true"></i>
                </buttton>
            </div>
        </div>
    </div>
</div>

<script>
    const kamera = document.getElementById('kamera')
    const canvas = document.getElementById('canvas')
    let id
    let imageData

    async function startKamera(idBarang) {
        console.log(idBarang)
        var stream = null;
        try {
            stream = await navigator.mediaDevices.getUserMedia({
                video: true,
                audio: false
            })
        } catch (error) {
            alert(error)
            return
        }
        id = idBarang
        kamera.srcObject = stream;
    }

    function ambilGambar() {
        canvas.classList.remove('hidden');
        canvas.width = kamera.videoWidth;
        canvas.height = kamera.videoHeight;
        canvas.getContext("2d").drawImage(kamera, 0, 0, kamera.videoWidth, kamera.videoHeight);
        imageData = canvas.toDataURL('image/jpg');

        if (kamera.srcObject) {
            kamera.srcObject.getTracks().forEach(track => track.stop());
            kamera.srcObject = null;
        }

    }

    




    function kirimdata() {
        // ambilGambar();
        // const formData = new FormData();

        // // Jika gambar telah diambil, tambahkan ke FormData
        // if (imageData) {
        //     console.log('data masuk');
        //     var file = dataURItoBlob(imageData);
        //     formData.append('gambar', file, 'gambar.jpg');
        // }

        // var token = $('meta[name="csrf-token"]').attr('content');
        var token = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            type: 'POST',
            url: '/barang/pinjam/proses',
            data: {
                _token: token,
                apalah: 'your_data_here'
            },
            cache: false,
            success: function(respond) {
                console.log('sukses');
            }
        });

    }


    
</script>
