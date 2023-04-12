<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nilai_mahasiswa', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nim', 100);
            $table->integer('Proyek');
            $table->integer('Manajemen Proyek');
            $table->integer('Jaringan Komputer');
            $table->integer('Kewarganegaraan');
            $table->integer('PWL');
            $table->integer('Praktikum Jarkom');
            $table->integer('Statkom');
            $table->integer('Business Intellegence');
            $table->integer('ADBO');
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
        Schema::dropIfExists('nilai_mahasiswa');
    }
};
