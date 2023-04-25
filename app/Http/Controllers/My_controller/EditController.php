<?php

namespace App\Http\Controllers\My_controller;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Session\flash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use MercurySeries\Flashy\Flashy;

class EditController extends Controller
{
    
    public function index()
    {
        return view('pages/edit_user');
    }


    public function update(Request $request)
    {
        $this->validate($request, 
        [
           'avatar' => 'required|image|mimes:jpeg,jpg,png|max:5000',
        ]);

        if($request->hasFile('avatar')) 
        {
            $avatar     = $request->file('avatar');
            $fileName   = time(). '.' .$avatar->getClientOriginalExtension();
            $path       = public_path('/img/avatars');

            $avatar->move($path, $fileName);

            $modif = User::whereId(Auth::user()->id);
            $modif->update([
                'avatar' => 'img/avatars/'. $fileName,
            ]);
        }


        Flashy::success('Votre Photo a été modifier avec succès');

        return redirect()->route('edit.index');
    }


    public function modifier(Request $request)
    {
        $ancien_pass = $request->ancien_pass;

        $this->validate($request, 
        [
           'nom'          => 'required|min:4',
           'prenom'       => 'required|min:4',
           'tel'          => 'required|min:10|max:13',
           'identifiant'  => 'required|min:4',
           'password'     => 'required|string|min:8|confirmed',
        ]);


        if(password_verify($ancien_pass, Auth::user()->password)) 
        {
            $modif = User::whereId(Auth::user()->id);

            $modif->update([  
               'nom'          => $request->nom,
               'prenom'       => $request->prenom,
               'tel'          => $request->tel,
               'identifiant'  => $request->identifiant,
               'password'     => Hash::make($request->password)
            ]);


            Flashy::success('Votre Compte a été modifier avec succès');

            return redirect()->route('edit.index');
        }
        else
        {
            Session::flash('passeword_error', 'Le mot de passe que vous avez tapez ne correspond pas à votre ancien mot de passe');

            return redirect()->route('edit.index');
        }
    }
}
