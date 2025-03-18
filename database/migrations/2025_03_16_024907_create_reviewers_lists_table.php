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
        Schema::create('reviewers_lists', function (Blueprint $table) {
            $table->id();
            $table->string('specialization')->nullable(false);

            $table->string('agent_name');
            $table->foreign('agent_name')->references('agent_name')->on('agents');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reviewers_lists');
    }
};
