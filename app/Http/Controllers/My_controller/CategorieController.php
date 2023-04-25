<?php

namespace App\Http\Controllers\My_controller;

use App\Http\Controllers\Controller;
use App\Models\Categorys;
use App\Products;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index($slug)
    {    

        $categories = Products::with('categories')->whereHas('categories', function($query)
        {
            $query->where('slug', request()->slug);  
        })->where('stock', '>', 0)->limit(4)->get();

        $categorie = Categorys::whereSlug($slug)->firstOrFail();

        $sam = Products::inRandomOrder()->take(1)->with('categories')->firstOrFail();

        // dd($sam);
        $id = Categorys::where('slug', $slug)->first();

        $banners = Products::inRandomOrder()->where('solde', '!=', null)->where('category_id', $id->id)->get();

        $nom_categorie = $categorie->name;

        return view('pages/categorie', compact('categories', 'categorie', 'nom_categorie', 'slug', 'banners'));
    }

}
