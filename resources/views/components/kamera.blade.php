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
    const submitButton = document.getElementById('submitButton')
    let id
    let imageData

    async function startKamera(idBarang) {
        console.log(idBarang)
        var stream = null;
        try {
            stream = await navigator.mediaDevices.getUserMedia({
                video: { facingMode: "user" }, // Set the camera to front-facing (mirrorless)
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
        const context = canvas.getContext("2d");
        context.translate(canvas.width, 0);// Move the context to the right by the width of the canvas
        context.scale(-1, 1); // Flip the context horizontally
        context.drawImage(kamera, 0, 0, kamera.videoWidth, kamera.videoHeight);
        imageData = canvas.toDataURL('image/jpg');
        submitButton.classList.remove('invisible')

        if (kamera.srcObject) {
            kamera.srcObject.getTracks().forEach(track => track.stop());
            kamera.srcObject = null;
        }

    }

</script>
