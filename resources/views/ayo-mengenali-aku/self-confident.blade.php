<div>
    <div class="space-y-4 rounded-lg " id="accurate" role="tabpanel" aria-labelledby="accurate-tab">
        <h1 class="text-2xl font-bold">Self Confident </h1>
        <img src="{{ asset("img/Self confidence-pana.png") }}" alt="" class="md:w-1/2 h-72 object-contain">
        <p class="text-base">Self confidence atau kepercayaan diri merupakan kemampuan untuk
            percaya pada diri sendiri. Self confidence yang tinggi dapat
            meningkatkan kemampuan untuk membuat keputusan yang tepat,
            menghadapi tantangan dengan lebih baik, dan menghindari perilaku
            berisiko seperti penggunaan narkoba.
        </p>
    </div>

    <div class="flex flex-wrap -mb-px list-none text-sm font-semibold text-center" id="myTab"
        data-tabs-toggle="#self-confident-tab" role="tablist">

        <li class="mr-2" role="presentation">
            <button
                class="inline-block p-4 rounded-t-lg border-b-2 text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 border-blue-600 text-md dark:border-blue-500"
                id="studi-1-self-con-tab" data-tabs-target="#studi-1-self-con" type="button" role="tab" aria-controls="studi-1-self-con"
                aria-selected="true">Studi Kasus 1</button>
        </li>

        {{-- studi 2 dan 3 --}}
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
        </li>

        {{-- instrumen tes --}}
        <li role="presentation" class="mr-2">
            <button
                class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-md text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                id="lk-self-con-1-tab" data-tabs-target="#lk-self-con-1" type="
                button" role="tab"
                aria-controls="lk-self-con-1" aria-selected="false">L/K Praktik Penguatan Kepercayaan Diri </button>
        </li>

        {{-- refleksi diri --}}
        <li role="presentation">
            <button
                class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-md text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                id="lk-self-con-2-tab" data-tabs-target="#lk-self-con-2" type="button" role="tab"
                aria-controls="lk-self-con-2" aria-selected="false">L/K Self Confidence</button>
        </li>
    </div>

    <div id="self-confident-tab">
        <div class="md:p-4 rounded-lg" id="studi-1-self-con" role="tabpanel" aria-labelledby="studi-1-self-con-tab">
            @include('ayo-mengenali-aku.self-confident.studi_1')
        </div>

        <div class="hidden md:p-4 rounded-lg" id="studi-2-self-con" role="tabpanel" aria-labelledby="studi-2-self-con-tab">
            @include('ayo-mengenali-aku.self-confident.studi_2')
        </div>

        <div class="hidden md:p-4 rounded-lg" id="studi-3-self-con" role="tabpanel" aria-labelledby="studi-3-self-con-tab">
            @include('ayo-mengenali-aku.self-confident.studi_3')
        </div>

        <div class="hidden md:p-4 rounded-lg" id="lk-self-con-1" role="tabpanel" aria-labelledby="lk-self-con-1-tab">
            @include('ayo-mengenali-aku.self-confident.lk_praktik_penguatan')
        </div>

        <div class="hidden md:p-4 rounded-lg" id="lk-self-con-2" role="tabpanel" aria-labelledby="lk-self-con-2-tab">
            @include('ayo-mengenali-aku.self-confident.lk_self_confidence')
        </div>

    </div>
</div>
