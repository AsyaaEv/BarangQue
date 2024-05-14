<section class="w-full h-auto flex justify-center items-center flex-col mt-8 gap-[25px]">
    @if (session()->has('successMessage'))
        <div class="w-full p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg">
            {{ session('successMessage') }}
        </div>
    @endif
    @forelse ($data as $item)
        <div class="relative flex flex-col mt-6 text-gray-700 bg-white shadow-md bg-clip-border rounded-xl w-96">
            <div
                class="relative h-56 mx-4 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40">
                <img
                    src="{{ Storage::url('public/' . $item->barang->foto) }}"
                    alt="card-image" class="w-full h-full object-cover" />
            </div>
            <div class="p-6">
                <h5
                    class="block font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                    {{ $item->barang->nama }} #{{ $item->barang->no }}
                </h5>
                
                <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit"><span class="font-bold">Tanggal Pengembalian :</span> 
                    
                    {{ \Carbon\Carbon::parse($item->tgl_pengembalian)->locale('id')->translatedFormat('l, d F Y H:i') }}
                    ({{ \Carbon\Carbon::parse($item->tgl_pengembalian)->locale('id')->diffForHumans() }})
                </p>
            </div>
            <div class="p-6 pt-0">
                <a href="/barang/kembali/{{ $item->id }}"
                    class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-primary text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                    type="button" wire:loading.attr="disabled" wire:target="kembali">
                    Kembalikan
                </a>
            </div>
        </div>
    @empty
    <div class="w-full h-auto flex justify-center items-center">
        <div class="p-2 bg-primary rounded-[10px] text-white flex justify-center items-center gap-[10px]"><i class="ph ph-info"></i>Anda tidak meminjam barang apapun.</div>
    </div>
    @endforelse


</section>
