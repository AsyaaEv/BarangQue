<div class="w-full h-auto p-4 absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex justify-center items-center px-8"
    id="popupTesti">
    <div class="w-full auto bg-white rounded-[10px] drop-shadow-xl border-2 border-black p-2">
        <div class="w-full h-auto flex gap-2 items-center border-b-2 pb-2">
            <i class="ph ph-crown text-white p-2 bg-primary rounded-full text-2xl"></i>
            <div class="flex flex-col">
                <h1 class="text-lg font-bold">Testimoni</h1>
                <h3 class="text-[12px] text-sec">Berikan ulasan untuk pengalaman anda menggunakan BarangQue</h3>
            </div>
        </div>
        @livewire('view.barang-list.input-testimoni')
    </div>
</div>


<script>
    for (let i = 1; i <= 5; i++) {
        let star = document.getElementById('star' + i);
        star.addEventListener('click', function() {
            const ratingInput = document.getElementById('ratingInput');
            ratingInput.value = i;
            ratingInput.dispatchEvent(new Event('input'));

            for (let j = 1; j <= 5; j++) {
                if (j <= i) {
                    document.getElementById('star' + j).classList.add('text-orange-500');
                } else {
                    document.getElementById('star' + j).classList.remove('text-orange-500');
                }
            }
        });
    }
</script>