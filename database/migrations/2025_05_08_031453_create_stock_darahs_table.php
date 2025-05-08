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
        Schema::create('stock_darahs', function (Blueprint $table) {
            $table->id();
            $table->integer('No');
            $table->string('KabKota');
            $table->integer('Golda_a');
            $table->integer('Golda_b');
            $table->integer('Golda_ab');
            $table->integer('Golda_o');
            $table->dateTime('Tgl_Update');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_darahs');
    }
};
