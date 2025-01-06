@extends('user.layout.layout')

{{-- @dd($jurnal) --}}

@section('content')
    <div class="md:flex font-poppins font-Poppins">
        <div class="p-4 rounded-2xl  lg:mx-auto mx-5 mt-5 ">
            <div class="">
                <form class=" mx-auto rounded pt-6 pb-8 mb-4"
                    action="{{ route('jurnal-emosi.update', ['jurnal_emosi' => $jurnal->id]) }}" method="POST">
                    @method('PUT')
                    @csrf
                    <h1 class="text-2xl font-bold text-center mb-6">Jurnal Emosi</h1>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="tanggal">
                            Hari/Tanggal:
                        </label>
                        <input name="tanggal" value="{{ $jurnal->tanggal }}"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="tanggal" type="date" required>
                    </div>

                    {{-- <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="kejadian">
                            1. Kejadian Hari Ini: Apa yang kamu alami hari ini?
                        </label>
                        <textarea name="kejadian_hari_ini"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="kejadian" rows="3" required>{{ $jurnal->kejadian_hari_ini }}</textarea>
                    </div> --}}

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">
                            1. Emosi yang Dirasakan: Emosi apa yang kamu rasakan hari ini? (Pilih emosi yang paling dominan)
                        </label>
                        <div class="grid grid-cols-2 gap-2">
                            <label class="inline-flex items-center">
                                <input type="radio" class="form-radio" name="emosi_yang_dirasakan" value="Marah"
                                    {{ $jurnal->emosi_yang_dirasakan === 'Marah' ? 'checked' : '' }}>

                                <span class="ml-2">Marah</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" class="form-radio" name="emosi_yang_dirasakan" value="Cemburu"
                                    {{ $jurnal->emosi_yang_dirasakan === 'Cemburu' ? 'checked' : '' }}>
                                <span class="ml-2">Cemburu</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" class="form-radio" name="emosi_yang_dirasakan" value="Cinta"
                                    {{ $jurnal->emosi_yang_dirasakan === 'Cinta' ? 'checked' : '' }}>
                                <span class="ml-2">Cinta</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" class="form-radio" name="emosi_yang_dirasakan" value="Iri"
                                    {{ $jurnal->emosi_yang_dirasakan === 'iri' ? 'checked' : '' }}>
                                <span class="ml-2">Iri</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" class="form-radio" name="emosi_yang_dirasakan" value="Bahagia"
                                    {{ $jurnal->emosi_yang_dirasakan === 'Bahagia' ? 'checked' : '' }}>
                                <span class="ml-2">Bahagia</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" class="form-radio" name="emosi_yang_dirasakan" value="Sedih"
                                    {{ $jurnal->emosi_yang_dirasakan === 'Sedih' ? 'checked' : '' }}>
                                <span class="ml-2">Sedih</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" class="form-radio" name="emosi_yang_dirasakan" value="Malu"
                                    {{ $jurnal->emosi_yang_dirasakan === 'Malu' ? 'checked' : '' }}>
                                <span class="ml-2">Malu</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" class="form-radio" name="emosi_yang_dirasakan" value="Jijik"
                                    {{ $jurnal->emosi_yang_dirasakan === 'Jijiik' ? 'checked' : '' }}>
                                <span class="ml-2">Jijik</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" class="form-radio" name="emosi_yang_dirasakan" value="Bersalah"
                                    {{ $jurnal->emosi_yang_dirasakan === 'Bersalah' ? 'checked' : '' }}>
                                <span class="ml-2">Bersalah</span>
                            </label>
                            <label class="inline-flex items-center">
                                <input type="radio" class="form-radio" name="emosi_yang_dirasakan" value="Takut"
                                    {{ $jurnal->emosi_yang_dirasakan === 'Takut' ? 'checked' : '' }}>
                                <span class="ml-2">Takut</span>
                            </label>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="intensitas">
                            2. Intensitas Emosi: Dari Skala 1-10 berapa intensitas emosi yang kamu rasakan? (1 = sangat
                            rendah, 10 = sangat tinggi)
                        </label>
                        <select name="intensitas_emosi"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="intensitas" required>
                            <option value="">Pilih intensitas</option>
                            <option value="1" @selected($jurnal->intensitas_emosi == 1)>1</option>
                            <option value="2" @selected($jurnal->intensitas_emosi == 2)>2</option>
                            <option value="3" @selected($jurnal->intensitas_emosi == 3)>3</option>
                            <option value="4" @selected($jurnal->intensitas_emosi == 4)>4</option>
                            <option value="5" @selected($jurnal->intensitas_emosi == 5)>5</option>
                            <option value="6" @selected($jurnal->intensitas_emosi == 6)>6</option>
                            <option value="7" @selected($jurnal->intensitas_emosi == 7)>7</option>
                            <option value="8" @selected($jurnal->intensitas_emosi == 8)>8</option>
                            <option value="9" @selected($jurnal->intensitas_emosi == 9)>9</option>
                            <option value="10" @selected($jurnal->intensitas_emosi == 10)>10</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="penyebab">
                            3. Apa penyebab dari emosi yang kamu rasakan?
                        </label>
                        <textarea name="penyebab_emosi"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="penyebab" rows="3" required>{{ $jurnal->penyebab_emosi }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="pengaruh">
                            4. Apakah emosi tersebut mempengaruhi perilaku dan pikiranmu terhadap diri sendiri maupun orang
                            lain?
                        </label>
                        <textarea name="pengaruh_emosi"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="pengaruh" rows="3" required>{{ $jurnal->pengaruh_emosi }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="dilakukan_saat_emosi">
                            5. Apa yang kamu lakukan pada saat emosi tersebut muncul?
                        </label>
                        <textarea name="lakukan_saat_emosi_muncul"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="dilakukan_saat_emosi" rows="3" required>{{ $jurnal->lakukan_saat_emosi_muncul }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="mengatasi_emosi">
                            6. Bagaimana cara kamu mengatasi emosi tersebut?
                        </label>
                        <textarea name="cara_kamu_mengatasi_emosi"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="mengatasi_emosi" rows="3" required>{{ $jurnal->cara_kamu_mengatasi_emosi }}</textarea>
                    </div>

                    <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                    <div class="flex items-center justify-center">
                        <button
                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                            type="submit">
                            Update Jurnal
                        </button>
                    </div>
                </form>
            </div>

        </div>

    </div>
@endsection
