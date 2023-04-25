<?php

use App\Models\Marques;
use Illuminate\Database\Seeder;

class MarquesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Marques::create([
        	'name' => 'Autre Marque',
        ]);

        Marques::create([
        	'name' => 'Adidas',
        ]);

        Marques::create([
            'name' => 'Bershka',
        ]);

        Marques::create([
            'name' => 'Hugo',
        ]);

        Marques::create([
            'name' => 'Tommy Hilfiger',
        ]);

        Marques::create([
            'name' => 'Puma',
        ]);

        Marques::create([
            'name' => 'Oxford',
        ]);

        Marques::create([
            'name' => 'Calvin Klein',
        ]);

        Marques::create([
            'name' => 'Emporio Armani',
        ]);

        Marques::create([
            'name' => 'Boss',
        ]);

        Marques::create([
            'name' => 'Ted Baker',
        ]);
    }
}
