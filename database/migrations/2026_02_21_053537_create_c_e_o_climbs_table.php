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
        Schema::create('c_e_o_climbs', function (Blueprint $table) {
            $table->id();
            $table->text('description');
            $table->text('title');

            $table->text('title_card_1');
            $table->text('desc_card_1');
            $table->text('img_card_1');

            $table->text('title_card_2');
            $table->text('desc_card_2');
            $table->text('img_card_2');

            
            $table->text('title_card_3');
            $table->text('desc_card_3');
            $table->text('img_card_3');

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('c_e_o_climbs');
    }
};
