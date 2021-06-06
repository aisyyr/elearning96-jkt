<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddKelasToPelajaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pelajaran', function (Blueprint $table) {
            $table->unsignedBigInteger('kelass');
            $table->foreign('kelass')->references('id_kelas')->on('kelas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pelajaran', function (Blueprint $table) {
            $table->dropForeign(['kelass']);
            $table->dropColumn(['kelass']);
        });
    }
}
