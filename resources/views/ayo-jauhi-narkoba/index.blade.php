

@extends('user.layout.layout')

@section('content')
    <div class="md:flex font-poppins font-Poppins">

        <div class="md:p-4 rounded-2xl  lg:mx-auto mx-5 mt-5 ">

            <div class="mb-4 border-b border-gray-200  text-lg">
                <ul class="flex flex-wrap -mb-px text-sm font-medium text-center" id="myTab"
                    data-tabs-toggle="#myTabContent" role="tablist">

                    <li class="mr-2" role="presentation">
                        <button
                            class="inline-block p-4 rounded-t-lg border-b-2 text-blue-600 hover:text-blue-600 dark:text-blue-500 dark:hover:text-blue-500 border-blue-600 text-md dark:border-blue-500"
                            id="profile-tab" data-tabs-target="#profile" type="button" role="tab"
                            aria-controls="profile" aria-selected="true">Materi Narkoba</button>
                    </li>
                    
                    <li class="mr-2" role="presentation">
                        <button
                            class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-md text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                            id="stud-kas-tab" data-tabs-target="#stud-kas" type="button" role="tab"
                            aria-controls="stud-kas" aria-selected="false">Studi Kasus</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button
                            class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-md text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                            id="cap-belajar-tab" data-tabs-target="#cap-belajar" type="button" role="tab"
                            aria-controls="cap-belajar" aria-selected="false">Penilaian Capaian Pembelajaran</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button
                            class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-md text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                            id="pengertian-jenis-tab" data-tabs-target="#pengertian-jenis" type="button" role="tab"
                            aria-controls="pengertian-jenis" aria-selected="false">Pengertian dan Jenis Narkoba</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button
                            class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-md text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                            id="faktor-tab" data-tabs-target="#faktor" type="button" role="tab" aria-controls="faktor"
                            aria-selected="false">Faktor Penyebab Penggunaan Narkoba</button>
                    </li>
                    <li class="mr-2" role="presentation">
                        <button
                            class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-md text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                            id="dampak-tab" data-tabs-target="#dampak" type="button" role="tab" aria-controls="dampak"
                            aria-selected="false">Dampak Penggunaan Narkoba</button>
                    </li>
                    <li role="presentation">
                        <button
                            class="inline-block p-4 rounded-t-lg border-b-2 border-transparent hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300 dark:border-transparent text-md text-gray-500 dark:text-gray-400 border-gray-100 dark:border-gray-700"
                            id="pencegahan-tab" data-tabs-target="#pencegahan" type="button" role="tab"
                            aria-controls="pencegahan" aria-selected="false">Bentuk Pencegahan Narkoba</button>
                    </li>
                </ul>
            </div>
            <div id="myTabContent">
                <div class="md:p-4 rounded-lg" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    @include('ayo-jauhi-narkoba.materi-narkoba')
                </div>

                <div class="text-justify hidden md:p-4 rounded-lg" id="stud-kas" role="tabpanel"
                    aria-labelledby="stud-kas-tab">
                    @include('ayo-jauhi-narkoba.studi-kasus')
                </div>

                <div class="text-justify hidden md:p-4 rounded-lg" id="cap-belajar" role="tabpanel"
                    aria-labelledby="cap-belajar-tab">
                    @include('ayo-jauhi-narkoba.skala-penilaian')
                </div>

                <div class="text-justify hidden md:p-4 rounded-lg" id="pengertian-jenis" role="tabpanel"
                    aria-labelledby="pengertian-jenis-tab">
                    @include('ayo-jauhi-narkoba.pengertian-jenis-narkoba')
                </div>


                <div class="hidden md:p-4  rounded-lg " id="faktor" role="tabpanel" aria-labelledby="faktor-tab">
                    @include('ayo-jauhi-narkoba.faktor-penyebab')
                </div>

                <div class="hidden md:p-4  rounded-lg " id="dampak" role="tabpanel" aria-labelledby="dampak-tab">
                    @include('ayo-jauhi-narkoba.dampak-narkoba')
                </div>

                <div class="md:p-4 rounded-lg" id="pencegahan" role="tabpanel" aria-labelledby="pencegahan-tab">
                    @include('ayo-jauhi-narkoba.bentuk-pencegahan')
                </div>

            </div>
        </div>

    </div>
@endsection
