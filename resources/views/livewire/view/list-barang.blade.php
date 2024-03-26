<div class="w-full h-auto flex justify-center items-center gap-[20px]">
    @foreach ($data as $item)
    <div class="relative flex flex-col mt-6 text-gray-700 bg-white shadow-xl bg-clip-border rounded-xl w-96" data-aos='fade-right' data-aos-once="true">
        <div
            class="relative h-56 mx-4 -mt-6 overflow-hidden text-white shadow-lg bg-clip-border rounded-xl bg-blue-gray-500 shadow-blue-gray-500/40 object-cover">
            <img
                src="{{Storage::url('public/' . $item->foto)}}"
                alt="card-image" class="object-cover"/>
        </div>
        <div class="p-6">
            <h5
                class="block mb-2 font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-blue-gray-900">
                {{$item->nama}} #{{$item->no}}
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
