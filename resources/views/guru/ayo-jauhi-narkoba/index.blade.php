@extends('guru.layout')

@section('judul')
    Studi Kasus Ayo Jauhi Aku
@endsection

@section('main')

{{-- @dd($jawaban_narkoba) --}}


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
                            <th>Apa saja langkah-langkah pencegahan narkoba yang diterapkan Damar dalam kehidupan
                                sehari-hari setelah ia sadar akan bahaya narkoba?</th>

                            <th>Apa saja faktor-faktor yang menyebabkan Damar terjerumus dalam penggunaan narkoba?</th>

                            <th>Bagaimana penggunaan narkoba dapat mempengaruhi kehidupan seseorang, baik secara pribadi
                                maupun dalam konteks masyarakat? Jelaskan dampaknya!</th>

                            <th>
                                Apa yang bisa kamu lakukan untuk meningkatkan kesadaran diri terkait bahaya narkoba dalam
                                kehidupan sehari-hari?
                            </th>

                            <th>
                                Bagaimana cara kamu menyampaikan informasi tentang bahaya narkoba dengan jelas dan tepat
                                kepada teman-temanmu?
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($jawaban_narkoba as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->created_at->format('d-M-Y (H:i)') }}</td>
                                {{-- soal 4 - soal 25 --}}
                                @for ($i = 1; $i <= 5; $i++)
                                    <td>{{ $item['soal_' . $i] }}</td>
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
