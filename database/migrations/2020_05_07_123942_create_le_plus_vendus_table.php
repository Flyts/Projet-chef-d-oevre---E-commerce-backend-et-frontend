<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLePlusVendusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('le_plus_vendus', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name_produt');
            $table->unsignedBigInteger('how_many');
            $table->unsignedBigInteger('produt_id');
            $table->string('slug');
            $table->integer('price');
            $table->string('image');
            $table->dateTime('create_at')->default(DB::raw('CURRENT_TIMESTAMP'));
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('le_plus_vendus');
    }
}
