<div class="w-full h-full">
    
</div>

<script>
    const kamera = document.getElementById('kamera')
    const canvas = document.getElementById('canvas')
    let id

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
        console.log(id);
        canvas.width = kamera.videoWidth;
        canvas.height = kamera.videoHeight;
        canvas.getContext("2d").drawImage(kamera, 0, 0, kamera.videoWidth, kamera.videoHeight);
        var imageData = canvas.toDataURL('image/jpg');

        if (kamera.srcObject) {
            kamera.srcObject.getTracks().forEach(track => track.stop());
            kamera.srcObject = null;
        }
        var file = dataURItoBlob(imageData); // Mengonversi data gambar menjadi blob

        const formData = new FormData();
        formData.append('gambar', file, 'gambar.jpg');
        
        // Membangun URL berdasarkan ID barang
        const url = `/barang/pinjam/${id}`;
        
        // Mengirim data ke server menggunakan Fetch atau Axios
        fetch(url, {
            method: 'POST',
            body: formData
        })
        .then(response => {
            // Handle response dari server
            console.log(response);
        })
        .catch(error => {
            // Handle error
            console.error('Error:', error);
        });
            console.log(url);
    }


    function dataURItoBlob(dataURI) {
        var byteString = atob(dataURI.split(',')[1]);
        var mimeString = dataURI.split(',')[0].split(':')[1].split(';')[0];
        var ab = new ArrayBuffer(byteString.length);
        var ia = new Uint8Array(ab);
        for (var i = 0; i < byteString.length; i++) {
            ia[i] = byteString.charCodeAt(i);
        }
        var blob = new Blob([ab], {
            type: mimeString
        });
        return blob;
    }
</script>
