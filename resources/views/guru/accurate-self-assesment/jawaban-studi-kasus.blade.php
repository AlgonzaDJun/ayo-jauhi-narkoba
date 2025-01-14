@extends('guru.layout')

@section('judul')
    Data Jawaban Studi Kasus Accurate Self Assesment
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
                            <th>No</th>
                            <th>Nama Murid</th>
                            {{-- <th>Kategori Studi Kasus</th> --}}
                            {{-- tanggal --}}
                            <th>Tanggal submit</th>
                            {{-- soal 4 - soal 25 --}}
                            <th>Menurutmu, mengapa refleksi diri menjadi langkah pertama yang penting dalam proses penilaian diri yang akurat?</th>
                            <th>Apa yang dapat kita pelajari dari cara Adit menganalisis kritik dan saran dari orang lain?</th>
                            <th>Apakah kamu setuju dengan cara Adit mengorganisasikan tujuan pengembangan diri berdasarkan kelebihan dan kekurangannya?</th>
                            <th>Apa mekanisme yang dikembangkan Adit untuk mengevaluasi dan meningkatkan dirinya secara konsisten?</th>
                            <th>Jika kamu berada di posisi Adit, langkah apa yang mungkin akan kamu ambil untuk mengatasi tekanan sosial dari teman-teman yang menawarkan narkoba?</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($jawaban_accurate_sk as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->user->name }}</td>
                                {{-- <td>{{ $item->Kategori_SK }}</td> --}}
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
