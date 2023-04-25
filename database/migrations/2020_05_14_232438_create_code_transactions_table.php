<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCodeTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('code_transactions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('code')->unique(); 
            $table->string('devise'); 
            $table->string('reseau'); 
            $table->integer('montant');
            $table->string('statut')->default('non-utilisé');           
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
        Schema::dropIfExists('code_transactions');
    }
}
