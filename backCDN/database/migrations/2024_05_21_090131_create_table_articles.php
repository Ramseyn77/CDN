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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('numero');
            $table->mediumText('contenu') ;
            $table->foreignId('section_id')->nullable()->constrained()->onDelete('cascade') ;
            $table->foreignId('chapitre_id')->nullable()->constrained()->onDelete('cascade') ;
            $table->foreignId('titre_id')->constrained()->onDelete('cascade') ;
            $table->softDeletes() ;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
