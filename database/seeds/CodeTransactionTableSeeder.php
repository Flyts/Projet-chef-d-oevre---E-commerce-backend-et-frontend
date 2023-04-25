<?php

use Illuminate\Database\Seeder;
use App\Models\Code_transaction;

class CodeTransactionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Code_transaction::create([
        	'code'    => '7A89E54BL2',
        	'devise'  => '$',
            'reseau'  => 'vodacom',
            'montant' => 1000 * 100,
        ]);


        Code_transaction::create([
        	'code'    => '2ED542A89R',
        	'devise'  => '$',
            'reseau'  => 'vodacom',
            'montant' => 500 * 100,
        ]);


        Code_transaction::create([
        	'code'    => '5HJ6417KL2',
        	'devise'  => '$',
            'reseau'  => 'vodacom',
            'montant' => 200 * 100,
        ]);


        Code_transaction::create([
        	'code'    => 'A587FG412H',
        	'devise'  => 'Fc',
            'reseau'  => 'vodacom',
            'montant' => 310000 * 100,
        ]);
    }
}
