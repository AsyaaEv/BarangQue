<div class="">
    <div class="w-full h-auto flex mt-8 gap-4 border-b-2 border-black pb-2">
        <div class="w-auto h-auto">
            <img src="{{ Storage::url('public/' . $data->foto) }}" alt=""
                class="w-[5rem] h-[5rem] object-cover rounded-full">
        </div>
        <div class="w-auto h-auto flex flex-col justify-between py-2">
            <div class="font-bold text-xl">Unggah Gambar</div>
            <div class="w-auto h-auto flex gap-2">
                <div class="bg-red-500 rounded-[10px] py-2 px-1 flex items-center gap-2">
                    <i class="ph ph-trash text-white"></i>
                    <button class="text-white">Remove</button>
                </div>
                <div class="bg-primary rounded-[10px] py-2 px-1 flex items-center gap-2">
                    <i class="ph ph-pencil text-white"></i>
                    <button class="text-white">Upload</button>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full h-auto mt-4">
        <div class="w-full h-auto border-2 rounded-[10px] p-2">
            <div class="w-full h-auto flex gap-2 items-center">
                <i class="ph ph-user p-2 bg-primary rounded-full text-white"></i>
                <div class="font-semibold text-primary text-xl">Informasi Pengguna</div>
            </div>
            <div class="w-full h-auto mt-2">
                <div class=""><span class="font-bold">Nama :</span> {{ $data->name }}</div>
                <div class=""><span class="font-bold">Email :</span> {{ $data->email }}</div>
                <div class=""><span class="font-bold">No Wa :</span> {{ $data->no_wa }}</div>
            </div>
            <div class="w-full h-auto flex justify-end items-center">
                <div class="p-2 bg-primary text-white rounded-[10px]">
                    <i class="ph ph-pencil "></i>
                    <button>Ubah</button>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full h-auto mt-4">
        <div class="w-full h-auto border-2 rounded-[10px] p-2">
            <div class="w-full h-auto flex gap-2 items-center">
                <i class="ph ph-identification-badge p-2 bg-primary rounded-full text-white"></i>
                <div class="font-semibold text-primary text-xl">Biodata Pengguna</div>
            </div>
            <div class="w-full h-auto mt-2">
                <div class=""><span class="font-bold">Sebagai :</span> {{ $type }}</div>
                @if ($type == 'Siswa')
                    <div class=""><span class="font-bold">Kelas :</span> {{ $data->typeuser->kelas }}</div>
                    <div class=""><span class="font-bold">Absen :</span> {{ $data->typeuser->absen }}</div>
                    <div class=""><span class="font-bold">Jurusan :</span> {{ $data->typeuser->jurusan }}</div>
                @endif
                @if ($type == 'Guru')
                    <div class=""><span class="font-bold">Jurusan :</span> {{ $data->typeuser->jurusan_guru }}</div>
                    <div class=""><span class="font-bold">Guru :</span> {{ $data->typeuser->type_guru }}</div>
                    <div class=""><span class="font-bold">Mapel :</span> {{ $data->typeuser->mapel }}</div>
                    <div class=""><span class="font-bold">Kode Guru :</span> {{ $data->typeuser->kode }}</div>
                @endif
                @if ($type == 'Staf')
                    <div class=""><span class="font-bold">Posisi :</span> {{ $data->typeuser->posisi }}</div>
                @endif
            </div>
            <div class="w-full h-auto flex justify-end items-center">
                <div class="p-2 bg-primary text-white rounded-[10px]">
                    <i class="ph ph-pencil "></i>
                    <button>Ubah</button>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full h-auto mt-4 text-white">
        <button class="p-2 bg-primary rounded-[10px]"><i class="ph ph-lock mr-2"></i>Ubah Password</button>
    </div>
</div>
