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
        Schema::create('review_requests', function (Blueprint $table) {
            $table->id();
            $table->string('state')->nullable(false);
            $table->dateTime('start_date')->nullable(false);
            $table->dateTime('end_date')->nullable();
         
            $table->unsignedBigInteger('res_id');
            $table->unsignedBigInteger('rev_id');
            $table->unsignedBigInteger('research_id');
            $table->unsignedBigInteger('fm_res_id');
         
            $table->foreign('fm_res_id')->references('fm_res_id')->on('fm_researchers');
            $table->foreign('research_id')->references('id')->on('researches');
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
        Schema::dropIfExists('review_requests');
    }
};
