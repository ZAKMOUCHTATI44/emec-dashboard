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
        Schema::create('influenceurs', function (Blueprint $table) {
            $table->id();
            $table->string('fullName');
            $table->string('instagram_link')->nullable();
            $table->string('photo')->nullable();
            $table->string('file')->nullable();
            $table->foreignId('category_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('influenceurs');
    }
};
