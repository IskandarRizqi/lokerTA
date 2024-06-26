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
        Schema::create('list_pekerjaan', function (Blueprint $table) {
            $table->id();
            $table->uuid('uid');
            $table->string('nama_pekerjaan');
            $table->string('deskripsi');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('list_pekerjaan');
    }
};
