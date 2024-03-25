<div class="w-full h-auto px-[1rem] py-[2rem] flex flex-col gap-[20px]">
    <div class="border-[2px] rounded-[20px] px-[1rem] py-[1rem] flex flex-col gap-[20px]">
        <div class="w-full h-auto flex gap-[10px] items-center border-b-2 pb-[1rem]">
            <i class="ph ph-folder-user text-2xl"></i>
            <div class="">Data Akun</div>
        </div>
        <div class="w-full h-auto flex gap-[10px] items-center border-b-2 pb-[1rem]">
            <div class="p-2 flex justify-center items-center rounded-full bg-white border-2">
                <i class="ph ph-users text-2xl"></i>
            </div>
            <div class="w-full h-full flex flex-col ">
                <div class="text-[12px]">Total Pengguna</div>
                <div class="text-lg font-bold">{{$allUser}}</div>
            </div>
        </div>
        <div class="w-full h-auto flex gap-[10px] items-center border-b-2 pb-[1rem]">
            <div class="p-2 flex justify-center items-center rounded-full bg-white border-2">
                <i class="ph ph-user-circle-gear text-2xl text-green-500"></i>
            </div>
            <div class="w-full h-full flex flex-col ">
                <div class="text-[12px]">Total Admin</div>
                <div class="text-lg font-bold">{{$getAdmin}}</div>
            </div>
        </div>
        <div class="w-full h-auto flex gap-[10px] items-center border-b-2 pb-[1rem]">
            <div class="p-2 flex justify-center items-center rounded-full bg-white border-2">
                <i class="ph ph-user text-2xl text-red-500"></i>
            </div>
            <div class="w-full h-full flex flex-col ">
                <div class="text-[12px]">Total User</div>
                <div class="text-lg font-bold">{{$getUser}}</div>
            </div>
        </div>
    </div>
    <div class="border-[2px] rounded-[20px] px-[1rem] py-[1rem] mb-4 flex flex-col gap-[20px]">
        <div class="w-full h-auto flex justify-between  border-b-2  pb-[1rem]">
            <div class="w-full h-auto flex gap-[10px] items-center ">
                <i class="ph ph-user-gear text-2xl"></i>
                <div class="">Admin BarangQue</div>
            </div>
            <button class="w-auto h-auto p-2 bg-gray-900 rounded-[10px]" data-dialog-target="dialogAdd">
                <i class="ph ph-plus text-white"></i>
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
                        <button class=" bg-gray-900 rounded-[10px]" data-ripple-light="true" data-dialog-target="dialog" wire:click='view({{$item->id}})'>
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
