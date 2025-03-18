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
        Schema::create('fm_researchers', function (Blueprint $table) {
            $table->unsignedBigInteger('fm_res_id')->primary();
            $table->string('department')->nullable(false);
            $table->unsignedBigInteger('pro_req_id')->nullable();
         
            $table->foreign('pro_req_id')->references('id')->on('promotion_requests');
            $table->foreign('fm_res_id')->references('id')->on('faculty_members');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fm_researchers');
    }
};
