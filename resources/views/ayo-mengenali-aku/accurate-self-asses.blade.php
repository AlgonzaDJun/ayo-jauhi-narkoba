<div>
    <div class="space-y-4 rounded-lg " id="accurate" role="tabpanel" aria-labelledby="accurate-tab">
        <h1 class="text-2xl font-bold">Accurate Self Assesment </h1>
        <img src="{{ asset('img/Credit assesment-rafiki.png') }}" alt="" class="md:w-1/2 h-72 object-contain">
        <p class="text-base text-justify indent-8"><span class="italic">Accurate Self Assessment</span>  atau Penilaian diri yang akurat menurut
            Daniel
            Goleman dalam bukunya <span class="italic">Emotional Intelligence: The 25th Anniversary Edition</span>, adalah
            kemampuan untuk memahami kelebihan dan kekurangan pada diri sendiri. Penilaian
            diri yang akurat mencakup mengenali bagaimana perilaku, tindakan, dan emosi diri
            sendiri mempengaruhi orang lain, serta mengakui kebutuhan untuk pengembangan
            diri dan perbaikan. Individu yang mampu melakukan penilaian diri yang akurat
            dapat mengevaluasi apakah penggunaan narkoba sesuai dengan tujuan hidup jangka
            panjang mereka, seperti pendidikan, karier, dan hubungan sosial yang sehat.
            Sehingga dapat mengembangkan strategi untuk menghindari penggunaan narkoba
            serta meningkatkan kesejahteraan pribadi.
        </p>
    </div>

    <div class="flex flex-wrap -mb-px list-none text-sm font-semibold text-center" id="myTab"
        data-tabs-toggle="#myTabContent" role="tablist">

        <li class="mr-2" role="presentation">
            <button
                class="inline-block p-4 rounded-t-lg border-b-2 text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 border-blue-600 text-md dark:border-blue-500"
                id="harapan-pemb-accurate-tab" data-tabs-target="#harapan-pemb-accurate" type="button" role="tab"
                aria-controls="harapan-pemb-accurate" aria-selected="true" >Harapan Pembelajaran</button>
        </li>

        <li class="mr-2" role="presentation">
            <button
                class="inline-block p-4 rounded-t-lg border-b-2 text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 border-blue-600 text-md dark:border-blue-500"
                id="studi-rev-acc-tab" data-tabs-target="#studi-rev-acc" type="button" role="tab" aria-controls="studi-rev-acc"
                >Studi Kasus</button>
        </li>

        {{-- <li class="mr-2" role="presentation">
            <button
                class="inline-block p-4 rounded-t-lg border-b-2 text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 border-blue-600 text-md dark:border-blue-500"
                id="studi-1-tab" data-tabs-target="#studi-1" type="button" role="tab" aria-controls="studi-1"
                >Studi Kasus 1</button>
        </li>

        <li class="mr-2" role="presentation">
            <button
                class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-md text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                id="studi-2-tab" data-tabs-target="#studi-2" type="button" role="tab" aria-controls="studi-2"
                aria-selected="false">Studi Kasus 2</button>
        </li>

        <li class="mr-2" role="presentation">
            <button
                class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-md text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                id="studi-3-tab" data-tabs-target="#studi-3" type="button" role="tab" aria-controls="studi-3"
                aria-selected="false">Studi Kasus 3</button>
        </li> --}}

        {{-- instrumen tes --}}
        <li role="presentation" class="mr-2">
            <button
                class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-md text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                id="instrumen-tes-tab" data-tabs-target="#instrumen-tes" type="
                button" role="tab"
                aria-controls="instrumen-tes" aria-selected="false">Skala Penilaian Capaian Pembelajaran</button>
        </li>

        {{-- <li role="presentation">
            <button
                class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-md text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                id="refleksi-diri-tab" data-tabs-target="#refleksi-diri" type="button" role="tab"
                aria-controls="refleksi-diri" aria-selected="false">Refleksi Diri</button>
        </li> --}}
    </div>

    <div id="myTabContent">
        <div class="hidden p-4 rounded-lg" id="harapan-pemb-accurate" role="tabpanel" aria-labelledby="harapan-pemb-accurate-tab">
            @include('ayo-mengenali-aku.accurate-self-assesment.harapan-peserta')
        </div>


        <div class="hidden p-4 rounded-lg" id="studi-rev-acc" role="tabpanel" aria-labelledby="studi-rev-acc-tab">
            @include('ayo-mengenali-aku.accurate-self-assesment.studi_revisi')
        </div>

        <div class="hidden p-4 rounded-lg" id="studi-1" role="tabpanel" aria-labelledby="studi-1-tab">
            @include('ayo-mengenali-aku.accurate-self-assesment.studi_1')
        </div>

        <div class="hidden p-4 rounded-lg" id="studi-2" role="tabpanel" aria-labelledby="studi-2-tab">
            @include('ayo-mengenali-aku.accurate-self-assesment.studi_2')
        </div>

        <div class="hidden p-4 rounded-lg" id="studi-3" role="tabpanel" aria-labelledby="studi-3-tab">
            @include('ayo-mengenali-aku.accurate-self-assesment.studi_3')
        </div>

        <div class="hidden p-4 rounded-lg" id="instrumen-tes" role="tabpanel" aria-labelledby="instrumen-tes-tab">
            @include('ayo-mengenali-aku.accurate-self-assesment.skala-penilaian')
        </div>

        <div class="hidden p-4 rounded-lg" id="refleksi-diri" role="tabpanel" aria-labelledby="refleksi-diri-tab">
            @include('ayo-mengenali-aku.accurate-self-assesment.refleksi-diri')
        </div>

    </div>
</div>
