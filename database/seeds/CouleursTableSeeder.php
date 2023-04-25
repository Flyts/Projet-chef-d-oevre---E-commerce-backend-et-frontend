<?php

use App\Models\Couleurs;
use Illuminate\Database\Seeder;

class CouleursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Couleurs::create([
        	'name' => 'Bleu',
        ]);

        Couleurs::create([
        	'name' => 'Blanc',
        ]);

        Couleurs::create([
        	'name' => 'Multi',
        ]);

        Couleurs::create([
        	'name' => 'Beige',
        ]);

        Couleurs::create([
        	'name' => 'Doré',
        ]);

        Couleurs::create([
            'name' => 'Noir',
        ]);

        Couleurs::create([
            'name' => 'Gris',
        ]);

        Couleurs::create([
            'name' => 'Argenté',
        ]);

        Couleurs::create([
            'name' => 'Marron',
        ]);

        Couleurs::create([
            'name' => 'Kaki',
        ]);

        Couleurs::create([
            'name' => 'Rose',
        ]);

        Couleurs::create([
            'name' => 'Rouge',
        ]);

        Couleurs::create([
            'name' => ' Fauve',
        ]);
    }
}
