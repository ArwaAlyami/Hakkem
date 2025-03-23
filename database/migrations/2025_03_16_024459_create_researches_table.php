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
            $table->string('specialization')->nullable(false);
         
            $table->unsignedBigInteger('pro_req_id');
            $table->unsignedBigInteger('fm_res_id');
            $table->unsignedBigInteger('prom_ad_id');
            $table->unsignedBigInteger('fm_rev_id');
            $table->unsignedBigInteger('editor_id');
            $table->unsignedBigInteger('asso_ed_id');
            $table->unsignedBigInteger('res_id');
            $table->unsignedBigInteger('rev_id');
         
                    $table->foreign('pro_req_id')->references('id')->on('promotion_requests');
         
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
        Schema::dropIfExists('researches');
    }
};
