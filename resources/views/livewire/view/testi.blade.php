<div>
    @forelse ($data as $item)
        <div
            class="relative flex w-full max-w-[26rem] flex-col rounded-xl bg-primary bg-clip-border text-gray-700 shadow-none mt-4 px-3 shrink-0">
            <div
                class="relative flex items-center gap-4 pt-0 pb-8 mx-0 mt-4 overflow-hidden text-gray-700 bg-transparent shadow-none rounded-xl bg-clip-border ">
                <img
                    src="{{ Storage::url('public/'.$item->user->foto)}}"
                    alt="Tania Andrew"
                    class="relative inline-block h-[58px] w-[58px] !rounded-full  object-cover object-center" />
                <div class="flex w-full flex-col gap-0.5">
                    <div class="flex items-center justify-between gap-8">
                        <h5
                            class="block font-sans text-xl antialiased font-semibold leading-snug tracking-normal text-sec">
                            {{$item->user->name}}
                        </h5>
                        <div class="flex items-center gap-0 5">
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
                <p class="text-white block font-sans text-base antialiased font-light leading-relaxed text-inherit italic">
                    "{{$item->alasan}}"
                </p>
            </div>
        </div>
    @empty
    @endforelse

</div>
