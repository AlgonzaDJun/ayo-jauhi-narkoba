@extends('guru.layout')

@section('judul')
    Data Jawaban Lembar Kerja - Praktik Kepercayaaan Diri
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
                            {{-- tanggal --}}
                            <th>Tanggal submit</th>
                            <th>Bagaimana perasaanmu setelah melakukan latihan pengulangan ini?</th>
                            <th>Apa kemajuan terbesar yang kamu rasakan dari latihan pengulangan ini?</th>
                            <th>Apa tantangan terbesar yang kamu hadapi selama latihan pengulangan ini?</th>
                            <th>Apa yang kamu pelajari tentang dirimu selama proses latihan ini?
                                ada deh
                            </th>
                            <th>Bagaimana kamu akan terus meningkatkan keterampilanmu di minggu berikutnya?</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($jawaban_lk_pkd as $item)
                            <tr>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->created_at->format('d-M-Y (H:i)') }}</td>
                                {{-- Soal_1 - Soal_5 --}}
                                <td>{{ $item->Soal_1 }}</td>
                                <td>{{ $item->Soal_2 }}</td>
                                <td>{{ $item->Soal_3 }}</td>
                                <td>{{ $item->Soal_4 }}</td>
                                <td>{{ $item->Soal_5 }}</td>
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
