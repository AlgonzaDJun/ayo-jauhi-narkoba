@extends('guru.layout')

@section('judul')
    Data Jawaban LK - Self Confidence Bagian 1
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
                            <th>Sebutkan satu pencapaian terbesar yang telah kamu raih dalam enam bulan terakhir!</th>
                            <th>Bagaimana perasaanmu terhadap pencapaian tersebut?</th>
                            <th>Apa usaha dan strategi yang kamu gunakan untuk mencapai pencapaian tersebut?</th>
                            <th>Sebutkan tiga keterampilan yang kamu rasa paling kamu kuasai!</th>
                            <th>Bagaimana kamu mengembangkan keterampilan tersebut?</th>
                            <th>Bagaimana keterampilan tersebut membantu dalam kehidupan sehari-hari atau dalam mencapai tujuanmu?</th>
                            <th>Sebutkan satu tantangan besar yang telah kamu hadapi dan atasi!</th>
                            <th>Apa yang kamu pelajari dari pengalaman tersebut?</th>
                            <th>Bagaimana cara kamu mengatasi tantangan tersebut?</th>
                            <th>Tuliskan tiga hal positif tentang dirimu yang ingin kamu puji!</th>
                            <th>Mengapa kamu merasa hal tersebut patut dipuji?</th>
                            <th>Sebutkan satu usaha atau kerja keras yang telah kamu lakukan baru-baru ini!</th>
                            <th>Bagaimana perasaanmu setelah berusaha keras meskipun hasilnya belum tentu memuaskan?</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $item)
                            <tr>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->created_at->format('d-M-Y (H:i)') }}</td>
                                @for ($i = 1; $i <= 13; $i++)
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
