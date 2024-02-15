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
        Schema::create('mid_stakeholders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('mgt21');
            $table->string('mgt22');
            $table->string('mgt23_1');
            $table->string('mgt23_2');
            $table->string('mgt23_3');
            $table->string('mgt23_4');
            $table->string('mgt24_1');
            $table->string('mgt24_2');
            $table->string('mgt24_3');
            $table->string('mgt25_1');
            $table->string('mgt25_2');
            $table->string('mgt25_3');
            $table->string('mgt25_4');
            $table->string('mgt26');
            $table->string('mgt27');
            $table->string('mgt28');
            $table->string('mgt29');
            $table->foreignId('govofficial_id')->constrained('govofficials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mid_stakeholders');
    }
};
