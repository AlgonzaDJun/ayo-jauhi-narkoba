@extends('guru.layout')

@section('judul')
Data Jawaban LK - Self Confidence Bagian 2
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
                            <th>Apakah permasalahan yang kamu hadapi hari ini?</th>
                            <th>Bagaimana permasalahan tersebut dapat terjadi?</th>
                            <th>Bagaimana perasaanmu pada saat itu?</th>
                            <th>Berdasarkan permasalahanmu tersebut, bagaimana kamu mencari solusinya?</th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $item)
                            <tr>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->created_at->format('d-M-Y (H:i)') }}</td>
                                @for ($i = 1; $i <= 4; $i++)
                                    <td>{{ $item->{'Soal_' . $i} }}</td>
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
