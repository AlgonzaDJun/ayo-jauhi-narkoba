@extends('guru.layout')

@section('judul')
    Data Jawaban Studi Kasus Self Confidence
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
                            <th>Nama Murid</th>
                            {{-- <th>Kategori Studi Kasus</th> --}}
                            {{-- tanggal --}}
                            <th>Tanggal submit</th>
                            {{-- soal 4 - soal 25 --}}
                            <th>Berdasarkan cerita di atas, apa saja langkah yang dilakukan Maya untuk meningkatkan kepercayaan dirinya?</th>
                            <th>Bagaimana pengalaman berbicara di depan umum dapat membantu Maya dalam mencegah penggunaan narkoba?</th>
                            <th>Analisislah faktor-faktor yang memengaruhi tingkat kepercayaan diri Maya sebelum dan sesudah lomba pidato!</th>
                            <th>Bagaimana Maya menunjukkan kemampuan mengendalikan diri dalam situasi yang membutuhkan kepercayaan diri tinggi?</th>
                            <th>Jika kamu berada di posisi Maya, bagaimana kamu akan membangun mekanisme untuk tetap tenang dan percaya diri dalam situasi sulit?</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($jawaban_self_conf as $item)
                            <tr>
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
