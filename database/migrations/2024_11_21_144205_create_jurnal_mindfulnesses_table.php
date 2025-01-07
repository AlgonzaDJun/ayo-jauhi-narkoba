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
        Schema::create('jurnal_mindfulnesses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->date("tanggal");
            // $table->text("perasaan_bangun_tidur");
            // $table->text("siap_memulai_hari");
            // $table->text("yang_kamu_syukuri");
            // $table->text("perasaanmu_setelah_setengah_hari");
            // $table->text("kamu_menghadapi_situasi_yang_sulit");
            // $table->text("yang_kamu_lakukan_untuk_tetap_tenang");
            // $table->text("perasaanmu_saat_hari_berakhir");
            // $table->text("yang_kamu_pelajari_hari_ini");
            // $table->text("lama_kamu_berlatih_mindfulness");
            // $table->text("perasaanmu_sebelum_latihan");
            // $table->text("perasaanmu_selama_latihan_berlangsung");
            // $table->text("perasaanmu_setelah_latihan");
            // $table->text("pola_pernapasanmu_selama_kegiatan_mindfulness");
            // $table->text("sensasi_fisik_yang_kamu_rasakan_selama_kegiatan_mindfulness");
            // $table->text("kamu_dapatkan_dari_latihan_mindfulness");
            // $table->text("kamu_mempraktikkan_materi_mengamati_sekitar");
            // $table->text("kamu_perhatikan_tentang_pikiran");
            // $table->text("Bagaimana_kamu_merespons_stress");
            // $table->text("Apa_yang_ingin_kamu_capai_dalam_latihan_mindfulness_besok");
            /*
"lama_berlatih_mindfulness" => "sekitar 20 jam"
  "perasaan_selama_mindfulness" => "saya merasakan ada getaran hebat"
  "perasaan_sebelum_mindfulness" => "saya merasakan pembuluh darah saya terbakar"
  "perasaan_setelah_mindfulness" => "saya merasakan diri saya lebih mendingan"
            */
            $table->text("lama_berlatih_mindfulness");
            $table->text("perasaan_selama_mindfulness");
            $table->text("perasaan_sebelum_mindfulness");
            $table->text("perasaan_setelah_mindfulness");
            
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
        Schema::dropIfExists('jurnal_mindfulnesses');
    }
};
