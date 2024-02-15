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
        Schema::create('deep_technologies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('deep_emerging_technology');
            $table->string('deep_data_management');
            $table->string('deep_delivery_governance');
            $table->string('deep_connectivity');
            $table->string('deep_security');
            $table->string('deep_technology_architecture');
            $table->string('deep_data_governance');
            $table->string('deep_data_engineering');
            $table->string('deep_interoperability');
            $table->string('deep_application');
            $table->string('overall');
            $table->foreignId('govofficial_id')->constrained('govofficials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('deep_technologies');
    }
};
