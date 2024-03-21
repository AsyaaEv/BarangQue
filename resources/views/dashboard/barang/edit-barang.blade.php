<div class="">
    <div data-dialog-backdrop="DIALOG"
        class="pointer-events-none  fixed inset-0 z-[999] grid h-screen w-screen place-items-center bg-black bg-opacity-60 opacity-0 backdrop-blur-sm transition-opacity duration-300">
        <div data-dialog="DIALOG"
            class="relative m-4  py-2 px-2 rounded-lg bg-white font-sans text-base font-light leading-relaxed text-blue-gray-500 antialiased shadow-2xl">
            <div class="flex flex-col justify-center border-b-2 mb-2">
                <div class="font-bold text-xl">Edit Barang</div>
                <div class="text-sm">Silakan mengganti data dibawah ini untuk mengedit data barang</div>
            </div>
            @livewire('dashboard.input.barang.edit-barang')
        </div>
    </div>
</div>