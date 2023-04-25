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
use App\Models\Banques;
use App\Models\Code_transaction;
use App\Models\LePlusVendu;
use App\Products;

class PayementController extends Controller
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


    public function payewenzemoney(Request $request)
    {

    //RECUPERATION COMPTE WENZE ET UPDATE DU COMPTE
    	$solde_compte = getSolde();
    	$somme_panier = Cart::total();

        $recup_compte = Banques::where('user_id', Auth::user()->id)->get();
       
        if($solde_compte > $somme_panier) 
        {
    //#FIN RECUPERATION COMPTE WENZE ET UPDATE DU COMPTE

    //CREER L'HISTORIQUE DE PAYEMENT DANS LA TABLE Orders$query = DB::table('orders')->orderBy('payment_intent_id', 'desc')->first(); 
        //*Créer un id de payement en récuperant le dernier id existant et ajouter + 1
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
	    //* #Fin Créer un id de payement en récuperant le dernier id existant et ajouter + 1


        //Mis à jour du stock du ou des produits acheté
            foreach(Cart::content() as $product) 
            {
                $product_table = Products::where('id', $product->model->id)->get();

                $product_stock = $product_table[0]->stock;
                $product_qty   = $product->qty;

                $product_table[0]->update([  
                   'stock' => $product_stock - $product_qty,
                ]);
            }


            $recup_compte[0]->update([  
               'solde'   => $recup_compte[0]->solde - $somme_panier,
               'depense' => $recup_compte[0]->depense + $somme_panier,
            ]);  
        //#FIN Mis à jour du stock du ou des produits acheté


	    //* Créer l'historique de payement dans la table Orders puis vider le panier
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
	    //* #Fin Créer l'historique de payement dans la table Orders puis vider le panier
    //#FIN CREER L'HISTORIQUE DE PAYEMENT DANS LA TABLE Orders


            Session::flash('success', 'Votre commande a été traitée avec succès.');

        	return redirect()->route('merci');
        }
        else
        {
        	Flashy::muted('Le solde de votre compte est insuffisant pour effectuer cette transaction.');

        	return back();
        }
    }


    public function payeautre(Request $request)
    {
    	
    	//RECUPERER LE CODE DE LA TRANSACTION 
        $code_exist = Code_transaction::where('code', $request->code)->get();
        //#FIN RECUPERER LE CODE DE LA TRANSACTION 

    	//RECUPERER LE MON COMPTE AVEC MON AUTH ID
        $recup_compte = Banques::where('user_id', Auth::user()->id)->get();
        //#FIN RECUPERER LE MON COMPTE AVEC MON AUTH ID
        
        if($code_exist->count() > 0)
        {
            if($code_exist[0]->statut == 'non-utilisé')
            {
                if($recup_compte->count() === 1) 
                {

			    //RECUPERATION COMPTE WENZE ET UPDATE DU COMPTE
			    	$somme_panier = Cart::total();
				
				//VERIFIER LA DEVISE DU CODE DE TRANSACTION
			    	if($code_exist[0]->devise === '$') 
			    	{
			    		$code_somme = $code_exist[0]->montant;
			    	}
			    	else if($code_exist[0]->devise === 'Fc')
			    	{
			    		$code_somme = $code_exist[0]->montant / getTaux();
			    	}
				//#FIN VERIFIER LA DEVISE DU CODE DE TRANSACTION

					$recup_compte = Banques::where('user_id', Auth::user()->id)->get();
       			
			        if($code_somme >= $somme_panier) 
			        {
			    	
			    		$sommes = $code_somme - $somme_panier;

			        	$recup_compte[0]->update([  
			            	'solde'   => $recup_compte[0]->solde + $sommes,
               				'depense' => $recup_compte[0]->depense + $somme_panier,
			            ]);
			        
			    //#FIN RECUPERATION COMPTE WENZE ET UPDATE DU COMPTE

			    //CREER L'HISTORIQUE DE PAYEMENT DANS LA TABLE Orders
                	$query = DB::table('orders')->orderBy('payment_intent_id', 'desc')->first(); 
			        //*Créer un id de payement en récuperant le dernier id existant et ajouter + 1
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
				    //* #Fin Créer un id de payement en récuperant le dernier id existant et ajouter + 1

				    //* Créer l'historique de payement dans la table Orders puis vider le panier
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
				    //* #Fin Créer l'historique de payement dans la table Orders puis vider le panier
			    //#FIN CREER L'HISTORIQUE DE PAYEMENT DANS LA TABLE Orders

    			//CHANGER LE STATUT DU CODE DE LA TRANSACTION
                    $code_exist[0]->update([  
                           'statut' => 'utilisé',
                        ]);
        		//#FIN CHANGER LE STATUT DU CODE DE LA TRANSACTION
                	}
                	else
			        {
			        	Flashy::muted('Le motant de votre code de transaction est insuffisant pour effectuer cette transaction.');

			        	return back();
			        }
                }

                Session::flash('success', 'Votre commande a été traitée avec succès.');

			    return redirect()->route('merci');
            }
            else
            {
                Flashy::muted('Le code de transaction que vous avez tapez a déjà été utilisé');
                return back();
            }
        }
        else
        {
            Flashy::muted('Le code de transaction que vous avez tapez n\'exist pas');
            return back();
        }
    }


    public function merci()
    {

    /*=================================
        PRODUIT LE PLUS VENDU 
    =================================*/
        $mes_produits = Products::get();

        foreach ($mes_produits as $mon_produit) 
        {
            $produit_deja_vendu = Orders::where('products', 'like', "%$mon_produit->titre%")
                                ->get();
            $nombre_vente = $produit_deja_vendu->count();

            $vendu = LePlusVendu::where('produt_id', $mon_produit->id)->first();
            

            if($nombre_vente > 0) 
            {
                if($vendu != null) 
                {
                    $vendu->update([
                        'how_many'    => $nombre_vente,
                    ]);
                }
                else
                {
                    LePlusVendu::create([
                        'name_produt' => $mon_produit->titre,
                        'how_many'    => $nombre_vente,
                        'produt_id'   => $mon_produit->id,
                        'slug'        => $mon_produit->slug,
                        'price'       => $mon_produit->price,
                        'image'       => $mon_produit->image,
                    ]);
                }
            }
        }
    /*=================================
        #FIN PRODUIT LE PLUS VENDU 
    =================================*/


    //VERIFIER SI LA SESSION CONTIENT UNE VARIABLE "success", SI OUI AFFICHER LA PAGE "merci", SI NON REDIRIGE VERS LA PAGE "home"
        return Session::has('success') ? view('pages/merci') : redirect()->route('home');
    }
}
