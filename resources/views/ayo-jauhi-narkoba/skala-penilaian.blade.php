<div class="space-y-5">

    {{-- @dump($revisi_materi) --}}

    <h1 class="font-bold text-xl">Skala Penilaian Capaian Pembelajaran</h1>

    <img src="{{ asset('img/Grades-pana.png') }}" alt="" class=" h-72 object-contain">

    <div class="min-h-full flex items-center justify-center py-12 lg:px-8">
        <div class="w-full space-y-8">
            <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                <div class="px-4 py-5 sm:px-6">
                    <h2 class="text-lg leading-6 font-medium text-gray-900">Petunjuk Pengisian</h2>
                </div>
                <div class="border-t border-gray-200">
                    <dl>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class=" font-medium text-gray-500">1.</dt>
                            <dd class="mt-1  text-gray-900 sm:mt-0 sm:col-span-2">
                                Baca setiap pernyataan dengan cermat. Anda diminta untuk menilai diri sendiri
                                berdasarkan sejauh mana Anda setuju dengan pernyataan yang diberikan.
                            </dd>
                        </div>
                        <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class=" font-medium text-gray-500">2.</dt>
                            <dd class="mt-1  text-gray-900 sm:mt-0 sm:col-span-2">
                                Gunakan skala berikut untuk memberikan penilaian:
                                <ul class="list-disc pl-5 mt-2">
                                    <li><span class="font-semibold">1 (Sangat Tidak Setuju):</span> Anda merasa
                                        pernyataan tersebut sama sekali tidak menggambarkan diri Anda</li>
                                    <li><span class="font-semibold">2 (Tidak Setuju):</span> Anda merasa pernyataan
                                        tersebut hanya sedikit menggambarkan diri Anda</li>
                                    <li><span class="font-semibold">3 (Setuju):</span> Anda merasa pernyataan tersebut
                                        cukup menggambarkan diri Anda</li>
                                    <li><span class="font-semibold">4 (Sangat Setuju):</span> Anda merasa pernyataan
                                        tersebut sepenuhnya menggambarkan diri Anda</li>
                                </ul>
                            </dd>
                        </div>
                        <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                            <dt class=" font-medium text-gray-500">3.</dt>
                            <dd class="mt-1  text-gray-900 sm:mt-0 sm:col-span-2">
                                Pastikan semua pernyataan telah dijawab. Tidak ada jawaban benar atau salah, jawablah
                                dengan jujur sesuai dengan kondisi Anda saat ini!
                            </dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>
    </div>

    @php
        $score = $revisi_materi['jawaban_instrumen']['score'] ?? 0;

        if ($score < 60) {
            $stars = 1;
        } elseif ($score >= 60 && $score <= 70) {
            $stars = 2;
        } elseif ($score >= 71 && $score <= 80) {
            $stars = 3;
        } elseif ($score >= 81 && $score <= 90) {
            $stars = 4;
        } elseif ($score >= 91 && $score <= 100) {
            $stars = 5;
        }
    @endphp

    @isset($revisi_materi['jawaban_instrumen'])
        <x-congratulations-card title="Selamat!" message="Kamu telah menyelesaikan:"
            subtitle="Penilaian Capaian Pembelajaran : Ayo Jauhi Narkoba dengan nilai {{ $revisi_materi['jawaban_instrumen']['score'] }}" stars="{{ $stars }}"
            footer="{{ $revisi_materi['jawaban_instrumen']['message'] }}" />
    @endisset

    <div class="indent-7 space-y-3">

        <div class="bg-white p-8 rounded-lg shadow-md max-w-4xl w-full">
            <h1 class="text-2xl font-bold mb-4 text-center">Kuesioner Penilaian Capaian Pembelajaran</h1>

            {{-- <div class="mb-6">
                <h2 class="text-xl font-semibold mb-2">Petunjuk:</h2>
                <p class="mb-2">Berikan penilaian terhadap diri Anda untuk setiap pernyataan berikut dengan
                    menggunakan skala berikut:</p>
                <ul class="list-disc list-inside">
                    <li>1= Sangat Tidak Setuju</li>
                    <li>2= Tidak Setuju</li>
                    <li>3= Setuju</li>
                    <li>4=Sangat Setuju</li>
                </ul>
            </div> --}}

            {{-- @dd($revisi_materi) --}}

            {{-- @isset($revisi_materi['jawaban_instrumen'])
                        <p class="text-red-500 text-3xl font-semibold my-5">
                            Anda sudah pernah mengisi soal ini sebelumnya.
                        </p>

                        <p class="bg-red-500 rounded-xl p-2 text-white mb-4">
                            {{ $revisi_materi['message_instrumen'] }}
                        </p>
                    @endisset --}}

            <form method="POST" action="#" id="form-instrumen-jauhi-narkoba">
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
                            {{-- @foreach ($revisi_materi['revisi_materi'] as $key => $soal) --}}
                            {{-- @if ($soal['judul'])
                                            <tr>
                                                <td class="border border-gray-300 px-4 py-2 font-bold" colspan="6">
                                                    {{ $soal['judul'] }}</td>
                                            </tr>
                                        @endif --}}

                            {{-- <tr>
                                <td class="border border-gray-300 px-4 py-2 font-bold" colspan="6">
                                    Skala Penilaian Capaian Pembelajaran
                                </td>
                            </tr> --}}

                            @foreach ($revisi_materi['skala_penilaian'] as $key => $item)
                                <tr>
                                    <td class="border border-gray-300 px-4 py-2">{{ $key }}</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $item }}</td>
                                    <td class="border border-gray-300 px-4 py-2 text-center">
                                        <input type="radio" name="q{{ $key }}" value="4"
                                            {{ isset($revisi_materi['jawaban_instrumen']) && $revisi_materi['jawaban_instrumen']['soal_' . $key] == 4 ? 'checked' : '' }}>
                                    </td>
                                    <td class="border border-gray-300 px-4 py-2 text-center"><input
                                            {{ isset($revisi_materi['jawaban_instrumen']) && $revisi_materi['jawaban_instrumen']['soal_' . $key] == 3 ? 'checked' : '' }}
                                            type="radio" name="q{{ $key }}" value="3"></td>
                                    <td class="border border-gray-300 px-4 py-2 text-center"><input
                                            {{ isset($revisi_materi['jawaban_instrumen']) && $revisi_materi['jawaban_instrumen']['soal_' . $key] == 2 ? 'checked' : '' }}
                                            type="radio" name="q{{ $key }}" value="2"></td>
                                    <td class="border border-gray-300 px-4 py-2 text-center"><input
                                            {{ isset($revisi_materi['jawaban_instrumen']) && $revisi_materi['jawaban_instrumen']['soal_' . $key] == 1 ? 'checked' : '' }}
                                            type="radio" name="q{{ $key }}" value="1"></td>
                                </tr>
                            @endforeach
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>

                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg mt-4">Submit</button>

            </form>
        </div>
    </div>
</div>


@push('custom-script')
    <script>
        $('#form-instrumen-jauhi-narkoba').submit(function(e) {
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

            if (totalQuestion < 5) {
                swal("Error!", "Please answer all question", "error");
                return;
            }

            formData.forEach((item) => {
                jawaban.push(item.value);
            });

            axios.post("{{ route('ayo-jauhi-narkoba.update', ['ayo_jauhi_narkoba' => 1]) }}", {
                    data: jawaban,
                    _method: 'PUT',
                    _token: '{{ csrf_token() }}'
                })
                .then((response) => {

                    swal("Success!", response.data.message, "success")
                        .then(() => {
                            // refleksi-diri-tab click
                            window.location.reload();
                            // $('#accurate-tab').click();
                            // $('#refleksi-diri-tab').click();
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
