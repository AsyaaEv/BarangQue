<div class="overflow-x-auto w-full h-auto flex flex-row flex-shrink-0 p-4">
    <div class="w-full h-auto flex md:justify-center  items-center gap-[20px]">
        @forelse ($data as $item)
            <div class="relative flex flex-col mt-6 text-gray-700 bg-white shadow-xl bg-clip-border rounded-xl w-96 flex-shrink-0"
                data-aos='fade-right' data-aos-once="true">
                <div
                    class="relative h-56 mx-4 -mt-6 overflow-visible text-white shadow-lg bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40 object-cover">
                    <img
                        src="{{ Storage::url('public/' . $item->foto) }}"
                        alt="card-image" class="object-cover w-full h-full pointer-events-none" />
                </div>
                <div class="p-6">
                    <h5
                        class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                        {{ $item->nama }} #{{ $item->no }}
                    </h5>
                    @if ($item->status == 0)
                        <div class="w-full h-auto flex gap-2 items-center">
                            <i class="ph ph-check-circle p-1 bg-green-500 rounded-full text-2xl text-white"></i>
                            <div class="font-semibold text-primary">Tersedia</div>
                        </div>
                    @endif
                    @if ($item->status == 1)
                        <div class="w-full h-auto flex gap-2 items-center">
                            <i class="ph ph-x p-1 bg-red-500 rounded-full text-2xl text-white"></i>
                            <div class="font-semibold text-primary">Terpinjam</div>
                        </div>
                    @endif
                </div>
                <div class="p-6 pt-0">
                    @if ($item->status == 0)
                        <a href="/barang/pinjam/{{ $item->id }}"
                            class="text-white flex justify-center items-center align-middle group select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-primary  shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                            type="button">
                            Pinjam <i class="ph ph-upload-simple ml-2 text-xl  text-sec"></i>
                        </a>
                    @endif
                    @if ($item->status == 1)
                        <a href="/barang/info/{{ $item->no }}"
                            class="flex justify-center items-center align-middle group select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-primary text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                            type="button">
                            Info <i class="ph ph-info ml-2 text-xl text-sec"></i>
                        </a>
                    @endif
                </div>
    
            </div>
        @empty
            <div class="w-full h-auto flex justify-center items-center">
                <div class="bg-sec p-4 rounded-[10px] flex gap-2 text-white">
                    <i class="ph ph-info text-2xl"></i>
                    <div class="">Tidak ada barang tersedia</div>
                </div>
            </div>
        @endforelse
    </div>
    
</div>
