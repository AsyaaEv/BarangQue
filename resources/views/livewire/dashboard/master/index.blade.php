<div class="w-full h-auto px-[1rem] py-[2rem] flex flex-col gap-[20px]">
    
    <div class="border-[2px] rounded-[20px] px-[1rem] py-[1rem] mb-4 flex flex-col gap-[20px]">
        <div class="w-full h-auto flex justify-between  border-b-2  pb-[1rem]">
            <div class="w-full h-auto flex gap-[10px] items-center ">
                <i class="ph ph-user-gear text-2xl"></i>
                <div class="">Admin BarangQue</div>
            </div>
            <button class="p-2 w-full md:max-w-[10rem] bg-primary rounded-[10px] flex items-center justify-center text-white gap-2 border-2" data-dialog-target="dialogAdd">
                <div class="flex w-fit gap-2 justify-center items-center">
                    <i class="ph ph-user-plus"></i>
                    <div class="">Tambah Admin</div>
                </div>
            </button>
        </div>
        <div class="w-full h-auto flex flex-col gap-[10px] justify-center items-center overflow-auto">
            @forelse ($dataAdmin as $item)
            <div class="w-full max-h-[20rem] border-2 shadow rounded-[10px] px-4 py-2 flex justify-center items-center gap-[10px]">
                <div class="w-auto h-auto flex ">
                    <img src="{{Storage::url('public/' .$item->foto)}}" alt="" class="w-[3rem] h-[3rem] object-cover rounded-full ">
                </div>
                <div class="w-full h-auto flex justify-between items-center">
                    <div class="w-full h-auto ">
                        <div class="font-bold text-xl">{{$item->name}}</div>
                        <div class="">{{$item->email}}</div>
                    </div>
                    <div class="w-auto h-auto">
                        <button class=" bg-primary rounded-[10px]" data-ripple-light="true" data-dialog-target="dialog" wire:click='view({{$item->id}})'>
                            <i class="ph ph-eye text-white p-4 "></i>
                        </button>
                    </div>
                </div>
            </div>
            @empty
                
            @endforelse
        </div>
    </div>
</div>
