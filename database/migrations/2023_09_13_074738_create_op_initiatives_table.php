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
        Schema::create('op_initiatives', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('dg10');
            $table->string('dg11');
            $table->string('dg12');
            $table->string('dg13');
            $table->string('dg14_1');
            $table->string('dg14_2');
            $table->string('dg15');
            $table->string('dg16');
            $table->string('dg17');
            $table->foreignId('govofficial_id')->constrained('govofficials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('op_initiatives');
    }
};
