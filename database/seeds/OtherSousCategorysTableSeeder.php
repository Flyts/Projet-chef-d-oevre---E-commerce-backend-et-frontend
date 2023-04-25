<?php

use App\Models\OtherSousCategorys;
use Illuminate\Database\Seeder;

class OtherSousCategorysTableSeeder extends Seeder
{

    public function run()
    {
//HOMME
	//VÊTEMENTS
        OtherSousCategorys::create([
        	'name'              => 'Chaussettes',
        	'slug'              => 'chaussettes-homme',
        	'souscategory_slug' => 'vetements',
        	'souscategory_id'   => 2,
        ]);

        OtherSousCategorys::create([
            'name'          => 'Chemises',
            'slug'          => 'chemises-homme',
            'souscategory_slug' => 'vetements',
            'souscategory_id'   => 2,
        ]);

        OtherSousCategorys::create([
            'name'          => 'Costumes',
            'slug'          => 'costumes-homme',
            'souscategory_slug' => 'vetements',
            'souscategory_id'   => 2,
        ]);

        OtherSousCategorys::create([
            'name'          => 'Ensembles',
            'slug'          => 'ensembles-homme',
            'souscategory_slug' => 'vetements',
            'souscategory_id'   => 2,
        ]);

        OtherSousCategorys::create([
            'name'          => 'Jeans',
            'slug'          => 'jeans-homme',
            'souscategory_slug' => 'vetements',
            'souscategory_id'   => 2,
        ]);

        OtherSousCategorys::create([
            'name'          => 'Joggers',
            'slug'          => 'joggers-homme',
            'souscategory_slug' => 'vetements',
            'souscategory_id'   => 2,
        ]);

        OtherSousCategorys::create([
            'name'          => 'Pantalons',
            'slug'          => 'pantalons-homme',
            'souscategory_slug' => 'vetements',
            'souscategory_id'   => 2,
        ]);

        OtherSousCategorys::create([
            'name'          => 'Polos',
            'slug'          => 'polos-homme',
            'souscategory_slug' => 'vetements',
            'souscategory_id'   => 2,
        ]);

        OtherSousCategorys::create([
            'name'          => 'Pulls',
            'slug'          => 'pulls-homme',
            'souscategory_slug' => 'vetements',
            'souscategory_id'   => 2,
        ]);

        OtherSousCategorys::create([
            'name'          => 'Shorts',
            'slug'          => 'shorts-homme',
            'souscategory_slug' => 'vetements',
            'souscategory_id'   => 2,
        ]);

        OtherSousCategorys::create([
            'name'          => 'Sous vêtements',
            'slug'          => 'sous-vetements-homme',
            'souscategory_slug' => 'vetements',
            'souscategory_id'   => 2,
        ]);

        OtherSousCategorys::create([
            'name'          => 'Survêtements',
            'slug'          => 'survetements-homme',
            'souscategory_slug' => 'vetements',
            'souscategory_id'   => 2,
        ]);

        OtherSousCategorys::create([
            'name'          => 'T-shirts et débardeurs',
            'slug'          => 't-shirts-et-débardeurs-homme',
            'souscategory_slug' => 'vetements',
            'souscategory_id'   => 2,
        ]);

        OtherSousCategorys::create([
            'name'          => 'Vestes et manteaux',
            'slug'          => 'vestes-et-manteaux-homme',
            'souscategory_slug' => 'vetements',
            'souscategory_id'   => 2,
        ]);
	//#Fin VÊTEMENTS 



    //CHAUSSURES 

        OtherSousCategorys::create([
            'name'          => 'Baskets',
            'slug'          => 'baskets-homme',
            'souscategory_slug' => 'chaussures',
            'souscategory_id'   => 3,
        ]);

        OtherSousCategorys::create([
            'name'          => 'Chaussures',
            'slug'          => 'chaussures-homme',
            'souscategory_slug' => 'chaussures',
            'souscategory_id'   => 3,
        ]);

        OtherSousCategorys::create([
            'name'          => 'Mocassins',
            'slug'          => 'mocassins-homme',
            'souscategory_slug' => 'chaussures',
            'souscategory_id'   => 3,
        ]);

        OtherSousCategorys::create([
            'name'          => 'Sandales',
            'slug'          => 'sandales-homme',
            'souscategory_slug' => 'chaussures',
            'souscategory_id'   => 3,
        ]);

        OtherSousCategorys::create([
            'name'          => 'Babouches',
            'slug'          => 'babouches-homme',
            'souscategory_slug' => 'chaussures',
            'souscategory_id'   => 3,
        ]);

        OtherSousCategorys::create([
            'name'          => 'Bottes',
            'slug'          => 'bottes-homme',
            'souscategory_slug' => 'chaussures',
            'souscategory_id'   => 3,
        ]);
    //#Fin CHAUSSURES 


    //ACCESSOIRES 
        OtherSousCategorys::create([
            'name'          => 'Bijoux',
            'slug'          => 'bijoux-homme',
            'souscategory_slug' => 'accessoires',
            'souscategory_id'   => 4,
        ]);

        OtherSousCategorys::create([
            'name'          => 'Casquettes & chapeaux',
            'slug'          => 'casquettes-et-chapeaux-homme',
            'souscategory_slug' => 'accessoires',
            'souscategory_id'   => 4,
        ]);

        OtherSousCategorys::create([
            'name'          => 'Ceintures',
            'slug'          => 'ceintures-homme',
            'souscategory_slug' => 'accessoires',
            'souscategory_id'   => 4,
        ]);

        OtherSousCategorys::create([
            'name'          => 'Cravates',
            'slug'          => 'cravates-homme',
            'souscategory_slug' => 'accessoires',
            'souscategory_id'   => 4,
        ]);

        OtherSousCategorys::create([
            'name'          => 'Echarpes',
            'slug'          => 'echarpes-homme',
            'souscategory_slug' => 'accessoires',
            'souscategory_id'   => 4,
        ]);

        OtherSousCategorys::create([
            'name'          => 'Lunettes',
            'slug'          => 'lunettes-homme',
            'souscategory_slug' => 'accessoires',
            'souscategory_id'   => 4,
        ]);

        OtherSousCategorys::create([
            'name'          => 'Montres',
            'slug'          => 'montres-homme',
            'souscategory_slug' => 'accessoires',
            'souscategory_id'   => 4,
        ]);

        OtherSousCategorys::create([
            'name'          => 'Portefeuilles',
            'slug'          => 'portefeuilles-homme',
            'souscategory_slug' => 'accessoires',
            'souscategory_id'   => 4,
        ]);

        OtherSousCategorys::create([
            'name'          => 'Sacs',
            'slug'          => 'sacs-homme',
            'souscategory_slug' => 'accessoires',
            'souscategory_id'   => 4,
        ]);
    //#Fin ACCESSOIRES 
//#Fin HOMME




//FEMME
    //VÊTEMENTS
        OtherSousCategorys::create([
            'name'              => 'Chaussettes et collants',
            'slug'              => 'chaussettes-et-collants-femme',
            'souscategory_slug' => 'vetements',
            'souscategory_id'   => 6,
        ]);

        OtherSousCategorys::create([
            'name'              => 'Hoodies et sweat-shirts',
            'slug'              => 'hoodies-et-sweat-shirts-femme',
            'souscategory_slug' => 'vetements',
            'souscategory_id'   => 6,
        ]);

        OtherSousCategorys::create([
            'name'              => 'Jeans',
            'slug'              => 'jeans-femme',
            'souscategory_slug' => 'vetements',
            'souscategory_id'   => 6,
        ]);

        OtherSousCategorys::create([
            'name'              => 'Jupes',
            'slug'              => 'jupes-femme',
            'souscategory_slug' => 'vetements',
            'souscategory_id'   => 6,
        ]);

        OtherSousCategorys::create([
            'name'              => 'Lingerie et pyjamas',
            'slug'              => 'lingerie-et-pyjamas-femme',
            'souscategory_slug' => 'vetements',
            'souscategory_id'   => 6,
        ]);

        OtherSousCategorys::create([
            'name'              => 'Maillots de bain',
            'slug'              => 'maillots-de-bain-femme',
            'souscategory_slug' => 'vetements',
            'souscategory_id'   => 6,
        ]);

        OtherSousCategorys::create([
            'name'              => 'Manteaux et vestes',
            'slug'              => 'manteaux-et-vestes-femme',
            'souscategory_slug' => 'vetements',
            'souscategory_id'   => 6,
        ]);

        OtherSousCategorys::create([
            'name'              => 'Pantalons et leggings',
            'slug'              => 'pantalons-et-leggings-femme',
            'souscategory_slug' => 'vetements',
            'souscategory_id'   => 6,
        ]);

        OtherSousCategorys::create([
            'name'              => 'Pulls et cardigans',
            'slug'              => 'Pulls-et-cardigans-femme',
            'souscategory_slug' => 'vetements',
            'souscategory_id'   => 6,
        ]);

        OtherSousCategorys::create([
            'name'              => 'Robes',
            'slug'              => 'robes-femme',
            'souscategory_slug' => 'vetements',
            'souscategory_id'   => 6,
        ]);

        OtherSousCategorys::create([
            'name'              => 'Shorts',
            'slug'              => 'shorts-femme',
            'souscategory_slug' => 'vetements',
            'souscategory_id'   => 6,
        ]);

        OtherSousCategorys::create([
            'name'              => 'Survêtements',
            'slug'              => 'survetements-femme',
            'souscategory_slug' => 'vetements',
            'souscategory_id'   => 6,
        ]);

        OtherSousCategorys::create([
            'name'              => 'Tailleurs et costumes',
            'slug'              => 'tailleurs-et-costumes-femme',
            'souscategory_slug' => 'vetements',
            'souscategory_id'   => 6,
        ]);
    //#Fin VÊTEMENTS


    //CHAUSSURES
        OtherSousCategorys::create([
            'name'              => 'Baskets',
            'slug'              => 'baskets-femme',
            'souscategory_slug' => 'chaussures',
            'souscategory_id'   => 7,
        ]);

        OtherSousCategorys::create([
            'name'              => 'Bottes',
            'slug'              => 'bottes-femme',
            'souscategory_slug' => 'chaussures',
            'souscategory_id'   => 7,
        ]);

        OtherSousCategorys::create([
            'name'              => 'Bottines chelsea',
            'slug'              => 'bottines-chelsea-femme',
            'souscategory_slug' => 'chaussures',
            'souscategory_id'   => 7,
        ]);

        OtherSousCategorys::create([
            'name'              => 'Chaussons',
            'slug'              => 'chaussons-femme',
            'souscategory_slug' => 'chaussures',
            'souscategory_id'   => 7,
        ]);

        OtherSousCategorys::create([
            'name'              => 'Chaussures plates',
            'slug'              => 'chaussures-plates-femme',
            'souscategory_slug' => 'chaussures',
            'souscategory_id'   => 7,
        ]);

        OtherSousCategorys::create([
            'name'              => 'Mocassins',
            'slug'              => 'mocassins-femme',
            'souscategory_slug' => 'chaussures',
            'souscategory_id'   => 7,
        ]);

        OtherSousCategorys::create([
            'name'              => 'Sandales',
            'slug'              => 'sandales-femme',
            'souscategory_slug' => 'chaussures',
            'souscategory_id'   => 7,
        ]);

        OtherSousCategorys::create([
            'name'              => 'Talons',
            'slug'              => 'talons-femme',
            'souscategory_slug' => 'chaussures',
            'souscategory_id'   => 7,
        ]);

        OtherSousCategorys::create([
            'name'              => 'Tongs',
            'slug'              => 'tongs-femme',
            'souscategory_slug' => 'chaussures',
            'souscategory_id'   => 7,
        ]);
    //#Fin CHAUSSURES


    //ACCESSOIERES
        OtherSousCategorys::create([
            'name'              => 'Accessoires cheveux',
            'slug'              => 'accessoires-cheveux-femme',
            'souscategory_slug' => 'accessoires',
            'souscategory_id'   => 8,
        ]);

        OtherSousCategorys::create([
            'name'              => 'Bijoux',
            'slug'              => 'bijoux-femme',
            'souscategory_slug' => 'accessoires',
            'souscategory_id'   => 8,
        ]);

        OtherSousCategorys::create([
            'name'              => 'Ceintures',
            'slug'              => 'ceintures-femme',
            'souscategory_slug' => 'accessoires',
            'souscategory_id'   => 8,
        ]);

        OtherSousCategorys::create([
            'name'              => 'Chapeaux',
            'slug'              => 'chapeaux-femme',
            'souscategory_slug' => 'accessoires',
            'souscategory_id'   => 8,
        ]);

        OtherSousCategorys::create([
            'name'              => 'Echarpes',
            'slug'              => 'echarpes-femme',
            'souscategory_slug' => 'accessoires',
            'souscategory_id'   => 8,
        ]);

        OtherSousCategorys::create([
            'name'              => 'Lunettes de soleil',
            'slug'              => 'lunettes-de-soleil-femme',
            'souscategory_slug' => 'accessoires',
            'souscategory_id'   => 8,
        ]);

        OtherSousCategorys::create([
            'name'              => 'Montres',
            'slug'              => 'montres-femme',
            'souscategory_slug' => 'accessoires',
            'souscategory_id'   => 8,
        ]);

        OtherSousCategorys::create([
            'name'              => 'Sacs et porte-monnaie',
            'slug'              => 'sacs-et-porte-monnaie-femme',
            'souscategory_slug' => 'accessoires',
            'souscategory_id'   => 8,
        ]);
    //#Fin ACCESSOIERES
//#Fin FEMME
    }
}
