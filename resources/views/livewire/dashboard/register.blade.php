<div class="w-full h-auto justify-center items-center flex flex-col gap-4">
    <div
        class="w-full h-auto flex justify-center items-center flex-col gap-4 {{ $this->toggle1 == true ? 'hidden' : ($this->toggle2 == true ? 'hidden' : ($this->toggle3 == true ? 'hidden' : ($this->toggle4 == true ? 'hidden' : 'block'))) }}">
        <div class="w-[90%] h-auto flex flex-col md:flex-row md:gap-4">
            <div class="w-full h-auto flex justify-center items-center">
                <img src="{{ Storage::url('src/assets/vWelcome.svg') }}" alt="" class="w-[15rem] h-[15rem] md:w-[30rem] md:h-[30rem] pointer-events-none" >
            </div>
            <hr class="border-[1px] h-full hidden md:block">
            <div class="gap-2 flex flex-col w-full justify-center items-center">
                <div class="w-full h-auto flex flex-col justify-center items-center">
                    <div class="font-bold text-3xl text-primary md:text-5xl">Barang<span class="text-sec">Que</span></div>
                    <div class="text-md">Silakan masukan data anda untuk mendaftar</div>
                    <div class="text-sm text-red-500 italic">*Pastikan memasukan data secara benar!</div>
                </div>
                <div class="relative w-full min-w-[200px] h-10">
                    <input wire:model='nama' required
                        class="peer w-full h-full bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                        placeholder=" " /><label
                        class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-gray-500 peer-focus:text-gray-900 before:border-blue-gray-200 peer-focus:before:!border-gray-900 after:border-blue-gray-200 peer-focus:after:!border-gray-900">Nama
                        Lengkap
                    </label>
    
                </div>
                <div class="relative w-full min-w-[200px] h-10">
                    <input wire:model='email' required type="email"
                        class="peer w-full h-full bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                        placeholder=" " /><label
                        class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-gray-500 peer-focus:text-gray-900 before:border-blue-gray-200 peer-focus:before:!border-gray-900 after:border-blue-gray-200 peer-focus:after:!border-gray-900">
                        Email
                    </label>
                </div>
                <div class="relative w-full min-w-[200px] h-10">
                    <input wire:model='password' required type="password"
                        class="peer w-full h-full bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                        placeholder=" " /><label
                        class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-gray-500 peer-focus:text-gray-900 before:border-blue-gray-200 peer-focus:before:!border-gray-900 after:border-blue-gray-200 peer-focus:after:!border-gray-900">
                        Password
                    </label>
                </div>
                <div class="relative w-full min-w-[200px] h-10">
                    <input wire:model='cPassword' required type="password"
                        class="peer w-full h-full bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                        placeholder=" " /><label
                        class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-gray-500 peer-focus:text-gray-900 before:border-blue-gray-200 peer-focus:before:!border-gray-900 after:border-blue-gray-200 peer-focus:after:!border-gray-900">
                        Konfirmasi Password
                    </label>
                </div>
                <div class="relative w-full min-w-[200px] h-10">
                    <div class="inline-flex items-center">
                        <label class="relative flex items-center p-3 rounded-full cursor-pointer" htmlFor="check">
                          <input type="checkbox" wire:model='tos' 
                            class="before:content[''] peer relative h-5 w-5 cursor-pointer appearance-none rounded-md border border-blue-gray-200 transition-all before:absolute before:top-2/4 before:left-2/4 before:block before:h-12 before:w-12 before:-translate-y-2/4 before:-translate-x-2/4 before:rounded-full before:bg-blue-gray-500 before:opacity-0 before:transition-opacity checked:border-gray-900 checked:bg-gray-900 checked:before:bg-gray-900 hover:before:opacity-10"
                            id="check" />
                          <span
                            class="absolute text-white transition-opacity opacity-0 pointer-events-none top-2/4 left-2/4 -translate-y-2/4 -translate-x-2/4 peer-checked:opacity-100">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5" viewBox="0 0 20 20" fill="currentColor"
                              stroke="currentColor" stroke-width="1">
                              <path fill-rule="evenodd"
                                d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                clip-rule="evenodd"></path>
                            </svg>
                          </span>
                        </label>
                        <label class="mt-px font-light text-gray-700 cursor-pointer select-none" htmlFor="check" >
                          Dengan Mencentang, Anda menyetujui dan telah membaca <a class="font-bold" data-dialog-target="dialog-tos">Terms Of Service</a>
                        </label>
                      </div> 
                </div>
                <div class="w-full h-auto flex gap-2 justify-end px-0">
                    <button wire:click='back1' wire:loading.attr="disabled"
                        class="flex  justify-center items-center gap-2 align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-red-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                        type="button">
                        <i class="ph ph-arrow-bend-up-left text-lg"></i>
                        Batal
                    </button>
                    <button wire:loading.attr="disabled"
                        class="flex justify-center items-center gap-2 align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-primary text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                        type="submit" wire:click='section1'>
                        Lanjut
                        <i class="ph ph-arrow-bend-up-right text-lg"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div
        class="w-full h-auto flex flex-col justify-center items-center gap-4 {{ $this->toggle1 == true ? 'block' : 'hidden' }}">
        <div class="w-[90%] h-auto flex flex-col gap-2 md:flex-row">
            <div class="w-full h-auto flex justify-center items-center">
                <img src="{{ Storage::url('src/assets/vForm.svg') }}" alt="" class="w-[15rem] h-[15rem] md:w-[30rem] md:h-[30rem] pointer-events-none">
            </div>
            <hr class="border-[1px] h-full">
            <div class="flex justify-center items-center flex-col w-full">
                <div class="w-full h-auto flex flex-col justify-center items-center">
                    <div class="font-bold text-3xl text-primary">Barang<span class="text-sec">Que</span></div>
                    <div class="text-md">Silakan masukan data anda untuk mendaftar</div>
                </div>
                <div class="w-full h-auto flex flex-col gap-2">
                    <div class="relative min-w-[200px]">
                        <select wire:change='selectUserType' wire:model='type'
                            class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 empty:!bg-gray-900 focus:border-2 focus:border-gray-900 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50">
                            <option value="0">Select</option>
                            <option value="Siswa">Siswa</option>
                            <option value="Guru">Guru</option>
                            <option value="Staf">Staf</option>
                        </select>
                        <label
                            class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-gray-900 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                            Type User
                        </label>
                    </div>
                    <div
                        class="w-full h-auto flex flex-col justify-center items-center gap-2 {{ $this->type == 'Siswa' ? 'block' : 'hidden' }}">
                        <div class="relative w-full min-w-[200px] h-10">
                            <input wire:model='kelas'
                                class="peer w-full h-full bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                placeholder=" " /><label
                                class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-gray-500 peer-focus:text-gray-900 before:border-blue-500 peer-focus:before:!border-gray-900 after:border-blue-500 peer-focus:after:!border-gray-900">
                                Kelas
                            </label>
                        </div>
                        <div class="relative w-full min-w-[200px] h-10">
                            <input wire:model='absen' type="number"
                                class="peer w-full h-full bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                placeholder=" " /><label
                                class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-gray-500 peer-focus:text-gray-900 before:border-blue-500 peer-focus:before:!border-gray-900 after:border-blue-500 peer-focus:after:!border-gray-900">
                                Absen
                            </label>
                        </div>
                        <div class="relative w-full min-w-[200px] h-10">
                            <select wire:model='jurusan'
                                class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 empty:!bg-gray-900 focus:border-2 focus:border-gray-900 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50">
                                <option value="0">Select</option>
                                <option value="PPLG">PPLG</option>
                                <option value="AKL">AKL</option>
                                <option value="TO">TO</option>
                                <option value="MPLB">MPLB</option>
                                <option value="PM">PM</option>
                            </select>
                            <label
                                class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-gray-500 peer-focus:text-gray-900 before:border-blue-500 peer-focus:before:!border-gray-900 after:border-blue-500 peer-focus:after:!border-gray-900">
                                Jurusan
                            </label>
                        </div>
                    </div>
                    <div
                        class="w-full h-auto flex flex-col justify-center items-center gap-2 {{ $this->type == 'Staf' ? 'block' : 'hidden' }}">
                        <div class="relative w-full min-w-[200px] h-10">
                            <input wire:model='posisi'
                                class="peer w-full h-full bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                placeholder=" " /><label
                                class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-gray-500 peer-focus:text-gray-900 before:border-blue-500 peer-focus:before:!border-gray-900 after:border-blue-500 peer-focus:after:!border-gray-900">
                                Posisi/Bagian
                            </label>
                        </div>
                    </div>
                    <div
                        class="w-full h-auto flex flex-col justify-center items-center gap-2 {{ $this->type == 'Guru' ? 'block' : 'hidden' }}">
                        <div class="relative w-full">
                            <select wire:model='typeGuru'
                                class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 empty:!bg-gray-900 focus:border-2 focus:border-gray-900 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50">
                                <option value="0">Select</option>
                                <option value="Produktif">Produktif</option>
                                <option value="Normada">Normada</option>
                            </select>
                            <label
                                class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-gray-900 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                                Type Guru
                            </label>
                        </div>
                        <div class="relative w-full min-w-[200px] h-10">
                            <input wire:model='mapel'
                                class="peer w-full h-full bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                placeholder=" " /><label
                                class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-gray-500 peer-focus:text-gray-900 before:border-blue-500 peer-focus:before:!border-gray-900 after:border-blue-500 peer-focus:after:!border-gray-900">
                                Mapel
                            </label>
                        </div>
                        <div class="relative w-full min-w-[200px] h-10">
                            <input wire:model='kodeGuru'
                                class="peer w-full h-full bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                                placeholder=" " /><label
                                class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-gray-500 peer-focus:text-gray-900 before:border-blue-500 peer-focus:before:!border-gray-900 after:border-blue-500 peer-focus:after:!border-gray-900">
                                Kode Guru
                            </label>
                        </div>
                    </div>
                </div>
                <div class="w-full h-auto flex gap-2 justify-end mt-4">
                    <button wire:click='back2' wire:loading.attr="disabled"
                        class="flex  justify-center items-center gap-2 align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-red-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                        type="button">
                        <i class="ph ph-arrow-bend-up-left text-lg"></i>
                        Kembali
                    </button>
                    <button wire:loading.attr="disabled"
                        class="flex justify-center items-center gap-2 align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-primary text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                        type="submit" wire:click='section2'>
                        Lanjut
                        <i class="ph ph-arrow-bend-up-right text-lg"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div
        class="w-full h-auto flex justify-center items-center flex-col gap-4 {{ $this->toggle2 == true ? 'block' : ($this->toggle1 == false ? 'hidden' : 'hidden') }}
        ">
        <div class="w-[90%] h-auto flex flex-col gap-2 md:flex-row">
            <div class="w-full h-auto flex justify-center items-center">
                <img src="{{ !$this->foto ? Storage::url('src/assets/vPicture.svg') : $this->foto->temporaryUrl() }}" alt="" class="w-[15rem] h-[15rem] md:w-[25rem] md:h-[25rem] rounded-full border-2 border-black shadow-sm pointer-events-none object-cover">
            </div>
            <hr class="border-[1px] h-full hidden md:block">
            <div class="md:flex md:flex-col md:w-full md:justify-center md:items-center md:mx-4">
                <div class="w-full h-auto flex flex-col justify-center items-center">
                    <div class="font-bold text-3xl text-primary">Barang<span class="text-sec">Que</span></div>
                    <div class="text-md">Silakan masukan data anda untuk mendaftar</div>
                </div>
                <div class="relative w-full min-w-[200px] h-10">
                    <div class="text-sm text-red-500">*Optional</div>
                    <input type="file" name="" id="" wire:model='foto'>
                </div>
                <div class="w-full h-auto flex gap-2 justify-end px-4">
                    <button wire:click='back3' wire:loading.attr="disabled"
                        class="flex  justify-center items-center gap-2 align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-red-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                        type="button">
                        <i class="ph ph-arrow-bend-up-left text-lg"></i>
                        Kembali
                    </button>
                    <button wire:click='section3' wire:loading.attr="disabled"
                        class="flex justify-center items-center gap-2 align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-primary text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                        type="submit">
                        Lanjut
                        <i class="ph ph-arrow-bend-up-right text-lg"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div
        class="w-full h-auto flex justify-center items-center flex-col gap-4 {{ $this->toggle3 ? 'block' : ($this->toggle2 == false ? 'hidden' : 'hidden') }}
        ">
        <div class="w-[90%] h-auto flex flex-col gap-2 md:flex-row">
            <div class="w-full h-auto flex justify-center items-center">
                <img src="{{ Storage::url('src/assets/vOtp.svg') }}" alt="" class="w-[15rem] h-[15rem] md:w-[25rem] md:h-[25rem] pointer-events-none">
            </div>
            <hr class="border-[1px] h-full hidden md:block">
            <div class="md:flex md:flex-col md:w-full md:justify-center md:items-center md:mx-4">
                <div class="w-full h-auto flex flex-col justify-center items-center">
                    <div class="font-bold text-3xl text-primary">Barang<span class="text-sec">Que</span></div>
                    <div class="text-md">Silakan masukan data anda untuk mendaftar</div>
                </div>
                <div class="relative w-full min-w-[200px] h-10">
                    <input wire:model='noWa'
                        class="peer w-full h-full bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                        placeholder=" " type="number" /><label
                        class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-gray-500 peer-focus:text-gray-900 before:border-blue-500 peer-focus:before:!border-gray-900 after:border-blue-500 peer-focus:after:!border-gray-900">
                        Nomor Wa (08xxxxx)
                    </label>
                </div>
                <div class="w-full h-auto flex gap-2 justify-end mt-4">
                    <button wire:click='back4' wire:loading.attr="disabled"
                        class="flex  justify-center items-center gap-2 align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-red-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                        type="button">
                        <i class="ph ph-arrow-bend-up-left text-lg"></i>
                        Kembali
                    </button>
                    <button wire:click='section4' wire:loading.attr="disabled"
                        class="flex justify-center items-center gap-2 align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-primary text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                        type="submit">
                        Lanjut
                        <i class="ph ph-arrow-bend-up-right text-lg"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div
        class="w-full h-auto flex justify-center items-center flex-col gap-4 {{ $this->toggle4 ? 'block' : ($this->toggle3 == false ? 'hidden' : 'hidden') }}
        ">
        <div class="w-[90%] h-auto flex flex-col gap-2 md:flex-row">
            <div class="w-full h-auto flex justify-center items-center">
                <img src="{{ Storage::url('src/assets/vOtp.svg') }}" alt="" class="w-[15rem] h-[15rem] md:w-[25rem] md:h-[25rem] pointer-events-none">
            </div>
            <hr class="border-[1px] h-full hidden md:block">
            <div class="md:flex md:flex-col md:w-full md:justify-center md:items-center md:mx-4">
                <div class="w-full h-auto flex flex-col justify-center items-center">
                    <div class="font-bold text-3xl text-primary">Barang<span class="text-sec">Que</span></div>
                    <div class="text-md">Silakan masukan data anda untuk mendaftar</div>
                </div>
                <div class="relative w-full min-w-[200px] h-auto p-4">
                    <div class="flex space-x-2 justify-center items-center">
                        <input wire:model='otp1' maxlength="1" class="peer w-10 h-10 text-center bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all border-blue-gray-200 border focus:border-2 rounded-[7px] focus:border-gray-900" type="text" oninput="this.value=this.value.slice(0,1); if(this.value) document.getElementById('otp2').focus();">
                        <input id="otp2" wire:model='otp2' maxlength="1" class="peer w-10 h-10 text-center bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all border-blue-gray-200 border focus:border-2 rounded-[7px] focus:border-gray-900" type="text" oninput="this.value=this.value.slice(0,1); if(this.value) document.getElementById('otp3').focus();">
                        <input id="otp3" wire:model='otp3' maxlength="1" class="peer w-10 h-10 text-center bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all border-blue-gray-200 border focus:border-2 rounded-[7px] focus:border-gray-900" type="text" oninput="this.value=this.value.slice(0,1); if(this.value) document.getElementById('otp4').focus();">
                        <input id="otp4" wire:model='otp4' maxlength="1" class="peer w-10 h-10 text-center bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all border-blue-gray-200 border focus:border-2 rounded-[7px] focus:border-gray-900" type="text" oninput="this.value=this.value.slice(0,1); if(this.value) document.getElementById('otp5').focus();">
                        <input id="otp5" wire:model='otp5' maxlength="1" class="peer w-10 h-10 text-center bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all border-blue-gray-200 border focus:border-2 rounded-[7px] focus:border-gray-900" type="text" oninput="this.value=this.value.slice(0,1); if(this.value) document.getElementById('otp6').focus();">
                        <input id="otp6" wire:model='otp6' maxlength="1" class="peer w-10 h-10 text-center bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all border-blue-gray-200 border focus:border-2 rounded-[7px] focus:border-gray-900" type="text" oninput="this.value=this.value.slice(0,1);">
                    </div>
                </div>
                <div class="w-full h-auto flex gap-2 justify-end mt-4">
                    <button wire:click='back5' wire:loading.attr="disabled"
                        class="flex  justify-center items-center gap-2 align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-red-900 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                        type="button">
                        <i class="ph ph-arrow-bend-up-left text-lg"></i>
                        Kembali
                    </button>
                    <button wire:click='insert' wire:loading.attr="disabled"
                        class="flex justify-center items-center gap-2 align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-primary text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                        type="submit">
                        Submit
                        <i class="ph ph-arrow-bend-up-right text-lg"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div
        class="w-full h-screen bg-black/30 backdrop-blur-sm fixed flex justify-center items-center {{ $this->errorM ? 'block' : 'hidden' }}">
        <div
            class="w-auto h-auto p-8 bg-white rounded-[10px] shadow border-2 flex justify-center items-center flex-col gap-4">
            <div class="w-full h-full  flex justify-center items-center flex-col">
                <i class="ph ph-x-circle text-5xl p-4 bg-red-200 text-red-500 rounded-full"></i>
                <div class="font-bold">Kesalahan</div>
            </div>
            <div class="w-auto h-auto p-2 bg-gray-100 rounded-[10px] shadow-md border-2 uppercase">
                <div class=" text-semibold">{{ $this->errorM }}</div>
            </div>
            <div class="w-full h-auto flex items-center justify-end">
                <button wire:click='alertClose'
                    class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-primary text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none"
                    type="button">
                    Oke
                </button>
            </div>
        </div>
    </div>
</div>
