<section class="w-full h-auto py-6 mt-4 px-4">
    <nav class="w-full h-auto bg-primary rounded-[10px]  px-4 py-2 text-lg text-white">
        <a href="/list-barang" class="flex gap-2 items-center">
            <i class="ph ph-arrow-circle-left"></i>
            <div class="">Informasi Peminjaman</div>
        </a>
    </nav>
    <div class="md:flex md:gap-4">
        <div class="hidden md:block w-full items-start justify-normal mt-8">
            <img src="{{Storage::url('public/src/assets/vInfo.svg')}}" alt="" class="w-full">
        </div>
        <div class="md:flex-col md:w-full">
            <main class="bg-primary p-2 rounded-[10px] shadow flex gap-4 mx-4 justify-center mt-4">
                <div class="bg-primary p-2 rounded-[10px] flex gap-4 mx-2 justify-center">
                    <div class="w-auto h-auto flex justify-center items-center">
                        <img src="{{ Storage::url('public/' . $data->barang->foto) }}" alt=""
                            class="w-[3rem] h-[3rem] object-cover rounded-full">
                    </div>
                    <div class="w-auto h-full flex flex-col text-white">
                        <div class="flex gap-2 text-lg">
                            <div class="">{{ $data->barang->nama }}</div>
                            <div class="">#{{ $data->barang->no }}</div>
                        </div>
                        <div class="text-sm">{{ $data->barang->pemilik}}</div>
                    </div>
                </div>
            </main>
            <div class="w-full h-auto mt-4">
                <div class="w-full h-auto border-2 rounded-[10px] p-2">
                    <div class="w-full h-auto flex gap-2 items-center">
                        <i class="ph ph-user p-2 bg-primary rounded-full text-white"></i>
                        <div class="font-semibold text-primary text-xl">Informasi Peminjam</div>
                    </div>
                    <div class="w-full h-auto mt-2">
                        <div class=""><span class="font-bold">Nama :</span> {{ $data->user->name }}</div>
                        <div class=""><span class="font-bold">Email :</span> {{ $data->user->email }}</div>
                        <div class=""><span class="font-bold">Sebagai :</span> {{ $type }}</div>
                    </div>
                </div>
            </div>
            <div class="w-full h-auto mt-4">
                <div class="w-full h-auto border-2 rounded-[10px] p-2">
                    <div class="w-full h-auto flex gap-2 items-center">
                        <i class="ph ph-stack p-2 bg-primary rounded-full text-white"></i>
                        <div class="font-semibold text-primary text-xl">Peminjaman Barang</div>
                    </div>
                    <div class="w-full h-auto mt-2">
                        <div class=""><span class="font-bold">Keperluan :</span> {{ $data->keperluan }}</div>
                        <div class=""><span class="font-bold">Tanggal Peminjaman :</span> {{ $tglPinjam }}</div>
                        <div class=""><span class="font-bold">Tanggal Pengembalian :</span> {{ $tglPengembalian }}</div>
                    </div>
                </div>
            </div>
            <div class="w-full h-auto mt-4">
                <div class="w-full h-auto border-2 rounded-[10px] p-2">
                    <div class="w-full h-auto flex gap-2 items-center">
                        <i class="ph ph-camera p-2 bg-primary rounded-full text-white"></i>
                        <div class="font-semibold text-primary text-xl">Peminjaman Barang</div>
                    </div>
                    <div class="w-full h-auto mt-2">
                        <img src="{{ Storage::url('public/' . $data->foto) }}" alt="" class="object-cover w-full h-full">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
