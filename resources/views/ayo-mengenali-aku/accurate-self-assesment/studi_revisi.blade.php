<div class="space-y-5 text-justify indent-8">
    @foreach ($acc_self_as as $studi)
        @if ($studi['nama'] === 'studi kasus revisi')
            <div class="bg-white shadow-md rounded-lg p-6 mb-6 md:flex md:justify-between">
                <div>

                    <h2 class="text-xl font-semibold mb-4 text-gray-800">Profil</h2>
                    <ul class="list-disc pl-5 space-y-2 text-gray-700">
                        {{-- <li><span class="font-medium">Nama:</span> {{ $studi['profil']['nama'] }}</li>
                        <li><span class="font-medium">Usia:</span> 15 tahun</li>
                        <li><span class="font-medium">Sekolah:</span> SMA Nusantara</li>
                        <li><span class="font-medium">Kelas:</span> 10</li> --}}
                        {{-- foreach key and value --}}
                        @foreach ($studi['profil'] as $key => $value)
                            <li><span class="font-medium">{{ ucfirst($key) }}:</span> {{ $value }}</li>
                        @endforeach
                    </ul>
                </div>

                <img src="{{ asset('img/Men talking-amico.png') }}" alt="" class=" h-60 object-contain">
            </div>

            <p class="text-base indent-8 ">{!! $studi['deskripsi'] !!}</p>

            <div class="bg-white shadow-md rounded-lg p-6 mb-6">
                <h2 class="text-xl font-semibold mb-4 text-gray-800">Refleksi Diri</h2>
                <div class="grid md:grid-cols-2 gap-4">
                    <div>
                        <h3 class="text-lg font-medium mb-2 text-green-600">Kelebihan:</h3>
                        <ul class="list-disc pl-5 space-y-1 text-gray-700">
                            @foreach ($studi['kelebihan'] as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                    <div>
                        <h3 class="text-lg font-medium mb-2 text-red-600">Kekurangan:</h3>
                        <ul class="list-disc pl-5 space-y-1 text-gray-700">
                            @foreach ($studi['kekurangan'] as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>

            <p class="text-base indent-8 ">{!! $studi['after_kekurangan'] !!}</p>

            <div class="bg-white shadow-md rounded-lg p-6 mb-6">
                <h2 class="text-xl font-semibold mb-4 text-gray-800">Langkah Pengembangan Diri</h2>
                <ol class="list-decimal pl-5 space-y-2 text-gray-700">
                    @foreach ($studi['langkah_pengembangan'] as $item)
                        <li>{{ $item }}</li>
                    @endforeach
                </ol>
            </div>

            <p class="text-base indent-8 ">{!! $studi['footer'] !!}</p>

            @isset($studi['jawaban_accurate'])
                <x-congratulations-card title="Selamat!" message="Kamu telah menyelesaikan:" subtitle="Studi Kasus: Accurate Self Assesment"
                stars="5" footer="Tetap Semangat dan Selalu Jauhi Narkoba!" />
                @endisset

            <div class="my-4 -translate-x-8">
                <h1 class="font-semibold text-lg">Jawablah Soal Di bawah ini</h1>

                {{-- @dd($studi['jawaban_accurate']) --}}

                <form action="" method="post" class="md:p-6" id="form-studkasrevacc">
                    @foreach ($studi['pertanyaan'] as $key => $value)
                        {{-- textarea --}}
                        <div class="mt-3">
                            <label for="{{ $key }}" class="text-sm font-medium  mb-2">
                                {{ $loop->iteration }} . {!! $value !!}
                            </label>
                            <textarea id="{{ $key }}" name="{{ $key }}" rows="3"
                                class="w-full px-3 py-2  border rounded-lg ml-6 md:ml-0" placeholder="Silakan dijawab" required>
@isset($studi['jawaban_accurate'])
{{ $studi['jawaban_accurate']['soal_' . $key] }}
@endisset
</textarea>
                        </div>
                    @endforeach

                    <button type="submit" class="bg-green-500 text-white p-2 rounded-lg">Submit</button>
                </form>

                {{-- <form action="{{ route('accurate-self-assesment.store') }}" class="space-y-5" id="form-studkasrevacc">
                    @foreach ($studi['pertanyaan'] as $key => $soal)
                        <p class="text-base  text-gray-500 mt-5">{{ $loop->iteration }}. {{ $soal['pertanyaan'] }}</p>

                        @foreach ($soal['pilihan'] as $key2 => $pilihan)
                            <div class="flex items-center mt-3 rounded-md">
                                <input type="radio" id="{{ $key . '_' . $key2 . '_studkas1' }}"
                                    name="{{ $key }}" value="{{ $key2 }}"

                                    {{ isset($studi['jawaban_accurate']) && $studi['jawaban_accurate']['soal_' . $key] == $key2 ? 'checked' : '' }}

                                    {{ isset($show_jawaban) && $soal['jawaban_user'] == $key2 ? 'checked' : '' }}>


                                <label for="{{ $key . '_' . $key2 . '_studkas1' }}" class="ml-2">
                                    {{ $key2 }}. {{ $pilihan }}
                                </label>
                            </div>
                        @endforeach
                    @endforeach
                    <!-- <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"> -->
                    <!-- <input type="hidden" name="Kategori_SK" value="1"> -->
                    <button type="submit" class="bg-green-500 text-white p-2 rounded-lg">Submit</button>
                </form> --}}
            </div>
        @endif
    @endforeach
</div>


@push('custom-script')
    <script>
        $('#form-studkasrevacc').submit(function(e) {
            e.preventDefault();

            // remove all bg color
            // $('input[type="radio"]').removeClass('bg-green-500 bg-red-500');
            // $('label').removeClass('bg-green-500 bg-red-500');

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

            axios.post("{{ route('accurate-self-assesment.store') }}", {
                    jawaban: jawaban,
                    // studi_kasus: 1,
                    user_id: {{ Auth::user()->id }}
                })
                .then((response) => {
                    swal("Success!", response.data.message, "success")
                        .then(() => {
                            location.reload();
                        });

                    // $.each(response.data.jawaban_old, function(questionNumber, jawabanOld) {
                    //     // Get the correct answer from jawaban_benar
                    //     const jawabanBenar = response.data.jawaban_benar[questionNumber];

                    //     // Define the IDs for old answer and correct answer input fields
                    //     const oldAnswerId = `#${questionNumber}_${jawabanOld}_studkas1`;
                    //     const correctAnswerId = `#${questionNumber}_${jawabanBenar}_studkas1`;

                    //     // Define the corresponding label selectors using the 'for' attribute
                    //     const oldLabel = `label[for='${questionNumber}_${jawabanOld}_studkas1']`;
                    //     const correctLabel = `label[for='${questionNumber}_${jawabanBenar}_studkas1']`;

                    //     // If the old answer is correct, apply green background to input and label
                    //     if (jawabanOld === jawabanBenar) {
                    //         $(correctAnswerId).addClass('bg-green-500');
                    //         $(correctLabel).addClass('bg-green-500'); // Change label color to green
                    //     } else {
                    //         // If the answer is wrong, apply red background to old answer and green to correct one
                    //         $(oldAnswerId).addClass('bg-red-500');
                    //         $(oldLabel).addClass('bg-red-500'); // Change label color to red
                    //         $(correctAnswerId).addClass('bg-green-500');
                    //         $(correctLabel).addClass(
                    //             'bg-green-500'); // Change correct label color to green
                    //     }
                    // });
                })
                .catch((error) => {
                    console.log(error);
                });
        });
    </script>
@endpush
