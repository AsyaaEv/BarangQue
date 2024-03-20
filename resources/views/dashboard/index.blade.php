@extends('index')
@section('content')
    <div class="w-full h-auto  flex flex-col">
        @include('components.layout')
        @if (request()->is('dashboard'))
            @livewire('dashboard.index')
        @endif

        @if (request()->is('dashboard/barang'))
            @livewire('dashboard.barang.index')
            @include('dashboard.barang.delete-barang') {{-- icon popup delete item --}}

            <div class="w-auto h-auto fixed bottom-10 left-5 -translate-x-[3.6rem] transition-all z-[99999]" id="toggleAdd">
                <div class="w-auto h-auto p-3 bg-gray-900 rounded-full flex justify-center items-center">
                    @include('dashboard.barang.add-barang')
                </div>
            </div>
            <script>
                let toggleC = false
                const toggleAdd = document.getElementById('toggleAdd')

                toggleAdd.addEventListener('click', function() {
                    if (toggleC == false) {
                        console.log('asasas')
                        toggleAdd.classList.remove('-translate-x-[3.6rem]')
                        toggleC = true
                    }
                })

                setInterval(() => {
                    if (togDialog == false) {
                        if (toggleC == true) {
                            toggleAdd.classList.add('-translate-x-[3.6rem]')
                            toggleC = false
                        }
                    }
                }, 5000);
            </script>
        @endif

    </div>
@endsection
