<?php

namespace App\Http\Controllers\My_controller;

use App\Http\Controllers\Controller;
use App\Models\Banques;
use App\Models\LePlusVendu;
use App\Models\Orders;
use App\Products;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index(Request $request)
    {

    /*=================================
        CREATION COMPTE BANQUE 
    =================================*/
        if (auth()->check()) 
        {
            $exist = Banques::where('user_id', Auth::user()->id)->get();
        
            if ($exist->count() === 0) 
            {
                Banques::create([
                    'user_id' => Auth::user()->id
                ]);
            }
        }
    /*=================================
        #FIN CREATION COMPTE BANQUE 
    =================================*/




    /*=================================
        PRODUIT LE PLUS VENDU  
    =================================*/
        $plusvendu = DB::table('le_plus_vendus')->orderBy('how_many', 'desc')->take(6)->get();

    /*=================================
        #FIN PRODUIT LE PLUS VENDU  
    =================================*/




    /*==============================================
        RECUP PRODUCTS & PRODUCT EN RANDOM  
    ==============================================*/
		$products = Products::where('stock', '>', 0)->orderBy('id', 'desc')->get();
    	$product  = Products::inRandomOrder()->first();

    /*==============================================
        #FIN RECUP PRODUCTS & PRODUCT EN RANDOM 
    ==============================================*/

        
        return view('pages/home', compact('products', 'product', 'plusvendu'));
    }





    public function store(Request $request)
    {
    	if(!empty($request->change)) 
    	{
	    	$product  = Products::inRandomOrder()->take(1)->get();
    	
        	return response()->json(['response' => $product]);
    	}
    }

}
