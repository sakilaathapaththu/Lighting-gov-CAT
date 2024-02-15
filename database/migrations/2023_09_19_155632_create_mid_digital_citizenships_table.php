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
        Schema::create('mid_digital_citizenships', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ict9_1');
            $table->string('ict9_2');
            $table->string('ict9_3');
            $table->string('ict10_1');
            $table->string('ict10_2');
            $table->string('ict10_3');
            $table->string('ict11');
            $table->string('ict12');
            $table->string('ict13');
            $table->string('ict14');
            $table->string('ict15_1');
            $table->string('ict15_2');
            $table->string('ict15_3');
            $table->string('ict16');
            $table->foreignId('govofficial_id')->constrained('govofficials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mid_digital_citizenships');
    }
};
