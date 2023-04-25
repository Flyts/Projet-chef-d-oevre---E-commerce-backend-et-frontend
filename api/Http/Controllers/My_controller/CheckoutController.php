<?php

namespace App\Http\Controllers\My_controller;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use MercurySeries\Flashy\Flashy;

class CheckoutController extends Controller
{

    public function index()
    {
        if(Cart::count() <= 0) 
        {
            Flashy::warning('Votre panier est vide, vous ne pouvez pas allé au payement');

            return back();
        }
        else
        {
            return view('pages/payement');
        }
    }


    public function store(Request $request)
    {
        $query = DB::table('orders')->orderBy('payment_intent_id', 'desc')->first(); 
        
        if($query == NULL)
        {
            $round ='#PAY0001';
        }
        else
        {
            $sam = $query->id + 1;

            if($query->id > 0 && $query->id < 10) 
            {
                $round = '#PAY000' .$sam;
            }
            else if($query->id >= 10 && $query->id < 100) 
            {
                $round = '#PAY00' .$sam;
            }
            else if($query->id >= 100 && $query->id < 1000) 
            {
                $round = '#PAY0' .$sam;
            }
        }


        if(!empty($request->carte_credit) && !empty($request->date) && !empty($request->cvc)) 
        {
            if($request->carte_credit == '4242 4242 4242 4242') 
            {
                $products = [];
                $i = 0;

                foreach(Cart::content() as $product) 
                {
                    $products['product_' .$i][] = $product->model->titre;
                    $products['product_' .$i][] = $product->model->price;
                    $products['product_' .$i][] = $product->model->image;
                    $products['product_' .$i][] = $product->qty;

                    $i++;
                }

                $order = new Orders();

                $order->payment_intent_id  = $round;    
                $order->amount             = Cart::total();   
                $order->products           = serialize($products);        
                $order->user_id            = Auth::user()->id;  

                $order->save();

                Cart::destroy();

                Session::flash('success', 'Votre commande a été traitée avec succès.');

                return response()->json(['status' => 'success']);
            }
            else
            {
                return response()->json(['status' => 'error_carte', 'message' => 'Votre carte de crédit ne pas valide']);
            }
        }
        else 
        {
            return response()->json(['status' => 'error', 'message' => 'Vous devez remplir tous les champs']);
        }      
    }


    public function merci()
    {
        return Session::has('success') ? view('pages/merci') : redirect()->route('home');
    }

}
