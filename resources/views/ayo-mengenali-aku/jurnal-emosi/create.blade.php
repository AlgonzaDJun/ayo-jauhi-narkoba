@extends('user.layout.layout')

@section('content')
<div class="md:flex font-poppins font-Poppins">
    <div class="p-4 rounded-2xl  lg:mx-auto mx-5 mt-5 ">
        <div class="">
            <form class=" mx-auto rounded pt-6 pb-8 mb-4" action="{{ route('jurnal-emosi.store') }}" method="POST">
                @csrf
                <h1 class="text-2xl font-bold text-center mb-6">Jurnal Emosi</h1>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="tanggal">
                        Hari/Tanggal:
                    </label>
                    <input name="tanggal"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="tanggal" type="date" required>
                </div>

                {{-- <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="kejadian">
                        1. Kejadian Hari Ini: Apa yang kamu alami hari ini?
                    </label>
                    <textarea name="kejadian_hari_ini"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="kejadian" rows="3" required></textarea>
                </div> --}}

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2">
                        1. Emosi yang Dirasakan: Emosi apa yang kamu rasakan hari ini? (Pilih emosi yang paling dominan)
                    </label>
                    <div class="grid grid-cols-2 gap-2">
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio" name="emosi_yang_dirasakan" value="Marah">

                            <span class="ml-2">Marah</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio" name="emosi_yang_dirasakan" value="Cemburu">
                            <span class="ml-2">Cemburu</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio" name="emosi_yang_dirasakan" value="Cinta">
                            <span class="ml-2">Cinta</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio" name="emosi_yang_dirasakan" value="Iri">
                            <span class="ml-2">Iri</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio" name="emosi_yang_dirasakan" value="Bahagia">
                            <span class="ml-2">Bahagia</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio" name="emosi_yang_dirasakan" value="Sedih">
                            <span class="ml-2">Sedih</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio" name="emosi_yang_dirasakan" value="Malu">
                            <span class="ml-2">Malu</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio" name="emosi_yang_dirasakan" value="Jijik">
                            <span class="ml-2">Jijik</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio" name="emosi_yang_dirasakan" value="Bersalah">
                            <span class="ml-2">Bersalah</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="radio" class="form-radio" name="emosi_yang_dirasakan" value="Takut">
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
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                        <option value="9">9</option>
                        <option value="10">10</option>
                    </select>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="penyebab">
                        3. Apa penyebab dari emosi yang kamu rasakan?
                    </label>
                    <textarea name="penyebab_emosi"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="penyebab" rows="3" required></textarea>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="pengaruh">
                        4. Apakah emosi tersebut mempengaruhi perilaku dan pikiranmu terhadap diri sendiri maupun orang lain?
                    </label>
                    <textarea name="pengaruh_emosi"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="pengaruh" rows="3" required></textarea>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="dilakukan_saat_emosi">
                        5. Apa yang kamu lakukan pada saat emosi tersebut muncul?
                    </label>
                    <textarea name="lakukan_saat_emosi_muncul"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="dilakukan_saat_emosi" rows="3" required></textarea>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="mengatasi_emosi">
                        6. Bagaimana cara kamu mengatasi emosi tersebut?
                    </label>
                    <textarea name="cara_kamu_mengatasi_emosi"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="mengatasi_emosi" rows="3" required></textarea>
                </div>

                {{-- <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="pengaruh-narkoba">
                        Bagaimana perasaan atau emosi negatif dapat memicu keinginan kamu untuk menggunakan narkoba?
                    </label>
                    <textarea name="emosi_negatif_dapat_memicu_keinginan_menggunakan_narkoba"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="pengaruh-narkoba" rows="3" required></textarea>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="pengaruh-positif">
                        Bagaimana perasaan positif dapat membantu kamu menghindari narkoba?
                    </label>
                    <textarea name="perasaan_positif_dapat_membantu_kamu_menghindari_narkoba"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="pengaruh-positif" rows="3" required></textarea>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="strategi">
                        7. Strategi Pengelolaan Emosi: Bagaimana kamu mengelola emosi ini?
                    </label>
                    <textarea name="strategi_pengelolaan_emosi"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="strategi" rows="3" required></textarea>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="efektivitas">
                        Apakah metode kamu efektif?
                    </label>
                    <textarea name="apakah_metode_kamu_efektif"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="efektivitas" rows="3" required></textarea>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="pembelajaran">
                        8. Refleksi Diri: Apa yang dapat kamu pelajari dari emosi kamu hari ini?
                    </label>
                    <textarea name="apa_yang_dapat_kamu_pelajari_dari_emosi_kamu_hari_ini"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="pembelajaran" rows="3" required></textarea>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="emosi-orang-lain">
                        Bagaimana kamu dapat mengetahui emosi yang dirasakan orang lain?
                    </label>
                    <textarea name="bagaimana_kamu_dapat_mengetahui_emosi_yang_dirasakan_orang_lain"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="emosi-orang-lain" rows="3" required></textarea>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="reaksi-emosi-orang-lain">
                        Bagaimana kamu bereaksi ketika mengetahui emosi orang lain?
                    </label>
                    <textarea name="bagaimana_kamu_bereaksi_ketika_mengetahui_emosi_orang_lain"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="reaksi-emosi-orang-lain" rows="3" required></textarea>
                </div>

                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="pengaruh-emosi-orang-lain">
                        Apakah emosi orang lain mempengaruhi perasaan kamu?
                    </label>
                    <textarea name="apakah_emosi_orang_lain_mempengaruhi_perasaan_kamu"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="pengaruh-emosi-orang-lain" rows="3" required></textarea>
                </div>

                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="pengelolaan-emosi-orang-lain">
                        Bagaimana caramu mengelola perasaan tersebut?
                    </label>
                    <textarea name="bagaimana_caramu_mengelola_perasaan_tersebut"
                        class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                        id="pengelolaan-emosi-orang-lain" rows="3" required></textarea>
                </div> --}}

                <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                <div class="flex items-center justify-center">
                    <button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline"
                        type="submit">
                        Kirim Entri Jurnal
                    </button>
                </div>
            </form>
        </div>

    </div>

</div>
@endsection