@extends('index')
@section('content')
<div class="w-full h-auto">
    @include('components.view.navbar')
    <div class="py-4">
        @include('components.view.landing')
        @include('components.view.about')
        @include('components.view.barang')
        @include('components.view.testi')
    </div>
    @include('components.view.footer ')
</div>
@endsection