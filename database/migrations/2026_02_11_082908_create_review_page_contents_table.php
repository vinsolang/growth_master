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
        Schema::create('review_page_contents', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');

            $table->string('title_card_1');
            $table->text('desc_card_1');
            $table->string('name_card_1');
            $table->text('positioin_card_1');

            $table->string('title_card_2');
            $table->text('desc_card_2');
            $table->string('name_card_2');
            $table->text('positioin_card_2');
            $table->text('profile_card_2');

            $table->string('title_card_3');
            $table->text('desc_card_3');
            $table->string('name_card_3');
            $table->text('positioin_card_3');
            $table->text('profile_card_3');

            $table->string('title_card_4');
            $table->text('desc_card_4');
            $table->string('name_card_4');
            $table->text('positioin_card_4');

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('review_page_contents');
    }
};
