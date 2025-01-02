@extends('user.layout.layout')
@section('content')
    <div class="font-poppins font-Poppins relative z-10">
        <div class=" p-4 rounded-2xl lg:mx-auto md:mx-5 mt-5 bg-transparent">
            <div class="flex justify-between relative">
                <h1 class="text-3xl font-bold mb-8 text-center text-gray-800">Daily Journal</h1>

                {{-- add journal --}}
                <a href="{{ route('jurnal-mindfulness.create') }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Journal</a>

                <div class="hidden absolute inset-0 md:flex items-center justify-center -z-10 -top-44">
                    <img src="{{ asset('img/Meditation-rafiki.png') }}" alt="" class=" h-72 object-contain">
                </div>

            </div>

            <div class="md:hidden">
                <img src="{{ asset('img/Meditation-rafiki.png') }}" alt="" class=" h-72 object-contain">
            </div>

            {{-- <!-- Journal Entries Table --> --}}
            <div class="bg-white shadow-md rounded-lg overflow-auto mb-8 ">
                <table class="">
                    <thead>
                        <tr class="bg-gray-200 text-gray-700">
                            <th class="py-3 px-4 text-left">Tanggal</th>
                            <th class="py-3 px-4 text-left">Pagi (Perasaan Bangun)</th>
                            <th class="py-3 px-4 text-left">Siang (Situasi Sulit)</th>
                            <th class="py-3 px-4 text-left">Malam (Pelajaran)</th>
                            <th class="py-3 px-4 text-left">Latihan (Durasi)</th>
                            {{-- aksi --}}
                            <th class="py-3 px-4 text-left">Aksi</th>
                        </tr>
                    </thead>

                    <tbody>
                        @forelse ($jurnal_mindfulness as $item)
                            <tr class="border-b border-gray-200">
                                <td class="py-3 px-4">
                                    {{ \Carbon\Carbon::parse($item->tanggal)->format('d M Y') }}
                                </td>
                                <td class="py-3 px-4">
                                    {{ Str::limit($item->perasaan_bangun_tidur, 50, '...') }}
                                </td>
                                <td class="py-3 px-4">
                                    {{ Str::limit($item->kamu_menghadapi_situasi_yang_sulit, 50, '...') }}
                                </td>
                                <td class="py-3 px-4">
                                    {{ Str::limit($item->yang_kamu_pelajari_hari_ini, 50, '...') }}
                                </td>
                                <td class="py-3 px-4">
                                    {{ Str::limit($item->kamu_dapatkan_dari_latihan_mindfulness, 50, '...') }}
                                </td>

                                <td class="py-3 px-4">
                                    <a href="{{ route('jurnal-mindfulness.show', $item->id) }}"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded block mb-2">Detail</a>
                                    <a href="{{ route('jurnal-mindfulness.edit', $item->id) }}"
                                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded block mb-2">Edit</a>
                                    <form action="{{ route('jurnal-mindfulness.destroy', $item->id) }}"
                                        id="form-hps-jurn-mind-{{ $item->id }}" method="POST" class="inline"
                                        onclick="hapusJurnalMindfulness({{ $item->id }})">
                                        @csrf
                                        @method('DELETE')
                                        <button type="button"
                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded block mb-2">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr class="border-b border-gray-200">
                                <td colspan="6">
                                    <p class="text-center py-3 px-4">Belum ada data</p>
                                </td>
                            </tr>
                        @endforelse
                        {{-- <tr class="border-b border-gray-200">
                            <td class="py-3 px-4">2023-05-01</td>
                            <td class="py-3 px-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
                                voluptates.</td>
                            <td class="py-3 px-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
                                voluptates.</td>
                            <td class="py-3 px-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
                                voluptates.</td>
                            <td class="py-3 px-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
                                voluptates.</td>
                            <td class="py-3 px-4">
                                <a href="{{ route('jurnal-emosi.show', 1) }}"
                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded block mb-2">Detail</a>
                                <a href="{{ route('jurnal-emosi.edit', 1) }}"
                                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded block mb-2">Edit</a>
                                <form action="{{ route('jurnal-emosi.destroy', 1) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded block mb-2">Delete</button>
                                </form>
                            </td>
                        </tr> --}}
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('custom-script')
    <script>
        function hapusJurnalMindfulness(id) {
            swal({
                title: "Apakah Anda yakin?",
                text: "Data yang dihapus tidak dapat dikembalikan!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            }).then((willDelete) => {
                if (willDelete) {
                    $('#form-hps-jurn-mind-' + id).submit();
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
            //         $('#form-hps-jurn-mind-' + id).submit();
            //     }
            // })

        }
    </script>
@endpush



{{-- <table class="table">
    <thead>
        <tr class="bg-gray-200 text-gray-700">
            <th class="py-3 px-4 text-left">Tanggal</th>
            <th class="py-3 px-4 text-left">Pagi (Perasaan Bangun)</th>
            <th class="py-3 px-4 text-left">Pagi (Siap Memulai)</th>
            <th class="py-3 px-4 text-left">Pagi (Syukur)</th>
            <th class="py-3 px-4 text-left">Siang (Perasaan)</th>
            <th class="py-3 px-4 text-left">Siang (Situasi Sulit)</th>
            <th class="py-3 px-4 text-left">Siang (Tetap Tenang)</th>
            <th class="py-3 px-4 text-left">Malam (Perasaan)</th>
            <th class="py-3 px-4 text-left">Malam (Pelajaran)</th>
            <th class="py-3 px-4 text-left">Latihan (Durasi)</th>
            <th class="py-3 px-4 text-left">Latihan (Perasaan Sebelum)</th>
        </tr>
    </thead>

    <tbody>
        <tr class="border-b border-gray-200">
            <td class="py-3 px-4">2023-05-01</td>
            <td class="py-3 px-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
                voluptates.</td>
            <td class="py-3 px-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
                voluptates.</td>
            <td class="py-3 px-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
                voluptates.</td>
            <td class="py-3 px-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
                voluptates.</td>
            <td class="py-3 px-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
                voluptates.</td>
            <td class="py-3 px-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
                voluptates.</td>
            <td class="py-3 px-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
                voluptates.</td>
            <td class="py-3 px-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
                voluptates.</td>
            <td class="py-3 px-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
                voluptates.</td>
            <td class="py-3 px-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
                voluptates.</td>
        </tr>
    </tbody>
</table> --}}
