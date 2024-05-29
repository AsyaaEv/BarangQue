<div>
    <div class="relative inline-flex">
        <button onclick="redirect()"
            class="relative align-middle select-none font-sans font-medium text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none w-10 max-w-[40px] h-10 max-h-[40px] rounded-lg text-xs bg-primary text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
            type="button">
            <i class="ph ph-basket text-xl"></i>
        </button>
        @if ($data)
            <span
                class="absolute rounded-full py-1 px-1 text-xs font-medium content-[''] leading-none grid place-items-center top-[4%] right-[2%] translate-x-2/4 -translate-y-2/4 bg-red-500 text-white min-w-[24px] min-h-[24px]">
                {{ $data }}
            </span>
        @endif
    </div>
</div>

<script>
    function redirect(){
        window.location.href ='/profile/barang'
    }
</script>
