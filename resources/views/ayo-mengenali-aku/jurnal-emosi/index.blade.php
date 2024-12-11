@extends('user.layout.layout')

@section('content')
    <div class="md:flex font-poppins font-Poppins">
        <div class="space-y-8 p-3">
            <div class="flex justify-between">
                <h1 class="text-3xl font-bold mb-8 text-center text-gray-800">Daily Journal</h1>

                {{-- add journal --}}
                <a href="{{ route('jurnal-emosi.create') }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Journal</a>

            </div>

            {{-- <!-- Journal Entries Table --> --}}
            <div class="bg-white shadow-md rounded-lg overflow-auto mb-8">
                <table class="">
                    <thead>
                        <tr class="bg-gray-200 text-gray-700">
                            <th class="py-3 px-4 text-left">Date</th>
                            {{-- hari, kejadian, emosi, penyebab, respon, pengaruh, aksi (detail, hapus) --}}
                            <th class="py-3 px-4 text-left">kejadian</th>
                            <th class="py-3 px-4 text-left">Emosi</th>
                            <th class="py-3 px-4 text-left">Penyebab</th>
                            <th class="py-3 px-4 text-left">Respon</th>
                            <th class="py-3 px-4 text-left">Pengaruh</th>
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
                                    {{ limitWords($item->kejadian_hari_ini) }}
                                </td>
                                <td class="py-3 px-4 ">
                                    {{ limitWords($item->emosi_yang_dirasakan) }}
                                </td>
                                <td class="py-3 px-4 ">
                                    {{ limitWords($item->penyebab_emosi) }}
                                </td>
                                <td class="py-3 px-4 ">
                                    {{ limitWords($item->respon_terhadap_emosi) }}
                                </td>
                                <td class="py-3 px-4 ">
                                    {{ limitWords($item->pengaruh_emosi) }}
                                </td>
                                <td class="py-3 px-4 ">
                                    <a href="{{ route('jurnal-emosi.show', $item->id) }}"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded block mb-2">Detail</a>
                                    <a href="{{ route('jurnal-emosi.edit', $item->id) }}"
                                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded block mb-2">Edit</a>
                                    <form action="{{ route('jurnal-emosi.destroy', $item->id) }}" method="POST"
                                        class="inline" id="form-hapus-jurnal-{{ $item->id }}"
                                        onclick="hapusJurnal({{ $item->id }})">
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
        function hapusJurnal(id) {
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data yang dihapus tidak dapat dikembalikan!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal'
            }).then((result) => {
                if (result.isConfirmed) {
                    $('#form-hapus-jurnal-' + id).submit();
                }
            })

        }
    </script>
@endpush
