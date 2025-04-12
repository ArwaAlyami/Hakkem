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
        Schema::create('researches', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable(false);
            $table->longText('abstract')->nullable(false);
            $table->mediumText('DOI')->nullable();
            $table->string('keywords')->nullable(false);
            $table->string('field')->nullable(false);
         
            $table->unsignedBigInteger('pro_req_id')->nullable();
            $table->unsignedBigInteger('fm_id')->nullable();
            $table->unsignedBigInteger('res_id')->nullable();
            $table->unsignedBigInteger('rev_id')->nullable();
         
                    $table->foreign('pro_req_id')->references('id')->on('promotion_requests');         
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
        Schema::dropIfExists('researches');
    }
};
