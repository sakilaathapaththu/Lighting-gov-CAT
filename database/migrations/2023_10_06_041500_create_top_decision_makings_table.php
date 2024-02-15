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
        Schema::create('top_decision_makings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('mgt13');
            $table->string('mgt14');
            $table->string('mgt15');
            $table->string('mgt16');
            $table->string('mgt17');
            $table->foreignId('govofficial_id')->constrained('govofficials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('top_decision_makings');
    }
};
