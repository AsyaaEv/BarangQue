@extends('index')
@section('content')
    <div class="w-full h-screen bg-gray-100 flex justify-center items-center ">
        @include('view.tos')
        <div
            class="w-[90%] h-auto py-4 bg-white gap-4 border-2 rounded-[10px] shadow px-2 flex justify-center items-center flex-col">
            @livewire('dashboard.register')
        </div>
    </div>
@endsection
