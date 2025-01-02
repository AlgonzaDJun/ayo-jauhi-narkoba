<div class="text-justify space-y-4">

    <div class="md:flex items-center justify-between mb-5">

        {{-- button jurnal emosi --}}
        <a href="{{ route('jurnal-emosi.index') }}"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full block mb-3 md:mb-0">Jurnal
            Emosi</a>

        {{-- button jurnal mindfulness --}}
        <a href="{{ route('jurnal-mindfulness.index') }}"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full block mb-3 md:mb-0">Jurnal
            Mindfulness</a>

        {{-- button lihat video mindfullneess --}}
        <button onclick="my_modal_1.showModal()"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full block mb-3 md:mb-0">Lihat
            Video Mindfulness</button>
    </div>

    <dialog id="my_modal_1" class="daisy-modal">
        <div class="daisy-modal-box w-full bg-white">
            <form method="dialog">
                <button class="daisy-btn daisy-btn-sm daisy-btn-circle daisy-btn-ghost daisy-absolute daisy-right-2 daisy-top-2">✕</button>
            </form>
            <div class="">
                <iframe src="https://www.youtube.com/embed/rZ37na3Tvjo?si=ZBxQfgMztIsjfvYJ" class="min-w-full h-96"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
    </dialog>

    <h1 class="font-bold text-xl italic">Emotional Awareness / <span class="not-italic">Kesadaran Emosional</span> </h1>

    <img src="{{ asset("img/Writer's block-rafiki.png") }}" alt="" class="md:w-1/2 h-72 object-contain">


    <p class="indent-8">Kesadaran emosional merupakan kemampuan untuk
        mengenali emosi pada diri sendiri dan pengaruhnya. Emosi
        sendiri merupakan perasaan yang timbul sebagai respons
        terhadap sesuatu. Kali ini kita akan belajar mengenai 10 emosi,
        yaitu Amarah <span class="italic">(Anger)</span>, Cemburu <span class="italic">(Jealousy)</span>, Cinta <span class="italic">(Love)</span>, Iri <span class="italic">(Envy)</span>, Kebahagiaan <span class="italic">(Happiness)</span>, Kesedihan <span class="italic">(Sadness)</span>, Malu <span class="italic">(Shame)</span>, Menjijikkan <span class="italic">(Disgust)</span>, Rasa Bersalah <span class="italic">(Guilt)</span>, dan Takut <span class="italic">(Fear)</span>
        .</p>


    {{-- pilih jenis emosi --}}
    <div class="flex flex-wrap -mb-px list-none text-sm font-semibold text-center" id="myTab"
        data-tabs-toggle="#myTabContent" role="tablist">
        <li class="mr-2" role="presentation">
            <button
                class="inline-block p-4 rounded-t-lg border-b-2 text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 border-blue-600 text-md dark:border-blue-500"
                id="anger-tab" data-tabs-target="#anger" type="button" role="tab" aria-controls="anger"
                aria-selected="true">Amarah</button>
        </li>
        <li class="mr-2" role="presentation">
            <button
                class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-md text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                id="jealousy-tab" data-tabs-target="#jealousy" type="button" role="tab" aria-controls="jealousy"
                aria-selected="false">Cemburu</button>
        </li>
        <li class="mr-2" role="presentation">
            <button
                class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-md text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                id="love-tab" data-tabs-target="#love" type="button" role="tab" aria-controls="love"
                aria-selected="false">Cinta</button>
        </li>
        <li class="mr-2" role="presentation">
            <button
                class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-md text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                id="envy-tab" data-tabs-target="#envy" type="button" role="tab" aria-controls="envy"
                aria-selected="false">Iri</button>
        </li>
        <li class="mr-2" role="presentation">
            <button
                class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-md text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                id="happiness-tab" data-tabs-target="#happiness" type="button" role="tab" aria-controls="happiness"
                aria-selected="false">Kebahagiaan</button>
        </li>
        <li class="mr-2" role="presentation">
            <button
                class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-md text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                id="sadness-tab" data-tabs-target="#sadness" type="button" role="tab" aria-controls="sadness"
                aria-selected="false">Kesedihan</button>
        </li>
        <li class="mr-2" role="presentation">
            <button
                class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-md text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                id="shame-tab" data-tabs-target="#shame" type="button" role="tab" aria-controls="shame"
                aria-selected="false">Malu</button>
        </li>
        <li class="mr-2" role="presentation">
            <button
                class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-md text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                id="disgust-tab" data-tabs-target="#disgust" type="button" role="tab" aria-controls="disgust"
                aria-selected="false">Menjijikkan</button>
        </li>
        <li class="mr-2" role="presentation">
            <button
                class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-md text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                id="guilt-tab" data-tabs-target="#guilt" type="button" role="tab" aria-controls="guilt"
                aria-selected="false">Rasa Bersalah</button>
        </li>
        <li role="presentation">
            <button
                class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-md text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                id="fear-tab" data-tabs-target="#fear" type="button" role="tab" aria-controls="fear"
                aria-selected="false">Takut</button>
        </li>


    </div>

    {{-- page --}}
    <div id="myTabContent">
        <div class="p-4 rounded-lg" id="anger" role="tabpanel" aria-labelledby="anger-tab">
            @include('ayo-mengenali-aku.emosi.anger')
        </div>

        <div class="hidden p-4 rounded-lg" id="jealousy" role="tabpanel" aria-labelledby="jealousy-tab">
            @include('ayo-mengenali-aku.emosi.jealous')
        </div>

        <div class="hidden p-4 rounded-lg" id="love" role="tabpanel" aria-labelledby="love-tab">
            @include('ayo-mengenali-aku.emosi.love')
        </div>

        <div class="hidden p-4 rounded-lg" id="envy" role="tabpanel" aria-labelledby="envy-tab">
            @include('ayo-mengenali-aku.emosi.envy')
        </div>

        <div class="hidden p-4 rounded-lg" id="happiness" role="tabpanel" aria-labelledby="happiness-tab">
            @include('ayo-mengenali-aku.emosi.happiness')
        </div>

        <div class="hidden p-4 rounded-lg" id="sadness" role="tabpanel" aria-labelledby="sadness-tab">
            @include('ayo-mengenali-aku.emosi.sadness')
        </div>

        <div class="hidden p-4 rounded-lg" id="shame" role="tabpanel" aria-labelledby="shame-tab">
            @include('ayo-mengenali-aku.emosi.shame')
        </div>

        <div class="hidden p-4 rounded-lg" id="disgust" role="tabpanel" aria-labelledby="disgust-tab">
            @include('ayo-mengenali-aku.emosi.disgust')
        </div>

        <div class="hidden p-4 rounded-lg" id="guilt" role="tabpanel" aria-labelledby="guilt-tab">
            @include('ayo-mengenali-aku.emosi.guilty')
        </div>

        <div class="hidden p-4 rounded-lg" id="fear" role="tabpanel" aria-labelledby="fear-tab">
            @include('ayo-mengenali-aku.emosi.fear')
        </div>
    </div>
</div>