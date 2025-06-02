<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('partner', function (Blueprint $table) {
            $table->id(); // id AUTO_INCREMENT
            $table->string('nama', 50);
            $table->string('logo', 255)->nullable();
            $table->timestamps(); // created_at & updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('partner');
    }
};
