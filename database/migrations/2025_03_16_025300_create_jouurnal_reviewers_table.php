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
        Schema::create('jouurnal_reviewers', function (Blueprint $table) {
            $table->unsignedBigInteger('rev_id');
            $table->unsignedBigInteger('jour_id');
         
            $table->foreign('rev_id')->references('id')->on('ind_reviewers');
            $table->foreign('jour_id')->references('id')->on('journals');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jouurnal_reviewers');
    }
};
