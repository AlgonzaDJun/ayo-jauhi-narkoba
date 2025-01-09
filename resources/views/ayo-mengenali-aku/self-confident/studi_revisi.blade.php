<div class="space-y-5 text-justify">
    @foreach ($self_conf as $studi)
        @if ($studi['nama'] === 'studi kasus revisi')
            <img src="{{ asset('img/Women talking-bro.png') }}" alt="" class=" h-72 object-contain">

            <div class="text-base indent-8 space-y-3">{!! $studi['deskripsi'] !!}</div>

            @isset($studi['jawaban_self_con'])
                <x-congratulations-card title="Selamat!" message="Kamu telah menyelesaikan:"
                    subtitle="Studi Kasus: Self Confidence" stars="5"
                    footer="Tetap Semangat dan Selalu Jauhi Narkoba!" />
            @endisset

            <div class="my-4 -translate-x-8">
                <h1 class="font-semibold text-lg">Jawablah Soal Di bawah ini</h1>

                {{-- @dd($studi['jawaban_self_con']) --}}

                <form action="" method="post" class="md:p-6" id="form-studkas-self-rev">
                    @foreach ($studi['pertanyaan'] as $key => $value)
                        {{-- textarea --}}
                        <div class="mt-3">
                            <label for="{{ $key }}" class="font-medium  mb-2">
                                {{ $loop->iteration }} . {!! $value !!}
                            </label>
                            <textarea id="{{ $key }}" name="{{ $key }}" rows="3"
                                class="w-full px-3 py-2  border rounded-lg ml-6 md:ml-0" placeholder="Silakan dijawab" required>
@isset($studi['jawaban_self_con'])
{{ $studi['jawaban_self_con'][ $key] }}
@endisset
</textarea>
                        </div>
                    @endforeach

                    <button type="submit" class="bg-green-500 text-white p-2 rounded-lg">Submit</button>
                </form>

                {{-- <form action="{{ route('accurate-self-assesment.store') }}" class="space-y-5" id="form-studkas-self-rev">
                    @foreach ($studi['pertanyaan'] as $key => $soal)
                        <p class="text-base  text-gray-500 mt-5">{{ $loop->iteration }}. {{ $soal['pertanyaan'] }}</p>

                        @foreach ($soal['pilihan'] as $key2 => $pilihan)
                            <div class="flex items-center mt-3 rounded-md">
                                <input type="radio" id="{{ $key . '_' . $key2 . '_studkas1' }}"
                                    name="{{ $key }}" value="{{ $key2 }}"

                                    {{ isset($studi['jawaban_self_con']) && $studi['jawaban_self_con']['soal_' . $key] == $key2 ? 'checked' : '' }}

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
        $('#form-studkas-self-rev').submit(function(e) {
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

            axios.post("{{ route('self-confidence.store') }}", {
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
