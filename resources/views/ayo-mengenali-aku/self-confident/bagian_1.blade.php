<div class="bg-white  p-2 space-y-8">
    @foreach ($self_conf as $lk)
        @if ($lk['nama'] === 'LK SELF CONFIDENT')
            <h1 class="text-3xl font-bold text-center "> {{ $lk['bagian_1']['nama'] }}
            </h1>

            <form action="{{ route('self-confidence.self-confidence') }}" class="space-y-6" method="post">
                @csrf
                @php
                    $urutan = 1;
                @endphp
                <ol class="space-y-1 list-decimal list-inside">
                    @foreach ($lk['bagian_1'] as $item)
                        @isset($item['judul'])
                            <p class="text-center font-bold text-2xl">
                                {{ $item['judul'] }}
                            </p>
                        @endisset

                        @isset($item['pertanyaan'])
                            @foreach ($item['pertanyaan'] as $key => $pertanyaan)
                                <li class="mt-4">
                                    <label for="{{ $key . '_' . $pertanyaan . 'bagian1' }}" class="text-sm font-medium  mb-2">
                                        {!! $pertanyaan !!}
                                    </label>
                                    <textarea id="{{ $key . '' . $pertanyaan . 'bagian1' }}" name="{{ 'Soal_' . $urutan }}" rows="3"
                                        class="w-full px-3 py-2  border rounded-lg  " placeholder="Silakan dijawab"></textarea>
                                </li>
                                @php
                                    $urutan++;
                                @endphp
                            @endforeach
                        @endisset
                    @endforeach

                </ol>
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <input type="hidden" name="Kategori_Bagian" value="1">
                <button type="submit"
                    class="w-full text-white rounded-lg px-4 py-2 transition duration-300 ease-in-out bg-blue-700 hover:bg-blue-800">

                    Submit

                </button>
            </form>

        @endif
    @endforeach
</div>