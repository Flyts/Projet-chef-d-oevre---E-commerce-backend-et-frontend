<?php

use App\Models\Tailles;
use Illuminate\Database\Seeder;

class TaillesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//VETEMENTS
        Tailles::create([
        	'name' => 'XS',
        ]);

        Tailles::create([
        	'name' => 'S',
        ]);

        Tailles::create([
        	'name' => 'M',
        ]);

        Tailles::create([
        	'name' => 'L',
        ]);

        Tailles::create([
        	'name' => 'XL',
        ]);

        Tailles::create([
        	'name' => 'XXL',
        ]);
//#FIN VETEMENTS


//CHAUSSURES
        Tailles::create([
        	'name' => '36',
        ]);

        Tailles::create([
        	'name' => '40',
        ]);

        Tailles::create([
            'name' => '41',
        ]);

        Tailles::create([
            'name' => '42',
        ]);
//#FIN CHAUSSURES
    }
}
