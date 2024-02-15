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
        Schema::create('cdio_human_resources', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('mgt28');
            $table->string('mgt29');
            $table->string('mgt30');
            $table->string('mgt31');
            $table->string('mgt32');
            $table->string('mgt33');
            $table->string('mgt34');
            $table->foreignId('govofficial_id')->constrained('govofficials')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cdio_human_resources');
    }
};
