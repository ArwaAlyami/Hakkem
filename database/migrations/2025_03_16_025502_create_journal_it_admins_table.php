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
        Schema::create('journal_it_admins', function (Blueprint $table) {

            $table->id();
            $table->string('f_name')->nullable(false);
            $table->string('l_name')->nullable(false);
            $table->string('email')->unique();
            $table->unsignedBigInteger('jour_id');

            $table->foreign('jour_id')->references('id')->on('journals');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('journal_it_admins');
    }
};
