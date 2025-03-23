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
        Schema::create('ind_reviewers', function (Blueprint $table) {

            $table->id();
            $table->string('f_name')->nullable(false);
            $table->string('l_name')->nullable(false);
            $table->string('pass')->nullable(false);
            $table->integer('phone')->nullable(false);
            $table->unsignedBigInteger('IBAN')->unique(); 
            $table->string('academic_quali')->nullable(false);
            $table->string('bachelors')->nullable(false);
            $table->string('masters')->nullable();
            $table->string('phd')->nullable();
            $table->string('specialization')->nullable(false);
            $table->float('response_speed')->nullable();
            $table->float('accuracy')->nullable();
            $table->float('feedback_quality')->nullable();
            $table->string('job')->nullable(false);
            $table->string('email')->unique();

            $table->unsignedBigInteger('asso_ed_id')->nullable();
            $table->string('agent_name');
         
            $table->foreign('asso_ed_id')->references('id')->on('associated_editors');
            $table->foreign('agent_name')->references('agent_name')->on('agents');
 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ind_reviewers');
    }
};
