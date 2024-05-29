<div class="w-full h-[4rem] flex items-center px-[10px] justify-between border-b-[1px] shadow fixed z-[9999] bg-white">
    <a href="/">
        <img src="{{ Storage::url('public/src/assets/vLogo2.svg') }}" alt="" class="w-[8rem] h-[8rem]">
    </a>
    <div class="w-auto h-full items-center flex gap-[15px] md:flex-row-reverse md:mx-8 md:justify-center md:w-full">

        <img src="{{ Storage::url('public/' . Auth::user()->foto) }}"
            alt="" class="w-[2.5rem] h-[2.5rem] rounded-full hover:cursor-pointer object-cover" id="profile">
        @if (Auth::check())
            @livewire('view.card')
        @endif
        <div class="w-auto h-auto hover:cursor-pointer md:hidden" id="toggleNav">
            <i class="ph ph-list text-3xl " id="navShow"></i>
            <i class="ph ph-x text-3xl hidden" id="navHide"></i>
        </div>
        <div class="hidden w-full h-full md:flex justify-center items-center gap-8">
            <a href="/#landing" id="landingSec"
                class="hover:border-b-2 hover:border-sec text-primary text-lg ">Beranda</a>
            <a href="/#about" id="aboutSec" class="hover:border-b-2 hover:border-sec text-primary text-lg ">Tentang</a>
            <a href="/#barang" id="barangSec" class="hover:border-b-2 hover:border-sec text-primary text-lg">Barang</a>
            <a href="/#testimoni" id="testiSec"
                class="hover:border-b-2 hover:border-sec text-primary text-lg">Ulasan</a>
        </div>
    </div>
</div>
<ul id="dropdownProfile"
    class="fixed z-10 flex min-w-[180px] flex-col gap-2 translate-y-[4rem] overflow-auto rounded-md border border-blue-gray-50 bg-white p-3 font-sans text-sm font-normal text-blue-gray-500 shadow-lg shadow-blue-gray-500/10 focus:outline-none right-3 translate-x-[50rem] transition-all">
    <a role="menuitem" href="/profile"
        class="flex w-full cursor-pointer select-none items-center gap-2 rounded-md px-3 pt-[9px] pb-2 text-start leading-tight outline-none transition-all hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd"
                d="M16 8C16 10.1217 15.1571 12.1566 13.6569 13.6569C12.1566 15.1571 10.1217 16 8 16C5.87827 16 3.84344 15.1571 2.34315 13.6569C0.842855 12.1566 0 10.1217 0 8C0 5.87827 0.842855 3.84344 2.34315 2.34315C3.84344 0.842855 5.87827 0 8 0C10.1217 0 12.1566 0.842855 13.6569 2.34315C15.1571 3.84344 16 5.87827 16 8ZM10 5C10 5.53043 9.78929 6.03914 9.41421 6.41421C9.03914 6.78929 8.53043 7 8 7C7.46957 7 6.96086 6.78929 6.58579 6.41421C6.21071 6.03914 6 5.53043 6 5C6 4.46957 6.21071 3.96086 6.58579 3.58579C6.96086 3.21071 7.46957 3 8 3C8.53043 3 9.03914 3.21071 9.41421 3.58579C9.78929 3.96086 10 4.46957 10 5ZM8 9C7.0426 8.99981 6.10528 9.27449 5.29942 9.7914C4.49356 10.3083 3.85304 11.0457 3.454 11.916C4.01668 12.5706 4.71427 13.0958 5.49894 13.4555C6.28362 13.8152 7.13681 14.0009 8 14C8.86319 14.0009 9.71638 13.8152 10.5011 13.4555C11.2857 13.0958 11.9833 12.5706 12.546 11.916C12.147 11.0457 11.5064 10.3083 10.7006 9.7914C9.89472 9.27449 8.9574 8.99981 8 9Z"
                fill="#90A4AE"></path>
        </svg>
        <p class="block font-sans text-sm antialiased font-medium leading-normal text-inherit">
            Profil
        </p>
    </a>
    <a role="menuitem" href="/profile/barang"
        class="flex w-full cursor-pointer select-none items-center gap-2 rounded-md px-3 pt-[9px] pb-2 text-start leading-tight outline-none transition-all hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900">
        <i class="ph ph-basket"></i>
        <p class="block font-sans text-sm antialiased font-medium leading-normal text-inherit">
            Barang Pinjaman
        </p>
    </a>
    <hr class="my-2 border-blue-gray-50" role="menuitem" />
    <a role="menuitem" href="/dashboard"
        class="flex w-full cursor-pointer select-none items-center gap-2 rounded-md px-3 pt-[9px] pb-2 text-start leading-tight outline-none transition-all hover:bg-blue-gray-50 hover:bg-opacity-80 hover:text-blue-gray-900 focus:bg-blue-gray-50 focus:bg-opacity-80 focus:text-blue-gray-900 active:bg-blue-gray-50 active:bg-opacity-80 active:text-blue-gray-900 {{ Auth::user()->role == 'admin' ? 'block' : 'hidden' }}">
        <i class="ph ph-table"></i>
        <p class="block font-sans text-sm antialiased font-medium leading-normal text-inherit">
            Dashboard Admin
        </p>
    </a>
    @livewire('dashboard.navbar.logout')
