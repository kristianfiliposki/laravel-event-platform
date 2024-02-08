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
        Schema::create('_movies__users', function (Blueprint $table) {

            $table->UnsignedBigInteger('movie_id');
            $table->foreign('movie_id')
                  ->references('id')
                  ->on('movies')
                  ->onDelete('CASCADE');


            $table->UnsignedBigInteger('users_id');
            $table->foreign('users_id')
                  ->references('id')
                  ->on('users')
                  ->onDelete('CASCADE');


/*                   $table->foreignId('movie_id')->constrained()->cascadeOnDelete();
                  $table->foreignId('tag_id')->constrained()->cascadeOnDelete(); */
      

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_movies__users');
    }
};
