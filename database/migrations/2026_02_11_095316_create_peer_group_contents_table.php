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
        Schema::create('peer_group_contents', function (Blueprint $table) {
            $table->id();
            $table->string('title');    
            $table->text('description');
            $table->text('description_1');

            $table->text('table');

            $table->string('title_2');    
            $table->text('description_2');

            $table->text('img_card1');    
            $table->text('desc_card1');
            $table->text('desc_card2');    
            $table->text('img_card2');

            $table->string('title_t1');    
            $table->string('title_t2');    
            $table->string('title_t3');    
            $table->string('title_t4');    
            $table->string('title_t5');    
            $table->text('desc_t1');
            $table->text('desc_t2');
            $table->text('desc_t3');
            $table->text('desc_t4');
            $table->text('desc_t5');

            $table->string('title_3');    
            $table->text('description_3');

            $table->string('title_c1');  
            $table->string('title_c2');  
            $table->string('title_c3');  
            $table->string('title_c4');  
            $table->string('title_c5');  
            $table->string('title_c6');  
            $table->text('desc_c1');
            $table->text('desc_c2');
            $table->text('desc_c3');
            $table->text('desc_c4');
            $table->text('desc_c5');
            $table->text('desc_c6');

            $table->string('title_4');  
            $table->text('description_4');

            $table->string('title_g1');  
            $table->string('title_g2');  
            $table->string('title_g3');  
            $table->string('title_g4');  
            $table->string('title_g5');  
            $table->string('title_g6');  
            $table->text('desc_g1');
            $table->text('desc_g2');
            $table->text('desc_g3');
            $table->text('desc_g4');
            $table->text('desc_g5');
            $table->text('desc_g6');


            $table->timestamp('created_at')->useCurrent();
            $table->timestamp('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peer_group_contents');
    }
};
