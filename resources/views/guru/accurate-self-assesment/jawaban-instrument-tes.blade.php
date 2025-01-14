@extends('guru.layout')

@section('judul')
    Data Skala Penilaian
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
                            <th>Tanggal submit</th>
                            {{-- score, deskripsi score --}}
                            <th>Score</th>
                            <th>Deskripsi Score</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($jawaban_accurate_it as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->created_at->format('d-M-Y (H:i)') }}</td>
                                <td>{{ $item->score }}</td>
                                <td>{{ $item->message }}</td>
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
