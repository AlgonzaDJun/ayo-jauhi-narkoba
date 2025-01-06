<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jurnal_emosis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->date("tanggal");
            // $table->text("kejadian_hari_ini");
            // $table->string("emosi_yang_dirasakan");
            // $table->string("intensitas_emosi");
            // $table->text("penyebab_emosi");
            // $table->text("respon_terhadap_emosi");
            // $table->text("pengaruh_emosi"); 
            // $table->text("perasaan_anda_mempengaruhi_keputusan");
            // $table->text("emosi_negatif_dapat_memicu_keinginan_menggunakan_narkoba");
            // $table->text("perasaan_positif_dapat_membantu_anda_menghindari_narkoba");
            // $table->text("strategi_pengelolaan_emosi");
            // $table->text("apakah_metode_anda_efektif");
            // $table->text("apa_yang_dapat_anda_pelajari_dari_emosi_anda_hari_ini");
            // $table->text("bagaimana_anda_dapat_mengetahui_emosi_yang_dirasakan_orang_lain");
            // $table->text("bagaimana_anda_bereaksi_ketika_mengetahui_emosi_orang_lain");
            // $table->text("apakah_emosi_orang_lain_mempengaruhi_perasaan_anda");
            // $table->text("bagaimana_caramu_mengelola_perasaan_tersebut");

            // revisi tanggal 2025-01-06
            $table->string("emosi_yang_dirasakan");
            $table->string("intensitas_emosi");
            $table->text("penyebab_emosi");
            $table->text("pengaruh_emosi");
            $table->text("lakukan_saat_emosi_muncul");
            $table->text("cara_kamu_mengatasi_emosi");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jurnal_emosis');
    }
};
