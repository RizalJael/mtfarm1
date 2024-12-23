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
        Schema::create('tb_potong', function (Blueprint $table) {
            $table->id();
            $table->string('kode', 15);
            $table->date('tgl');
            $table->decimal('bobot', 8, 2);
            $table->string('tujuan', 255);
            $table->text('keterangan')->nullable();
            $table->timestamps();

            $table->foreign('kode')->references('kode')->on('tb_ternaks')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_potong');
    }
};
