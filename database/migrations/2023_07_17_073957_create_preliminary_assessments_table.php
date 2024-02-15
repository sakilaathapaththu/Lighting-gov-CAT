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
        Schema::create('preliminary_assessments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('ans_Q1');
            $table->string('ans_Q2');
            $table->string('ans_Q3');
            $table->string('ans_Q4');
            $table->string('ans_Q5');
            $table->string('ans_Q6');
            $table->string('ans_Q7');
            $table->string('ans_Q9');
            $table->string('ans_Q10');
            $table->string('ans_Q11');
            $table->string('ans_Q12');
            $table->string('ans_Q13');
            $table->string('ans_Q14');
            $table->string('ans_Q15');
            $table->string('ans_Q16');
            $table->string('ans_Q17');
            $table->string('ans_Q18');
            $table->string('ans_Q19');
            $table->string('ans_Q20');
            $table->string('ans_Q21');
            $table->string('ans_Q23');
            $table->string('ans_Q24');
            $table->string('ans_Q25');
            $table->string('ans_Q26');
            $table->string('ans_Q27');
            $table->string('ans_Q28');
            $table->string('ans_Q29');
            $table->string('ans_Q30');
            $table->string('ans_Q31');
            $table->string('ans_Q32');
            $table->foreignId('govorganizationdetail_id')->constrained('govorganizationdetails');
            });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preliminary_assessment');
    }
};
