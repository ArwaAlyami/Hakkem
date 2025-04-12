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
            Schema::create('publish_requests', function (Blueprint $table) {
            $table->id();
            $table->string('state')->nullable(false);
            $table->dateTime('start_date')->nullable(false);
            $table->dateTime('end_date')->nullable();

            $table->unsignedBigInteger('res_id')->nullable();
            $table->unsignedBigInteger('jour_id')->nullable();
            $table->unsignedBigInteger('research_id')->nullable();
            $table->unsignedBigInteger('fm_id')->nullable();

            $table->foreign('fm_id')->references('id')->on('faculty_members');
            $table->foreign('research_id')->references('id')->on('researches');
            $table->foreign('res_id')->references('id')->on('ind_researchers');
            $table->foreign('jour_id')->references('id')->on('journals');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publish_requests');
    }
};
