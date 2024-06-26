@extends('index')
@section('content')
    <div class="w-full h-screen flex justify-center items-center">
        <div class="w-auto h-auto p-8 m-2 bg-white shadow border-2 rounded-[20px]">
            <div class="w-full h-auto flex justify-center items-center">
                <img src="{{Storage::url('src/assets/vForgetPassword.svg')}}" alt="" class="w-[15rem] h-[15rem] pointer-events-none">
            </div>
            <div class="w-full h-auto flex flex-col justify-center items-center mb-4">
                <div class="font-bold text-2xl text-primary">Barang<span class="text-sec">Que</span></div>
                <div class="">Masukan nomor WA untuk mengganti password</div>
                <div class="text-sm text-red-500">*Pastikan nomor WA terhubung dengan akun anda</div>
                @livewire('dashboard.forget-password')
            </div>
        </div>
    </div>
@endsection