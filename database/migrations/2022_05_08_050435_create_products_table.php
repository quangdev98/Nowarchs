<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->bigIncrements('id')->index();
            $table->string('name');
            $table->string('slug');
            $table->string('images');
            $table->integer('price');
            
            $table->longText('contents');
            $table->tinyInteger('status')->default(1)->comment('1:active, 2:draf');
            $table->timestamps();
            
        });

        Schema::table('products', function ($table) {
            $table->unsignedBigInteger('category_id')->unique();
            $table->foreign('category_id')->references('id')->on('categories')->onDelete("cascade");
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
