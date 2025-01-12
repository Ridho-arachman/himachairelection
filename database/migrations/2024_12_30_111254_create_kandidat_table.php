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
        Schema::create('kandidat', function (Blueprint $table) {
            $table->char('nim_kandidat', 10)->primary();
            $table->char('kd_prodi', 6);
            $table->string('nama')->index();
            $table->string('foto');
            $table->text('visi_misi');
            $table->timestamps();

            $table->foreign('kd_prodi')
                ->references('kd_prodi')
                ->on('prodi')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kandidat');
    }
};
