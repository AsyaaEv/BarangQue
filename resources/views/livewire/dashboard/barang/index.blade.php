<div class="w-full h-screen px-[1rem] py-[2rem] flex flex-col gap-[20px]">
    <div
        role="alert"
        data-dismissible="alert"
        class="relative flex w-full max-w-screen-md px-4 py-4 text-base text-white bg-gray-900 rounded-lg font-regular {{session('alert') ? 'relative' : 'hidden'}}">
        <div class="shrink-0">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                <path fill-rule="evenodd"
                    d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z"
                    clip-rule="evenodd"></path>
            </svg>
        </div>
        <div class="ml-3 mr-12">
            <h5 class="block font-sans text-lg antialiased font-semibold leading-snug tracking-normal text-white">
                @if (!empty(session('alert')))
                    {{ session('msg') }}
                @endif
            </h5>
        </div>
        <button
            data-dismissible-target="alert"
            class="!absolute top-3 right-3 h-8 max-h-[32px] w-8 max-w-[32px] select-none rounded-lg text-center align-middle font-sans text-xs font-medium uppercase text-white transition-all hover:bg-white/10 active:bg-white/30 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none"
            type="button">
            <span class="absolute transform -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                    class="w-6 h-6"
                    stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"></path>
                </svg>
            </span>
        </button>
    </div>
    <div class="border-[2px] rounded-[20px] px-[1rem] py-[1rem] flex flex-col gap-[20px]">
        <div class="w-full h-auto flex border-b-2 pb-[1rem]">
            <div class="w-full h-auto flex gap-[10px] items-center ">
                <i class="ph ph-stack text-2xl"></i>
                <div class="">Barang</div>
            </div>
            {{-- <div class="w-72">
                <div class="relative w-full min-w-[200px] h-10">
                    <div
                        class="absolute grid w-5 h-5 place-items-center text-blue-gray-500 top-2/4 right-3 -translate-y-2/4">
                        <i class="ph ph-magnifying-glass" aria-hidden="true"></i>
                    </div>
                    <input wire:model.live='keyword'
                        class="peer w-full h-full bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] !pr-9 border-blue-gray-200 focus:border-gray-900"
                        placeholder=" " /><label
                        class="-z-50 flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-gray-500 peer-focus:text-gray-900 before:border-blue-gray-200 peer-focus:before:!border-gray-900 after:border-blue-gray-200 peer-focus:after:!border-gray-900">
                        Search
                    </label>
                </div>
            </div> --}}
        </div>
        <div
            class="w-full h-[30rem] flex gap-[10px] items-center flex-col md:grid md:grid-cols-2 overflow-auto md:items-start md:justify-normal">
            @forelse ($data as $item)
                <div class="w-full h-auto border-2 rounded-[10px] p-2 shadow flex">
                    <div class="w-[10rem] h-full">
                        <img src="{{ Storage::url('public/' . $item->foto) }}"
                            alt="" class="w-[7rem] h-[7rem] object-cover rounded-[10px]">
                    </div>
                    <div class="w-full h-auto flex justify-between ml-4">
                        <div class="w-auto h-full flex justify-center gap-4 items-center">
                            <div class="">
                                <div class="">No:</div>
                                <div class="">Jenis:</div>
                                <div class="">Nama:</div>
                                <div class="">Status:</div>
                            </div>
                            <div class="">
                                <div class="">{{ $item->no }}</div>
                                <div class="">{{ $item->jenis }}</div>
                                <div class="">{{ $item->nama }}</div>
                                <div
                                    class="w-auto h-auto rounded-[10px] {{$item->status == 0 ? 'bg-green-500' : 'bg-red-500'}} flex gap-2 justify-center items-center px-2 text-white">
                                    <i
                                        class="ph @if ($item->status == 0) ph-check-circle @else ph-x-circle @endif"></i>
                                    <div class="">
                                        @if ($item->status == 0)
                                            Idle
                                        @else
                                            borrowed
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="w-auto h-full flex flex-col gap-[10px] items-center justify-center">
                            <button class="w-auto h-auto bg-blue-500 rounded-[10px] p-2" data-ripple-light="true"
                            data-dialog-target="DIALOG" wire:click='edit({{ $item->id }})'>
                                <i class="ph ph-note-pencil text-white"></i>
                            </button>
                            <button class="w-auto h-auto bg-red-500 rounded-[10px] p-2" data-ripple-light="true" 
                                data-dialog-target="dialog-xs" wire:click='delete({{ $item->id }})'>
                                <i class="ph ph-trash text-white"></i>
                            </button>
                            {{-- icon delete item --}}
                        </div>
                    </div>
                </div>
            @empty
            <div class="w-full h-auto">
                <div class="p-4 bg-gray-900 rounded-[10px] flex justify-center items-center">
                    <div class="text-white font-bold text-lg">Data tidak tersedia</div>
                </div>
            </div>
            @endforelse

        </div>
    </div>
    
</div>
