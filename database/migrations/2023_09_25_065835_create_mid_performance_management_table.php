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
        Schema::create('mid_performance_management', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('mgt30_1');
            $table->string('mgt30_2');
            $table->string('mgt30_3');
            $table->string('mgt31');
            $table->string('mgt32_1');
            $table->string('mgt32_2');
            $table->string('mgt32_3');
            $table->string('mgt32_4');
            $table->string('mgt33_1');
            $table->string('mgt33_2');
            $table->string('mgt33_3');
            $table->string('mgt33_4');
            $table->string('mgt34');
            $table->string('mgt35');
            $table->foreignId('govofficial_id')->constrained('govofficials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mid_performance_management');
    }
};
