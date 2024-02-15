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
        Schema::create('mid_collaborations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('dg10');
            $table->string('dg11_1');
            $table->string('dg11_2');
            $table->string('dg11_3');
            $table->string('dg11_4');
            $table->string('dg12');
            $table->string('dg13');
            $table->string('dg14');
            $table->foreignId('govofficial_id')->constrained('govofficials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mid_collaborations');
    }
};
