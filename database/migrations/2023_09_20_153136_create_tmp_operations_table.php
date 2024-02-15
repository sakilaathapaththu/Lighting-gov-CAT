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
        Schema::create('tmp_operations', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('operation_marks');
            $table->string('operation_percentage');
            $table->foreignId('govorganizationdetail_id')->constrained('govorganizationdetails')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tmp_operations');
    }
};
