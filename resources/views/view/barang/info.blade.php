@extends('index')
@section('content')
    @livewire('view.barang-list.info', ['id' => @strval($id)])
@endsection