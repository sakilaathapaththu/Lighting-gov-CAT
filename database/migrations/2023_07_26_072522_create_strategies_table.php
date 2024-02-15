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
        Schema::create('strategies', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('brand_management');
            $table->string('ecosystem_management');
            $table->string('finance');
            $table->string('market_intelligence');
            $table->string('strategic_management');
            $table->string('buisiness_assuarance');
            $table->string('policy');
            $table->string('invention');
            $table->foreignId('govorganizationdetail_id')->constrained('govorganizationdetails')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('strategies');
    }
};
