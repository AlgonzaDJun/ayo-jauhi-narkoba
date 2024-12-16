<div class="bg-white  p-2 space-y-8">
    @foreach ($self_conf as $lk)
        @if ($lk['nama'] === 'LK SELF CONFIDENT')
            <h1 class="text-3xl font-bold text-center "> {{ $lk['bagian_2']['nama'] }}
            </h1>

            <form class="space-y-6" action="{{ route('self-confidence.self-confidence') }}" method="post" id="form-lk-self-confidence-2">
                @csrf
                @php
                    $urutan2 = 1;
                @endphp
                <ol class="space-y-1 list-decimal list-inside">
                    @isset($lk['bagian_2']['jawaban_lk'])
                        <p class="text-red-500 text-3xl font-semibold my-5">
                            Anda sudah pernah mengisi soal ini sebelumnya.
                        </p>

                        {{-- button kosongkan form --}}
                        <button type="button"
                            class="w-full text-white rounded-lg px-4 py-2 transition duration-300 ease-in-out bg-red-700 hover:bg-red-800"
                            onclick="clearFormLK2()">
                            Kosongkan Form
                        </button>
                    @endisset
                    @foreach ($lk['bagian_2'] as $item)
                        @isset($item['judul'])
                            <p class="text-center font-bold text-2xl">
                                {{ $item['judul'] }}
                            </p>
                        @endisset

                        @isset($item['pertanyaan'])
                            <li class="mt-4">
                                <label for="{{ $item['pertanyaan'] . 'bagian2' }}" class="text-sm font-medium  mb-2">
                                    {!! $item['pertanyaan'] !!}
                                </label>
                                <textarea id="{{ $item['pertanyaan'] . 'bagian2' }}" name="{{ 'Soal_' . $urutan2 }}" rows="3"
                                    class="w-full px-3 py-2  border rounded-lg  " placeholder="Silakan dijawab">@isset($lk['bagian_2']['jawaban_lk']){{ $lk['bagian_2']['jawaban_lk']['Soal_' . $urutan2] }}
                                    @endisset</textarea>
                            </li>
                        @php
                            $urutan2++;
                        @endphp
                        @endisset
                    @endforeach

                </ol>
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <input type="hidden" name="Kategori_Bagian" value="2">
                <button type="submit"
                    class="w-full text-white rounded-lg px-4 py-2 transition duration-300 ease-in-out bg-blue-700 hover:bg-blue-800">
                    Submit
                </button>
            </form>
        @endif
    @endforeach
</div>


@push('custom-script')
    <script>
        function clearFormLK2() {
            // clear all textarea inside id form-lk-self-confidence-1
            document.querySelectorAll('#form-lk-self-confidence-2 textarea').forEach((el) => {
                el.value = '';
            });
        }
    </script>
@endpush