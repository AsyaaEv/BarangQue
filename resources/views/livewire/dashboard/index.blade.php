<div class="w-full h-auto px-[1rem] py-[2rem] flex flex-col gap-[20px]">
    <div class="border-[2px] rounded-[20px] px-[1rem] py-[1rem] flex flex-col gap-[20px]">
        <div class="w-full h-auto flex gap-[10px] items-center border-b-2 pb-[1rem] justify-between">
            <div class="flex items-center gap-2">
                <i class="ph ph-stack text-2xl"></i>
                <div class="">Overview Barang</div>
            </div>
            <a class="px-4 py-2 bg-primary rounded-[10px] flex gap-2 justify-center items-center text-white" href="/dashboard/barang">
                <i class="ph ph-arrow-right  text-white"></i>
                <div class="">Detail</div>
            </a>
        </div>
        <div class="w-full h-auto flex gap-[10px] items-center border-b-2 pb-[1rem]">
            <div class="p-2 flex justify-center items-center rounded-full bg-white border-2">
                <i class="ph ph-stack-overflow-logo text-2xl"></i>
            </div>
            <div class="w-full h-full flex flex-col ">
                <div class="text-[12px]">Total Barang</div>
                <div class="text-lg font-bold">{{ $totalBarang }}</div>
            </div>
        </div>
        <div class="w-full h-auto flex gap-[10px] items-center border-b-2 pb-[1rem]">
            <div class="p-2 flex justify-center items-center rounded-full bg-white border-2">
                <i class="ph ph-archive text-2xl text-green-500"></i>
            </div>
            <div class="w-full h-full flex flex-col ">
                <div class="text-[12px]">Total Barang Tersedia</div>
                <div class="text-lg font-bold">{{ $totalBarangDiam }}</div>
            </div>
        </div>
        <div class="w-full h-auto flex gap-[10px] items-center">
            <div class="p-2 flex justify-center items-center rounded-full bg-white border-2">
                <i class="ph ph-upload text-2xl text-red-500"></i>
            </div>
            <div class="w-full h-full flex flex-col ">
                <div class="text-[12px]">Total Barang Terpinjam</div>
                <div class="text-lg font-bold">{{ $jumlahBarangDipinjam }}</div>
            </div>
        </div>
    </div>
    <div class="border-[2px] rounded-[20px] px-[1rem] py-[1rem] flex flex-col gap-[20px]">
        <div class="w-full h-auto flex gap-[10px] items-center border-b-2 pb-[1rem] justify-between">
            <div class="flex items-center gap-2">
                <i class="ph ph-folder-user text-2xl"></i>
                <div class="">Data Akun</div>
            </div>
            <a class="px-4 py-2 bg-primary rounded-[10px] flex gap-2 justify-center items-center text-white" href="/dashboard/master">
                <i class="ph ph-arrow-right  text-white"></i>
                <div class="">Detail</div>
            </a>
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
        <div class="w-full h-auto flex gap-[10px] items-center border-b-2 pb-[1rem]">
            <i class="ph ph-files text-2xl"></i>
            <div class="">Audit Log Barang</div>
        </div>
        <div class="w-full h-[30rem]">
            <div
                class="relative flex flex-col w-full h-full overflow-scroll text-gray-700 bg-white shadow-md bg-clip-border rounded-xl">
                <table class="w-full text-left table-auto min-w-max">
                    <thead>
                        <tr>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p
                                    class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    #id
                                </p>
                            </th>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p
                                    class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    Nama Admin
                                </p>
                            </th>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p
                                    class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    Keterangan
                                </p>
                            </th>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p
                                    class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    Barang
                                </p>
                            </th>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p
                                    class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    waktu
                                </p>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($auditBarang as $item)
                        <tr class="even:bg-blue-gray-50/50">
                            <td class="p-4">
                                <p
                                    class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                    {{$item->id}}
                                </p>
                            </td>
                            <td class="p-4">
                                <p
                                    class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                    {{$item->nama_admin}}
                                </p>
                            </td>
                            <td class="p-4">
                                <div class="w-auto h-auto {{$item->keterangan == 'Menambahkan' ? 'bg-green-500' : ($item->keterangan == 'Mengubah' ? 'bg-blue-500' : 'bg-red-500')}} rounded-[20px] text-sm text-white p-1 px-2 flex justify-center items-center">
                                    {{$item->keterangan}}
                                </div>
                                
                                
                            </td>
                            <td class="p-4">
                                <p
                                    class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900 uppercase">
                                    {{$item->no_barang}}
                                </p>
                            </td>
                            <td class="p-4">
                                <p
                                    class="block font-sans text-sm antialiased font-medium leading-normal text-blue-gray-900">
                                    {{\Carbon\Carbon::parse($item->created_at)->locale('id')->isoFormat('DD MMMM YYYY')}}
                                    </p>
                            </td>
                        </tr>
                        @empty
                            
                        @endforelse
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="border-[2px] rounded-[20px] px-[1rem] py-[1rem] mb-4 flex flex-col gap-[20px]">
        <div class="w-full h-auto flex gap-[10px] items-center border-b-2 pb-[1rem]">
            <i class="ph ph-files text-2xl"></i>
            <div class="">Audit Log Admin</div>
        </div>
        <div class="w-full h-[30rem]">
            <div
                class="relative flex flex-col w-full h-full overflow-scroll text-gray-700 bg-white shadow-md bg-clip-border rounded-xl">
                <table class="w-full text-left table-auto min-w-max">
                    <thead>
                        <tr>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p
                                    class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    #id
                                </p>
                            </th>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p
                                    class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    Nama Admin
                                </p>
                            </th>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p
                                    class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    Keterangan
                                </p>
                            </th>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p
                                    class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    Admin
                                </p>
                            </th>
                            <th class="p-4 border-b border-blue-gray-100 bg-blue-gray-50">
                                <p
                                    class="block font-sans text-sm antialiased font-normal leading-none text-blue-gray-900 opacity-70">
                                    waktu
                                </p>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($auditAdmin as $item)
                        <tr class="even:bg-blue-gray-50/50">
                            <td class="p-4">
                                <p
                                    class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                    {{$item->id}}
                                </p>
                            </td>
                            <td class="p-4">
                                <p
                                    class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900">
                                    {{$item->nama_admin}}
                                </p>
                            </td>
                            <td class="p-4">
                                <div class="w-auto h-auto {{$item->keterangan == 'Menambahkan' ? 'bg-green-500' : ($item->keterangan == 'Mengubah' ? 'bg-blue-500' : 'bg-red-500')}} rounded-[20px] text-sm text-white p-1 px-2 flex justify-center items-center">
                                    {{$item->keterangan}} Role
                                </div>
                                
                                
                            </td>
                            <td class="p-4">
                                <p
                                    class="block font-sans text-sm antialiased font-normal leading-normal text-blue-gray-900 uppercase">
                                    {{$item->admin}}
                                </p>
                            </td>
                            <td class="p-4">
                                <p
                                    class="block font-sans text-sm antialiased font-medium leading-normal text-blue-gray-900">
                                    {{\Carbon\Carbon::parse($item->created_at)->locale('id')->isoFormat('DD MMMM YYYY')}}
                                    </p>
                            </td>
                        </tr>
                        @empty
                            
                        @endforelse
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
