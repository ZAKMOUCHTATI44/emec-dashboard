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
        Schema::create('votes', function (Blueprint $table) {
            $table->id();
            $table->string('community_size',5); // Taille de la communauté
            $table->string('engagement_rate',5);  // Taux d'engagement (en pourcentage, par exemple 12.5 pour 12.5%)
            $table->string('content_relevance',5);
            $table->string('notes')->nullable();
            $table->foreignId('user_id')->constrained();
            $table->foreignId('influenceurs_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('votes');
    }
};
