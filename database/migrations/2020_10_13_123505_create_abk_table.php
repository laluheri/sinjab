<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abk', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->integer('unit_kerja_id');
            $table->string('ikhtisar_jabatan');
            $table->text('uraian_tugas');
            $table->string('satuan_hasil');
            $table->integer('waktu_pengerjaan');
            $table->integer('waktu_penyelesaian');
            $table->integer('beban_kerja');
            $table->integer('pegawai');
            $table->integer('jumlah');
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
        Schema::dropIfExists('abk');
    }
}
