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
            $table->integer('user_id')->nullable();;
            $table->integer('unit_kerja_id')->nullable();
            $table->string('ikhtisar_jabatan')->nullable();;
            $table->text('uraian_tugas')->nullable();;
            $table->string('satuan_hasil')->nullable();;
            $table->integer('waktu_pengerjaan')->nullable();;
            $table->integer('waktu_penyelesaian')->nullable();;
            $table->integer('beban_kerja')->nullable();;
            $table->integer('jumlah')->nullable();;
            
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
