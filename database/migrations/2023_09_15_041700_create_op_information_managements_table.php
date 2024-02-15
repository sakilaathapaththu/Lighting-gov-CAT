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
        Schema::create('op_information_managements', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ict10_1');
            $table->string('ict10_2');
            $table->string('ict10_3');
            $table->string('ict11');
            $table->string('ict12');
            $table->string('ict13_1');
            $table->string('ict13_2');
            $table->string('ict13_3');
            $table->string('ict14');
            $table->foreignId('govofficial_id')->constrained('govofficials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('op_information_managements');
    }
};
