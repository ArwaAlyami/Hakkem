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
        Schema::create('promotion_requests', function (Blueprint $table) {
            $table->id();
            $table->integer('researches_no')->nullable(false);
            $table->string('state')->nullable(false);
            $table->dateTime('deadline')->nullable(false);
            $table->dateTime('start_date')->nullable(false);
            $table->dateTime('end_date')->nullable();
            $table->float('price')->nullable(false);

            $table->unsignedBigInteger('prom_ad_id');
            $table->foreign('prom_ad_id')->references('prom_ad_id')->on('promotion_admins');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promotion_requests');
    }
};
