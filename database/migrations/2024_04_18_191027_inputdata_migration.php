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
        Schema::create('inputdata', function (Blueprint $table) {
            $table->id();
            $table->string('gambar');
            $table->string('namaperusahaan');
            $table->string('kategori');
            $table->string('jam');
            $table->string('tempatperusahaan');
            $table->string('deskripsi');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
