<?php

namespace App\Http\Controllers\My_controller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Code_transaction;
use App\Models\Banques;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\Auth;

class BankController extends Controller
{
    
    public function index()
    {
        return view('pages/banque');
    }

   
    
    public function update(Request $request)
    {
    //RECUPERER LE CODE DE LA TRANSACTION 
        $code_exist = Code_transaction::where('code', $request->code)->get();
        
        if($code_exist->count() > 0)
        {
            if($code_exist[0]->statut == 'non-utilisé')
            {
    //RECUPERER LE MON COMPTE AVEC MON AUTH ID
                $recup_compte = Banques::where('user_id', Auth::user()->id)->get();

                if($recup_compte->count() === 1) 
                {
    //APPROVISIONNER SON COMPTE
                    if($code_exist[0]->devise == 'Fc') 
                    {
        //Aditionner le (montant du code de la transaction diviser par le Taux) plus le solde du compte  
                        $recup_compte[0]->update([  
                           'solde' => ($code_exist[0]->montant / getTaux()) + $recup_compte[0]->solde,
                        ]);
                    }
                    else
                    {
                        $recup_compte[0]->update([  
                           'solde' => $code_exist[0]->montant + $recup_compte[0]->solde,
                        ]);
                    }
    //CHANGER LE STATUT DU CODE DE LA TRANSACTION
                    $code_exist[0]->update([  
                           'statut' => 'utilisé',
                        ]);


                    Flashy::success('Vous avez réapprovisionner votre compte avec succès');
                }
            }
            else
            {
                Flashy::muted('Le code de transaction que vous avez tapez a déjà été utilisé');
            }
        }
        else
        {
            Flashy::muted('Le code de transaction que vous avez tapez n\'exist pas');
        }

        return back();
    }
    /*dd($recup_compte);*/
}
