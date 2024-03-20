<div class="w-full">
    <div
        class="flex items-center p-4 font-sans text-2xl antialiased font-semibold leading-snug shrink-0 text-blue-gray-900">
        Hapus Barang
    </div>
    <div
        class="relative p-4 font-sans text-base antialiased font-light leading-relaxed border-t border-b border-t-blue-gray-100 border-b-blue-gray-100 text-blue-gray-500">
        Apakah anda yakin untuk menghapus barang <div class="font-bold">'{{$this->jenis}}'</div> dengan nomor <div class="font-bold">'{{$this->no}}'</div>
    </div>
    <div class="flex flex-wrap items-center justify-end p-4 shrink-0 text-blue-gray-500">
        <button data-ripple-dark="true" data-dialog-close="true" type="button" 
            class="px-6 py-3 mr-1 font-sans text-xs font-bold text-red-500 uppercase transition-all rounded-lg middle none center hover:bg-red-500/10 active:bg-red-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
            Cancel
        </button>
        <button data-ripple-light="true" type="submit" wire:click='delete({{$this->id}})'
            class="middle none center rounded-lg bg-gradient-to-tr from-green-600 to-green-400 py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
            Confirm
        </button>
    </div>
</div>
