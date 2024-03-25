<div class="w-full h-auto flex gap-[15px] flex-col">
    <div class="w-full h-auto flex gap-[10px] justify-center items-center">
        <img src="{{ Storage::url('public/' . $this->foto) }}" alt=""
            class="w-[4rem] h-[4rem] object-cover rounded-full">
        <div class="">
            <div class="font-bold text-xl">{{ $this->nama }}</div>
            <div class="">{{ $this->email }}</div>
        </div>
    </div>
    <div class="w-full h-auto border-2 rounded-[10px] flex flex-col  p-2">
        <div class="">Type User : {{ $this->typeUser }}</div>
        <div class="{{ $this->typeUser == 'Siswa' ? 'block' : 'hidden' }}">
            <div class="">Kelas : {{ $this->kelas }}</div>
            <div class="">Absen : {{ $this->absen }}</div>
            <div class="">Jurusan : {{ $this->jurusan }}</div>
        </div>
        <div class="{{ $this->typeUser == 'Guru' ? 'block' : 'hidden' }}">
            <div class="">Jurusan : {{ $this->jurusanGuru }}</div>
            <div class="">Type : {{ $this->typeGuru }}</div>
            <div class="">Mapel : {{ $this->mapel }}</div>
            <div class="">Kode : {{ $this->kodeGuru }}</div>
        </div>
        <div class="{{ $this->typeUser == 'Staf' ? 'block' : 'hidden' }}">
            <div class="">Posisi : {{ $this->posisi }}</div>
        </div>
        <div class="">Nomer : {{ $this->noWa }}</div>
        <div class="w-full h-auto flex justify-start items-center mt-4 " >
            <button class="p-2 rounded-[10px] bg-red-900 text-white flex justify-center items-center gap-2" data-dialog-close="true" wire:click='deleteRole({{$this->id}})'><i class="ph ph-trash">delete role</i></button>
        </div>
    </div>
    <div class="w-full h-auto flex justify-end items-center">
        <button class="p-2 rounded-[10px] bg-gray-900 text-white" data-dialog-close="true" wire:click='close'>Close</button>
    </div>
</div>
