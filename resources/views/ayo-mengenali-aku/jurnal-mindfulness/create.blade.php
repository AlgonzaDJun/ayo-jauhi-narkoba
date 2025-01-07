@extends('user.layout.layout')

@section('content')
    <div class="md:flex font-poppins font-Poppins">

        <div class="max-w-3xl mx-auto bg-white shadow-lg rounded-lg p-6 md:p-8 space-y-6">
            <h1 class="text-3xl font-bold text-center mb-6">Jurnal Mindfulness</h1>

            <form action="{{ route('jurnal-mindfulness.store') }}" method="post">
                @csrf
                <div class="space-y-4">
                    <div class="flex items-center">
                        <label for="date" class="w-32 font-semibold">Hari/Tanggal:</label>
                        <input name="tanggal" type="date" id="date" class="flex-grow border rounded p-2">
                    </div>

                    {{-- Berapa lama kamu melakukan mindfulness hari ini? --}}
                    <label class="block">1. Berapa lama kamu berlatih mindfulness hari ini?
                        <textarea name="lama_berlatih_mindfulness" class="w-full border rounded p-2 mt-1"></textarea>
                    </label>

                    <label class="block">2. Apa yang kamu rasakan selama kegiatan mindfulness?
                        {{-- textarea --}}
                        <textarea name="perasaan_selama_mindfulness" class="w-full border rounded p-2 mt-1"></textarea>
                    </label>

                    {{-- Apa yang kamu rasakan sebelum melakukan mindfulness? --}}
                    <label class="block">3. Apa yang kamu rasakan sebelum melakukan mindfulness?
                        <textarea name="perasaan_sebelum_mindfulness" class="w-full border rounded p-2 mt-1"></textarea>
                    </label>

                    {{-- Bagaimana perasaanmu setelah melakukan mindfulness? --}}
                    <label class="block">4. Bagaimana perasaanmu setelah melakukan mindfulness?
                        <textarea name="perasaan_setelah_mindfulness" class="w-full border rounded p-2 mt-1"></textarea>
                    </label>

                    {{-- <h2 class="text-xl font-semibold">1. Refleksi Harian</h2>

                <div class="space-y-4 pl-4">
                    <h3 class="font-semibold">a) Pagi</h3>
                    <div class="space-y-2">
                        <label class="block">Bagaimana perasaanmu saat bangun tidur?
                            <input name="perasaan_bangun_tidur" type="text" class="w-full border rounded p-2 mt-1">
                        </label>
                        <label class="block">Apakah kamu merasa siap untuk memulai hari?
                            <input name="siap_memulai_hari" type="text" class="w-full border rounded p-2 mt-1">
                        </label>
                        <label class="block">Apa yang kamu syukuri hari ini?
                            <input name="yang_kamu_syukuri" type="text" class="w-full border rounded p-2 mt-1">
                        </label>
                    </div>

                    <h3 class="font-semibold">b) Siang</h3>
                    <div class="space-y-2">
                        <label class="block">Bagaimana perasaanmu setelah setengah hari berlalu?
                            <input name="perasaanmu_setelah_setengah_hari" type="text"
                                class="w-full border rounded p-2 mt-1">
                        </label>
                        <label class="block">Apakah kamu menghadapi situasi yang sulit?
                            <input name="kamu_menghadapi_situasi_yang_sulit" type="text"
                                class="w-full border rounded p-2 mt-1">
                        </label>
                        <label class="block">Apa yang kamu lakukan untuk tetap tenang dan fokus dalam menghadapinya?
                            <input name="yang_kamu_lakukan_untuk_tetap_tenang" type="text"
                                class="w-full border rounded p-2 mt-1">
                        </label>
                    </div>

                    <h3 class="font-semibold">c) Malam</h3>
                    <div class="space-y-2">
                        <label class="block">Bagaimana perasaanmu saat hari berakhir?
                            <input name="perasaanmu_saat_hari_berakhir" type="text"
                                class="w-full border rounded p-2 mt-1">
                        </label>
                        <label class="block">Apa yang kamu pelajari hari ini?
                            <input name="yang_kamu_pelajari_hari_ini" type="text"
                                class="w-full border rounded p-2 mt-1">
                        </label>
                    </div>
                </div>

                <h2 class="text-xl font-semibold">2. Praktik Mindfulness</h2>
                <div class="space-y-2 pl-4">
                    <label class="block">Berapa lama kamu berlatih mindfulness hari ini?
                        <input name="lama_kamu_berlatih_mindfulness" type="text" class="w-full border rounded p-2 mt-1">
                    </label>
                    <label class="block">Bagaimana perasaanmu sebelum latihan?
                        <input name="perasaanmu_sebelum_latihan" type="text" class="w-full border rounded p-2 mt-1">
                    </label>
                    <label class="block">Bagaimana perasaanmu selama latihan berlangsung?
                        <input name="perasaanmu_selama_latihan_berlangsung" type="text"
                            class="w-full border rounded p-2 mt-1">
                    </label>
                    <label class="block">Bagaimana perasaanmu setelah latihan?
                        <input name="perasaanmu_setelah_latihan" type="text" class="w-full border rounded p-2 mt-1">
                    </label>
                    <label class="block">Bagaimana pola pernapasanmu selama kegiatan mindfulness? (misalnya: tenang,
                        teratur, pendek, panjang, dan lain-lain)
                        <input name="pola_pernapasanmu_selama_kegiatan_mindfulness" type="text"
                            class="w-full border rounded p-2 mt-1">
                    </label>
                    <label class="block">Apa saja sensasi fisik yang kamu rasakan selama kegiatan mindfulness?
                        (misalnya:
                        rasa hangat, dingin, berat, ringan, dan lain-lain)
                        <input name="sensasi_fisik_yang_kamu_rasakan_selama_kegiatan_mindfulness" type="text"
                            class="w-full border rounded p-2 mt-1">
                    </label>
                    <label class="block">Apa yang kamu dapatkan dari latihan mindfulness hari ini? (misalnya: merasa
                        lebih
                        tenang, merasa lebih mengenal diri)
                        <input name="kamu_dapatkan_dari_latihan_mindfulness" type="text"
                            class="w-full border rounded p-2 mt-1">
                    </label>
                </div>

                <h2 class="text-xl font-semibold">3. Pengamatan</h2>
                <div class="space-y-2 pl-4">
                    <label class="block">Apakah kamu mempraktikkan materi mengamati sekitar hari ini?
                        <input name="kamu_mempraktikkan_materi_mengamati_sekitar" type="text"
                            class="w-full border rounded p-2 mt-1">
                    </label>
                    <label class="block">Apa yang kamu perhatikan tentang pikiran dan emosimu hari ini?
                        <input name="kamu_perhatikan_tentang_pikiran" type="text"
                            class="w-full border rounded p-2 mt-1">
                    </label>
                    <label class="block">Bagaimana kamu merespons stres atau situasi sulit hari ini?
                        <input name="Bagaimana_kamu_merespons_stress" type="text"
                            class="w-full border rounded p-2 mt-1">
                    </label>
                </div>

                <h2 class="text-xl font-semibold">4. Rencana untuk Besok</h2>
                <div class="pl-4">
                    <label class="block">Apa yang ingin kamu capai dalam latihan mindfulness besok?
                        <input name="Apa_yang_ingin_kamu_capai_dalam_latihan_mindfulness_besok" type="text"
                            class="w-full border rounded p-2 mt-1">
                    </label>
                </div> --}}

                    {{-- <div class="flex justify-center">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full block">Simpan</button>
                </div> --}}
                </div>
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <div class="flex items-center justify-center mt-4">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        Kirim Entri Jurnal
                    </button>
                </div>
            </form>
        </div>

    </div>
@endsection
