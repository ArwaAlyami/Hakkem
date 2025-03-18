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
        Schema::create('names_of_reviewers', function (Blueprint $table) {
            $table->unsignedBigInteger('list_id');
            $table->string('name_of_reviewer')->nullable(false);
            $table->string('university')->nullable();
            $table->string('department')->nullable();
            $table->string('country')->nullable(false);
            $table->string('city')->nullable(false);
            $table->string('email')->unique;
            $table->integer('phone')->nullable();
         
            $table->foreign('list_id')->references('id')->on('reviewers_lists');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('names_of_reviewers');
    }
};
