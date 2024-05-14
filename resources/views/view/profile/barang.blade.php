@extends('index')
@section('content')
<div class="w-full h-auto">
    @include('components.profile.navbar')
    <div class="py-4 pt-3 px-4">
        @include('components.profile.barang')
    </div>
</div>
@endsection
