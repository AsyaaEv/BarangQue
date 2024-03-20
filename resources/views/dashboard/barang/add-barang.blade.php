<div class="">
    <i class="ph ph-plus text-2xl text-white " data-ripple-light="true" data-dialog-target="dialog" id="dialog"></i>
    <div data-dialog-backdrop="dialog"
        class="pointer-events-none  fixed inset-0 -z-[999] grid h-screen w-screen place-items-center bg-black bg-opacity-60 opacity-0 backdrop-blur-sm transition-opacity duration-300">
        <div data-dialog="dialog"
            class="relative m-4  py-2 px-2 rounded-lg bg-white font-sans text-base font-light leading-relaxed text-blue-gray-500 antialiased shadow-2xl">
            <div class="flex flex-col justify-center border-b-2 mb-2">
                <div class="font-bold text-xl">Tambah Barang</div>
                <div class="text-sm">Silakan masukan data dibawah ini untuk menambahkan data barang</div>
            </div>
            @livewire('dashboard.input.barang.add-barang')
        </div>
    </div>
</div>

<script>
    let togDialog = false;
    const dialog = document.getElementById('dialog')
    dialog.addEventListener("click", function() {
        togDialog = true
    })

    function cancel() {
        togDialog = false;
    }

</script>
