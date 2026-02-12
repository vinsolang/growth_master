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
        Schema::create('why_join_growth_masters', function (Blueprint $table) {
            $table->id();
            $table->text('content');
            $table->string('title');
            $table->text('description');
            $table->string('title_1');
            $table->string('description_1');
            $table->text('table');
            $table->text('text');
            $table->string('title_2');
            $table->text('description_3');
            $table->text('img_card_1');
            $table->text('img_card_2');
            $table->text('img_card_3');
            $table->string('title_card_1');
            $table->string('title_card_2');
            $table->string('title_card_3');
            $table->text('desc_card_1');
            $table->text('desc_card_2');
            $table->text('desc_card_3');

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('why_join_growth_masters');
    }
};
