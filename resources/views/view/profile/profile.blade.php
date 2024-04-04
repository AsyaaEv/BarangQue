@extends('index')
@section('content')
<div class="w-full h-auto">
    @include('components.profile.navbar')
    <div class="py-4 pt-3 px-4">
        @include('components.profile.profile')
    </div>
    @include('components.view.footer ')
</div>
@include('components.profile.popup.ubahInfo')
@include('components.profile.popup.ubahBio')
@include('components.profile.popup.removePP')
@include('components.profile.popup.unggahPP')
@include('components.profile.popup.editPassword')
@endsection
