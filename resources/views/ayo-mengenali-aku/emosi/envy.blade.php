<div>
    @foreach ($emosis as $keyz => $emosi)
        @if ($emosi['nama_emosi'] == 'Iri')
            <img src="{{ asset('img/Envy-bro.png') }}" alt="" class=" h-72 object-contain">
            <table class="table-auto overflow-auto w-full border-separate border-spacing-y-3 border-spacing-x-4">
                <tbody class="">
                    <tr>
                        <th>Jenis Emosi:</th>
                        <td>{{ $emosi['jenis_emosi'] }}</td>
                    </tr>
                    <tr>
                        <th>Penjelasan:</th>
                        <td>{{ $emosi['penjelasan'] }}</td>
                    </tr>
                    <tr>
                        <th>Penyebab:</th>
                        <td>{!! $emosi['penyebab'] !!}</td>
                    </tr>
                    <tr>
                        <th>Contoh:</th>
                        <td>{!! $emosi['contoh'] !!}</td>
                    </tr>
                    <tr>
                        <th>Reaksi terhadap Iri:</th>
                        <td>{!! $emosi['reaksi'] !!}</td>
                    </tr>
                    <tr>
                        <th>Dampak Iri:</th>
                        <td>{!! $emosi['dampak'] !!}</td>
                    </tr>
                    <tr>
                        <th>Pengelolaan Emosi</th>
                        <td>{!! $emosi['pengelolaan'] !!}</td>
                    </tr>
                    <tr>
                        <th>Potensi Penggunaan Narkoba</th>
                        <td>{{ $emosi['potensi_penggunaan_narkoba'] }}</td>
                    </tr>
                    {{-- <tr>
                        <th>Studi Kasus</th>
                        <td class="indent-8">{!! $emosi['studi_kasus'] !!}</td>
                    </tr> --}}
                </tbody>
            </table>

            {{-- <div class="my-4 -translate-x-8">
                <h1 class="font-semibold text-lg">Jawablah Soal Di bawah ini</h1>

                @isset($emosi['jawaban_emosi'])
                    <p class="text-red-500 text-3xl font-semibold my-5">
                        Anda sudah pernah mengisi soal ini sebelumnya.
                    </p>
                @endisset

                <form action="{{ route('ayo-mengenali-aku.index') }}" class="space-y-5" id="form-envy">
                    @foreach ($emosi['pertanyaan'] as $key => $soal)
                        <p class="text-base  text-gray-500 mt-5">{{ $loop->iteration }}. {{ $soal['pertanyaan'] }}</p>

                        @foreach ($soal['pilihan'] as $key2 => $pilihan)
                            <div class="flex items-center mt-3 rounded-md">
                                <input type="radio" id="{{ $key . '_' . $key2 . '_envy' }}" name="{{ $key }}"
                                    value="{{ $key2 }}"
                                    {{ isset($emosi['jawaban_emosi']) && $emosi['jawaban_emosi']['soal' . $key] == $key2 ? 'checked' : '' }}
                                    {{ isset($show_jawaban) && $soal['jawaban_user'] == $key2 ? 'checked' : '' }}>
                                <label for="{{ $key . '_' . $key2 . '_envy' }}" class="ml-2">
                                    {{ $key2 }}. {{ $pilihan }}
                                </label>
                            </div>
                        @endforeach
                    @endforeach

                    <button type="submit" class="bg-green-500 text-white p-2 rounded-lg">Submit</button>
                </form>
            </div> --}}
        @endif
    @endforeach

</div>

@push('custom-script')
    <script>
        $('#form-envy').submit(function(e) {
            e.preventDefault();
            // remove all bg color
            $('input[type="radio"]').removeClass('bg-green-500 bg-red-500');
            $('label').removeClass('bg-green-500 bg-red-500');

            let data = $(this).serializeArray();
            let jawaban = [];
            data.forEach((item) => {
                jawaban.push(item.value);
            });

            // check if all question is answered
            if (jawaban.length < 5) {
                swal("Error!", "Please answer all question!", "error");
                return;
            }

            axios.post("{{ route('ayo-mengenali-aku.store') }}", {
                    jawaban: jawaban,
                    emosi: 'Iri'
                })
                .then((response) => {
                    swal("Success!", response.data.message, "success");

                    $.each(response.data.jawaban_old, function(questionNumber, jawabanOld) {
                        // Get the correct answer from jawaban_benar
                        const jawabanBenar = response.data.jawaban_benar[questionNumber];

                        // Define the IDs for old answer and correct answer input fields
                        const oldAnswerId = `#${questionNumber}_${jawabanOld}_envy`;
                        const correctAnswerId = `#${questionNumber}_${jawabanBenar}_envy`;

                        // Define the corresponding label selectors using the 'for' attribute
                        const oldLabel = `label[for='${questionNumber}_${jawabanOld}_envy']`;
                        const correctLabel = `label[for='${questionNumber}_${jawabanBenar}_envy']`;

                        // If the old answer is correct, apply green background to input and label
                        if (jawabanOld === jawabanBenar) {
                            $(correctAnswerId).addClass('bg-green-500');
                            $(correctLabel).addClass('bg-green-500'); // Change label color to green
                        } else {
                            // If the answer is wrong, apply red background to old answer and green to correct one
                            $(oldAnswerId).addClass('bg-red-500');
                            $(oldLabel).addClass('bg-red-500'); // Change label color to red
                            $(correctAnswerId).addClass('bg-green-500');
                            $(correctLabel).addClass(
                                'bg-green-500'); // Change correct label color to green
                        }
                    });
                })
                .catch((error) => {
                    console.log(error);
                });
        });
    </script>
@endpush
