<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nis');
            $table->string('nisn');
            $table->string('nama');
            $table->string('jk');
            $table->unsignedBigInteger('rombel_id')->unsigned();
            $table->unsignedBigInteger('rayon_id')->unsigned();
            $table->unsignedBigInteger('orangtua_id')->unsigned();
            $table->timestamps();

            $table->foreign('rombel_id')->references('id')->on('rombels')->onDelete('cascade');
            $table->foreign('rayon_id')->references('id')->on('rayons')->onDelete('cascade');
            $table->foreign('orangtua_id')->references('id')->on('orangtuas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
