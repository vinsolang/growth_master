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
        Schema::create('navbar_menus', function (Blueprint $table) {
            $table->id();
            $table->string('menu_1');
            $table->string('menu_2');
            $table->string('menu_3');
            $table->string('menu_4');
            $table->string('menu_5');
            $table->string('menu_6');
            $table->string('menu_7');
            $table->string('menu_9');
            $table->string('menu_10');
            $table->string('menu_11');
            $table->string('menu_12');
            $table->string('menu_13');
            $table->string('menu_14');
            $table->string('menu_15');
            $table->string('menu_16');
            $table->string('menu_17');
            $table->string('menu_18');
            $table->string('menu_19');

            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('navbar_menus');
    }
};
