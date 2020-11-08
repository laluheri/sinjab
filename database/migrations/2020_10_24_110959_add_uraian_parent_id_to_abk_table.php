<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUraianParentIdToAbkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('abk', function (Blueprint $table) {
            //
            $table->integer('uraian_parent_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('abk', function (Blueprint $table) {
            //
            $table->integer('uraian_parent_id')->nullable();
        });
    }
}
