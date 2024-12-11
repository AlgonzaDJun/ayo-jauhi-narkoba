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

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="kejadian">
                            1. Kejadian Hari Ini: Apa yang Anda alami hari ini?
                        </label>
                        <textarea name="kejadian_hari_ini"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="kejadian" rows="3" required>{{ $jurnal->kejadian_hari_ini }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2">
                            2. Emosi yang Dirasakan: Emosi apa yang Anda rasakan hari ini? (Pilih emosi yang paling dominan)
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
                            3. Intensitas Emosi: Nilai intensitas emosi yang Anda rasakan pada skala 1-10 (1 = sangat
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
                            4. Penyebab Emosi: Menurut Anda, apa yang memicu emosi yang Anda rasakan?
                        </label>
                        <textarea name="penyebab_emosi"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="penyebab" rows="3" required>{{ $jurnal->penyebab_emosi }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="respon">
                            5. Respon terhadap Emosi: Bagaimana Anda merespon emosi tersebut? <br> (misalnya:
                            berbicara dengan seseorang, menulis di jurnal, berolahraga,
                            menangis, dan lain-lain)
                        </label>
                        <textarea name="respon_terhadap_emosi"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="respon" rows="3" required>{{ $jurnal->respon_terhadap_emosi }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="pengaruh-perilaku">
                            6. Pengaruh Emosi: Bagaimana emosi ini mempengaruhi perilaku dan pikiran Anda sepanjang hari?
                        </label>
                        <textarea name="pengaruh_emosi"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="pengaruh-perilaku" rows="3" required>{{ $jurnal->pengaruh_emosi }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="pengaruh-keputusan">
                            Bagaimana perasaan Anda mempengaruhi keputusan yang Anda buat?
                        </label>
                        <textarea name="perasaan_anda_mempengaruhi_keputusan"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="pengaruh-keputusan" rows="3" required>{{ $jurnal->perasaan_anda_mempengaruhi_keputusan }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="pengaruh-narkoba">
                            Bagaimana perasaan atau emosi negatif dapat memicu keinginan Anda untuk menggunakan narkoba?
                        </label>
                        <textarea name="emosi_negatif_dapat_memicu_keinginan_menggunakan_narkoba"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="pengaruh-narkoba" rows="3" required>{{ $jurnal->emosi_negatif_dapat_memicu_keinginan_menggunakan_narkoba }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="pengaruh-positif">
                            Bagaimana perasaan positif dapat membantu Anda menghindari narkoba?
                        </label>
                        <textarea name="perasaan_positif_dapat_membantu_anda_menghindari_narkoba"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="pengaruh-positif" rows="3" required>{{ $jurnal->perasaan_positif_dapat_membantu_anda_menghindari_narkoba }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="strategi">
                            7. Strategi Pengelolaan Emosi: Bagaimana Anda mengelola emosi ini?
                        </label>
                        <textarea name="strategi_pengelolaan_emosi"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="strategi" rows="3" required>{{ $jurnal->strategi_pengelolaan_emosi }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="efektivitas">
                            Apakah metode Anda efektif?
                        </label>
                        <textarea name="apakah_metode_anda_efektif"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="efektivitas" rows="3" required>{{ $jurnal->apakah_metode_anda_efektif }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="pembelajaran">
                            8. Refleksi Diri: Apa yang dapat Anda pelajari dari emosi Anda hari ini?
                        </label>
                        <textarea name="apa_yang_dapat_anda_pelajari_dari_emosi_anda_hari_ini"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="pembelajaran" rows="3" required>{{ $jurnal->apa_yang_dapat_anda_pelajari_dari_emosi_anda_hari_ini }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="emosi-orang-lain">
                            Bagaimana Anda dapat mengetahui emosi yang dirasakan orang lain?
                        </label>
                        <textarea name="bagaimana_anda_dapat_mengetahui_emosi_yang_dirasakan_orang_lain"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="emosi-orang-lain" rows="3" required>{{ $jurnal->bagaimana_anda_dapat_mengetahui_emosi_yang_dirasakan_orang_lain }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="reaksi-emosi-orang-lain">
                            Bagaimana Anda bereaksi ketika mengetahui emosi orang lain?
                        </label>
                        <textarea name="bagaimana_anda_bereaksi_ketika_mengetahui_emosi_orang_lain"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="reaksi-emosi-orang-lain" rows="3" required>{{ $jurnal->bagaimana_anda_bereaksi_ketika_mengetahui_emosi_orang_lain }}</textarea>
                    </div>

                    <div class="mb-6">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="pengaruh-emosi-orang-lain">
                            Apakah emosi orang lain mempengaruhi perasaan Anda?
                        </label>
                        <textarea name="apakah_emosi_orang_lain_mempengaruhi_perasaan_anda"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="pengaruh-emosi-orang-lain" rows="3" required>{{ $jurnal->apakah_emosi_orang_lain_mempengaruhi_perasaan_anda }}</textarea>
                    </div>

                    {{-- Bagaimana caramu mengelola perasaan tersebut? --}}
                    <div class="mb-4">
                        <label class="block text-gray-700 text-sm font-bold mb-2" for="pengelolaan-emosi-orang-lain">
                            Bagaimana caramu mengelola perasaan tersebut?
                        </label>
                        <textarea name="bagaimana_caramu_mengelola_perasaan_tersebut"
                            class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                            id="pengelolaan-emosi-orang-lain" rows="3" required>{{ $jurnal->bagaimana_caramu_mengelola_perasaan_tersebut }}</textarea>
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
