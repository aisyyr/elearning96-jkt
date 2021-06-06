<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdTugasToNilaiTugas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nilai_tugas', function (Blueprint $table) {
            $table->unsignedBigInteger('id_tugas');
            $table->foreign('id_tugas')->references('id')->on('file_tsiswa');
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
            $table->dropForeign(['id_tugas']);
            $table->dropColumn(['id_tugas']);
        });
    }
}
