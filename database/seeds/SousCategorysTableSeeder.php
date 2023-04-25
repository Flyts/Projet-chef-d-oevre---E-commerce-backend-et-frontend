<?php

use App\Models\SousCategorys;
use Illuminate\Database\Seeder;

class SousCategorysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

//HOMME
        SousCategorys::create([
        	'name'          => 'Nouveautés',
        	'slug'          => 'nouveautés',
        	'category_slug' => 'hommes',
        	'category_id'   => 1,
        ]);

        SousCategorys::create([
            'name'          => 'vêtements',
            'slug'          => 'vetements',
            'category_slug' => 'hommes',
            'category_id'   => 1,
        ]);

        SousCategorys::create([
            'name'          => 'Chaussures',
            'slug'          => 'chaussures',
            'category_slug' => 'hommes',
            'category_id'   => 1,
        ]);

        SousCategorys::create([
            'name'          => 'Accessoires',
            'slug'          => 'accessoires',
            'category_slug' => 'hommes',
            'category_id'   => 1,
        ]);

//#FIN HOMME

//FEMME
        SousCategorys::create([
            'name'          => 'Nouveautés',
            'slug'          => 'nouveautés',
            'category_slug' => 'femmes',
            'category_id'   => 2,
        ]);

        SousCategorys::create([
            'name'          => 'vêtements',
            'slug'          => 'vetements',
            'category_slug' => 'femmes',
            'category_id'   => 2,
        ]);

        SousCategorys::create([
            'name'          => 'Chaussures',
            'slug'          => 'chaussures',
            'category_slug' => 'femmes',
            'category_id'   => 2,
        ]);

        SousCategorys::create([
            'name'          => 'Accessoires',
            'slug'          => 'accessoires',
            'category_slug' => 'femmes',
            'category_id'   => 2,
        ]);

//#FIN FEMME


// MEUBLE
        // SousCategorys::create([
        //     'name'          => 'Chaises',
        //     'slug'          => 'chaises',
        //     'category_slug' => 'meubles',
        //     'category_id'   => 1,
        // ]);

        // SousCategorys::create([
        //     'name'          => 'Tables',
        //     'slug'          => 'tables',
        //     'category_slug' => 'meubles',
        //     'category_id'   => 1,
        // ]);
//#FIN MEUBLE


// Electoménager
        // SousCategorys::create([
        //     'name'          => 'Tv',
        //     'slug'          => 'tv',
        //     'category_slug' => 'electomenager',
        //     'category_id'   => 2,
        // ]);
//#FIN Electoménager


// High Tech
        // SousCategorys::create([
        //     'name'          => 'Pc',
        //     'slug'          => 'pc',
        //     'category_slug' => 'high-tech',
        //     'category_id'   => 3,
        // ]);
//#FIN High Tech
    }
}
