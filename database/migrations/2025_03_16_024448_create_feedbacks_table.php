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
        Schema::create('feedbacks', function (Blueprint $table) {
            $table->id();
            $table->integer('degree')->nullable(false);
         
            $table->unsignedBigInteger('pro_req_id')->nullable();
            $table->unsignedBigInteger('rev_req_id')->nullable();
            $table->unsignedBigInteger('research_id')->nullable();
            
            $table->unsignedBigInteger('fm_id')->nullable();
            $table->unsignedBigInteger('res_id')->nullable();
            $table->unsignedBigInteger('rev_id')->nullable();
         
                    $table->foreign('pro_req_id')->references('id')->on('promotion_requests');
                    $table->foreign('rev_req_id')->references('id')->on('review_requests');         
                    $table->foreign('research_id')->references('id')->on('researches');         
                    $table->foreign('fm_id')->references('id')->on('faculty_members');         
                    $table->foreign('res_id')->references('id')->on('ind_researchers');
                    $table->foreign('rev_id')->references('id')->on('ind_reviewers');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feedbacks');
    }
};
