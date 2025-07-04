<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{
    public function up(): void
    {
        Schema::create('characters',function (Blueprint $table){
            $table->id();
            $table->string('name');
            $table->string('status')->nullable();
            $table->string('species')->nullable();
            $table->string('type')->nullable();
            $table->string('gender')->nullable();
            $table->string('origin')->nullable();
            $table->string('location')->nullable();
            $table->string('image')->nullable();
            $table->json('episode')->nullable();
            $table->string('url')->nullable();
            $table->timestamp('created')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('characters');
    }
}
