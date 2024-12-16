@extends('guru.layout')

@section('judul')
    Data Jawaban Refleksi Diri
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
                            <th>Tanggal submit</th>
                            <th>Aspek apa yang menunjukkan bahwa Anda memiliki kelebihan atau kemampuan yang baik?</th>
                            <th>Bagaimana kelebihan Anda dapat membantu dalam menolak menggunakan narkoba? (misal: ketika
                                stres tidak menggunakan narkoba sebagai pelampiasan)</th>
                            <th>Bagaimana Anda dapat memanfaatkan kelebihan ini dalam kehidupan sehari-hari? (misal:
                                mempratikkan mindfulness meditasi)</th>
                            <th> Aspek apa yang menunjukkan bahwa Anda perlu melakukan perbaikan?</th>
                            <th>Apa yang bisa Anda lakukan untuk mengatasi kekurangan ini?</th>
                            <th>Setelah mengetahui kelebihan dan kekurangan diri, rencana apa yang akan Anda lakukan terkait
                                pengembangan diri</th>
                            <th>Rencana jangka panjang?</th>
                            <th>Apakah Anda senang mendengarkan kritik dan saran yang diberikan orang lain? Apa alasannya?
                            </th>
                            <th>Apakah bentuk kritik yang positif atau bentuk kritik yang kritis, yang Anda sukai?</th>
                            <th>Apakah Anda lebih suka guru, teman, atau orang tua yang memberikan kritik dan saran?</th>
                            <th>Apakah Anda meminta orang lain untuk memberikan kritik dan saran tentang perkembangan diri
                                Anda?</th>
                            <th>Apakah Anda menerapkan kritik dan saran yang Anda terima untuk mengembangkan diri menjadi
                                lebih baik?</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($jawaban_accurate_rd as $item)
                            <tr>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->created_at->format('d-M-Y (H:i)') }}</td>
                                {{-- kelebihana, kelebihanb, kelebihanc --}}
                                <td>{{ $item->kelebihana }}</td>
                                <td>{{ $item->kelebihanb }}</td>
                                <td>{{ $item->kelebihanc }}</td>
                                <td>{{ $item->kekurangana }}</td>
                                <td>{{ $item->kekuranganb }}</td>
                                <td>{{ $item->langkah_selanjutnyaa }}</td>
                                <td>{{ $item->langkah_selanjutnyab }}</td>
                                <td>{{ $item->menerima_kritik_dan_sarana }}</td>
                                <td>{{ $item->menerima_kritik_dan_saranb }}</td>
                                <td>{{ $item->menerima_kritik_dan_saranc }}</td>
                                <td>{{ $item->menerima_kritik_dan_sarand }}</td>
                                <td>{{ $item->menerima_kritik_dan_sarane }}</td>
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
