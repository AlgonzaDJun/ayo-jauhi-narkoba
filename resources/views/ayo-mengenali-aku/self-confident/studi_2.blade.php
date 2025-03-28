<div class="space-y-5 text-justify">
    @foreach ($self_conf as $studi)
        @if ($studi['nama'] === 'studi kasus 2')
            <h1 class="font-bold text-2xl">{{ $studi['nama'] . ' : ' . $studi['judul'] }}</h1>

            <p class="text-base indent-8">{{ $studi['deskripsi'] }}</p>

            <div class="my-4 -translate-x-8">
                <h1 class="font-semibold text-lg">Jawablah Soal Di bawah ini</h1>

                @isset($studi['jawaban_self_con'])
                    <p class="text-red-500 text-3xl font-semibold my-5">
                        Anda sudah pernah mengisi soal ini sebelumnya.
                    </p>
                @endisset

                <form action="{{ route('self-confidence.store') }}" class="space-y-5" id="form-studkas2-selfcon">
                    @foreach ($studi['pertanyaan'] as $key => $soal)
                        <p class="text-base  text-gray-500 mt-5">{{ $loop->iteration }}. {{ $soal['pertanyaan'] }}</p>

                        @foreach ($soal['pilihan'] as $key2 => $pilihan)
                            <div class="flex items-center mt-3 rounded-md">
                                <input type="radio" id="{{ $key . '_' . $key2 . '_studkas2_selfcon' }}"
                                    name="{{ $key }}" value="{{ $key2 }}"

                                    {{ isset($studi['jawaban_self_con']) && $studi['jawaban_self_con']['soal_' . $key] == $key2 ? 'checked' : '' }}

                                    {{ isset($show_jawaban) && $soal['jawaban_user'] == $key2 ? 'checked' : '' }}>
                                <label for="{{ $key . '_' . $key2 . '_studkas2_selfcon' }}" class="ml-2">
                                    {{ $key2 }}. {{ $pilihan }}
                                </label>
                            </div>
                        @endforeach
                    @endforeach

                    <button type="submit" class="bg-green-500 text-white p-2 rounded-lg">Submit</button>
                </form>
            </div>
        @endif
    @endforeach
</div>


@push('custom-script')
    <script>
        $('#form-studkas2-selfcon').submit(function(e) {
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
            if (jawaban.length < 6) {
                swal("Error!", "Please answer all question!", "error");
                return;
            }

            axios.post("{{ route('self-confidence.store') }}", {
                    jawaban: jawaban,
                    studi_kasus: 2
                })
                .then((response) => {
                    swal("Success!", response.data.message, "success");

                    $.each(response.data.jawaban_old, function(questionNumber, jawabanOld) {
                        // Get the correct answer from jawaban_benar
                        const jawabanBenar = response.data.jawaban_benar[questionNumber];

                        // Define the IDs for old answer and correct answer input fields
                        const oldAnswerId = `#${questionNumber}_${jawabanOld}_studkas2_selfcon`;
                        const correctAnswerId = `#${questionNumber}_${jawabanBenar}_studkas2_selfcon`;

                        // Define the corresponding label selectors using the 'for' attribute
                        const oldLabel = `label[for='${questionNumber}_${jawabanOld}_studkas2_selfcon']`;
                        const correctLabel = `label[for='${questionNumber}_${jawabanBenar}_studkas2_selfcon']`;

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
