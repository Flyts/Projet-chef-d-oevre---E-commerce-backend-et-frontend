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
            $table->bigIncrements('id');
            $table->string('titre')->unique();
            $table->string('slug')->unique();
            $table->string('subtitle');
            $table->text('description');
            $table->integer('price');
            $table->integer('solde')->nullable();
            $table->integer('stock')->default(0);
            $table->string('image');
            $table->text('other_images')->nullable();
            $table->integer('category_id');
            $table->integer('sous_category_id')->nullable();
            $table->integer('other_sous_category_id')->nullable();
            $table->integer('marque_id')->nullable();
            $table->integer('couleur_id')->nullable();
            $table->integer('taille_id')->nullable();
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
        Schema::dropIfExists('products');
    }
}
