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
        Schema::create('cashins', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('pekerjaan_id')->unique();
            $table->date('tgl_transaksi');
            $table->string('transaksi');
            $table->double('nominal');
            $table->string('dari');
            $table->string('catatan');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cashins');
    }
};
