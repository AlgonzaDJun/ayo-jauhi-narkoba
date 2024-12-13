@extends('guru.layout')

@section('judul')
    Data Jawaban Materi Narkoba
@endsection

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
                            {{-- soal 4 - soal 25 --}}
                            @for ($i = 1; $i <= 25; $i++)
                                <th>Soal {{ $i }}</th>
                            @endfor
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($jawaban_narkoba as $item)
                            <tr>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->created_at->format('d-M-Y (H:i)') }}</td>
                                {{-- soal 4 - soal 25 --}}
                                @for ($i = 1; $i <= 25; $i++)
                                    <td>{{ $item['soal_' . $i] }}</td>
                                @endfor
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
