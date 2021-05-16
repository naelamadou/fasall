<?php

namespace App\Http\Controllers;
use App\Model\Entreprise;
use App\Model\Demandeur;
use App\Model\Demande;

use App\Http\Requests\DemandeRequest;
use Illuminate\Http\Request;

class DemandeurController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    { 
        $demandes=Demande::all();
        $entreprise=Entreprise::all();
        $demandeurs=Demandeur::all();
         return view('demandeur.index',compact('demandeurs','entreprise','demandes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $demandes=Demande::all();
        $entreprise=Entreprise::all();
        $demandeurs = Demandeur::orderBy('id','DESC')
        ->get();
        return view('demandeur.create',compact('demandeurs','entreprise','demandes'));
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

        $enrg = Demandeur::create($input);
         if ($enrg) {
             request()->session()->flash('status','demandeur enregistré');
             return redirect()->route('demandeur.create'); 
         }else{
            request()->session()->flash('erreur','demandeur non enregistré');
             return redirect()->back();
         }
         
    }
 // public function listDemandeur()
 // {
 //    $demandeurs = Demandeur::orderBy('id','DESC')
 //        ->paginate(4);
 //        return view('demandeur.listeDemandeur',compact('demandeurs'));
 // }
    /**
     * Display the specified resource.
     *
     * @param  \App\Demandeur  $demandeur
     * @return \Illuminate\Http\Response
     */
    public function show(Demandeur $demandeur)
    {
           $dem = Demandeur::where('id',$demandeur->id)->firstOrFail();
        //dd($dem->NOM);
       return view('demandeur.edit',compact('dem'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Demandeur  $demandeur
     * @return \Illuminate\Http\Response
     */
    public function edit(Demandeur $id)
    {
      
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Demandeur  $demandeur
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Demandeur $demandeur)
    {
        
         $input = $request->all();
        
        $enrg = $demandeur->update($input);
         if ($enrg) {
             request()->session()->flash('status','demandeur modifié');
             return redirect()->back();
         }else{
            request()->session()->flash('erreur','demandeur non modifié');
             return redirect()->back();
         }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Demandeur  $demandeur
     * @return \Illuminate\Http\Response
     */
    public function destroy(Demandeur $demandeur)
    {
               $supp = $demandeur->delete();
         if ($supp) {
             request()->session()->flash('status','demandeur supprimé');
             return redirect()->back();
         }else{
            request()->session()->flash('erreur','demandeur non supprimé');
             return redirect()->back();
         }
    }
}
