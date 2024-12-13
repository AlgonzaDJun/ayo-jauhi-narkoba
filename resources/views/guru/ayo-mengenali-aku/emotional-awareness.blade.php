@extends('guru.layout')

@section('judul')
    Data Jawaban Soal Emosi
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
                            <th>Nama Emosi</th>
                            {{-- tanggal --}}
                            <th>Tanggal submit</th>
                            {{-- soal 4 - soal 25 --}}
                            @for ($i = 1; $i <= 6; $i++)
                                <th>Soal {{ $i }}</th>
                            @endfor
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($jawaban_emosi as $item)
                            <tr>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->kategori_emosi }}</td>
                                <td>{{ $item->created_at->format('d-M-Y (H:i)') }}</td>
                                {{-- soal 4 - soal 25 --}}
                                @for ($i = 1; $i <= 6; $i++)
                                    <td>{{ $item->detailJawaban['soal' . $i] }}</td>
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
