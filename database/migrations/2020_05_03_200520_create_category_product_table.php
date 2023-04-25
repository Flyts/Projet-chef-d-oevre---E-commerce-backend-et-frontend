<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categorys_products', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('categorys_id');
            $table->foreign('categorys_id')
                  ->references('id')
                  ->on('categories')
                  ->onDelete('cascade');

            $table->unsignedBigInteger('products_id');
            $table->foreign('products_id')
                  ->references('id')
                  ->on('products')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('categorys_products');
    }
}
