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
        Schema::table('informasipribadi', function (Blueprint $table) {
            $table->text('file_pendukung')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('informasipribadi', function (Blueprint $table) {
            $table->dropColumn('file_pendukung')->nullable();
        });
    }
};
