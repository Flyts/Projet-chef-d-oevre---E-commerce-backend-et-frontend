<?php

namespace App\Http\Middleware;

use Closure;
use App\Products;
use App\Models\LePlusVendu;
use App\Models\Orders;

class SaveProduitLePlusVendu
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $produits = Products::all();


        for ($i = 0; $i < $produits->count(); $i++) 
        { 
            $search      = $produits[$i]->titre;
            $search_id   = $produits[$i]->id;

            $products = Orders::where('products', 'like', "%$search%")
                              ->get();

            /*echo $produits[$i]->titre. ' => ' .$products->count().'<br/>';*/
            /*dd($products);*/

            if($products->count() > 0)
            {
                $recherche = LePlusVendu::where('produt_id', $search_id)->get();

                if($recherche->count() == 0) 
                {
                  LePlusVendu::create([
                    'name_produt' => $search,
                    'how_many'    => $products->count(),
                    'produt_id'   => $search_id,
                  ]);
                }
                else
                {
                  $change = LePlusVendu::where('produt_id', $search_id)->firstOrFail();

                  $change->update([
                    'name_produt' => $search,
                    'how_many'    => $products->count(),
                    'produt_id'   => $search_id,
                  ]);
                }
            }
        }
        /*dd();*/
        

        return $next($request);
    }
}
