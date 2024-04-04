@extends('index')
@section('content')
<section class="">
    <div class="w-full h-auto mt-4 px-4">
        <nav class="w-full h-auto bg-primary rounded-[10px]  px-4 py-2 text-lg text-white">
            <a href="/list-barang" class="flex gap-2 items-center">
                <i class="ph ph-arrow-circle-left"></i>
                <div class="">Peminjaman Barang</div>
            </a>
        </nav>
        <main class="w-full h-auto">
            @livewire('view.barang-list.pinjam', ['id' => @intval($id)])
        </main>
    </div>
    @include('components.kamera')
    
</section>

@endsection