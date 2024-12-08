{{-- @dd($jawaban_self_confidence_pkd) --}}

<div class="">
    <div class="mx-auto shadow-md rounded-lg">
        <div class="sm:px-1 md:px-3 py-5">
            <h1 class="text-2xl font-bold text-gray-900 text-center mb-6">
                Lembar Kerja Praktik Penguatan Kepercayaan Diri
            </h1>
            <h2 class="text-xl font-semibold text-gray-800 mb-4 text-center">
                Lembar Kerja Latihan Pengulangan untuk Meningkatkan Kepercayaan Diri
            </h2>

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
                            <li>Latih berbicara dengan suara yang jelas, postur tubuh yang tegak, dan kontak mata (jika
                                ada audiens)</li>
                            <li>Cobalah untuk menghindari membaca skrip secara langsung. Gunakan poin-poin utama sebagai
                                panduan</li>
                            <li>Lakukan latihan ini dengan waktu yang cukup dan pastikan kamu mengulanginya dengan
                                percaya diri</li>
                        </ol>
                    </div>

                    @isset($jawaban_self_confidence_pkd)
                        <p class="text-red-500 text-3xl font-semibold">
                            Anda sudah pernah mengisi soal ini sebelumnya.
                        </p>

                        <button type="button"
                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full focus:outline-none focus:shadow-outline"
                            id="kosong-form-lk-pkd"
                            >
                            Kosongkan Form
                        </button>
                    @endisset

                    <div>
                        <form action="{{ route('self-confidence.penguatan-diri') }}" method="post" id="self_con_pkd">
                            @csrf
                            <h4 class="font-medium text-gray-800">Refleksi (5 Menit)</h4>
                            <p class="text-gray-700">Setelah setiap sesi latihan, jawab pertanyaan refleksi berikut di
                                bawah
                                ini</p>
                            <ol class="list-decimal list-inside text-gray-700 ml-4">
                                <li>Bagaimana perasaanmu setelah melakukan latihan pengulangan ini?
                                    <input name="Soal_1" type="text"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        value="@isset($jawaban_self_confidence_pkd){{ $jawaban_self_confidence_pkd['Soal_1'] }}@endisset">
                                </li>
                                <li>Apa kemajuan terbesar yang kamu rasakan dari latihan pengulangan ini?
                                    <input name="Soal_2" type="text"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        value="@isset($jawaban_self_confidence_pkd){{ $jawaban_self_confidence_pkd['Soal_2'] }}@endisset">
                                </li>
                                <li>Apa tantangan terbesar yang kamu hadapi selama latihan pengulangan ini?
                                    <input name="Soal_3" type="text"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        value="@isset($jawaban_self_confidence_pkd){{ $jawaban_self_confidence_pkd['Soal_3'] }}@endisset">
                                </li>
                                <li>Apa yang kamu pelajari tentang dirimu selama proses latihan ini?
                                    <input name="Soal_4" type="text"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        value="@isset($jawaban_self_confidence_pkd){{ $jawaban_self_confidence_pkd['Soal_4'] }}@endisset">
                                </li>
                                <li>Bagaimana kamu akan terus meningkatkan keterampilanmu di minggu berikutnya?
                                    <input name="Soal_5" type="text"
                                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"
                                        value="@isset($jawaban_self_confidence_pkd){{ $jawaban_self_confidence_pkd['Soal_5'] }}@endisset">
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
        $('#kosong-form-lk-pkd').on('click', function () {
            $('#self_con_pkd').find('input').val('');
        });
    </script>
@endpush
