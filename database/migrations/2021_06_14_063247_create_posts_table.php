<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('categories_id')->constrained('categories');    
            $table->string('image');
            $table->string('content', 1000);
            $table->integer('price');
            $table->foreignId('print_materials_id')->constrained('print_materials');    
            $table->foreignId('print_types_id')->constrained('print_types');    
            $table->foreignId('carousel_rows_id')->constrained('carousel_rows');    
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
