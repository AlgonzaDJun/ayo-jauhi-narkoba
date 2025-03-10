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
                            <th>Apakah kamu merasa lebih percaya diri setelah latihan ini?</th>
                            <th>Bagian mana yang menurut kamu paling berhasil?</th>
                            <th>Bagian mana yang perlu kamu tingkatkan?</th>
                            <th>Langkah apa yang akan kamu ambil untuk menjadi lebih baik?</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($jawaban_lk_pkd as $item)
                            <tr>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->created_at->format('d-M-Y (H:i)') }}</td>
                                {{-- Soal_1 - Soal_5 --}}
                                @for ($i = 1; $i <= 4; $i++)
                                    <td>{{ $item->{'soal_'.$i} }}</td>
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
