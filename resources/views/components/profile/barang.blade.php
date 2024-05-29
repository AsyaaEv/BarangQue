<section class="w-full h-auto mt-[5rem]">
    <main class="w-full h-auto">
        @livewire('view.barang')
        @if (session('testimoni'))
            @include('components.profile.popup.testi')
        @endif
    </main>

</section>
