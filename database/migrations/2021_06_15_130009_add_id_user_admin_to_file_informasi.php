<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIdUserAdminToFileInformasi extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('file_informasi', function (Blueprint $table) {
            $table->unsignedBigInteger('id_user_admin');
            $table->foreign('id_user_admin')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('file_informasi', function (Blueprint $table) {
            $table->dropForeign(['id_user_admin']);
            $table->dropColumn(['id_user_admin']);
        });
    }
}
