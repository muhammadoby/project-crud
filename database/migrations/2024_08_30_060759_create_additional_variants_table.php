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
        Schema::create('additional_variants', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_additional')->constrained('additionals')->onDelete('cascade');
            $table->foreignId('id_variant')->constrained('variants')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('additional_variants');
    }
};
