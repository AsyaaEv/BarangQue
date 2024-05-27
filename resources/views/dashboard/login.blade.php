@extends('index')
@section('content')
    <div class="w-full h-screen flex justify-center items-center">
        <div class="w-auto h-auto p-8 m-2 bg-white shadow border-2 rounded-[20px] md:flex md:gap-8 md:mx-8">
            <div class="w-full h-auto flex justify-center items-center">
                <img src="{{Storage::url('src/assets/vLogin.svg')}}" alt="" class="w-[15rem] h-[15rem] md:w-[25rem] md:h-[25rem] pointer-events-none">
                <hr class="w-[1px] h-full border ml-4">
            </div>
            <div class="md:flex md:justify-center md:items-center md:flex-col">
                <div class="w-full h-auto flex flex-col justify-center items-center mb-4">
                    <div class="font-bold text-2xl text-primary">Barang<span class="text-sec">Que</span></div>
                    <div class="">Silakan masukan data untuk login</div>
                </div>
                @livewire('dashboard.login')
            </div>
        </div>
    </div>
@endsection