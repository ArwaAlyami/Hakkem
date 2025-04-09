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
        Schema::create('faculty_members', function (Blueprint $table) {
            $table->id();
            $table->string('pass')->nullable(false);
            $table->string('f_name')->nullable(false);
            $table->string('l_name')->nullable(false);
            $table->integer('phone')->nullable(false);
            $table->string('department')->nullable();
            $table->unsignedBigInteger('IBAN')->unique()->nullable();
            $table->string('bachelors')->nullable(false);
            $table->string('masters')->nullable();
            $table->string('phd')->nullable();
            $table->string('Academic_quali')->nullable(false);
            $table->string('email')->unique();
            $table->string('rank')->nullable(false);
            $table->string('User_Type')->nullable(false);

            $table->float('Feedback_quality')->nullable();
            $table->float('accuracy')->nullable();
            $table->float('response_speed')->nullable();

            $table->unsignedBigInteger('uni_id');
            $table->string('agent_name');

            $table->foreign('uni_id')->references('id')->on('universities');
            $table->foreign('agent_name')->references('agent_name')->on('agents');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('faculty_members');
    }
};
