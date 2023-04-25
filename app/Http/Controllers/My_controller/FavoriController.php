<?php

namespace App\Http\Controllers\My_controller;

use App\Http\Controllers\Controller;
use App\Models\Favoris;
use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MercurySeries\Flashy\Flashy;

class FavoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $favoris = Favoris::where('user_id', Auth::user()->id)->paginate(6);
        $all = 'delete';

        return view('pages/favori', compact('favoris', 'all'));
    }



    public function store(Request $request)
    {  
        $favori = Products::where('id', $request->favori_id)->firstOrFail();
        $exist  = Favoris::where('product_id', $request->favori_id)
                         ->Where('user_id', Auth::user()->id)
                         ->get();/*
        dd($favori->titre);*/


        if ($exist->count() === 0) 
        {
            Favoris::create([
                'titre'       => $favori->titre,
                'slug'        => $favori->slug,
                'subtitle'    => $favori->subtitle,
                'description' => $favori->description,
                'price'       => $favori->price,
                'image'       => $favori->image,
                'user_id'     => Auth::user()->id,
                'product_id'  => $favori->id,
            ]);

            Flashy::success('Vous avez ajouté ' .$favori->titre. ' dans vos favoris avec succès');

            return back();
        }
        else
        {

            Favoris::destroy($exist[0]->id);

            /*Flashy::muted('Le produit a déjà été ajouté aux favoris');*/
            Flashy::success('Vous avez supprimé '. $favori->titre .' de vos favoris');

            return back();
            
        }
    }



    public function Alldestroy($all)
    {
        if($all === 'delete') 
        {
            $deleteAll = Favoris::where('user_id', Auth::user()->id)->get();

            for ($i = 0; $i < $deleteAll->count(); $i++) 
            { 
                Favoris::destroy($deleteAll[$i]->id);
            }

            Flashy::success('Vous avez supprimé tous vos favoris');

            return back();
        }
        else
        {
            return back();
        }

    }


    public function destroy($id)
    {
        $delete = Favoris::where('id', $id)->Where('user_id', Auth::user()->id)->first();
        
        if($delete->count() > 0)
        {
            Favoris::destroy($delete->id);

            Flashy::success('Vous avez supprimé '. $delete->titre .' de vos favoris');

            return back();
        }
        else
        {
            return back();
        }
    }
}
