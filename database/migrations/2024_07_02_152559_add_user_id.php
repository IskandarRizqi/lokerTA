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
            $table->bigInteger('id_user')->nullable();
        });
        Schema::table('pengalaman', function (Blueprint $table) {
            $table->bigInteger('id_user')->nullable();
        });
        Schema::table('skill', function (Blueprint $table) {
            $table->bigInteger('id_user')->nullable();
        });
        Schema::table('formal', function (Blueprint $table) {
            $table->bigInteger('id_user')->nullable();
        });
        Schema::table('nonformal', function (Blueprint $table) {
            $table->bigInteger('id_user')->nullable();
        });
        Schema::table('sosiallink', function (Blueprint $table) {
            $table->bigInteger('id_user')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('informasipribadi', function (Blueprint $table) {
            $table->dropColumn('id_user')->nullable();
        });
        Schema::table('pengalaman', function (Blueprint $table) {
            $table->dropColumn('id_user')->nullable();
        });
        Schema::table('skill', function (Blueprint $table) {
            $table->dropColumn('id_user')->nullable();
        });
        Schema::table('formal', function (Blueprint $table) {
            $table->dropColumn('id_user')->nullable();
        });
        Schema::table('nonformal', function (Blueprint $table) {
            $table->dropColumn('id_user')->nullable();
        });
        Schema::table('sosiallink', function (Blueprint $table) {
            $table->dropColumn('id_user')->nullable();
        });
    }
};
