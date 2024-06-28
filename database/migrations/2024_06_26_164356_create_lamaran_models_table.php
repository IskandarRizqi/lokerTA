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
        Schema::create('lamaran_models', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('loker_id');
            $table->bigInteger('user_id');
            $table->integer('status')->default(0)->comment('0: Proses, 1: Diterima, 99: Ditolak');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lamaran_models');
    }
};
