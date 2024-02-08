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
        Schema::create('movie_tag', function (Blueprint $table) {
            
            $table->unsignedBigInteger('tag_id');
            $table  ->foreign('tag_id')
                    ->references('id')
                    ->on('tags')
                    ->onDelete('CASCADE');


            $table->unsignedBigInteger('movie_id');
            $table  ->foreign('movie_id')
                    ->references('id')
                    ->on('movies')
                    ->onDelete('CASCADE');
            
        });
    }

    
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies_tags');
    }
};
