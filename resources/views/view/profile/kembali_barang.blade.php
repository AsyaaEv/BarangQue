@extends('index')
@section('content')
    <section class="w-full h-screen py-4 mt-4 px-4 mb-4 ">
        <div class="md:flex md:justify-between md:gap-4 md:flex-col">

            <nav class="w-full h-auto bg-primary rounded-[10px]  px-4 py-2 text-lg text-white">
                <a href="{{url()->previous()}}" class="flex gap-2 items-center">
                    <i class="ph ph-arrow-circle-left"></i>
                    <div class="">Pengembalian Barang</div>
                </a>
            </nav>
            <div class="md:flex md:gap-4">

                <div class="hidden md:block w-full h-full mt-4">
                    <img src="{{Storage::url('public/src/assets/vSelfie.svg')}}" alt="" class="w-full h-full">
                </div>
                <div class="md:flex-col w-full">
                    <main class="bg-primary p-2 rounded-[10px] shadow flex gap-4 mx-4 justify-center mt-4 " >
                        <div class="bg-primary p-2 rounded-[10px] shadow flex gap-4 mx-2 justify-center">
                            <div class="w-auto h-auto flex justify-center items-center">
                                <img src="{{ Storage::url('public/' . $data->barang->foto) }}" alt=""
                                    class="w-[3rem] h-[3rem] object-cover rounded-full">
                            </div>
                            <div class="w-auto h-full flex flex-col text-white">
                                <div class="flex gap-2 text-lg">
                                    <div class="">{{ $data->barang->nama }}</div>
                                    <div class="">#{{ $data->barang->no }}</div>
                                </div>
                                <div class="text-sm">{{ $data->barang->pemilik }}</div>
                            </div>
                        </div>
                    </main>
                    <div class="w-full h-auto mt-4">
                        <div class="w-full h-auto border-2 rounded-[10px] p-2">
                            <div class="w-full h-auto flex gap-2 items-center">
                                <i class="ph ph-user p-2 bg-primary rounded-full text-white"></i>
                                <div class="font-semibold text-primary text-xl">Informasi Peminjaman</div>
                            </div>
                            <div class="w-full h-auto mt-2">
                                <div class=""><span class="font-bold">Nama :</span> {{ $data->user->name }}</div>
                                <div class=""><span class="font-bold">Email :</span> {{ $data->user->email }}</div>
                                <div class=""><span class="font-bold">Sebagai :</span> {{ $type }}</div>
                                <div class=""><span class="font-bold ">Keperluan :</span> {{ $data->keperluan }}</div>
                                <div class=""><span class="font-bold">Tanggal Peminjaman :</span> {{ $tglPinjam }}</div>
                                <div class=""><span class="font-bold">Tanggal Pengembalian :</span> {{ $tglPengembalian }}</div>
                            </div>
                        </div>
                    </div>
                    <form id="formKembali" method="POST" action="/barang/kembali/proses" enctype="multipart/form-data">
                        <meta name="csrf-token" content="{{ csrf_token() }}">
                        @csrf
                        <div class="w-full h-auto my-4">
                            <div class="w-full h-auto border-2 rounded-[10px] p-2">
                                <div class="w-full h-auto flex gap-2 items-center">
                                    <i class="ph ph-camera p-2 bg-primary rounded-full text-white"></i>
                                    <div class="font-semibold text-primary text-xl">Foto Pengembalian Barang</div>
                                </div>
                                <div class="w-full h-auto mt-2 overflow-hidden">
                                    <canvas id="canvas" class="hidden  w-full h-full "></canvas>
                                </div>
                                <input type="text" value="{{ $data->barang->no }}" class="" hidden id="no_barang">
                                <div class="w-full h-auto mt-2">
                                    <div class="text-sm text-red-500">*Selfie dengan barang yang dipinjam, sebagai barang bukti</div>
                                    <button data-dialog-target="dialogKameraKembali" type="button"
                                        class="bg-primary p-2 rounded-[10px] text-white flex gap-[10px] justify-center items-center"
                                        onclick="startKamera()">Kamera<i class="ph ph-camera"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="w-full h-auto flex justify-end items-center mb-4 pb-4">
                            <button id="buttonKembali"
                                class="p-2 bg-primary rounded-[10px] text-white flex justify-center items-center gap-[10px] invisible">Kembalikan
                                <i class="ph ph-upload text-lg"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    @include('components.profile.kamera_kembali')
@endsection
