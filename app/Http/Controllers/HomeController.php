<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Entreprise;
use App\Model\Profil;
use App\Model\Demandeur;
use App\Model\Demande;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $entreprise=Entreprise::all();
        $demandeur=Demandeur::all();
        $user=User::all();
        $profil=Profil::all();
        $demandes=Demandeur::all();


        return view('home',compact('entreprise','demandeur','user','profil','demandes'));
    }
}
