<?php

namespace App\Http\Controllers\My_controller;

use App\Http\Controllers\Controller;
use App\Products;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use MercurySeries\Flashy\Flashy;

class CartController extends Controller
{
    public function index()
    {
        $paniers = Cart::Content();

        return view('pages/panier', compact('paniers'));
    }
    


    public function store(Request $request)
    {
        $product   = Products::find($request->product_id);
        /*dd(['stock' => $product->stock, 'nom' => $product->titre]);*/

        $duplicata = Cart::search(function($cartItem, $rowId) use ($request)
        {
            return $cartItem->id == $request->product_id;
        });


        if($product->stock >= $request->size) 
        {
            if (!empty($request->size)) 
            {
                $this->validate($request, [
                    'size'          => 'required',
                    'product_id'    => 'required',
                ]);

                /*dd($duplicata);*/

                if($duplicata->isNotEmpty())
                {
                    Flashy::muted('Le produit a déjà été ajouté');

                    return redirect()->route('product.index', $product->slug);
                }
                else
                {

                    if($product->solde != null)
                    {
                        Cart::add($product->id, $product->titre, $request->size, getCartSolde($product->price, $product->solde))->associate('App\Products');
                    }
                    else
                    {
                        Cart::add($product->id, $product->titre, $request->size, $product->price)->associate('App\Products');
                    }

                    Flashy::success('Vous avez ajouté ' .getProductPlural($request->size). ' au panier avec succès');

                    return redirect()->route('product.index', $product->slug);
                }
            }
            else
            {
                if($duplicata->isNotEmpty())
                {
                    Flashy::muted('Le produit a déjà été ajouté');

                    return back();
                }
                else
                {

                    if($product->solde != null)
                    {
                        Cart::add($product->id, $product->titre, 1, getCartSolde($product->price, $product->solde))->associate('App\Products');
                    }
                    else
                    {
                        Cart::add($product->id, $product->titre, 1, $product->price)->associate('App\Products');
                    }

                    Flashy::success('Vous avez ajouté 1 produit au panier avec succès');

                    return back();
                }
            }
        }
        else
        {
            Flashy::muted('La quantité du produit est supperieur à notre stock');

            return back();
        }
    }

   

    public function update(Request $request, $rowId)
    {
        $data = $request->qty;

        $paniers    = Cart::Content();
        $id_product = $paniers[$rowId]->id;

        $product   = Products::where('id', $id_product)->get();


        $validator = Validator::make($request->all(), [
            'qty' => 'required|numeric'
        ]);

        if($validator->fails()) 
        {
            Cart::update($rowId, 1);

            Session::flash('error', 'La quantité du produit dois être un chiffre.');

            return response()->json(['status' => 'error', 'stock' => 1]);
        }
        else
        {

            if($product[0]->stock >= $data) 
            {
                Cart::update($rowId, $data);

                Session::flash('success', 'La quantité du produit est passée à ' .$data). '.';

                return response()->json(['status' => 'success', 'message' => 'Cart Quantity has been Updated']);
            }
            else
            {
                Cart::update($rowId, $product[0]->stock);

                Session::flash('error', 'La quantité du produit est supperieur à notre stock.');

                return response()->json(['status' => 'error', 'stock' => $product[0]->stock]);
            }
        }

        
    }


    public function alldestroy()
    {
        if(Cart::count() == 0) 
        {
            Flashy::success('Votre panier est déjà vide');

            return redirect()->route('cart.index');
        }
        else
        {
            Cart::destroy();
            
            Flashy::success('Vous avez vidé votre panier');

            return redirect()->route('cart.index');
        }
    }


    public function destroy($rowId, $qty)
    {
        Cart::remove($rowId);

        Flashy::success('Vous avez supprimé '. getProductPlural($qty) .' du panier');

        return back();
    }
}
