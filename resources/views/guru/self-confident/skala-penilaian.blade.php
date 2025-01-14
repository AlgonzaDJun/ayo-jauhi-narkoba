@extends('guru.layout')

@section('judul')
    Skala Penilaian Self Confidence
@endsection

@section('main')


    <div class="card">
        <div class="card-header">
        </div>
        <div class="card-body">
            <div class="table-responsive datatable">
                <table class="table" id="table2">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Murid</th>
                            {{-- tanggal --}}
                            <th>Tanggal submit</th>
                            {{-- soal 4 - soal 25 --}}
                            {{-- @for ($i = 1; $i <= 25; $i++)
                                <th>Soal {{ $i }}</th>
                            @endfor --}}
                            {{-- score --}}
                            <th>Skor</th>
                            {{-- pesan --}}
                            <th>Deskripsi Skor</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($jawaban_narkoba as $item)
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
