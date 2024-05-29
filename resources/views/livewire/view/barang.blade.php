<div class="">
    <div class="w-full flex items-center bg-primary rounded-[10px] p-2 gap-2 ">
        <i class="ph ph-basket text-2xl text-white"></i>
        <h1 class="text-white ">Barang Pinjaman Anda</h1>
    </div>
    @if (session('success'))
        <div class="w-full h-auto flex my-4">
            <div class="w-full h-auto bg-green-500 rounded-[10px] p-2 flex gap-2 justify-start items-center">
                <i class="ph ph-check-circle text-white text-lg"></i>
                <div class="text-white">{{ session('success') }}</div>
            </div>
        </div>
    @endif
    <section
        class="w-full h-auto flex justify-center items-center flex-col mt-8 gap-[25px] md:grid md:grid-cols-2 lg:grid-cols-3 md:place-items-center">
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

                    <p class="block font-sans text-base antialiased font-light leading-relaxed text-inherit"><span
                            class="font-bold">Tanggal Pengembalian :</span>

                        {{ \Carbon\Carbon::parse($item->tgl_pengembalian)->locale('id')->translatedFormat('l, d F Y H:i') }}
                        ({{ \Carbon\Carbon::parse($item->tgl_pengembalian)->locale('id')->diffForHumans() }})
                    </p>
                </div>
                <div class="p-6 pt-0">
                    <a href="/barang/kembali/{{ $item->id }}"
                        class="align-middle select-none font-sans items-center font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-primary text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                        type="button" wire:loading.attr="disabled" wire:target="kembali">
                        Kembalikan <i class="ph ph-upload text-lg"></i>
                    </a>
                </div>
            </div>
        @empty
            <div
                class="w-full h-auto flex justify-center items-center md:absolute md:top-1/2 md:left-1/2 md:transform md:-translate-x-1/2 md:-translate-y-1/2">
                <div class="p-2 bg-primary rounded-[10px] text-white flex justify-center items-center gap-[10px]"><i
                        class="ph ph-info"></i>Anda tidak meminjam barang apapun.</div>
            </div>
        @endforelse



    </section>
</div>
