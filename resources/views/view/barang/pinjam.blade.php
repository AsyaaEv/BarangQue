@extends('index')
@section('content')
    <section class="">
        <div class="w-full h-auto mt-4 px-4">
            <nav class="w-full h-auto bg-primary rounded-[10px]  px-4 py-2 text-lg text-white">
                <a href="/list-barang" class="flex gap-2 items-center">
                    <i class="ph ph-arrow-circle-left"></i>
                    <div class="">Peminjaman Barang</div>
                </a>
            </nav>
            <main class="w-full h-auto md:flex md:justify-between md:gap-4">
                <div class="hidden md:block w-full h-full mt-4">
                    <img src="{{Storage::url('public/src/assets/vSelfie.svg')}}" alt="" class="w-full h-full">
                </div>
                <form action="/barang/pinjam/proses" method="POST" class="w-full h-auto  mt-4" id="formPinjam"
                    enctype="multipart/form-data">
                    <meta name="csrf-token" content="{{ csrf_token() }}">
                    @csrf
                    <div class="bg-primary p-2 rounded-[10px] shadow flex gap-4 mx-8 justify-center">
                        <div class="bg-primary p-2 rounded-[10px] flex gap-4 mx-8 justify-center">
                            <div class="w-auto h-auto flex justify-center items-center">
                                <img src="{{ Storage::url('public/' . $dataBarang->foto) }}" alt=""
                                    class="w-[3rem] h-[3rem] object-cover rounded-full">
                            </div>
                            <div class="w-auto h-full flex flex-col text-white items-center justify-center ">
                                <div class="text-xl">{{ $dataBarang->nama }}</div>
                                <div class="w-full h-auto flex gap-2">
                                    <div class="">{{ $dataBarang->no }}</div>
                                    <div class="px-2 bg-green-500 rounded-[10px]">Tersedia</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full h-auto flex justify-center items-center gap-[15px] mt-8 flex-col">
                        <input type="text" value="{{$dataBarang->no}}" id="no_barang" hidden>
                        <div class="w-full">
                            <div class="relative w-full min-w-[200px] h-10">
                                <input id="keperluan"  name="keperluan" value="{{ old('keperluan') }}"
                                    class="peer w-full h-full bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    placeholder=" " /><label
                                    class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-gray-500 peer-focus:text-gray-900 before:border-blue-gray-200 peer-focus:before:!border-gray-900 after:border-blue-gray-200 peer-focus:after:!border-gray-900">
                                    Keperluan
                                </label>
                            </div>
                        </div>
                        <div class="w-full">
                            <div class="relative w-full min-w-[200px] h-10">
                                <input id="tglPengembalian" type="datetime-local"  value="{{ old('tglPengembalian') }}"
                                    class="peer w-full h-full bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                    placeholder=" " /><label
                                    class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-gray-500 peer-focus:text-gray-900 before:border-blue-gray-200 peer-focus:before:!border-gray-900 after:border-blue-gray-200 peer-focus:after:!border-gray-900">
                                    Tanggal Pengembalian
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="w-full h-auto mt-2 flex flex-col">
                        <input type="file" name="gambar" accept="image/*" class="hidden">
                        <label for="" class="text-primary text-sm">Ambil gambar dengan barang pinjaman</label>
                        <div class="max-w-fit h-auto p-2 bg-primary rounded-[10px] text-white flex items-center gap-2"
                            data-ripple-light="true" data-dialog-target="dialogKamera" wire:loading.attr='disabled'>
                            <i class="ph ph-camera-plus"></i>
                            <button class="" onclick="startKamera({{ $dataBarang->id }})"
                                type="button">Selfie</button>
                        </div>
                        @if (session('error'))
                            <div class="text-red-500">
                                {{ session('error') }}
                            </div>
                        @endif
                        <canvas id="canvas" class="hidden mt-4"></canvas>
                    </div>
                    <div class="w-full h-auto  flex justify-end my-4 invisible" id="submitButton">
                        <div class="w-auto flex items-center gap-2 text-white p-2 bg-primary rounded-[10px]" id="submit">
                            <i class="ph ph-upload-simple"></i>
                            <button type="submit" id="buttonPinjam">Submit</button>
                        </div>
                    </div>
                    @include('components.kamera')
                </form>


            </main>
        </div>

    </section>
@endsection
