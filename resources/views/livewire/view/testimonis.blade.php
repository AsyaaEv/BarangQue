<div>
    <section>
        <div class="w-full h-auto border-2 mt-4 rounded-[10px]">
            <div class="w-full h-auto flex justify-between items-center p-2">
                <div class="w-full h-auto flex gap-2 items-center">
                    <a href="/#testimoni" class="">
                        <i class="ph ph-arrow-left p-2 bg-primary text-white rounded-full"></i>
                    </a>
                    <div class="">Ulasan</div>
                </div>
                <div class="w-full h-auto flex flex-col gap-2 ">
                    <div class="relative h-10 w-auto">
                        <select wire:model.live="rating"
                            class="peer h-full w-full rounded-[7px] border border-blue-gray-200 border-t-transparent bg-transparent px-3 py-2.5 font-sans text-sm font-normal text-blue-gray-700 outline outline-0 transition-all placeholder-shown:border placeholder-shown:border-blue-gray-200 placeholder-shown:border-t-blue-gray-200 empty:!bg-gray-900 focus:border-2 focus:border-gray-900 focus:border-t-transparent focus:outline-0 disabled:border-0 disabled:bg-blue-gray-50">
                            <option value="5" selected><span
                                    class="text-orange-500">&#9733;&#9733;&#9733;&#9733;&#9733;</span>
                                ({{ $b5 }})</option>
                            <option value="4"><span class="text-orange-500">&#9733;&#9733;&#9733;&#9733;</span>
                                ({{ $b4 }})</option>
                            <option value="3"><span class="text-orange-500">&#9733;&#9733;&#9733;</span>
                                ({{ $b3 }})</option>
                            <option value="2"><span class="text-orange-500">&#9733;&#9733;</span>
                                ({{ $b2 }})</option>
                            <option value="1"><span class="text-orange-500">&#9733;</span> ({{ $b1 }})
                            </option>
                        </select>
                        <label
                            class="before:content[' '] after:content[' '] pointer-events-none absolute left-0 -top-1.5 flex h-full w-full select-none text-[11px] font-normal leading-tight text-blue-gray-400 transition-all before:pointer-events-none before:mt-[6.5px] before:mr-1 before:box-border before:block before:h-1.5 before:w-2.5 before:rounded-tl-md before:border-t before:border-l before:border-blue-gray-200 before:transition-all after:pointer-events-none after:mt-[6.5px] after:ml-1 after:box-border after:block after:h-1.5 after:w-2.5 after:flex-grow after:rounded-tr-md after:border-t after:border-r after:border-blue-gray-200 after:transition-all peer-placeholder-shown:text-sm peer-placeholder-shown:leading-[3.75] peer-placeholder-shown:text-blue-gray-500 peer-placeholder-shown:before:border-transparent peer-placeholder-shown:after:border-transparent peer-focus:text-[11px] peer-focus:leading-tight peer-focus:text-gray-900 peer-focus:before:border-t-2 peer-focus:before:border-l-2 peer-focus:before:border-gray-900 peer-focus:after:border-t-2 peer-focus:after:border-r-2 peer-focus:after:border-gray-900 peer-disabled:text-transparent peer-disabled:before:border-transparent peer-disabled:after:border-transparent peer-disabled:peer-placeholder-shown:text-blue-gray-500">
                            Rating
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full h-auto flex justify-center items-center flex-col mt-8 md:grid md:grid-cols-3 md:place-items-center">
            @forelse ($data as $item)
                <div
                    class="relative flex w-full max-w-[26rem] flex-col rounded-xl bg-primary bg-clip-border text-gray-700 shadow-none mt-4 px-3 shrink-0">
                    <div
                        class="relative flex items-center gap-4 pt-0 pb-8 mx-0 mt-4 overflow-hidden text-gray-700 bg-transparent shadow-none rounded-xl bg-clip-border ">
                        <img
                            src="{{ Storage::url('public/' . $item->user->foto) }}"
                            alt="Tania Andrew"
                            class="relative inline-block h-[58px] w-[58px] !rounded-full  object-cover object-center" />
                        <div class="flex w-full flex-col gap-0.5">
                            <div class="flex items-center justify-between gap-4">
                                <h5
                                    class="block font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-sec">
                                    {{ $item->user->name }}
                                </h5>
                                <div class="flex items-center">
                                    @for ($i = 0; $i < $item->rating; $i++)
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                            class="w-5 h-5 text-yellow-700">
                                            <path fill-rule="evenodd"
                                                d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.007 5.404.433c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.433 2.082-5.006z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    @endfor
                                </div>
                            </div>
                            <p class="block font-sans text-base antialiased font-light leading-relaxed text-white">
                                {{ explode('_', $item->user->type)[0] }}
                            </p>
                        </div>
                    </div>
                    <div class="p-0 mb-6">
                        <p
                            class="text-white block font-sans text-base antialiased font-light leading-relaxed text-inherit italic">
                            "{{ $item->alasan }}"
                        </p>
                    </div>
                </div>
                @empty
                <div class="w-full h-auto flex justify-center items-center md:absolute md:top-1/2 md:left-1/2 md:transform md:-translate-x-1/2 md:-translate-y-1/2">
                    <div class="bg-sec p-4 rounded-[10px] flex gap-2 text-white">
                        <i class="ph ph-ghost text-2xl"></i>
                        <div class="">Tidak ada ulasan</div>
                    </div>
                </div>
            @endforelse
        </div>

    </section>

</div>
