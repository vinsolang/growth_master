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
        Schema::create('home_contents', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description');

            $table->string('title_card_1');
            $table->string('title_card_2');
            $table->string('title_card_3');
            $table->string('title_card_4');
            $table->string('title_card_5');
            $table->string('title_card_6');
            $table->text('desc_card_1');
            $table->text('desc_card_2');
            $table->text('desc_card_3');
            $table->text('desc_card_4');
            $table->text('desc_card_5');
            $table->text('desc_card_6');

            $table->string('title_1');
            $table->string('description_1');
            $table->text('image');

           
            $table->string('sub_title_event');

            $table->string('title_event_1');
            $table->string('title_event_2');
            $table->string('title_event_3');
            $table->text('desc_card_event_1');
            $table->text('desc_card_event_2');
            $table->text('desc_card_event_3');
            $table->text('img_card_event_1');
            $table->text('img_card_event_2');
            $table->text('img_card_event_3');
            

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_contents');
    }
};
