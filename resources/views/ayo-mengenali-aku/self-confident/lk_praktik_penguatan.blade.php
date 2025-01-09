{{-- @dd($jawaban_self_confidence_pkd) --}}

<div class="">
    <div class="mx-auto shadow-md rounded-lg">
        <div class="sm:px-1 md:px-3 py-5">
            <h1 class="text-2xl font-bold text-gray-900 text-center mb-6">
                Lembar Kerja Latihan Pengulangan untuk Meningkatkan Kepercayaan Diri
            </h1>
            {{-- <h2 class="text-xl font-semibold text-gray-800 mb-4 text-center">
                Lembar Kerja Latihan Pengulangan untuk Meningkatkan Kepercayaan Diri
            </h2> --}}

            <div class="mb-6">
                <h3 class="text-lg font-medium text-gray-900 mb-2">Tujuan:</h3>
                <p class="text-gray-700">
                    Meningkatkan kepercayaan diri dalam keterampilan berbicara di depan umum melalui latihan berulang
                </p>
            </div>

            <div class="mb-6">
                <h3 class="text-lg font-medium text-gray-900 mb-2">Instruksi:</h3>
                <div class="space-y-4">
                    <div>
                        <h4 class="font-medium text-gray-800">Persiapan (5 Menit)</h4>
                        <ol class="list-decimal list-inside text-gray-700 ml-4">
                            <li>Pilih topik yang akan dijadikan latihan</li>
                            <li>Buatlah poin-poin utama atau skrip pendek yang ingin disampaikan</li>
                            <li>Baca dan pahami materi sebelum memulai Latihan</li>
                        </ol>
                    </div>
                    <div>
                        <h4 class="font-medium text-gray-800">Latihan (10 Menit)</h4>
                        <ol class="list-decimal list-inside text-gray-700 ml-4">
                            <li>Berdiri di depan cermin atau berlatih di hadapan teman atau keluarga</li>
                            <li>Perhatikan postur tubuh: tegakkan tubuh, jaga pandangan ke depan, dan perhatikan
                                ekspresi wajah</li>
                            <li>Berbicara dengan suara jelas: gunakan suara lantang, jeda saat diperlukan, dan
                                artikulasikan kata dengan baik</li>
                            <li>Gunakan gerakan tangan: berikan isyarat kecil dengan tangan untuk menekankan poin
                                penting, tetapi tetap natural</li>
                            <li>Cobalah tanpa membaca: gunakan poin-poin utama di skrip sebagai panduan. Jangan membaca
                                kata demi kata</li>
                            <li>Ulangi 2-3 kali: setelah latihan pertama, evaluasi dan ulangi untuk meningkatkan
                                hasilnya</li>

                        </ol>
                    </div>

                    @isset($jawaban_self_confidence_pkd)
                        <x-congratulations-card title="Selamat!" message="Kamu telah menyelesaikan:"
                            subtitle="Lembar Kerja Latihan Pengulangan untuk Meningkatkan Kepercayaan Diri" stars="5"
                            footer="Tetap Semangat dan Selalu Jauhi Narkoba!" />
                    @endisset

                    <div>
                        <form action="{{ route('self-confidence.penguatan-diri') }}" method="post" id="self_con_pkd">
                            @csrf
                            <h4 class="font-medium text-gray-800">Refleksi (5 Menit)</h4>
                            <p class="text-gray-700 my-4">Setelah setiap sesi latihan, jawab pertanyaan refleksi berikut
                                di
                                bawah
                                ini</p>
                            <ol class="list-decimal list-inside text-gray-700 ml-4 space-y-4">
                                <li>Apakah kamu merasa lebih percaya diri setelah latihan ini?<br>
                                    Jawaban:
                                    <textarea name="soal_1"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 p-2">
@isset($jawaban_self_confidence_pkd)
{{ $jawaban_self_confidence_pkd['soal_1'] }}
@endisset
</textarea>
                                </li>
                                <li>Bagian mana yang menurut kamu paling berhasil?<br>
                                    Jawaban:
                                    <textarea name="soal_2"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 p-2">
@isset($jawaban_self_confidence_pkd)
{{ $jawaban_self_confidence_pkd['soal_2'] }}
@endisset
</textarea>
                                </li>
                                <li>Bagian mana yang perlu kamu tingkatkan?<br>
                                    Jawaban:
                                    <textarea name="soal_3"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 p-2">
@isset($jawaban_self_confidence_pkd)
{{ $jawaban_self_confidence_pkd['soal_3'] }}
@endisset
</textarea>
                                </li>
                                <li>Langkah apa yang akan kamu ambil untuk menjadi lebih baik?<br>
                                    Jawaban:
                                    <textarea name="soal_4"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 p-2">
@isset($jawaban_self_confidence_pkd)
{{ $jawaban_self_confidence_pkd['soal_4'] }}
@endisset
</textarea>
                                </li>
                            </ol>


                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                            <div class="mt-4">
                                <button
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline">
                                    Submit
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('custom-script')
    <script>
        $('#kosong-form-lk-pkd').on('click', function() {
            $('#self_con_pkd').find('input[type="text"]').val('');
        });
    </script>
@endpush
