<?php

namespace App\Http\Controllers\My_controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Sponsors;

class AproposDeNousController extends Controller
{
    public function index()
    {
    	$sponsors = Sponsors::get();

    	return view('pages/about', compact('sponsors'));
    }
}
