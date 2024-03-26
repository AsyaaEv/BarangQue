<div id="barang" class="absolute"></div>
<section class="w-full h-auto flex flex-col items-center justify-center px-4">
    <div class="w-full flex items-center gap-4 bg-primary p-2  justify-center rounded-[10px]" data-aos='fade-up' data-aos-once="true">
        <span
            class="relative z-[2] w-max flex-shrink-0 overflow-hidden rounded-full text-sec">
            <i class="ph ph-stack text-3xl"></i>
        </span>
        <h5
            class="block font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-white">
            List <span class="">Barang</span>
        </h5>
    </div>
    <div class="w-full h-auto py-4 flex flex-col justify-center items-center gap-[20px] ">
        @livewire('view.list-barang')
        <a href="/list-barang"
            class="flex justify-center items-center align-middle group select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-primary text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
            type="button">
            Selengkapnya...
        </a>
    </div>
</section>

<script>
    const about = document.getElementById('barang')
    about.classList.add('-translate-y-[5rem]')
</script>