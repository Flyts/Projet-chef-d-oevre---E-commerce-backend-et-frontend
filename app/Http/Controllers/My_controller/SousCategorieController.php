<?php

namespace App\Http\Controllers\My_controller;

use App\Http\Controllers\Controller;
use App\Models\Categorys;
use App\Models\Couleurs;
use App\Models\Favoris;
use App\Models\Marques;
use App\Models\OtherSousCategorys;
use App\Models\SousCategorys;
use App\Models\Tailles;
use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SousCategorieController extends Controller
{
    public function index($slug, $otherSlug)
    {   
        $categorie          = Categorys::whereSlug($slug)->firstOrFail();
        $othersouscategorie = OtherSousCategorys::whereSlug($otherSlug)->firstOrFail();
        $souscategorie      = SousCategorys::whereId($othersouscategorie->souscategory_id)->firstOrFail();

    	$nom_categorie = $categorie->name;


    	$othersouscategories = Products::where('other_sous_category_id', $othersouscategorie->id)->take(getNombreArticleAfficher())->get();

        $counts = (Products::where('other_sous_category_id', $othersouscategorie->id)->get())->count();


    //GET MARQUES
        $marques = Marques::orderBy('name')->get();
    //#FIN GET MARQUES

    //GET COULEURS
        $couleurs = Couleurs::orderBy('name')->get();
    //#FIN GET COULEURS

    //GET Tailles
        $tailles = Tailles::orderBy('name')->get();
    //#FIN GET Tailles


        return view('pages/souscategorie', compact('othersouscategories', 'categorie','nom_categorie', 'othersouscategorie', 'souscategorie', 'slug', 'otherSlug', 'counts', 'marques', 'couleurs', 'tailles'));
    }




    public function store(Request $request)
    {   
        $trier   = $request->trier;
        $marque  = $request->marque;
        $couleur = $request->couleur;
        $taille  = $request->taille;

        $slug       = $request->slug;
        $otherSlug  = $request->otherSlug;
        $combien    = $request->combien;

        $othersouscategorie = OtherSousCategorys::whereSlug($otherSlug)->get();

//PARTIE TRIER   
    //Trier
        if($trier == '0')
        {
            $query_trier = 'id';
            $data_trier  = 'asc';

            if($combien < 6)
            {
                $combien = 6;
            }
        }
        else if($trier == 'nouveau')
        {
            $query_trier = 'id';
            $data_trier  = 'desc';

            if($combien < 6)
            {
                $combien = 6;
            }
        }
        else if($trier == 'dcroissant')
        {
            $query_trier = 'price';
            $data_trier  = 'desc';

            if($combien < 6)
            {
                $combien = 6;
            }
        }
        else if($trier == 'croissant')
        {
            $query_trier = 'price';
            $data_trier  = 'asc';

            if($combien < 6)
            {
                $combien = 6;
            }
        }
    //#Fin Trier

    //Marque
        if($marque != '0')
        {
            $query_marque = 'marque_id';
            $data_marque  = $request->marque;

            if($combien < 6)
            {
                $combien = 6;
            }
        }
        else
        {
            $query_marque = 'other_sous_category_id';
            $data_marque  = $othersouscategorie[0]->id;

            if($combien < 6)
            {
                $combien = 6;
            }
        }
    //#Fin Marque

    //Couleur
        if($couleur != '0')
        {
            $query_couleur = 'couleur_id';
            $data_couleur  = $request->couleur;

            if($combien < 6)
            {
                $combien = 6;
            }
        }
        else
        {
            $query_couleur = 'other_sous_category_id';
            $data_couleur  = $othersouscategorie[0]->id;

            if($combien < 6)
            {
                $combien = 6;
            }
        }
    //#Fin Couleur

    //Taille
        if($taille != '0')
        {
            $query_taille = 'taille_id';
            $data_taille  = $request->taille;

            if($combien < 6)
            {
                $combien = 6;
            }
        }
        else
        {
            $query_taille = 'other_sous_category_id';
            $data_taille  = $othersouscategorie[0]->id;

            if($combien < 6)
            {
                $combien = 6;
            }
        }
    //#Fin Taille

       $produits = Products::where('other_sous_category_id', $othersouscategorie[0]->id)
                           ->where($query_marque,  $data_marque)
                           ->where($query_couleur, $data_couleur)
                           ->where($query_taille,  $data_taille)
                           ->orderBy($query_trier,  $data_trier)
                           ->limit($combien)
                           ->get();
                                
        $counts = Products::where('other_sous_category_id', $othersouscategorie[0]->id)
                          ->where($query_marque,  $data_marque)
                          ->where($query_couleur, $data_couleur)
                          ->where($query_taille,  $data_taille)
                          ->orderBy($query_trier,  $data_trier)
                          ->get();
//#FIN PARTIE TRIER


//VALEUR DES ELEMENTS à TRIER  
    //Trier
        if($trier == '0')
        {
            $trier_value = 'Tout';
        }
        else if($trier == 'nouveau')
        {
            $trier_value = 'nouveau';
        }
        else if($trier == 'dcroissant')
        {
            $trier_value = 'Prix décroissant';
        }
        else if($trier == 'croissant')
        {
            $trier_value = 'Prix croissant';
        }
        else
        {
            $trier_value = 'Aucun';
        }
    //#Fin Trier

    //Marque
        if($marque != '0')
        {
            $ma_marque = Marques::where('id', $marque)->get();
            $marque_value = $ma_marque[0]->name;
        }
        else
        {
            $marque_value = 'Tout';
        }
    //#Fin Marque

    //Couleur
        if($couleur != '0')
        {
            $ma_couleur = Couleurs::where('id', $couleur)->get();
            $couleur_value = $ma_couleur[0]->name;
        }
        else
        {
            $couleur_value = 'Tout';
        }
    //#Fin Couleur

    //Taille
        if($taille != '0')
        {
            $ma_taille = Tailles::where('id', $taille)->get();
            $taille_value = $ma_taille[0]->name;
        }
        else
        {
            $taille_value = 'Tout';
        }
    //#Fin Taille
//#FIN VALEUR DES ELEMENTS à TRIER



        $boucle = [
                     'count'        => $counts->count(), 
                     'combien'      => $combien, 
                     'search_count' => $produits->count(),

                     'trier'   => $trier_value,
                     'marque'  => $marque_value,
                     'couleur' => $couleur_value,
                     'taille'  => $taille_value,
                  ];

        for ($i=0; $i < $produits->count(); $i++) 
        {        
            if(auth()->check())
            {
                $exist = Favoris::where('product_id', $produits[$i]->id)
                                ->Where('user_id', Auth::user()->id)
                                ->get(); 

                if($exist->isNotEmpty())
                {
                    $it_favori = 'Like fa fa-heart';
                }
                else
                {
                    $it_favori = 'fa fa-heart-o';
                }
            }
            else
            {
                $it_favori = 'fa fa-heart-o';
            }


            array_push($boucle, 
            [
                $produits[$i]->id, 
                $produits[$i]->titre, 
                $produits[$i]->slug, 
                getPrice($produits[$i]->price), 
                getMySolde($produits[$i]->price, $produits[$i]->solde), 
                $produits[$i]->image,
                $it_favori,
            ]);
        }

        return json_encode($boucle);
    }
}
