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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->references('id')->on('users')->cascadeOnDelete();
            $table->string('title');
            $table->string('tags');
            $table->foreignId('company_id')->references('id')->on('company')->cascadeOnDelete();
            $table->string('description');
            $table->string('degree_req');
            $table->string('experience');
            $table->string('salary');
            $table->string('rate');
            $table->string('currency');
            $table->string('job_type');
            $table->string('needed_skills');
            $table->string('location');
            $table->date('date_of_post');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
