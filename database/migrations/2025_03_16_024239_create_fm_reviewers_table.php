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
        Schema::create('fm_reviewers', function (Blueprint $table) {
            $table->unsignedBigInteger('fm_rev_id')->primary();
            $table->float('response_speed')->nullable();
            $table->float('feedback_quality')->nullable();
            $table->float('accuracy')->nullable();
            $table->string('department')->nullable(false);
            $table->unsignedBigInteger('prom_ad_id')->nullable();
         
            $table->foreign(columns: 'fm_rev_id')->references('id')->on('faculty_members');
            $table->foreign(columns: 'prom_ad_id')->references('prom_ad_id')->on('promotion_admins');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fm_reviewers');
    }
};
