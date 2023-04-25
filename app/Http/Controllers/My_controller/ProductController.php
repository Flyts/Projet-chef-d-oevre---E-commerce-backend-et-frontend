<?php

namespace App\Http\Controllers\My_controller;

use App\Http\Controllers\Controller;
use App\Products;
use App\SearchRequestFavorite;
use App\models\SearchRequestStocks;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index($slug)
    {
    	$product = Products::whereSlug($slug)->firstOrFail();

      return view('pages/boutique', compact('product'));
    }

    public function search(Request $request)
    {
    	$search   = $request->search;
      $categori = $request->categorie;

    	if(!empty($search)) 
    	{
            $validator = Validator::make($request->all(), [
                'search' => 'required'
            ]);
    	   
           if($validator->fails()) 
           {
                Flashy::muted('Votre champ de recherche ne doit pas être vide');

                return back();
           }
           else
           {
                if($categori === '0')
                {
                  $products = Products::where('titre', 'like', "%$search%")
                                      ->orWhere('subtitle', 'like', "%$search%")
                                      ->paginate(30);

                  $counts   = Products::where('titre', 'like', "%$search%")
                                      ->orWhere('subtitle', 'like', "%$search%")
                                      ->get();
                }
                else
                {
                  $products = Products::where('titre', 'like', "%$search%")
                                      ->where('category_id', $categori)
                                      ->orWhere('subtitle', 'like', "%$search%")
                                      ->where('category_id', $categori)
                                      ->paginate(30);

                  $counts   = Products::where('titre', 'like', "%$search%")
                                      ->where('category_id', $categori)
                                      ->orWhere('subtitle', 'like', "%$search%")
                                      ->where('category_id', $categori)
                                      ->get();
                }

                /*dd($products->where('stock', '>', 0)->count());*/

                if($products->count() == 0) 
                {
                  $recherche = SearchRequestStocks::where('name_search', $search)->get();

                  if($recherche->count() == 0) 
                  {
                    SearchRequestStocks::create([
                      'name_search' => $search,
                      'how_many'    => 1,
                    ]);
                  }
                  else
                  {
                    $change = SearchRequestStocks::where('name_search', $search)->firstOrFail();

                    $change->update([
                      'name_search' => $search,
                      'how_many'    => $change->how_many + 1,
                    ]);
                  }
                }
                else
                {
                  if(auth()->check()) 
                  {
                    $recherche = SearchRequestFavorite::where('name_search', $search)->get();

                    if($recherche->count() == 0) 
                    {
                      SearchRequestFavorite::create([
                        'name_search' => $search,
                        'how_many'    => 1,
                        'user_id'     => Auth::user()->id,
                      ]);
                    }
                    else
                    {
                      $change = SearchRequestFavorite::where('name_search', $search)->firstOrFail();

                      $change->update([
                        'name_search' => $search,
                        'how_many'    => $change->how_many + 1,
                        'user_id'     => Auth::user()->id,
                      ]);
                    }
                  }
                }

                return view('pages/search', compact('products', 'counts'));
           }
    	}
    	else
    	{
    		return back();
    	}
    	
    }
}
