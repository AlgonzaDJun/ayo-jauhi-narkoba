@extends('guru.layout')

@section('judul')
    Data Jawaban Soal Emosi
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
                            <th>Tanggal submit</th>
                            <th>Bagaimana perasaanmu saat bangun tidur</th>
                            <th>Apakah kamu merasa siap untuk memulai hari</th>
                            <th>Apa yang kamu syukuri hari ini?</th>
                            <th>Bagaimana perasaanmu setelah setengah hari berlalu?</th>
                            <th>Apakah kamu menghadapi situasi yang sulit?</th>
                            <th>Apa yang kamu lakukan untuk tetap tenang dan fokus dalam menghadapinya?</th>
                            <th>Bagaimana perasaanmu saat hari berakhir?</th>
                            <th>Apa yang kamu pelajari hari ini?</th>
                            <th>Berapa lama kamu berlatih mindfulness hari ini?</th>
                            <th>Bagaimana perasaanmu sebelum latihan?</th>
                            <th>Bagaimana perasaanmu selama latihan berlangsung?</th>
                            <th>Bagaimana perasaanmu setelah latihan?</th>
                            <th>Bagaimana pola pernapasanmu selama kegiatan mindfulness?</th>
                            <th>Apa saja sensasi fisik yang kamu rasakan selama kegiatan mindfulness?</th>
                            <th>Apa yang kamu dapatkan dari latihan mindfulness hari ini?</th>
                            <th>Apakah kamu mempraktikkan materi mengamati sekitar hari ini?</th>
                            <th>Apa yang kamu perhatikan tentang pikiran dan emosimu hari ini?</th>
                            <th>Bagaimana kamu merespons stres atau situasi sulit hari ini?</th>
                            <th>Apa yang ingin kamu capai dalam latihan mindfulness besok?</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($jawaban_jurnal_mindfulness as $item)
                            <tr>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->created_at->format('d-M-Y (H:i)') }}</td>
                                @foreach (array_slice(array_values($item->toArray()), 3, -3) as $value)
                                    <td>{{ Str::limit($value, 50, '...') }}</td>
                                @endforeach
                                {{-- button perpanjang detail --}}
                                <td>
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                        data-bs-target="#detail{{ $item->id }}">
                                        Detail
                                    </button>
                                    <div class="modal fade
                                        "
                                        id="detail{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-lg">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Detail Jawaban Emosi</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                        aria-label="Close"></button>
                                                </div>
                                                <div
                                                    class="modal-body
                                                    ">
                                                    <div class="table-responsive datatable-minimal">
                                                        <table class="table" id="table2">
                                                            <thead>
                                                                <tr>
                                                                    <th>Kolom</th>
                                                                    <th>Jawaban</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                @foreach (array_slice($item->toArray(), 3, -3, true) as $key => $value)
                                                                    <tr>
                                                                        <td style="max-width: 200px !important;">
                                                                            {{ str_replace('_', ' ', $key) }}</td>
                                                                        <td>{{ $value }}</td>
                                                                    </tr>
                                                                @endforeach

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-bs-dismiss="modal">Close</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>

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
