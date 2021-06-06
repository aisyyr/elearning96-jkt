<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdPelajaranToNilaiTugas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nilai_tugas', function (Blueprint $table) {
            $table->unsignedBigInteger('id_pelajaran');
            $table->foreign('id_pelajaran')->references('id')->on('pelajaran');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nilai_tugas', function (Blueprint $table) {
            $table->dropForeign(['id_pelajaran']);
            $table->dropColumn(['id_pelajaran']);
        });
    }
}
