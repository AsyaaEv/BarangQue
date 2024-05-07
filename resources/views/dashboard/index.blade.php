@extends('index')
@section('content')
    <div class="w-full h-auto  flex flex-col">
        @include('components.layout')
        @if (request()->is('dashboard'))
            @livewire('dashboard.index')
        @endif

        @if (request()->is('dashboard/barang'))
            @livewire('dashboard.barang.index')
            @include('dashboard.barang.delete-barang')
            @include('dashboard.barang.edit-barang')


            <div class="w-auto h-auto fixed bottom-10 left-5  transition-all z-[99999]" id="toggleAdd">
                <div class="w-auto h-auto p-3 bg-gray-900 rounded-full flex justify-center items-center">
                    @include('dashboard.barang.add-barang')
                </div>
            </div>
            
        @endif

        @if (request()->is('dashboard/master'))
            @livewire('dashboard.master.index')
            @include('dashboard.master.popupView')
            @include('dashboard.master.popupAdd')
            
        @endif

    </div>
@endsection
