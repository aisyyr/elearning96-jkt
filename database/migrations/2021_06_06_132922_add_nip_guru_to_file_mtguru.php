<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNipGuruToFileMtguru extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('file_mtguru', function (Blueprint $table) {
            $table->unsignedBigInteger('nip_guru');
            $table->foreign('nip_guru')->references('nip_guru')->on('guru');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('file_mtguru', function (Blueprint $table) {
            $table->dropForeign(['nip_guru']);
            $table->dropColumn(['nip_guru']);
        });
    }
}
