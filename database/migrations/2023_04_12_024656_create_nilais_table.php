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
            $table->string('nim', 100)->unique();
            $table->integer('Proyek')->nullable();
            $table->integer('Manajemen_Proyek')->nullable();
            $table->integer('Jaringan_Komputer')->nullable();
            $table->integer('Kewarganegaraan')->nullable();
            $table->integer('PWL')->nullable();
            $table->integer('Praktikum_Jarkom')->nullable();
            $table->integer('Statkom')->nullable();
            $table->integer('Business_Intellegence')->nullable();
            $table->integer('ADBO')->nullable();
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
