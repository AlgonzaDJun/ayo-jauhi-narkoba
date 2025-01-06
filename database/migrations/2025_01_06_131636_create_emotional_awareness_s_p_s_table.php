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
        Schema::create('emotional_awareness_s_p_s', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('soal_1');
            $table->string('soal_2');
            $table->string('soal_3');
            $table->string('soal_4');
            $table->string('soal_5');
            // soal 6 - 12
            $table->string('soal_6');
            $table->string('soal_7');
            $table->string('soal_8');
            $table->string('soal_9');
            $table->string('soal_10');
            $table->string('soal_11');
            $table->string('soal_12');
            $table->string('score');
            $table->text('message');
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
        Schema::dropIfExists('emotional_awareness_s_p_s');
    }
};
