<div class="w-full h-auto">
    <div class="rounded-[20px] px-[1rem] py-[1rem] mb-4 flex flex-col gap-[20px]">
        <div class="w-full h-auto flex justify-between  border-b-2  pb-[1rem]">
            <div class="w-full h-auto flex gap-[10px] items-center ">
                <i class="ph ph-users text-2xl"></i>
                <div class="">List User</div>
            </div>
        </div>
        <div class="w-full max-h-[20rem] flex flex-col gap-[10px] justify-center items-center overflow-auto">
            @forelse ($data as $item)
            <div class="w-full h-auto border-2 shadow rounded-[10px] px-4 py-2 flex justify-center items-center gap-[10px]">
                <div class="w-auto h-auto flex ">
                    <img src="{{Storage::url('public/' .$item->foto)}}" alt="" class="w-[3rem] h-[3rem] object-cover rounded-full ">
                </div>
                <div class="w-full h-auto flex justify-between items-center">
                    <div class="w-full h-auto ">
                        <div class="font-bold text-xl">{{$item->name}}</div>
                        <div class="">{{$item->email}}</div>
                    </div>
                    <div class="w-auto h-auto">
                        <button class=" bg-primary rounded-[10px]" data-ripple-light="true" data-dialog-close="true" wire:click='add({{$item->id}})'>
                            <i class="ph ph-plus text-white p-4 "></i>
                        </button>
                    </div>
                </div>
            </div>
            @empty
                
            @endforelse
        </div>
        <div class="w-full h-auto flex justify-end items-center">
            <button class="p-2 rounded-[10px] bg-primary text-white" data-dialog-close="true" >Close</button>
        </div>
    </div>
</div>
