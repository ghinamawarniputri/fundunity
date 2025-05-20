<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('volunteer', function (Blueprint $table) {
            $table->integer('ID', true);
            $table->string('nama', 100);
            $table->string('email', 100);
            $table->string('no_telepon', 20)->nullable();
            $table->integer('usia')->nullable();
            $table->string('alamat')->nullable();
            $table->string('rentang_waktu')->nullable();
            $table->string('keterampilan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('volunteer');
    }
};
