<?php

namespace App\Http\Controllers\My_controller;

use App\Http\Controllers\Controller;
use App\Models\Orders;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HistoriqueController extends Controller
{
    
    public function index()
    {
        $historiques = Orders::where('user_id', Auth::user()->id)->paginate(2);

        return view('pages/historique', compact('historiques')); 
    }

}
