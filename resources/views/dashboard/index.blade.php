@extends('index')
@section('content')
    <div class="w-full h-auto flex flex-col ">
        <div class="md:">
            @include('components.layout')
        </div>
        <div class="md:container md:mx-auto md:justify-center md:items-center md:flex md:flex-col">
            @if (request()->is('dashboard'))
                @livewire('dashboard.index')
            @endif

            @if (request()->is('dashboard/barang'))
                @livewire('dashboard.barang.index')
                @include('dashboard.barang.delete-barang')
                @include('dashboard.barang.edit-barang')
                @include('dashboard.barang.add-barang')
            @endif
            @if (request()->is('dashboard/master'))
                @livewire('dashboard.master.index')
                @include('dashboard.master.popupView')
                @include('dashboard.master.popupAdd')
            @endif
        </div>

    </div>
@endsection
