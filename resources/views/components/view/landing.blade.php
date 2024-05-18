<div id="landing" class="absolute"></div>
<section class="w-full h-auto px-4 mt-[7rem] flex flex-col gap-[20px] -z-50 md:flex-row">
    <div class="md:flex justify-center items-center flex-col">
        <div class="w-full h-auto flex flex-col gap-2 justify-center animate__animated animate__fadeInDown">
            <div class="font-bold text-6xl text-primary">Barang<span class="text-sec">Que</span></div>
            <div class="text-primary">BarangQue adalah platform peminjaman barang di SMK Negeri 1 Bangsri. Temukan berbagai
                macam barang yang kamu butuhkan untuk berbagai keperluan dengan mudah dan cepat.</div>
            <div class="text-sm italic underline text-sec">"Penak Nyilihe. Penak Gawene"</div>
        </div>
        <div class="w-full h-auto md:flex mt-4 items-center  animate__animated animate__fadeInDown hidden">
            <a
                href="@auth /list-barang @else /login @endauth"
                class="w-full md:w-auto justify-center flex items-center gap-2 px-6 py-3 font-sans text-xs font-bold text-center bg-primary text-sec uppercase align-middle transition-all rounded-lg select-none disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none"
                type="button">
                memulai
                <i class="ph ph-arrow-right text-lg"></i>
            </a>
        </div>
    </div>
    <div class="w-full h-auto flex justify-center items-center animate__animated animate__fadeInLeft">
        <img src="{{ Storage::url('public/src/assets/vLanding.svg') }}" alt="" class="w-[20rem] h-[20rem] md:w-[25rem] md:h-[25rem]">
    </div>
    <div class="w-full h-auto flex justify-center items-center animate__animated animate__fadeInDown md:hidden">
        <a
            href="@auth /list-barang @else /login @endauth"
            class="w-full justify-center flex items-center gap-2 px-6 py-3 font-sans text-xs font-bold text-center bg-primary text-sec uppercase align-middle transition-all rounded-lg select-none disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none"
            type="button">
            memulai
            <i class="ph ph-arrow-right text-lg"></i>
        </a>
    </div>
</section>

<script>
    const lading = document.getElementById('landing')
    landing.classList.add('-translate-y-[20rem]')
</script>
