<div class="w-full h-screen px-[1rem] py-[2rem] flex flex-col gap-[20px]">
    <div class="border-[2px] rounded-[20px] px-[1rem] py-[1rem] flex flex-col gap-[20px]">
        <div class="w-full h-auto flex gap-[10px] items-center border-b-2 pb-[1rem]">
            <i class="ph ph-files text-2xl"></i>
            <div class="">Overview</div>
        </div>
        <div class="w-full h-auto flex gap-[10px] items-center border-b-2 pb-[1rem]">
            <div class="p-2 flex justify-center items-center rounded-full bg-white border-2">
                <i class="ph ph-files text-2xl"></i>
            </div>
            <div class="w-full h-full flex flex-col ">
                <div class="text-[12px]">Total Barang</div>
                <div class="text-lg font-bold">{{ $totalBarang }}</div>
            </div>
        </div>
        <div class="w-full h-auto flex gap-[10px] items-center border-b-2 pb-[1rem]">
            <div class="p-2 flex justify-center items-center rounded-full bg-white border-2">
                <i class="ph ph-files text-2xl text-green-500"></i>
            </div>
            <div class="w-full h-full flex flex-col ">
                <div class="text-[12px]">Total Barang Diam</div>
                <div class="text-lg font-bold">{{ $totalBarangDiam }}</div>
            </div>
        </div>
        <div class="w-full h-auto flex gap-[10px] items-center border-b-2 pb-[1rem]">
            <div class="p-2 flex justify-center items-center rounded-full bg-white border-2">
                <i class="ph ph-files text-2xl text-red-500"></i>
            </div>
            <div class="w-full h-full flex flex-col ">
                <div class="text-[12px]">Total Barang Dipinjam</div>
                <div class="text-lg font-bold">{{ $jumlahBarangDipinjam }}</div>
            </div>
        </div>
    </div>
    <div class="border-[2px] rounded-[20px] px-[1rem] py-[1rem] flex flex-col gap-[20px]">
        <div class="w-full h-auto flex gap-[10px] items-center border-b-2 pb-[1rem]">
            <i class="ph ph-files text-2xl"></i>
            <div class="">Audit</div>
        </div>
    </div>
    <button wire:click='logout'
        class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gray-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
        type="button">
        Button
    </button>
</div>
