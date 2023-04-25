<?php

namespace App\Http\Controllers\My_controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contacts;
use Illuminate\Support\Facades\Auth;
use MercurySeries\Flashy\Flashy;

class ContactController extends Controller
{
    public function index()
    {
    	return view('pages/contact');
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
	        'nom'     => 'required|min:3',
	        'email'   => 'required|email',
	        'sujet'   => 'required|min:3',
	        'message' => 'required|min:5',
        ]);

        if(auth()->check()) 
        {
        	Contacts::create([
        		'nom'     => $request->nom,
		        'email'   => $request->email,
		        'sujet'   => $request->sujet,
		        'message' => $request->message,       
        		'user_id' => Auth::user()->id,
        	]);
        }
        else
        {
        	Contacts::create([
        		'nom'     => $request->nom,
		        'email'   => $request->email,
		        'sujet'   => $request->sujet,
		        'message' => $request->message, 
        	]);
        }


        Flashy::success('Vous avez envoyé votre message avec succès');

    	return redirect()->route('contact');
    }
}
