@extends('user.layout.layout')

@section('content')
    <div class="max-w-4xl mx-auto">
        <h1 class="text-3xl font-bold mb-6 text-center text-gray-800 mt-5">Halo {{ Auth::user()->name }}, Berikut progres
            Belajar Kamu</h1>

        {{-- ayo mulai belajar mengenai narkoba dan diri sendiri --}}
        <div class="flex justify-center my-4">
            <a href="{{ route('ayo-jauhi-narkoba.index') }}"
                class="bg-custom-green text-white px-4 py-2 rounded-md shadow-md hover:bg-green-600">Ayo Mulai Belajar
                Mengenai Narkoba dan Diri Sendiri</a>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Ayo Jauhi Aku Card -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold mb-4 text-gray-700">Ayo Jauhi Aku</h2>
                <div class="w-full bg-gray-200 rounded-full h-4">
                    <div class="bg-custom-green h-4 rounded-full" style="width: {{ $presentasi->ayo_jauhi_aku }}%"></div>
                </div>
                <p class="mt-2 text-right text-gray-600">{{ $presentasi->ayo_jauhi_aku }}% Complete</p>
            </div>

            <!-- Emotional Awareness Card -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold mb-4 text-gray-700">Emotional Awareness</h2>
                <div class="w-full bg-gray-200 rounded-full h-4">
                    <div class="bg-custom-green h-4 rounded-full" style="width: {{ $presentasi->emotional_awareness }}%">
                    </div>
                </div>
                <p class="mt-2 text-right text-gray-600">{{ $presentasi->ayo_jauhi_aku }}% Complete</p>
            </div>

            <!-- Accurate Self Assessment Card -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold mb-4 text-gray-700">Accurate Self Assessment</h2>
                <div class="w-full bg-gray-200 rounded-full h-4">
                    <div class="bg-custom-green h-4 rounded-full"
                        style="width: {{ $presentasi->accurate_self_assesment }}%"></div>
                </div>
                <p class="mt-2 text-right text-gray-600">{{ $presentasi->accurate_self_assesment }}% Complete</p>
            </div>

            <!-- Self Confidence Card -->
            <div class="bg-white rounded-lg shadow-md p-6">
                <h2 class="text-xl font-semibold mb-4 text-gray-700">Self Confidence</h2>
                <div class="w-full bg-gray-200 rounded-full h-4">
                    <div class="bg-custom-green h-4 rounded-full" style="width: {{ $presentasi->self_confidence }}%"></div>
                </div>
                <p class="mt-2 text-right text-gray-600">{{ $presentasi->self_confidence }}% Complete</p>
            </div>
        </div>
    </div>
@endsection
