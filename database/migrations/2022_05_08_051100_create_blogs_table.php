<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->bigIncrements('id')->index();
            $table->string('title');
            $table->string('slug');
            $table->string('images');
            $table->unsignedBigInteger('admin_id')->unique()->nullable();
            $table->longText('contents');
            $table->tinyInteger('status')->default(1)->comment('1:active, 2:draf');
            $table->timestamps();
            $table->foreign('admin_id')->references('id')->on('admins')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs');
    }
}
