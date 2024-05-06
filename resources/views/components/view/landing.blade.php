<div id="landing" class="absolute"></div>
<section   class="w-full h-auto px-4 mt-[7rem] flex flex-col gap-[20px] -z-50">
    <div class="w-full h-auto flex flex-col gap-2 justify-center animate__animated animate__fadeInDown">
        <div class="font-bold text-6xl text-primary">Barang<span class="text-sec">Que</span></div>
        <div class="text-primary">BarangQue adalah platform peminjaman barang di SMK Negeri 1 Bangsri. Temukan berbagai macam barang yang kamu butuhkan untuk berbagai keperluan dengan mudah dan cepat.</div>
    </div>
    <div class="w-full h-auto flex justify-center items-center animate__animated animate__fadeInLeft">
        <img src="{{ Storage::url('public/src/assets/vLanding.svg') }}" alt="" class="w-[20rem] h-[20rem]">
    </div>
    <div class="w-full h-auto flex justify-center items-center animate__animated animate__fadeInDown">
        <a 
            href="@auth /list-barang @else /login @endauth"
            class="w-full justify-center flex items-center gap-2 px-6 py-3 font-sans text-xs font-bold text-center bg-primary text-sec uppercase align-middle transition-all rounded-lg select-none disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none"
            type="button">
            Get Started
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                stroke="currentColor"
                class="w-5 h-5">
                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3">
                </path>
            </svg>
        </a>
    </div>
</section>

<script>
    const lading = document.getElementById('landing')
    landing.classList.add('-translate-y-[20rem]')
</script>
