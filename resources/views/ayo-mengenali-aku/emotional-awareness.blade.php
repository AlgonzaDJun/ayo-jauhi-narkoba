<div class="text-justify space-y-4">

    <div class="grid gap-6 md:grid-cols-2 lg:grid-cols-4">


        <details class="hidden md:block dropdown dropdown-bottom">
            <summary class="btn">
                <div class="block group">
                    <div
                        class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow h-full border border-gray-200">
                        <div class="flex items-center gap-2 mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                                    d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                            </svg>
                            <h3 class="text-lg font-semibold capitalize">Mulai Menulis Jurnal</h3>
                        </div>
                        <p class="text-sm text-gray-600 capitalize">tulis Jurnal Emosi dan Jurnal Mindfulness</p>
                    </div>
                </div>
            </summary>
            <ul class="menu dropdown-content bg-base-100 rounded-box z-[1] w-52 p-2 shadow">
                <li><a href="{{ route('jurnal-emosi.index') }}" class="block group">
                        <div
                            class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow h-full border border-gray-200">
                            <div class="flex items-center gap-2 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                                        d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                                </svg>
                                <h3 class="text-lg font-semibold">Jurnal Emosi</h3>
                            </div>
                            <p class="text-sm text-gray-600">Lacak dan renungkan perjalanan emosional Anda</p>
                        </div>
                    </a>

                </li>
                <li>

                    <a href="{{ route('jurnal-mindfulness.index') }}" class="block group">
                        <div
                            class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow h-full border border-gray-200">
                            <div class="flex items-center gap-2 mb-4">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor">
                                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                                        d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                </svg>
                                <h3 class="text-lg font-semibold">Jurnal Mindfulness</h3>
                            </div>
                            <p class="text-sm text-gray-600">Dokumentasikan praktik Jurnal Mindfulness anda</p>
                        </div>
                    </a>
                </li>
            </ul>
        </details>

        <a href="{{ route('jurnal-emosi.index') }}" class="block group md:hidden">
            <div
                class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow h-full border border-gray-200">
                <div class="flex items-center gap-2 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                            d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                    </svg>
                    <h3 class="text-lg font-semibold">Jurnal Emosi</h3>
                </div>
                <p class="text-sm text-gray-600">Lacak dan renungkan perjalanan emosional Anda</p>
            </div>
        </a>

        <a href="{{ route('jurnal-mindfulness.index') }}" class="block group md:hidden">
            <div
                class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow h-full border border-gray-200">
                <div class="flex items-center gap-2 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                            d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                    </svg>
                    <h3 class="text-lg font-semibold">Jurnal Mindfulness</h3>
                </div>
                <p class="text-sm text-gray-600">Dokumentasikan praktik Mindfulness Anda</p>
            </div>
        </a>


        <a href="#video-mindfulness" onclick="my_modal_1.showModal()" class="block group">
            <div
                class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow h-full border border-gray-200">
                <div class="flex items-center gap-2 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                            d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                            d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <h3 class="text-lg font-semibold">Lihat Video Mindfulness</h3>
                </div>
                <p class="text-sm text-gray-600">Tonton sesi mindfulness yang dipandu</p>
            </div>
        </a>

        <a href="{{ route('emotional-awareness.index') }}" class="block group">
            <div
                class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow h-full border border-gray-200">
                <div class="flex items-center gap-2 mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-blue-500" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2}
                            d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                    </svg>
                    <h3 class="text-lg font-semibold">Studi Kasus</h3>
                </div>
                <p class="text-sm text-gray-600">Jelajahi studi kasus dunia nyata</p>
            </div>
        </a>

        <a href="{{ route('emotional-awareness.show', ['emotional_awareness' => 'skala-penilaian']) }}"
            class="block group">
            <div
                class="bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition-shadow h-full border border-gray-200">
                <div class="flex items-center gap-2 mb-4">
                    <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"
                        stroke="#3b82f6">
                        <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                        <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                        <g id="SVGRepo_iconCarrier">
                            <path
                                d="M17 9L9.99998 16L6.99994 13M21 12C21 16.9706 16.9706 21 12 21C7.02944 21 3 16.9706 3 12C3 7.02944 7.02944 3 12 3C16.9706 3 21 7.02944 21 12Z"
                                stroke="#3b82f6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            </path>
                        </g>
                    </svg>
                    <h3 class="text-lg font-semibold">Skala Capaian Pembelajaran</h3>
                </div>
                <p class="text-sm text-gray-600">Lihat Seberapa paham kamu terhadap materi ini</p>
            </div>
        </a>
    </div>

    {{-- <div class="md:flex items-center justify-between mb-5 space-y-2 md:space-y-0">

        <a href="{{ route('jurnal-emosi.index') }}"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full block mb-3 md:mb-0">Jurnal
            Emosi</a>

        <a href="{{ route('jurnal-mindfulness.index') }}"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full block mb-3 md:mb-0">Jurnal
            Mindfulness</a>

        <button onclick="my_modal_1.showModal()"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full block mb-3 md:mb-0">Lihat
            Video Mindfulness</button>

        <a href="{{ route('emotional-awareness.index') }}"
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full block mb-3 md:mb-0">Studi
            Kasus</a>
    </div> --}}

    <dialog id="my_modal_1" class="daisy-modal">
        <div class="daisy-modal-box w-full bg-white">
            <form method="dialog">
                <button
                    class="daisy-btn daisy-btn-sm daisy-btn-circle daisy-btn-ghost daisy-absolute daisy-right-2 daisy-top-2">✕</button>
            </form>
            <div class="">
                <iframe src="https://www.youtube.com/embed/pAMOFEEWd5Q?si=r_Xn-vY9RYWEu8xn" class="min-w-full h-96"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen></iframe>
            </div>
        </div>
    </dialog>

    <h1 class="font-bold text-xl italic">Emotional Awareness / <span class="not-italic">Kesadaran Emosional</span>
    </h1>

    <img src="{{ asset("img/Writer's block-rafiki.png") }}" alt="" class="md:w-1/2 h-72 object-contain">

    <p class="indent-8">Emotional awareness atau kesadaran emosional menurut Daniel Goleman dalam
        bukunya Emotional Intelligence: The 25th Anniversary Edition, merupakan kemampuan
        untuk mengenali emosi pada diri sendiri dan pengaruhnya. Emosi sendiri merupakan
        perasaan yang timbul sebagai respons terhadap sesuatu. Kesadaran emosional sangat
        penting dalam mencegah penggunaan narkoba. Dengan memiliki kesadaran
        emosional, membantu kita untuk mengelola emosi dengan lebih baik, sehingga kita
        tidak terjerumus pada kebiasaan buruk seperti menggunakan narkoba untuk
        melarikan diri dari perasaan negatif.</p>

    <p class="indent-8">Dalam bukunya, DBT Skills Training Handouts and Worksheets, Second Edition
        dan DBT Skills Training Manual, Second Edition, Marsha M. Linehan membahas
        mengenai 10 emosi dasar, yaitu: Amarah <span class="italic">(Anger)</span>, Cemburu <span class="italic">(Jealousy)</span>, Cinta <span
        class="italic">(Love)</span>, Iri <span class="italic">(Envy)</span>, Kebahagiaan <span
        class="italic">(Happiness)</span>, Kesedihan <span class="italic">(Sadness)</span>, Malu <span
        class="italic">(Shame)</span>, Menjijikkan <span class="italic">(Disgust)</span>, Rasa Bersalah <span
        class="italic">(Guilt)</span>, dan Takut <span class="italic">(Fear)</span>. Kali ini kita akan belajar mengenai
        pengaruhnya dalam konteks pencegahan penggunaan narkoba:</p>


    {{-- pilih jenis emosi --}}
    <div class="flex flex-wrap -mb-px list-none text-sm font-semibold text-center" id="myTab"
        data-tabs-toggle="#myTabContent" role="tablist">
        <li class="mr-2" role="presentation">
            <button
                class="inline-block p-4 rounded-t-lg border-b-2 text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 border-blue-600 text-md dark:border-blue-500"
                id="harapan-pemb-tab" data-tabs-target="#harapan-pemb" type="button" role="tab" aria-controls="harapan-pemb"
                aria-selected="true">Harapan Pembelajaran</button>
        </li>
        <li class="mr-2" role="presentation">
            <button
                class="inline-block p-4 rounded-t-lg border-b-2 text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 border-blue-600 text-md dark:border-blue-500"
                id="anger-tab" data-tabs-target="#anger" type="button" role="tab" aria-controls="anger">Amarah</button>
        </li>
        <li class="mr-2" role="presentation">
            <button
                class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-md text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                id="jealousy-tab" data-tabs-target="#jealousy" type="button" role="tab"
                aria-controls="jealousy" aria-selected="false">Cemburu</button>
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
                id="happiness-tab" data-tabs-target="#happiness" type="button" role="tab"
                aria-controls="happiness" aria-selected="false">Kebahagiaan</button>
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
        <li class="mr-2" role="presentation">
            <button
                class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-md text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                id="fear-tab" data-tabs-target="#fear" type="button" role="tab" aria-controls="fear"
                aria-selected="false">Takut</button>
        </li>

        {{-- <li role="presentation">
            <button
                class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-md text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                id="stud-kas-emosi-tab" data-tabs-target="#stud-kas-emosi" type="button" role="tab" aria-controls="stud-kas-emosi"
                aria-selected="false">Studi Kasus</button>
        </li> --}}


    </div>

    {{-- page --}}
    <div id="myTabContent">
        <div class="p-4 rounded-lg" id="harapan-pemb" role="tabpanel" aria-labelledby="harapan-pemb-tab">
            @include('ayo-mengenali-aku.emosi.harapan-peserta')
        </div>
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

        {{-- <div class="hidden p-4 rounded-lg" id="stud-kas-emosi" role="tabpanel" aria-labelledby="stud-kas-emosi-tab">
            studi
        </div> --}}
    </div>
</div>
