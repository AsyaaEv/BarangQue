@extends('index')
@section('content')
    <div class="w-full h-screen flex justify-center items-center">
        <div class="w-auto h-auto p-4 m-2 bg-white shadow border-2 rounded-[20px]">
            @livewire('dashboard.login')
        </div>
    </div>
@endsection