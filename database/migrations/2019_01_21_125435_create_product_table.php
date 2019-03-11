<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('category_id');
            $table->integer('main_img');
            $table->string('cost');
            $table->string('new_cost')->nullable();
            $table->boolean('is_hot')->default(false);
            $table->boolean('is_new')->default(false);
            $table->string('rating')->default('4');
            $table->string('product_code')->nullable();
            $table->string('availability')->default('In stock');
            $table->text('overview')->nullable();
            $table->text('description')->nullable();
            $table->text('info')->nullable();
            $table->text('reviews')->nullable();
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
        Schema::dropIfExists('product');
    }
}
