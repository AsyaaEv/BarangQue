@extends('index')
@section('content')
    <div class="w-full h-screen flex justify-center items-center">
        <div class="w-auto h-auto p-8 m-2 bg-white shadow border-2 rounded-[20px]">
            <div class="w-full h-auto flex justify-center items-center">
                <img src="{{Storage::url('src/assets/vLogin.svg')}}" alt="" class="w-[15rem] h-[15rem]">
            </div>
            <div class="w-full h-auto flex flex-col justify-center items-center mb-4">
                <div class="font-bold text-2xl">Barang<span class="text-blue-500">Que</span></div>
                <div class="">Silakan masukan data untuk login</div>
            </div>
            @livewire('dashboard.login')
        </div>
    </div>
@endsection