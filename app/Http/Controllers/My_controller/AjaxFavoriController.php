<?php

namespace App\Http\Controllers\My_controller;

use App\Http\Controllers\Controller;
use App\Models\Favoris;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AjaxFavoriController extends Controller
{

    public function navigation(Request $request)
    {
        if($request->ajax == true)
        {
            $navigation = $request->navigation;

            $favoris = Favoris::where('titre', 'like' ,"%$navigation%")
                            ->Where('user_id', Auth::user()->id)
                            ->get();


            $boucle = ['count' => $favoris->count()];

            for ($i=0; $i < $favoris->count(); $i++) 
            {        
                array_push($boucle, 
                [
                    $favoris[$i]->id, 
                    $favoris[$i]->titre, 
                    $favoris[$i]->slug, 
                    $favoris[$i]->subtitle, 
                    getPrice($favoris[$i]->price), 
                    $favoris[$i]->image,
                ]);
            }


            return json_encode($boucle);
        }

        return back();
    }
}
