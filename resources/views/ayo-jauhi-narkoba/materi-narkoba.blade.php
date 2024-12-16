{{-- @dd($jawaban->soal_1) --}}
{{-- @dd($soal_jawaban) --}}

<p class="mb-5 text-lg text-justify"> <span class="text-red-500 uppercase text-3xl font-bold">Narkoba</span> merupakan
    istilah yang digunakan untuk menyebut
    narkotika, psikotropika, dan zat-zat berbahaya lainnya. Selain istilah
    narkoba, dikenal juga singkatan NAPZA, yakni narkotika, alkohol,
    psikotropika, dan zat berbahaya lainnya. Kali ini, kita akan belajar
    mengenai narkoba, jenis-jenis narkoba, hingga bahayanya bagi kita!</p>

{{-- VIDEO CONTAINER --}}
<div class="lg:aspect-w-16 lg:aspect-h-9">
    <iframe src="https://www.youtube.com/embed/P7mgNDPJJH4?si=th9oUoAPX3y4SKwL" frameborder="0"
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
        allowfullscreen></iframe>
</div>
{{-- END VIDEO CONTAINER --}}

<h1 class="text-xl mt-9">Soal Narkoba </h1>


@if ($errors->any())
    <div class="">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (session('error'))
                      <div class="alert alert-danger">{{ session('error') }}</div>
                    @endif

<form action="{{ route('ayo-jauhi-narkoba.store') }}" method="POST" class="space-y-5">
    @csrf

    @foreach ($soal_jawaban as $key => $soal)
        <div class="soal">
            <p class="text-base  text-gray-500 mt-5">{{ $loop->iteration }}. {{ $soal['pertanyaan'] }}</p>

            @foreach ($soal['pilihan'] as $key2 => $pilihan)
            
                @php
                    $bgColor = '';
                    if (isset($show_jawaban)) {
                        if ($soal['jawaban_benar'] == $key2) {
                            $bgColor = 'bg-green-500';
                        } elseif ($soal['jawaban_user'] == $key2) {
                            $bgColor = 'bg-red-500';
                        }
                    }
                @endphp

                <div class="flex items-center mt-3 rounded-md {{ $bgColor }}">
                    <input type="radio" id="{{ $key . '_' . $key2 }}" name="{{ $key }}"
                        value="{{ $key2 }}"
                        {{ isset($show_jawaban) && $soal['jawaban_user'] == $key2 ? 'checked' : '' }}>
                    <label for="{{ $key . '_' . $key2 }}" class="ml-2">
                        {{ $key2 }}. {{ $pilihan }}
                    </label>
                </div>
            @endforeach


        </div>
    @endforeach

    {{-- <div class="soal">
        <p class="text-base  text-gray-500 mt-5">1. Apa yang dimaksud dengan narkoba?</p>
        <div
            class="flex items-center mt-3 rounded-md {{ isset($jawaban) && $jawaban->soal_1 == 'a' ? 'bg-green-500' : '' }}">
            <input type="radio" id="1-a" name="soal-1" value="a">
            <label for="1-a" class="ml-2">A. Narkoba adalah zat atau obat yang berasal dari tanaman atau
                bukan tanaman, baik sintetis maupun semisintetis, yang dapat menyebabkan penurunan atau
                perubahan kesadaran
            </label>
        </div>
        <div class="flex items-center mt-3 rounded-md">
            <input type="radio" id="1-b" name="soal-1" value="b">
            <label for="1-b" class="ml-2">B. Narkoba adalah zat atau obat yang berasal dari tanaman atau
                bukan tanaman, baik sintetis maupun semisintetis, yang dapat menyebabkan penurunan atau
                perubahan kesadaran
            </label>
        </div>
        <div class="flex items-center mt-3 rounded-md">
            <input type="radio" id="1-c" name="soal-1" value="c">
            <label for="1-c" class="ml-2">C. Narkoba adalah zat atau obat yang berasal dari tanaman atau
                bukan tanaman, baik sintetis maupun semisintetis, yang dapat menyebabkan penurunan atau
                perubahan kesadaran
            </label>
        </div>

    </div> --}}

    {{-- button --}}
    <button type="submit" class="bg-green-500 text-white p-2 rounded-lg">Submit</button>

</form>
