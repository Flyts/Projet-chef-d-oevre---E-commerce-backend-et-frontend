<?php

use App\Models\Categorys;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Categorys::create([
        // 	'name' => 'Meubles',
        // 	'slug' => 'meubles',
        //     'icon' => 'bed',
        // ]);


        // Categorys::create([
        // 	'name' => 'Electoménager',
        // 	'slug' => 'electomenager',
        //     'icon' => 'plug',
        // ]);


        // Categorys::create([
        // 	'name' => 'High Tech',
        // 	'slug' => 'high-tech',
        //     'icon' => 'laptop',
        // ]);


        // Categorys::create([
        //     'name' => 'Accessoires Informatique',
        //     'slug' => 'accessoires-informatique',
        //     'icon' => 'hdd-o',
        // ]);


        // Categorys::create([
        // 	'name' => 'Bijoux & Montres',
        // 	'slug' => 'bijoux-et-montres',
        //     'icon' => 'diamond',
        // ]);

        Categorys::create([
            'name' => 'Hommes',
            'slug' => 'hommes',
            'icon' => 'male',
        ]);

        Categorys::create([
            'name' => 'Femmes',
            'slug' => 'femmes',
            'icon' => 'female',
        ]);

    }
}
