<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddRolesToUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('roles');
            $table->unsignedBigInteger('nip_guru');
            $table->foreign('nip_guru')->references('nip_guru')->on('guru');
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
        Schema::table('users', function (Blueprint $table) {
            $table->dropForeign(['nisn_siswa']);
            $table->dropColumn(['nisn_siswa']);
            $table->dropForeign(['nip_guru']);
            $table->dropColumn(['nip_guru']);
            $table->dropColumn(['roles']);
        });
    }
}
