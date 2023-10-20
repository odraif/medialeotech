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
        Schema::create('blog', function (Blueprint $table) {
            $table->id();
            $table->foreignId('employeeid')->nullable(false);
            $table->string('title')->nullable(false);
            $table->text('content')->nullable(false);
            $table->text('excerpt')->nullable(false);
            $table->string('tags')->nullable();
            $table->string('categories')->nullable();;
            $table->string('thumbnail')->nullable(false);
            $table->tinyInteger('featured');
            $table->string('status')->nullable(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('blog');
    }
};
