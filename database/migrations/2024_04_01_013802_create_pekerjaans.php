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
        Schema::create('pekerjaans', function (Blueprint $table) {
            $table->id();
            $table->string('project_id')->unique();
            $table->string('pekerjaan');
            $table->string('no_spk');
            $table->double('nilai_pekerjaan');
            $table->integer('termin_inv');
            $table->date('mulai_pekerjaan');
            $table->date('selesai_pekerjaan');
            $table->integer('progres');
            $table->string('status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pekerjaans');
    }
};
