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
        Schema::create('role_access', function (Blueprint $table) {
            $table->id();
            $table->foreignId('role_id')->references('id')->on('roles')->cascadeOnDelete();
            $table->foreignId('module_id')->references('id')->on('modules')->cascadeOnDelete();
            $table->boolean('has_create');
            $table->boolean('has_edit');
            $table->boolean('has_delete');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('role_access');
    }
};
