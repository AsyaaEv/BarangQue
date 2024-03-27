<div class=" p-4">
    <div
        class="flex items-center p-2 font-sans text-xl antialiased font-semibold leading-snug shrink-0 text-primary border-b-2">
        <i class="ph ph-upload-simple p-2 rounded-full bg-primary text-white mr-2"></i>
        Unggah Foto Profile
    </div>
    <div class="w-full h-auto">
        <div class="">Pilih file untuk menggunggah foto profile</div>
        <div class="text-sm">type (png or jpg) maksimal size 1mb</div>
    </div>
    <form wire:submit.prevent='unggahPP'>
        <div class="w-full h-auto mt-4">
            <input type="file" wire:model='fotoNew'>
            @error('fotoNew')
                <div class="text-red-500 text-sm ">{{ $message }}</div>
            @enderror
            
        </div>
        <div class="w-full h-auto flex gap-[10px] justify-end items-center">
            <div class="flex flex-wrap items-center justify-end p-4 shrink-0 text-blue-gray-500">
                <button data-ripple-dark="true" data-dialog-close="true" type="button" wire:loading.attr="disabled"
                    class="px-6 py-3 mr-1 font-sans text-xs font-bold text-red-500 uppercase transition-all rounded-lg middle none center hover:bg-red-500/10 active:bg-red-500/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                    Cancel
                </button>
                <button data-ripple-light="true" type="submit" wire:loading.attr="disabled"
                    class="middle none center rounded-lg bg-primary py-3 px-6 font-sans text-xs font-bold uppercase text-white shadow-md shadow-green-500/20 transition-all hover:shadow-lg hover:shadow-green-500/40 active:opacity-[0.85] disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">
                    Confirm
                </button>
            </div>
        </div>
    </form>
</div>
