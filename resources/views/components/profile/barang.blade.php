<section class="w-full h-auto mt-[5rem]">
    <nav class="w-full h-auto bg-primary rounded-[10px]  px-4 py-2 text-lg text-white">
        <a href="{{url()->previous()}}" class="flex gap-2 items-center">
            <i class="ph ph-arrow-circle-left"></i>
            <div class="">Barang Pinjam</div>
        </a>
    </nav>
    <main class="w-full h-auto">
        @livewire('view.barang')
    </main>
</section>