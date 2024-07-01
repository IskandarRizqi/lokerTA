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
        Schema::create('nonformal', function (Blueprint $table) {
            $table->id();
            $table->string('namakursus');
            $table->string('institusi');
            $table->dateTime('tanggalmulai');
            $table->dateTime('tanggalselesai');
         
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nonformal');
    }
};
