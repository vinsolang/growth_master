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
        Schema::create('approaches', function (Blueprint $table) {
            $table->id();

            $table->string('title');              // e.g. "1. It Starts With the Group"
            $table->text('description');          // paragraph text
            $table->string('image');              // image URL or path
            $table->string('button_text')->nullable(); // Learn more...
            // $table->string('button_link')->nullable();
            // $table->integer('order')->default(1);
            $table->boolean('has_background')->default(false); // gray bg or not
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('approaches');
    }
};
