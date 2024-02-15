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
        Schema::create('mid_initiatives', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('dg26_1');
            $table->string('dg26_2');
            $table->string('dg26_3');
            $table->string('dg27_1');
            $table->string('dg27_2');
            $table->string('dg27_3');
            $table->string('dg28');
            $table->string('dg29');
            $table->string('dg30');
            $table->string('dg31');
            $table->string('dg32');
            $table->string('dg33');
            $table->string('dg34');
            $table->string('dg35_1');
            $table->string('dg35_2');
            $table->string('dg35_3');
            $table->string('dg35_4');
            $table->string('dg36_1');
            $table->string('dg36_2');
            $table->string('dg36_3');
            $table->string('dg36_4');
            $table->string('dg37');
            $table->foreignId('govofficial_id')->constrained('govofficials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mid_initiatives');
    }
};
