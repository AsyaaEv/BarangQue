@extends('index')
@section('content')
    <div class="w-full h-screen bg-gray-100 flex justify-center items-center ">
        <div
            class="w-[90%] h-[90%] bg-white gap-4 border-2 rounded-[10px] shadow px-4 flex justify-center items-center flex-col">
            @livewire('dashboard.register')
    </div>
@endsection
