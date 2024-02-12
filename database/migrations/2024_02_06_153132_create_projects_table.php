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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();

            $table->string('title', 60);
            $table->string('slug', 100)->nullable();
            $table->string('author', 40);
            $table->text('description')->nullable();
            $table->date('creation_date')->nullable();
            $table->date('last_update')->nullable();
            $table->string('contributors', 300)->nullable();
            $table->string('lang', 60)->nullable();
            $table->text('link_github')->nullable();
        
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
