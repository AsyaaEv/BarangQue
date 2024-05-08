@extends('index')
@section('content')
    @livewire('dashboard.barang.pengembalian', ['id' => @intval($id)])
@endsection