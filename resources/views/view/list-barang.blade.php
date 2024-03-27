@extends('index')
@section('content')
    <div class="w-full h-auto">
        @include('components.view.navbar')
        <div class="py-4 px-4">
            @livewire('view.barang-list.index')
        </div>
        {{-- @include('components.view.footer ') --}}
    </div>
@endsection