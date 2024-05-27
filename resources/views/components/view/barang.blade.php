<div id="barang" class="absolute"></div>
<section class="w-full h-auto flex flex-col items-center justify-center px-4 mt-8">
    <div class="w-full md:flex md:justify-start md:items-start">
        <div class="w-full flex items-center gap-4 bg-primary p-2 md:p-0  justify-center rounded-[10px] md:w-auto md:bg-transparent"
            data-aos='fade-up' data-aos-once="true">
            <i class="ph ph-stack text-3xl text-sec md:bg-primary md:p-2 md:rounded-full md:text-white md:text-2xl"></i>
            <h5
                class="block font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-white md:text-primary md:text-2xl">
                List <span class="">Barang</span>
            </h5>
        </div>
    </div>
    <div class="w-full h-auto py-4 flex flex-row justify-center items-center gap-[20px]  md:overflow-hidden">
        @livewire('view.list-barang')
    </div>
    <a href="/list-barang"
        class="flex  justify-center items-center align-middle group select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-primary text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
        type="button">
        Selengkapnya...
    </a>
</section>

<script>
    const about = document.getElementById('barang')
    about.classList.add('-translate-y-[5rem]')
</script>
