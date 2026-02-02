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
        Schema::create('about_cards', function (Blueprint $table) {
            $table->id();
    $table->foreignId('about_section_id')->constrained()->cascadeOnDelete();
    $table->string('icon')->nullable();
    $table->string('title');
    $table->text('description');
     $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_cards');
    }
};
