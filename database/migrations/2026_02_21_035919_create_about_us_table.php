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
        Schema::create('about_us', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('desc');

            $table->text('title_v');
            $table->text('desc_v');

            $table->text('title_m');
            $table->text('desc_m');

            $table->text('title_c');
            $table->text('sub_t_1');
            $table->text('sub_t_2');
            $table->text('sub_t_3');
            $table->text('sub_t_4');
            $table->text('sub_t_5');
            $table->text('text_1');
            $table->text('text_2');
            $table->text('text_3');
            $table->text('text_4');
            $table->text('text_5');

            $table->text('title_1');
            $table->text('desc_2');



            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('about_us');
    }
};
