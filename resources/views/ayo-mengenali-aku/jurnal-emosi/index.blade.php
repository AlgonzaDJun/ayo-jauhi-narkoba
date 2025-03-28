@extends('user.layout.layout')

{{-- @dd($jurnal) --}}

@section('content')
    <div class="md:flex font-poppins font-Poppins relative z-10">
        <div class="space-y-8 p-3 bg-transparent">
            <div class="flex justify-between relative">
                <h1 class="text-3xl font-bold mb-8 text-center text-gray-800 ">Daily Journal</h1>

                {{-- add journal --}}
                <a href="{{ route('jurnal-emosi.create') }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Journal</a>

                <div class="hidden absolute inset-0 md:flex items-center justify-center -z-10 -top-44">
                    <img src="{{ asset('img/Bullet journal-bro.png') }}" alt="" class=" h-72 object-contain">
                </div>

            </div>

            <div class="md:hidden">
                <img src="{{ asset('img/Bullet journal-bro.png') }}" alt="" class=" h-72 object-contain">
            </div>

            {{-- <!-- Journal Entries Table --> --}}
            <div class="bg-white shadow-md rounded-lg overflow-auto mb-8">
                <table class="">
                    <thead>
                        <tr class="bg-gray-200 text-gray-700">
                            <th class="py-3 px-4 text-left">Tanggal</th>

                            {{-- "emosi_yang_dirasakan" => "Marah"
  "intensitas_emosi" => "2"
  "penyebab_emosi" => "lorem"
  "pengaruh_emosi" => "ipsum"
  "lakukan_saat_emosi_muncul" => "doler"
  "cara_kamu_mengatasi_emosi" => "sit amet" --}}
                            <th class="py-3 px-4 text-left">Emosi</th>
                            <th class="py-3 px-4 text-left">Intensitas</th>
                            <th class="py-3 px-4 text-left">Penyebab</th>
                            <th class="py-3 px-4 text-left">Pengaruh</th>
                            <th class="py-3 px-4 text-left">Yg diLakukan Saat Emosi Muncul</th>
                            <th class="py-3 px-4 text-left">Cara Mengatasi Emosi</th>
                            {{-- <th class="py-3 px-4 text-left">Aksi</th>
                            <th class="py-3 px-4 text-left">kejadian</th>
                            <th class="py-3 px-4 text-left">Emosi</th>
                            <th class="py-3 px-4 text-left">Penyebab</th>
                            <th class="py-3 px-4 text-left">Respon</th>
                            <th class="py-3 px-4 text-left">Pengaruh</th> --}}
                            <th class="py-3 px-4 text-left">Aksi</th>

                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($jurnal as $item)
                            <tr class="border-b border-gray-200">
                                <td class="py-3 px-4 ">
                                    {{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}
                                </td>
                                <td class="py-3 px-4 ">
                                    {{ limitWords($item->emosi_yang_dirasakan) }}
                                </td>
                                <td class="py-3 px-4 ">
                                    {{ $item->intensitas_emosi }}
                                </td>
                                <td class="py-3 px-4 ">
                                    {{ limitWords($item->penyebab_emosi) }}
                                </td>
                                <td class="py-3 px-4 ">
                                    {{ limitWords($item->pengaruh_emosi) }}
                                </td>
                                <td class="py-3 px-4 ">
                                    {{ limitWords($item->lakukan_saat_emosi_muncul) }}
                                </td>
                                <td class="py-3 px-4 ">
                                    {{ limitWords($item->cara_kamu_mengatasi_emosi) }}
                                </td>
                                
                                <td class="py-3 px-4 ">
                                    <a href="{{ route('jurnal-emosi.show', $item->id) }}"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded block mb-2">Detail</a>
                                    <a href="{{ route('jurnal-emosi.edit', $item->id) }}"
                                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded block mb-2">Edit</a>
                                    <form action="{{ route('jurnal-emosi.destroy', $item->id) }}" method="POST"
                                        class="inline" id="form-hapus-jurnal-{{ $item->id }}"
                                        onclick="hapusJurnalEmosi({{ $item->id }})">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button"
                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded block mb-2">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr class="border-b border-gray-200">
                                <td colspan="7">Belum ada data</td>
                            </tr>
                        @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('custom-script')
    <script>
        function hapusJurnalEmosi(id) {
            swal({
                title: "Apakah Anda yakin?",
                text: "Data yang dihapus tidak dapat dikembalikan!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    $('#form-hapus-jurnal-' + id).submit();
                }
            });
            // Swal.fire({
            //     title: 'Apakah Anda yakin?',
            //     text: "Data yang dihapus tidak dapat dikembalikan!",
            //     icon: 'warning',
            //     showCancelButton: true,
            //     confirmButtonColor: '#3085d6',
            //     cancelButtonColor: '#d33',
            //     confirmButtonText: 'Ya, hapus!',
            //     cancelButtonText: 'Batal'
            // }).then((result) => {
            //     if (result.isConfirmed) {
            //         $('#form-hapus-jurnal-' + id).submit();
            //     }
            // })

        }
    </script>
@endpush
