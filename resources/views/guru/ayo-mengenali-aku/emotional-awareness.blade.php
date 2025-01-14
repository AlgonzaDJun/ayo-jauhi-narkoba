@extends('guru.layout')

@section('judul')
    Data Jawaban Studi Kasus Emotional Awareness
@endsection

{{-- @dd($jawaban_emosi[0]->detailJawaban->soal1) --}}

@section('main')
    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
            <div class="table-responsive datatable-minimal">
                <table class="table" id="table2">
                    <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Nama Murid</th>
                            {{-- tanggal --}}
                            <th>Tanggal submit</th>
                            {{-- soal 4 - soal 25 --}}
                            <th>Sebutkan emosi-emosi yang muncul pada cerita Nadya di atas, beserta situasi yang menunjukkan
                                emosi tersebut!</th>
                            <th>Setelah kamu mengetahui berbagai macam emosi yang Nadya rasakan, pilihlah tiga emosi.
                                Kemudian analisis mengapa emosi tersebut muncul!</th>
                            <th>Mengapa penting bagi Nadya untuk memahami emosi yang dirasakan dan bagaimana hal itu bisa
                                membantu Nadya menghindari membuat keputusan yang buruk?</th>
                            <th>Bagaimana Nadya bisa tetap tenang dan percaya diri saat teman-temannya menawarinya pil?
                                Jelaskan langkah-langkah yang dia lakukan!</th>
                            <th>Jika kamu berada di posisi Nadya, apa yang akan kamu lakukan untuk menjaga keseimbangan
                                emosi dan menghindari membuat keputusan yang buruk?</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($studi_kasus_emotional as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->user->name }}</td>
                                {{-- <td>{{ $item->kategori_emosi }}</td> --}}
                                <td>{{ $item->created_at->format('d-M-Y (H:i)') }}</td>
                                {{-- soal 4 - soal 25 --}}
                                @for ($i = 1; $i <= 5; $i++)
                                    <td>{{ $item->{'soal_' . $i} }}</td>
                                @endfor
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center">Tidak ada data</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
