<div>
    <h1 class="font-semibold text-slate-800 text-xl mb-4">Studi Kasus</h1>

    <img src="{{ asset('img/Discussion-cuate.png') }}" alt="" class=" h-72 object-contain">

    <div class="indent-8 space-y-5">
        {!! $revisi_materi['pertanyaan'] !!}
    </div>

    {{-- pertanyaan --}}
    <h1 class="font-semibold text-slate-800 text-xl mt-5">Jawablah Soal Berikut</h1>

    @if ($errors->any())
        <div class="">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form action="{{ route('ayo-jauhi-narkoba.store') }}" method="post">
        @csrf
        @foreach ($revisi_materi['soal'] as $key => $value)
            {{-- textarea --}}
            <div class="mt-3">
                <label for="{{ $key }}" class="text-sm font-medium  mb-2">
                    {{ $loop->iteration }} . {!! $value !!}
                </label>
                <textarea id="{{ $key }}" name="{{ $key }}" rows="3"
                    class="w-full px-3 py-2  border rounded-lg  " placeholder="Silakan dijawab"></textarea>
            </div>
        @endforeach

        <button type="submit" class="bg-green-500 text-white p-2 rounded-lg">Submit</button>
    </form>
</div>
