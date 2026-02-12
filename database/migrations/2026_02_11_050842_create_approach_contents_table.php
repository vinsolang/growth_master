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
        Schema::create('approach_contents', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->text('content');

            $table->string('title_on_card');
    
            $table->string('title_card_1');
            $table->string('title_card_2');
            $table->string('title_card_3');
            $table->text('desc_card_1');
            $table->text('desc_card_2');
            $table->text('desc_card_3');

            $table->string('title_1');
            $table->text('content_1');

            $table->string('title_2');
            $table->text('content_2');

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('approach_contents');
    }
};
