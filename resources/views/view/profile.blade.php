@extends('index')
@section('content')
    PROFILE USER {{ Auth::user()->name }}
    <div class="">
        @livewire('view.profile')
    </div>
@endsection
