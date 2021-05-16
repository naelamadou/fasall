<?php

namespace App\Http\Controllers;

use App\Model\Demande;
use App\Model\Entreprise;
use App\Model\Profil;
use App\Http\Requests\DemandRequest;
use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\DB;

class DemandeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $entreprise=Entreprise::all();
        $profils=Profil::all();
        $demandes=Demande::all();
        return view('demandes.index',compact('entreprise','profils','demandes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $entreprise=Entreprise::all();
      $profils=Profil::all();
      $demandes = Demande::orderBy('id','DESC')
        ->get();
        return view('demandes.create',compact('demandes','profils','entreprise'));   
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $input = $request->all();

        $enrg = Demande::create($input);
         if ($enrg) {
             Flashy::message('status','Demande envoyé avec succées');
             //return redirect()->route('allocation.create');
         }else{
            Flashy::message('erreur','Demande non envoyé');
             return redirect()->back();
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function show(demande $demande)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function edit(demande $demande)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, demande $demande)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\demande  $demande
     * @return \Illuminate\Http\Response
     */
    public function destroy(demande $demande)
    {
        //
    }

     public function filtredemande($id)
    {
        
        $entreprise=Entreprise::all();
        $demandes = Demande::find($id);
        //dd($demandes);
        return view('demandes.filtre', compact('demandes','entreprise'));
    }
}
