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
        Schema::create('b_m_i_s', function (Blueprint $table) {
            $table->id();
            $table->string('berat_badan', 100);
            $table->string('tinggi_badan', 100);
            $table->string('bmi');
            $table->string('status');
            $table->text('keterangan');

            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('b_m_i_s');
    }
};
