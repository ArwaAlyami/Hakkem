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
        Schema::create('promotion_admins', function (Blueprint $table) {
            $table->unsignedBigInteger('prom_ad_id')->primary();

            $table->foreign('prom_ad_id')->references('id')->on('faculty_members');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promotion_admins');
    }
};
