<div>
    <section>
        <div class="w-full h-auto border-2 mt-[5rem] rounded-[10px]">
            <div class="w-full h-auto flex justify-between items-center p-2">
                <div class="w-full h-auto flex gap-2 items-center">
                    <a href="/#barang" class="p-2 bg-primary text-white rounded-full">
                        <i class="ph ph-arrow-left "></i>
                    </a>
                    <div class="">List Barang</div>
                </div>
                <div class="w-full h-auto flex flex-col gap-2">
                    <div class="relative h-10 w-72 min-w-[200px]">
                        <select
                            class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 empty:!bg-gray-900 focus:border-2 focus:border-gray-900 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50">
                            <option value="laptop">Laptop</option>
                        </select>
                        <label
                            class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-gray-900 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                            Pilih Barang
                        </label>
                    </div>
                    <div class="relative h-10 w-72 min-w-[200px]">
                        <select wire:model.live='status'
                            class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 empty:!bg-gray-900 focus:border-2 focus:border-gray-900 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50">
                            <option value="all" selected>All</option>
                            <option value="0">Siap</option>
                            <option value="1">Dipinjam</option>
                        </select>
                        <label
                            class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-gray-900 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                            Status Barang
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full h-[21dxrem] flex justify-center items-center flex-col mt-8 gap-[20px]">
            <div class="">{{$this->status}}</div>
            @foreach ($data as $item)
                <div class="relative flex flex-col mt-6 text-gray-700 bg-white shadow-xl bg-clip-border rounded-xl w-96"
                    data-aos='fade-right' data-aos-once="true">
                    <div
                        class="relative h-56 mx-4 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40 object-cover">
                        <img
                            src="{{ Storage::url('public/' . $item->foto) }}"
                            alt="card-image" class="object-cover w-full h-full" />
                    </div>
                    <div class="p-6">
                        <h5
                            class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                            {{ $item->nama }} #{{ $item->no }}
                        </h5>
                        @if ($item->status == 0)
                            <div class="w-full h-auto flex gap-2 items-center">
                                <i class="ph ph-check-circle p-1 bg-green-500 rounded-full text-2xl text-white"></i>
                                <div class="font-semibold text-primary">Siap</div>
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
                            <button
                                class="flex justify-center items-center align-middle group select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-primary text-sec shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                                type="button">
                                Pinjam <i class="ph ph-upload-simple ml-2 text-xl group-hover:rotate-90 transition-all"></i>
                            </button>
                        @endif
                        @if ($item->status == 1)
                            <button
                                class="flex justify-center items-center align-middle group select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-primary text-sec shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                                type="button">
                                Info <i class="ph ph-info ml-2 text-xl group-hover:rotate-90 transition-all"></i>
                            </button>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    
    </section>
    
</div>
