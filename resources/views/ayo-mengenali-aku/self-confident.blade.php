<div>
    <div class="space-y-4 rounded-lg " id="accurate" role="tabpanel" aria-labelledby="accurate-tab">
        <h1 class="text-2xl font-bold">Self Confident </h1>
        <img src="{{ asset("img/Self confidence-pana.png") }}" alt="" class="md:w-1/2 h-72 object-contain">
        <p class="text-base text-justify indent-8"> <span class="italic capitalize">Self confidence</span> atau kepercayaan diri, menurut Daniel Goleman dalam
            bukunya Emotional Intelligence: The 25th Anniversary Edition, adalah bagian dari
            kesadaran diri yang berperan penting dalam pengembangan kecerdasan emosional.
            Dalam konteks pencegahan penggunaan narkoba, kepercayaan diri membantu
            individu untuk mengelola stres, membuat keputusan yang sehat, dan menanggapi
            tekanan sosial dengan lebih baik. Orang yang percaya diri cenderung lebih mampu
            menghadapi tantangan hidup tanpa bergantung pada narkoba, karena mereka yakin
            pada kemampuan diri sendiri untuk mengatasi masalah.
        </p>
    </div>

    <div class="flex flex-wrap -mb-px list-none text-sm font-semibold text-center" id="myTab"
        data-tabs-toggle="#self-confident-tab" role="tablist">

        <li class="mr-2" role="presentation">
            <button
                class="inline-block p-4 rounded-t-lg border-b-2 text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 border-blue-600 text-md dark:border-blue-500"
                id="harapan-pemb-self-con-tab" data-tabs-target="#harapan-pemb-self-con" type="button" role="tab" aria-controls="harapan-pemb-self-con"
                aria-selected="true">Harapan Pembelajaran</button>
        </li>

        <li class="mr-2" role="presentation">
            <button
                class="inline-block p-4 rounded-t-lg border-b-2 text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 border-blue-600 text-md dark:border-blue-500 capitalize"
                id="studi-rev-self-con-tab" data-tabs-target="#studi-rev-self-con" type="button" role="tab" aria-controls="studi-rev-self-con" aria-selected="false">Studi Kasus</button>
        </li>

        {{-- <li class="mr-2" role="presentation">
            <button
                class="inline-block p-4 rounded-t-lg border-b-2 text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 border-blue-600 text-md dark:border-blue-500"
                id="studi-1-self-con-tab" data-tabs-target="#studi-1-self-con" type="button" role="tab" aria-controls="studi-1-self-con" aria-selected="false">Studi Kasus 1</button>
        </li>

        <li class="mr-2" role="presentation">
            <button
                class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-md text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                id="studi-2-self-con-tab" data-tabs-target="#studi-2-self-con" type="button" role="tab" aria-controls="studi-2-self-con"
                aria-selected="false">Studi Kasus 2</button>
        </li>

        <li class="mr-2" role="presentation">
            <button
                class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-md text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                id="studi-3-self-con-tab" data-tabs-target="#studi-3-self-con" type="button" role="tab" aria-controls="studi-3-self-con"
                aria-selected="false">Studi Kasus 3</button>
        </li> --}}

        {{-- instrumen tes --}}
        <li role="presentation" class="mr-2">
            <button
                class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-md text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                id="lk-self-con-1-tab" data-tabs-target="#lk-self-con-1" type="
                button" role="tab"
                aria-controls="lk-self-con-1" aria-selected="false">L/K Meningkatkan Kepercayaan Diri </button>
        </li>

        {{-- refleksi diri --}}
        {{-- <li role="presentation">
            <button
                class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-md text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                id="lk-self-con-2-tab" data-tabs-target="#lk-self-con-2" type="button" role="tab"
                aria-controls="lk-self-con-2" aria-selected="false">L/K Self Confidence</button>
        </li> --}}
    </div>

    <div id="self-confident-tab">
        <div class="md:p-4 rounded-lg" id="harapan-pemb-self-con" role="tabpanel" aria-labelledby="harapan-pemb-self-con-tab">
            @include('ayo-mengenali-aku.self-confident.harapan-peserta')
        </div>

        <div class="md:p-4 rounded-lg" id="studi-rev-self-con" role="tabpanel" aria-labelledby="studi-rev-self-con-tab">
            @include('ayo-mengenali-aku.self-confident.studi_revisi')
        </div>

        {{-- <div class="md:p-4 rounded-lg" id="studi-1-self-con" role="tabpanel" aria-labelledby="studi-1-self-con-tab">
            @include('ayo-mengenali-aku.self-confident.studi_1')
        </div>

        <div class="hidden md:p-4 rounded-lg" id="studi-2-self-con" role="tabpanel" aria-labelledby="studi-2-self-con-tab">
            @include('ayo-mengenali-aku.self-confident.studi_2')
        </div>

        <div class="hidden md:p-4 rounded-lg" id="studi-3-self-con" role="tabpanel" aria-labelledby="studi-3-self-con-tab">
            @include('ayo-mengenali-aku.self-confident.studi_3')
        </div> --}}

        <div class="hidden md:p-4 rounded-lg" id="lk-self-con-1" role="tabpanel" aria-labelledby="lk-self-con-1-tab">
            @include('ayo-mengenali-aku.self-confident.lk_praktik_penguatan')
        </div>

        {{-- <div class="hidden md:p-4 rounded-lg" id="lk-self-con-2" role="tabpanel" aria-labelledby="lk-self-con-2-tab">
            @include('ayo-mengenali-aku.self-confident.lk_self_confidence')
        </div> --}}

    </div>
</div>
