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
        Schema::create('vote', function (Blueprint $table) {
            $table->foreignUlid('id_user')->primary();
            $table->char('nim_kandidat', 10);
            $table->timestamp('waktu_vote');

            $table->foreign('nim_kandidat')
                ->references('nim_kandidat')
                ->on('kandidat')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('id_user')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vote');
    }
};
