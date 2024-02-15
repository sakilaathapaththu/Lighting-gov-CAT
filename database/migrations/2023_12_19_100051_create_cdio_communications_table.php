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
        Schema::create('cdio_communications', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('mgt1');
            $table->string('mgt2');
            $table->string('mgt3');
            $table->string('mgt4');
            $table->string('mgt5');
            $table->string('mgt6');
            $table->string('mgt7');
            $table->foreignId('govofficial_id')->constrained('govofficials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cdio_communications');
    }
};
