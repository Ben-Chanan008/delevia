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
        Schema::create('givers_profile', function (Blueprint $table) {
            $table->id();
            $table->foreignId('giver_id')->references('id')->on('users')->cascadeOnDelete();
            $table->string('location')->nullable();
            $table->string('profile_pic')->nullable();
            $table->text('about')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('givers_profile');
    }
};