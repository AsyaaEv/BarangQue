<div>
    <div class="w-full h-auto flex justify-center items-center mt-4">
        <i class="ph-fill ph-star text-2xl cursor-pointer" id="star1"></i>
        <i class="ph-fill ph-star text-2xl cursor-pointer" id="star2"></i>
        <i class="ph-fill ph-star text-2xl cursor-pointer" id="star3"></i>
        <i class="ph-fill ph-star text-2xl cursor-pointer" id="star4"></i>
        <i class="ph-fill ph-star text-2xl cursor-pointer" id="star5"></i>
    </div>
    <div class="w-full h-auto flex justify-center items-center">
        <div class="w-full mt-4">
            <div class="relative w-full min-w-[200px]">
                <textarea wire:model='alasan'
                    class="peer h-full min-h-[100px] w-full resize-none rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 focus:border-2 focus:border-gray-900 focus:border-t-transparent focus:outline-0 disabled:resize-none disabled:border-0 disabled:bg-blue-gray-50"
                    placeholder=" "></textarea>
                <label
                    class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-gray-900 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                    Message
                </label>
            </div>
        </div>
    </div>
    @if ($error)
        <div class="w-full h-auto flex justify-center items-center mt-2">
            <div class="bg-red-500 text-white text-center p-2 rounded-[10px] flex gap-2 items-center">
                <i class="ph ph-x p-2 bg-red-700 rounded-full"></i>
                {{ $error }}
            </div>
        </div>
    @endif
    <input type="number" hidden wire:model='rating' id="ratingInput">
    <div class="w-full h-auto flex gap-2 justify-end px-4 mt-4">
        <button wire:click='hide' wire:loading.attr="disabled"
            class="flex  justify-center items-center gap-2 align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-red-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
            type="button">
            <i class="ph ph-x-circle text-lg"></i>
            Tidak
        </button>
        <button wire:click='testi' wire:loading.attr="disabled"
            class="flex justify-center items-center gap-2 align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-primary text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
            type="submit">
            Kirim
            <i class="ph ph-paper-plane-tilt text-lg"></i>
        </button>
    </div>
</div>
