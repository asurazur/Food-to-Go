<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            //$table->unsignedBigInteger('user_id')->default(NULL);
            //$table->unsignedBigInteger('canteen_id')->default(NULL);
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('canteen_id')->constrained('canteens')->onDelete('cascade')->onUpdate('cascade');
            $table->string('product_name');
            $table->string('product_type');
            $table->string('product_description');
            $table->string('product_image');
            $table->float('product_rating')->default(0.0);
            $table->integer('rating_sum')->default(0);
            $table->integer('rating_count')->default(0);
            $table->float('price');
            $table->timestamps();
            //$table->foreign('canteen_id')->references('id')->on('canteens')->onDelete('cascade')->onUpdate('cascade');
            
            //$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
