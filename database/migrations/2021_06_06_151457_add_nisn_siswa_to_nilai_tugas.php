<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNisnSiswaToNilaiTugas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nilai_tugas', function (Blueprint $table) {
            $table->unsignedBigInteger('nisn_siswa');
            $table->foreign('nisn_siswa')->references('nisn_siswa')->on('siswa');
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
            $table->dropForeign(['nisn_siswa']);
            $table->dropColumn(['nisn_siswa']);
        });
    }
}
