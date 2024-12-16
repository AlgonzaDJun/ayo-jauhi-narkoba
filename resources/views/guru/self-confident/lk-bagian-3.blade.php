@extends('guru.layout')

@section('judul')
Data Jawaban LK - Self Confidence Bagian 3
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
                            <th>Ketika dihadapkan dengan permasalahan apa yang kamu lakukan?</th>
                            <th>Ketika kamu diharuskan mengambil keputusan, apa yang kamu lakukan?</th>
                            <th>Apakah kamu meminta bantuan orang lain dalam mengambil keputusan?</th>
                            <th>Bagaimana apabila kamu diharuskan segera mengambil keputusan pada saat itu juga?</th>
                            <th>Apakah keadaan di sekitarmu memengaruhi caramu mengambil keputusan?</th>
                            <th>Pada keadaan seperti apa kamu dapat mengambil keputusan?</th>
                            <th>Pada keadaan seperti apa kamu kesulitan mengambil keputusan?</th>
                           
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $item)
                            <tr>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->created_at->format('d-M-Y (H:i)') }}</td>
                                @for ($i = 1; $i <= 7; $i++)
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
