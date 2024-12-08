<div class="space-y-5">
    @foreach ($acc_self_as as $studi)
        @if ($studi['nama'] === 'tes instrumen')
            {{-- @dump($studi) --}}

            <h1 class="font-bold text-xl">Instrumen Tes Kecerdasan Emosional: Accurate Self-Assessment</h1>

            <ol class="space-y-1 list-decimal list-inside indent-8">
                <li>Mengenali kelebihan dan kekurangan pribadi: <br>Membantu
                    individu mengidentifikasi apa yang mereka kuasai dan di mana
                    mereka perlu berkembang</li>
                <li> Menerima kritik dengan terbuka: <br>Membantu individu menjadi
                    lebih nyaman dengan kritik dan saran, serta menggunakannya
                    untuk perbaikan diri.</li>
                <li>Mengembangkan rencana perbaikan diri: <br>Mendorong individu
                    untuk mengambil tindakan nyata dalam meningkatkan diri
                    berdasarkan hasil refleksi dan kritik yang diterima</li>
            </ol>

            <div class="indent-7 space-y-3">

                <div class="bg-white p-8 rounded-lg shadow-md max-w-4xl w-full">
                    <h1 class="text-2xl font-bold mb-4 text-center">Kuesioner Penilaian Diri</h1>

                    <div class="mb-6">
                        <h2 class="text-xl font-semibold mb-2">Petunjuk:</h2>
                        <p class="mb-2">Berikan penilaian terhadap diri Anda untuk setiap pernyataan berikut dengan
                            menggunakan skala berikut:</p>
                        <ul class="list-disc list-inside">
                            <li>1= Sangat Tidak Setuju</li>
                            <li>2= Tidak Setuju</li>
                            <li>3= Setuju</li>
                            <li>4=Sangat Setuju</li>
                        </ul>
                    </div>

                    {{-- @dd($studi) --}}

                    @isset($studi['jawaban_instrumen'])
                        <p class="text-red-500 text-3xl font-semibold my-5">
                            Anda sudah pernah mengisi soal ini sebelumnya.
                        </p>

                        <p class="bg-red-500 rounded-xl p-2 text-white mb-4">
                            {{ $studi['message_instrumen'] }}
                        </p>
                    @endisset

                    <form method="POST" action="#" id="form-instrumen-asa">
                        @csrf

                        <div class="overflow-x-auto">
                            <table class="w-full border-collapse border border-gray-300">
                                <thead>
                                    <tr class="bg-gray-200">
                                        <th class="border border-gray-300 px-4 py-2">No</th>
                                        <th class="border border-gray-300 px-4 py-2">Pernyataan</th>
                                        <th class="border border-gray-300 px-4 py-2">Sangat Setuju</th>
                                        <th class="border border-gray-300 px-4 py-2">Setuju</th>
                                        <th class="border border-gray-300 px-4 py-2">Tidak Setuju</th>
                                        <th class="border border-gray-300 px-4 py-2">Sangat Tidak Setuju</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($studi['pertanyaan'] as $key => $soal)
                                        @if ($soal['judul'])
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2 font-bold" colspan="6">
                                                    {{ $soal['judul'] }}</td>
                                            </tr>
                                        @endif

                                        @foreach ($soal['pertanyaan'] as $key => $item)
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2">{{ $key }}</td>
                                                <td class="border border-gray-300 px-4 py-2">{{ $item }}</td>
                                                <td class="border border-gray-300 px-4 py-2 text-center">
                                                    <input type="radio" name="q{{ $key }}" value="4"
                                                        {{ isset($studi['jawaban_instrumen']) && $studi['jawaban_instrumen']['soal_' . $key] == 4 ? 'checked' : '' }}>
                                                </td>
                                                <td class="border border-gray-300 px-4 py-2 text-center"><input
                                                        {{ isset($studi['jawaban_instrumen']) && $studi['jawaban_instrumen']['soal_' . $key] == 3 ? 'checked' : '' }}
                                                        type="radio" name="q{{ $key }}" value="3"></td>
                                                <td class="border border-gray-300 px-4 py-2 text-center"><input
                                                        {{ isset($studi['jawaban_instrumen']) && $studi['jawaban_instrumen']['soal_' . $key] == 2 ? 'checked' : '' }}
                                                        type="radio" name="q{{ $key }}" value="2"></td>
                                                <td class="border border-gray-300 px-4 py-2 text-center"><input
                                                        {{ isset($studi['jawaban_instrumen']) && $studi['jawaban_instrumen']['soal_' . $key] == 1 ? 'checked' : '' }}
                                                        type="radio" name="q{{ $key }}" value="1"></td>
                                            </tr>
                                        @endforeach
                                    @endforeach
                                    {{-- <tr>
                                    <td class="border border-gray-300 px-4 py-2">1</td>
                                    <td class="border border-gray-300 px-4 py-2">Saya dapat dengan mudah
                                        mengidentifikasi
                                        hal-hal yang saya kuasai dengan baik</td>
                                    <td class="border border-gray-300 px-4 py-2 text-center"><input type="radio"
                                            name="q1" value="4"></td>
                                    <td class="border border-gray-300 px-4 py-2 text-center"><input type="radio"
                                            name="q1" value="3"></td>
                                    <td class="border border-gray-300 px-4 py-2 text-center"><input type="radio"
                                            name="q1" value="2"></td>
                                    <td class="border border-gray-300 px-4 py-2 text-center"><input type="radio"
                                            name="q1" value="1"></td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">2</td>
                                    <td class="border border-gray-300 px-4 py-2">Saya yakin dengan kelebihan diri dalam
                                        mengerjakan sesuatu</td>
                                    <td class="border border-gray-300 px-4 py-2 text-center"><input type="radio"
                                            name="q2" value="4"></td>
                                    <td class="border border-gray-300 px-4 py-2 text-center"><input type="radio"
                                            name="q2" value="3"></td>
                                    <td class="border border-gray-300 px-4 py-2 text-center"><input type="radio"
                                            name="q2" value="2"></td>
                                    <td class="border border-gray-300 px-4 py-2 text-center"><input type="radio"
                                            name="q2" value="1"></td>
                                </tr>
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">3</td>
                                    <td class="border border-gray-300 px-4 py-2">Orang lain sering mengakui kelebihan
                                        yang saya
                                        miliki</td>
                                    <td class="border border-gray-300 px-4 py-2 text-center"><input type="radio"
                                            name="q3" value="4"></td>
                                    <td class="border border-gray-300 px-4 py-2 text-center"><input type="radio"
                                            name="q3" value="3"></td>
                                    <td class="border border-gray-300 px-4 py-2 text-center"><input type="radio"
                                            name="q3" value="2"></td>
                                    <td class="border border-gray-300 px-4 py-2 text-center"><input type="radio"
                                            name="q3" value="1"></td>
                                </tr> --}}

                                </tbody>
                            </table>
                        </div>

                        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg mt-4">Submit</button>

                    </form>
                </div>
            </div>
        @endif
    @endforeach
</div>


@push('custom-script')
    <script>
        $('#form-instrumen-asa').submit(function(e) {
            e.preventDefault();

            let formData = $(this).serializeArray();
            let jawaban = [];

            // check if all question has been answered
            let totalQuestion = 0;
            formData.forEach((item) => {
                if (item.name.includes('q')) {
                    totalQuestion++;
                }
            });

            if (totalQuestion < 16) {
                swal("Error!", "Please answer all question", "error");
                return;
            }

            formData.forEach((item) => {
                jawaban.push(item.value);
            });

            axios.post("{{ route('accurate-self-assesment.tes-instrumen') }}", {
                    data: jawaban,
                })
                .then((response) => {

                    swal("Success!", response.data.message, "success")
                        .then(() => {
                            // refleksi-diri-tab click
                            // window.location.reload();
                            // $('#accurate-tab').click();
                            $('#refleksi-diri-tab').click();
                            // set session refleksi-diri
                            // window.location.href = "{{ route('accurate-self-assesment.create') }}";
                        });
                })
                .catch((error) => {
                    swal("Error!", error.response.data.message, "error");
                });
        })
    </script>
@endpush
