@extends('user.layout.layout')

@section('content')
    <div class="md:flex font-poppins font-Poppins">

        <div class="md:p-4 rounded-2xl  lg:mx-auto mx-5 mt-5 ">
            <h1 class="font-semibold text-slate-800 text-xl mb-4">Studi Kasus</h1>

            <img src="{{ asset('img/Friendship-pana.png') }}" alt="" class=" h-72 object-contain">

            <div class="indent-8 space-y-5">
                {!! $revisi_materi['narasi'] !!}
            </div>

            @isset($jawaban_sk_emotional)
                <x-congratulations-card title="Selamat!" message="Kamu telah menyelesaikan:"
                    subtitle="Studi Kasus: Emotional Awareness" stars="5" footer="Tetap Semangat dan Selalu Jauhi Narkoba!" />
            @endisset

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

            <form action="{{ route('emotional-awareness.store') }}" method="post">
                @csrf
                @foreach ($revisi_materi['soal'] as $key => $value)
                    {{-- textarea --}}
                    <div class="mt-3">
                        <label for="{{ $key }}" class="text-sm font-medium  mb-2">
                            {{ $loop->iteration }} . {!! $value !!}
                        </label>
                        <textarea id="{{ $key }}" name="{{ $key }}" rows="3"
                            class="w-full px-3 py-2  border rounded-lg  " placeholder="Silakan dijawab" required>
@isset($jawaban_sk_emotional)
{{ $jawaban_sk_emotional[$key] }}
@endisset
</textarea>
                    </div>
                @endforeach

                <button type="submit" class="bg-green-500 text-white p-2 rounded-lg">Submit</button>
            </form>
        </div>
    </div>


@endsection