</ul>
<nav class="w-full h-full -translate-x-[50rem] transition-all duration-200 py-[2rem] bg-white  z-50 fixed mt-[3rem] md:hidden"
    id="nav">
    <div class="w-full h-auto flex px-[1rem] gap-[10px] justify-center items-center">
        <img src="{{ Storage::url('public/' . Auth::user()->foto) }}"
            alt="" class="w-[3.5rem] h-[3.5rem] rounded-full object-cover">
        <div class="w-full h-full flex justify-center flex-col">
            <div class="text-xl font-semibold">
                {{ Auth::user()->name }}
            </div>
            <div class="">Selamat datang di profile user👋</div>
        </div>
    </div>
    <div class="w-full h-full flex  flex-col gap-3 ">
        @if (Auth::check())
            <div class="w-full h-auto mt-[2rem] px-[2rem] ">
                <div class="text-gray-500">PROFILE</div>
                <div class="w-full h-auto flex flex-col gap-[10px] mt-4 justify-center items-center">
                    <a href="{{ url('/profile') }}" onclick="navbarToggle()"
                        class="w-[90%] h-[3rem]   rounded-[10px]  flex justify-between items-center px-4 hover:bg-gray-200 transition-all">
                        <div class="w-auto h-auto flex gap-[10px] justify-center items-center">
                            <i
                                class="ph ph-user text-2xl "></i>
                            <div class="">
                                Profile Saya</div>
                        </div>
                        <i class="ph ph-caret-right "></i>
                    </a>
                    <a href="{{ url('/profile/barang') }}" onclick="navbarToggle()"
                        class="w-[90%] h-[3rem]   rounded-[10px]  flex justify-between items-center px-4 hover:bg-gray-200 transition-all">
                        <div class="w-auto h-auto flex gap-[10px] justify-center items-center">
                            <i
                                class="ph ph-basket text-2xl "></i>
                            <div class="">
                                Barang Pinjaman Saya</div>
                        </div>
                        <i class="ph ph-caret-right "></i>
                    </a>

                </div>
            </div>
        @endif
        <div class="w-full h-auto mt-[2rem] px-[2rem] ">
            <div class="text-gray-500">MAIN</div>
            <div class="w-full h-auto flex flex-col gap-[10px] mt-4 justify-center items-center">
                <a href="{{ url('/#' . 'landing') }}" onclick="navbarToggle()"
                    class="w-[90%] h-[3rem]   rounded-[10px]  flex justify-between items-center px-4 hover:bg-gray-200 transition-all">
                    <div class="w-auto h-auto flex gap-[10px] justify-center items-center">
                        <i
                            class="ph ph-house text-2xl "></i>
                        <div class="">
                            Beranda</div>
                    </div>
                    <i class="ph ph-caret-right "></i>
                </a>
                <a href="{{ url('/#' . 'about') }}" onclick="navbarToggle()"
                    class="w-[90%] h-[3rem]   rounded-[10px]  flex justify-between items-center px-4 hover:bg-gray-200 transition-all">
                    <div class="w-auto h-auto flex gap-[10px] justify-center items-center">
                        <i
                            class="ph ph-info text-2xl "></i>
                        <div class="">
                            Tentang Kami</div>
                    </div>
                    <i class="ph ph-caret-right "></i>
                </a>
                <a href="{{ url('/#' . 'barang') }}" onclick="navbarToggle()"
                    class="w-[90%] h-[3rem]   rounded-[10px]  flex justify-between items-center px-4 hover:bg-gray-200 transition-all">
                    <div class="w-auto h-auto flex gap-[10px] justify-center items-center">
                        <i
                            class="ph ph-stack text-2xl "></i>
                        <div class="">
                            Barang</div>
                    </div>
                    <i class="ph ph-caret-right "></i>
                </a>
                <a href="{{ url('/#' . 'testimoni') }}" onclick="navbarToggle()"
                    class="w-[90%] h-[3rem]   rounded-[10px]  flex justify-between items-center px-4 hover:bg-gray-200 transition-all">
                    <div class="w-auto h-auto flex gap-[10px] justify-center items-center">
                        <i
                            class="ph ph-crown text-2xl  "></i>
                        <div class="">
                            Ulasan</div>
                    </div>
                    <i class="ph ph-caret-right "></i>
                </a>
                @if (Auth::check())
                    @livewire('dashboard.navbar.logout')
                @endif
            </div>
        </div>
        <div class="w-auto h-auto text-center flex justify-center items-center">
            <i class="ph ph-copyright text-primary"></i>
            <div class="text-primary">copyright BarangQue 2024</div>
        </div>
    </div>
</nav>



<script>
    let togglePP = false
    const PP = document.getElementById('profile')
    const toggleProfile = document.getElementById('dropdownProfile')

    PP.addEventListener('click', function() {
        if (togglePP == false) {
            toggleProfile.classList.remove('translate-x-[50rem]')
            togglePP = true
        } else {
            toggleProfile.classList.add('translate-x-[50rem]')
            togglePP = false

        }
    })



    let nav = true
    const navHide = document.getElementById('navHide')
    const navShow = document.getElementById('navShow')

    document.getElementById('toggleNav').addEventListener('click', function() {
        if (nav == true) {

            document.getElementById('nav').classList.remove('-translate-x-[50rem]')
            document.getElementById('nav').classList.remove('overflow-hidden')
            navShow.classList.add('hidden')
            navHide.classList.remove('hidden')
            nav = false
        } else {
            document.getElementById('nav').classList.add('-translate-x-[50rem]')
            navShow.classList.remove('hidden')
            navHide.classList.add('hidden')
            nav = true

        }
    })
</script>
