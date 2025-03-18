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
            $table->longText('full_assessment')->nullable(false);
            $table->longText('abstract')->nullable(false);
            $table->string('title')->nullable(false);
            
            $table->unsignedBigInteger('research_id');
            $table->string('agent_name');
         
            $table->foreign('agent_name')->references('agent_name')->on('agents');
            $table->foreign('research_id')->references('id')->on('researches');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('preliminary_assessments');
    }
};
