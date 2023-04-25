<?php 

use App\Models\Banques;
use App\Models\Categorys;
use App\Models\Couleurs;
use App\Models\Tailles;
use App\Models\Favoris;
use App\Models\Orders;
use App\Models\OtherSousCategorys;
use App\Models\SousCategorys;
use App\Models\infos;
use App\Models\menus;
use App\Products;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

	if(!function_exists('active_page')) 
	{
		function active_page($route)
		{
			return Route::is($route) ? 'active' : '';
		}
	}



	if(!function_exists('getTaxe')) 
	{
		function getTaxe()
		{
			$Taxe = 16;
			return $Taxe;
		}
	}



	

	if(!function_exists('getProductPlural')) 
	{
		function getProductPlural($product)
		{
			if($product == 1) 
			{	
				return $product. ' produit';
			}
			else
			{	
				return $product. ' produits';
			}
		}
	}


	if(!function_exists('getResultat')) 
	{
		function getResultat($nombre)
		{
			if($nombre <= 1) 
			{	
				return $nombre. ' résultat';
			}
			else
			{	
				return $nombre. ' résultats';
			}
		}
	}


	if(!function_exists('getMyDate')) 
	{
		function getMyDate($my_date)
		{
			return Carbon::parse($my_date)->format('d/m/Y à H:i');
		}
	}

	if(!function_exists('getFovor')) 
	{
		function getFovor()
	    {
	        $favors = Favoris::where('user_id', Auth::user()->id)->get();;

	        return $favors->count();
	    }
	}


	if(!function_exists('getHistory')) 
	{
		function getHistory()
	    {
	        $favors = Orders::where('user_id', Auth::user()->id)->get();

	        return $favors->count();
	    }
	}


	if(!function_exists('getLike')) 
	{
		function getLike($poduct)
	    {
	        $exist = Favoris::where('product_id', $poduct)->where('user_id', Auth::user()->id)->get();

	        /*var_dump($exist->count());
	        die();*/

	        if($exist->count() == 0) 
	        {
	        	$like = 'fa fa-heart-o';
	        }
	        else
	        {
	        	$like = 'Like fa fa-heart';
	        }
	        
            return $like;
	    }
	}




	if(!function_exists('getInfo')) 
	{
		function getInfo($name)
	    {
	    	$info  = infos::where('nom', $name)->first();
	    	$value = $info->value;

	        return $value;
	    }
	}



	if(!function_exists('getInfoLien')) 
	{
		function getInfoLien($name)
	    {
	    	$info  = infos::where('nom', $name)->first();
	    	$lien = $info->lien;

	        return $lien;
	    }
	}



	if(!function_exists('getCategories')) 
	{
		function getCategories()
	    {
	    	$categories = Categorys::all();

	        return $categories;
	    }
	}



	if(!function_exists('getMenus')) 
	{
		function getMenus()
	    {
	    	$menus = menus::all();

	        return $menus;
	    }
	}




	if(!function_exists('getSolde')) 
	{
		function getSolde()
	    {
	    	$solde = Banques::where('user_id', Auth::user()->id)->get();

	        return $solde[0]->solde;
	    }
	}




	if(!function_exists('getDepense')) 
	{
		function getDepense()
	    {
	    	$depense = Banques::where('user_id', Auth::user()->id)->get();

	        return $depense[0]->depense;
	    }
	}




	if(!function_exists('getTaux')) 
	{
		function getTaux()
	    {
	    	$Taux = 1850;

	        return $Taux;
	    }
	}



	if(!function_exists('getNumeroMpesaWenze')) 
	{
		function getNumeroMpesaWenze()
	    {
	    	$Numero = '0824 176 842';

	        return $Numero;
	    }
	}



	if(!function_exists('getPrice')) 
	{
		function getPrice($price)
		{
			$price = (floatval($price) / 100) * getTaux();
			$taxe = ($price * getTaxe()) / 100;

			$total = $price + $taxe;

			return number_format($total, 0, ',', ' '). ' Fc';
		}
	}




	if(!function_exists('getPriceSansTaxe')) 
	{
		function getPriceSansTaxe($price)
		{
			$price = (floatval($price) / 100) * getTaux();

			return number_format($price, 0, ',', ' '). ' Fc';
		}
	}




	if(!function_exists('getMySolde')) 
	{
		function getMySolde($price, $solde)
		{
			$mon_solde = ($price * $solde) / 100;

			$total = getPrice($price - $mon_solde); 

			return $total;
		}
	}




	if(!function_exists('getCartSolde')) 
	{
		function getCartSolde($price, $solde)
		{
			$mon_solde = ($price * $solde) / 100;

			$total = $price - $mon_solde; 

			return $total;
		}
	}


	if(!function_exists('getPriceNotTaxe')) 
	{
		function getPriceNotTaxe($price)
		{
			$price = (floatval($price) / 100) * getTaux();

			return number_format($price, 0, ',', ' '). ' Fc';
		}
	}


	if(!function_exists('getMyTaxe')) 
	{
		function getMyTaxe($price)
		{
			$price = (floatval($price) / 100) * getTaux();
			$taxe = ($price * getTaxe()) / 100;

			return number_format($taxe, 0, ',', ' '). ' Fc';
		}
	}




	if(!function_exists('getSousCategories')) 
	{
		function getSousCategories($slug)
		{

			return 'a';
		}
	}




	if(!function_exists('getSousCategoryExist')) 
	{
		function getSousCategoryExist($id)
		{
			$exist = SousCategorys::where('category_id', $id)->get();

			return $exist->count();
		}
	}


	if(!function_exists('getSousCategory')) 
	{
		function getSousCategory($id)
		{
			$all = SousCategorys::where('category_id', $id)->get();

			return $all;
		}
	}



	if(!function_exists('getOtherSousCategory_1')) 
	{
		function getOtherSousCategory_1($id)
		{
			$all = OtherSousCategorys::where('souscategory_id', $id)->orderBy('name')->offset(0)->limit(10)->get();

			return $all;
		}
	}



	if(!function_exists('getOtherSousCategory_2')) 
	{
		function getOtherSousCategory_2($id)
		{
			$all = OtherSousCategorys::where('souscategory_id', $id)->orderBy('name')->offset(10)->limit(10)->get();

			return $all;
		}
	}



	if(!function_exists('getImages')) 
	{
		function getImages($categorie_id, $souscategorie_id)
		{
			$all = Products::inRandomOrder()->where('category_id', $categorie_id)->where('sous_category_id', $souscategorie_id)->limit(2)->get();
			
			return $all;
		}
	}








	if(!function_exists('getOtherSousCategoryExist')) 
	{
		function getOtherSousCategoryExist($id)
		{
			$exist = OtherSousCategorys::where('souscategory_id', $id)->get();


			
			return $exist->count();
		}
	}






	if(!function_exists('getNombreArticleAfficher')) 
	{
		function getNombreArticleAfficher()
		{
			$value = 6;

			return $value;
		}
	}


	if(!function_exists('getNombreDejaVu')) 
	{
		function getNombreDejaVu($nombre)
		{
			if($nombre > getNombreArticleAfficher())
			{
				$value = getNombreArticleAfficher();
			}
			else
			{
				$value = $nombre;
			}

			return $value;
		}
	}


	if(!function_exists('getPourcentage')) 
	{
		function getPourcentage($dejaVu, $nombre)
		{
			if($dejaVu != 0)
			{
				$value = ($dejaVu * 100) / $nombre;
			}
			else
			{
				$value = 0;
			}

			return $value. '%';
		}
	}


	if(!function_exists('getMarqueExist')) 
	{
		function getMarqueExist($id, $otherSlug)
		{
			$otherId = OtherSousCategorys::where('slug', $otherSlug)->first();
			
			$exist   = Products::where('other_sous_category_id', $otherId->id)->where('marque_id', $id)->get();
			$count   = $exist->count();

			return $count;
		}
	}


	if(!function_exists('getCouleurExist')) 
	{
		function getCouleurExist($id, $otherSlug)
		{
			$otherId = OtherSousCategorys::where('slug', $otherSlug)->first();
			
			$exist   = Products::where('other_sous_category_id', $otherId->id)->where('couleur_id', $id)->get();
			$count   = $exist->count();

			return $count;
		}
	}


	if(!function_exists('getCouleur')) 
	{
		function getCouleur($idcolor)
		{
			$color   = Couleurs::where('id', $idcolor)->first();
			$name   = $color->name;

			return $name;
		}
	}


	if(!function_exists('getTaille')) 
	{
		function getTaille($idtaille)
		{
			$taille = Tailles::where('id', $idtaille)->first();
			$name   = $taille->name;

			return $name;
		}
	}


	if(!function_exists('getTailleExist')) 
	{
		function getTailleExist($id, $otherSlug)
		{
			$otherId = OtherSousCategorys::where('slug', $otherSlug)->first();
			
			$exist   = Products::where('other_sous_category_id', $otherId->id)->where('taille_id', $id)->get();
			$count   = $exist->count();

			return $count;
		}
	}




	if(!function_exists('getImageBanner')) 
	{
		function getImageBanner($slug)
		{
			if($slug === 'hommes')
			{
				$image = "background-image: url('../img/banner/banner_homme.jpg'); width: 100%; height: 450px; margin-bottom: 50px;";
			}
			else if($slug === 'femmes')
			{
				$image = "background-image: url('../img/banner/banner_femme.jpg'); width: 100%; height: 450px; margin-bottom: 50px;";	
			}
			else
			{
				$image = '';
			}

			return $image;
		}
	}