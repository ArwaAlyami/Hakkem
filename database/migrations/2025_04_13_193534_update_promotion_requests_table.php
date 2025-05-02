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
        Schema::table('promotion_requests', function (Blueprint $table) {
            $table->renameColumn('researches_no', 'research_id');
        });
    }

    public function down(): void
    {
        Schema::table('promotion_requests', function (Blueprint $table) {
            $table->renameColumn('research_id', 'researches_no');
        });
    }

};
