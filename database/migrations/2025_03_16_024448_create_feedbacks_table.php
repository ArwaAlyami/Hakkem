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
            $table->longText('full_feed')->nullable(false);
         
            $table->unsignedBigInteger('pro_req_id')->nullable();
            $table->unsignedBigInteger('rev_req_id')->nullable();
            $table->unsignedBigInteger('pub_req_id')->nullable();
            $table->unsignedBigInteger('research_id')->nullable();
            $table->unsignedBigInteger('editor_id')->nullable();
            $table->unsignedBigInteger('asso_ed_id')->nullable();
            $table->unsignedBigInteger('fm_rev_id')->nullable();
            $table->unsignedBigInteger('fm_res_id')->nullable();
            $table->unsignedBigInteger('prom_ad_id')->nullable();
            $table->unsignedBigInteger('res_id')->nullable();
            $table->unsignedBigInteger('rev_id')->nullable();
         
                    $table->foreign('pro_req_id')->references('id')->on('promotion_requests');
         
                    $table->foreign('rev_req_id')->references('id')->on('review_requests');
         
                    $table->foreign('pub_req_id')->references('id')->on('publish_requests');
         
                    $table->foreign('research_id')->references('id')->on('researches');
         
                    $table->foreign('editor_id')->references('id')->on('editor_chiefs');
         
                    $table->foreign('asso_ed_id')->references('id')->on('associated_editors');
         
                    $table->foreign('fm_rev_id')->references('fm_rev_id')->on('fm_reviewers');
         
                    $table->foreign('fm_res_id')->references('fm_res_id')->on('fm_researchers');
         
                    $table->foreign('prom_ad_id')->references('prom_ad_id')->on('promotion_admins');
         
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
