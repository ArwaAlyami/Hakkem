<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('review_forms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('research_id')->constrained()->onDelete('cascade');
            $table->foreignId('reviewer_id')->constrained('users')->onDelete('cascade');

            $table->json('criteria'); 
            $table->text('notes')->nullable();
            $table->integer('total_score')->nullable();

            $table->timestamps();
        });
    }




    /**
     * Reverse the migrations.
     */

};
