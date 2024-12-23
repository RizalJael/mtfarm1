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
        Schema::create('tb_ternaks', function (Blueprint $table) {
            $table->id();
            $table->date('tgl');
            $table->string('jenis', 15);
            $table->string('jkel', 10);
            $table->string('kode', 15)->unique();
            $table->string('induk', 255)->nullable();
            $table->enum('asal', ['suplier', 'kelahiran']); // Menggunakan enum
            $table->text('asal_kedatangan')->nullable(); // Kolom untuk menyimpan informasi asal kedatangan
            $table->text('keterangan')->nullable();
            $table->string('status', 255);
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
        Schema::dropIfExists('tb_ternaks');
    }
};
