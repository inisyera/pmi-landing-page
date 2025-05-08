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
        Schema::create('jadwal_donor_darahs', function (Blueprint $table) {
            $table->id();
            $table->integer('No');
            $table->string('Lokasi');
            $table->string('Alamat');
            $table->time('Jam_Mulai');
            $table->time('Jam_Selesai');
            $table->string('Peruntukan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jadwal_donor_darahs');
    }
};
