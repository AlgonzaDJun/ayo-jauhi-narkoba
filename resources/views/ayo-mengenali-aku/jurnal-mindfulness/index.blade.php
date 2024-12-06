@extends('user.layout.layout')
@section('content')
    <div class="font-poppins font-Poppins">
        <div class=" p-4 rounded-2xl lg:mx-auto md:mx-5 mt-5 ">
            <div class="flex justify-between">
                <h1 class="text-3xl font-bold mb-8 text-center text-gray-800">Daily Journal</h1>

                {{-- add journal --}}
                <a href="{{ route('jurnal-mindfulness.create') }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add Journal</a>

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
                                    <a href="{{ route('jurnal-emosi.show', $item->id) }}"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded block mb-2">Detail</a>
                                    <a href="{{ route('jurnal-emosi.edit', $item->id) }}"
                                        class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded block mb-2">Edit</a>
                                    <form action="{{ route('jurnal-emosi.destroy', $item->id) }}" method="POST"
                                        class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit"
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
