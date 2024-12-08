<div>
    <h1 class="text-3xl font-bold mb-6">Refleksi Diri</h1>
    <p class="mb-4">Setelah mengisi penilaian diri ini, renungkan hasilnya:</p>
    <form action="{{ route('accurate-self-assesment.refleksi-diri') }}" method="POST" id="accurate_refleksi_diri">
        @csrf
        <div class="mb-6">
            @foreach ($acc_self_as as $studi)
                @if ($studi['nama'] == 'refleksi diri')
                    @isset($studi['jawaban_rd'])
                        <p class="text-red-500 text-3xl font-semibold my-5">
                            Anda sudah pernah mengisi soal ini sebelumnya.
                        </p>

                        <button type="button"
                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            id="kosong-form-acc-ref-diri">
                            Kosongkan Form
                        </button>
                    @endisset
                    @foreach ($studi['pertanyaan'] as $key => $soal)
                        <div class="space-y-4">

                            @if ($soal['judul'])
                                <h2 class="text-xl font-semibold mb-2 capitalize">
                                    {{ str_replace('_', ' ', $soal['judul']) }}
                                </h2>
                            @endif

                            @foreach ($soal['pertanyaan'] as $key => $item)
                                <div class="mb-3">
                                    <label class="block mb-1" for="{{ $soal['judul'] . $key }}">
                                        {{ $key . '). ' }} {!! $item !!}
                                    </label>
                                    <input type="text" id="{{ $soal['judul'] . $key }}"
                                        value="{{ isset($studi['jawaban_rd']) ? $studi['jawaban_rd'][$soal['judul'] . $key] : '' }}"
                                        class="w-full border rounded p-2" name="{{ $soal['judul'] . $key }}">
                                </div>
                            @endforeach
                        </div>
                    @endforeach
                @endif
            @endforeach

            {{-- <div class="space-y-4">
                <div>
                    <label class="block mb-1" for="kelebihan-a">
                        a) Aspek apa yang menunjukkan bahwa Anda memiliki kelebihan atau kemampuan yang baik? (misal:
                        mengatasi stres)
                    </label>
                    <input type="text" id="kelebihan-a" class="w-full border rounded p-2" name="kelebihan-a">
                </div>
                <div>
                    <label class="block mb-1" for="kelebihan-b">
                        b) Bagaimana Anda dapat memanfaatkan kelebihan ini dalam kehidupan sehari-hari? (misal:
                        mempratikkan mindfulness meditasi)
                    </label>
                    <input type="text" id="kelebihan-b" class="w-full border rounded p-2" name="kelebihan-b">
                </div>
                <div>
                    <label class="block mb-1" for="kelebihan-c">
                        c) Bagaimana kelebihan Anda dapat membantu dalam menolak menggunakan narkoba? (misal: ketika
                        stres tidak menggunakan narkoba sebagai pelampiasan)
                    </label>
                    <input type="text" id="kelebihan-c" class="w-full border rounded p-2" name="kelebihan-b">
                </div>
            </div> --}}
        </div>

        <div class="flex">
            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Submit
            </button>
        </div>

    </form>
</div>


@push('custom-script')
    {{-- make function to clear all input text inside form id accurate_refleksi_diri --}}
    <script>
        $('#kosong-form-acc-ref-diri').click(function() {
            $('#accurate_refleksi_diri').find('input').val('');
        });
    </script>
@endpush
