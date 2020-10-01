<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePinjamKembaliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pinjam_kembali', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('tanggal_peminjaman');
            $table->integer('lama_pinjam');
            $table->date('tanggal_pengembalian');
            $table->unsignedBigInteger('siswa_id');
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
        Schema::dropIfExists('pinjam_kembali');
    }
}
