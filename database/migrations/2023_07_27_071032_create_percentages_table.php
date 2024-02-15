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
        Schema::create('percentages', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('customer');
            $table->string('strategy');
            $table->string('technology');
            $table->string('operation');
            $table->string('culture');
            $table->string('overall');
            $table->foreignId('govorganizationdetail_id')->constrained('govorganizationdetails')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('percentages');
    }
};
