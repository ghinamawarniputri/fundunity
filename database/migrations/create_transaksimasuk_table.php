<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksimasukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi_masuk', function (Blueprint $table) {
            $table->id('ID');  // kolom primary key dengan nama 'ID'
            $table->string('nama');
            $table->string('email');
            $table->integer('nominal');
            $table->string('keterangan');
            $table->text('status')->default('Selesai');
            //$table->timestamps();  // created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksimasuk');
    }
}
