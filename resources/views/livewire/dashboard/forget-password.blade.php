<div class="w-full h-auto flex flex-col gap-3 justify-center items-center">
    <div class="{{ $this->toggleOtp ? 'hidden' : ($togglePassword ? 'hidden' : 'block') }}">
        <div class="w-72 mt-4 ">
            <div class="relative w-full min-w-[200px] h-10">
                <input wire:model='noWa' required type="number"
                    class="peer w-full h-full bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                    placeholder=" " />
                <label
                    class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-gray-500 peer-focus:text-gray-900 before:border-blue-gray-200 peer-focus:before:!border-gray-900 after:border-blue-gray-200 peer-focus:after:!border-gray-900">No
                    Wa
                </label>
                @error('noWa')
                    <div class="text-red-500 text-sm ">{{ $message }}</div>
                @enderror
            </div>
        </div>

        <div class="w-full h-auto flex justify-end items-center text-sm my-2">
            <a href="/login" class="text-blue-500">Kembali</a>
        </div>
        <button wire:loading.attr="disabled" type="submit" wire:click="sectionOtp"
            class="w-full mt-4 align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-primary text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none">
            next
        </button>
    </div>
    <div class="{{ $this->toggleOtp ? 'block' : 'hidden' }}">
        <div class="w-72 mt-4 ">
            <div class="relative w-full min-w-[200px] h-10">
                <div class="relative w-full min-w-[200px] h-auto p-4">
                    <div class="flex space-x-2 justify-center items-center">
                        <input wire:model='otp1' maxlength="1"
                            class="peer w-10 h-10 text-center bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all border-blue-gray-200 border focus:border-2 rounded-[7px] focus:border-gray-900"
                            type="text"
                            oninput="this.value=this.value.slice(0,1); if(this.value) document.getElementById('otp2').focus();">
                        <input id="otp2" wire:model='otp2' maxlength="1"
                            class="peer w-10 h-10 text-center bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all border-blue-gray-200 border focus:border-2 rounded-[7px] focus:border-gray-900"
                            type="text"
                            oninput="this.value=this.value.slice(0,1); if(this.value) document.getElementById('otp3').focus();">
                        <input id="otp3" wire:model='otp3' maxlength="1"
                            class="peer w-10 h-10 text-center bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all border-blue-gray-200 border focus:border-2 rounded-[7px] focus:border-gray-900"
                            type="text"
                            oninput="this.value=this.value.slice(0,1); if(this.value) document.getElementById('otp4').focus();">
                        <input id="otp4" wire:model='otp4' maxlength="1"
                            class="peer w-10 h-10 text-center bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all border-blue-gray-200 border focus:border-2 rounded-[7px] focus:border-gray-900"
                            type="text"
                            oninput="this.value=this.value.slice(0,1); if(this.value) document.getElementById('otp5').focus();">
                        <input id="otp5" wire:model='otp5' maxlength="1"
                            class="peer w-10 h-10 text-center bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all border-blue-gray-200 border focus:border-2 rounded-[7px] focus:border-gray-900"
                            type="text"
                            oninput="this.value=this.value.slice(0,1); if(this.value) document.getElementById('otp6').focus();">
                        <input id="otp6" wire:model='otp6' maxlength="1"
                            class="peer w-10 h-10 text-center bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all border-blue-gray-200 border focus:border-2 rounded-[7px] focus:border-gray-900"
                            type="text" oninput="this.value=this.value.slice(0,1);">
                    </div>
                </div>
            </div>
        </div>

        <button wire:loading.attr="disabled" type="submit" wire:click="sectionPassword"
            class="w-full mt-8 align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-primary text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none">
            next
        </button>
    </div>
    <div class="{{ $this->togglePassword ? 'block' : 'hidden' }}">
        <div class="w-72 mt-4 flex flex-col gap-[10px]">
            <div class="relative w-full min-w-[200px] h-10 flex flex-col gap-[10px]">
                <input wire:model='password' required
                    class="peer w-full h-full bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                    placeholder=" " />
                <label
                    class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-gray-500 peer-focus:text-gray-900 before:border-blue-gray-200 peer-focus:before:!border-gray-900 after:border-blue-gray-200 peer-focus:after:!border-gray-900">
                    Password Baru
                </label>
            </div>
            <div class="relative w-full min-w-[200px] h-10 flex flex-col gap-[10px]">
                <input wire:model='password_confirmation' required
                    class="peer w-full h-full bg-transparent text-blue-gray-700 font-sans font-normal outline outline-0 focus:outline-0 disabled:bg-blue-gray-50 disabled:border-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 border focus:border-2 border-t-transparent focus:border-t-transparent text-sm px-3 py-2.5 rounded-[7px] border-blue-gray-200 focus:border-gray-900"
                    placeholder=" " />
                <label
                    class="flex w-full h-full select-none pointer-events-none absolute left-0 font-normal !overflow-visible truncate peer-placeholder-shown:text-blue-gray-500 leading-tight peer-focus:leading-tight peer-disabled:text-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500 transition-all -top-1.5 peer-placeholder-shown:text-sm text-[11px] peer-focus:text-[11px] before:content[' '] before:block before:box-border before:w-2.5 before:h-1.5 before:mt-[6.5px] before:mr-1 peer-placeholder-shown:before:border-transparent before:rounded-tl-md before:border-t peer-focus:before:border-t-2 before:border-l peer-focus:before:border-l-2 before:pointer-events-none before:transition-all peer-disabled:before:border-transparent after:content[' '] after:block after:flex-grow after:box-border after:w-2.5 after:h-1.5 after:mt-[6.5px] after:ml-1 peer-placeholder-shown:after:border-transparent after:rounded-tr-md after:border-t peer-focus:after:border-t-2 after:border-r peer-focus:after:border-r-2 after:pointer-events-none after:transition-all peer-disabled:after:border-transparent peer-placeholder-shown:leading-[3.75] text-gray-500 peer-focus:text-gray-900 before:border-blue-gray-200 peer-focus:before:!border-gray-900 after:border-blue-gray-200 peer-focus:after:!border-gray-900">
                    Confirm Password Baru
                </label>
            </div>
        </div>
        <button wire:loading.attr="disabled" type="submit" wire:click="changePassword"
            class="w-full mt-4 align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-primary text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none">
            next
        </button>
    </div>

</div>
