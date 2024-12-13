@extends('guru.layout')

@section('judul')
    Data Jurnal Emosi
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
                            {{-- kejadian hari ini, emosi yang dirasakan, intensitas emosi, penyebab emosi, respon terhadap emosi, pengaruh emosi --}}
                            <th>Kejadian Hari Ini</th>
                            <th>Emosi yang Dirasakan</th>
                            <th>Intensitas Emosi</th>
                            <th>Penyebab Emosi</th>
                            <th>Respon Terhadap Emosi</th>
                            <th>Pengaruh Emosi</th>
                            <th>Bagaimana perasaan Anda mempengaruhi keputusan yang Anda buat?</th>
                            <th>Bagaimana perasaan atau emosi negatif dapat memicu keinginan Anda untuk menggunakan narkoba?
                            </th>
                            <th>Bagaimana perasaan positif dapat membantu Anda menghindari narkoba?
                            </th>
                            <th>Strategi Pengelolaan Emosi</th>
                            <th>Apakah metode Anda efektif</th>
                            <th>Refleksi Diri: Apa yang dapat Anda pelajari dari emosi Anda hari ini?</th>
                            <th>Bagaimana Anda dapat mengetahui emosi yang dirasakan orang lain?
                            </th>
                            <th>Bagaimana Anda bereaksi ketika mengetahui emosi orang lain?</th>
                            <th>Apakah emosi orang lain mempengaruhi perasaan Anda?</th>
                            <th>Bagaimana caramu mengelola perasaan tersebut?</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($jawaban_jurnal_emosi as $item)
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
                                                                        <td style="max-width: 200px !important;">{{ str_replace('_', ' ', $key) }}</td>
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
