<?php

namespace App\Http\Controllers;

use App\Model\Allocation;
use App\Model\Entreprise;
use App\Model\Demande;

use App\Http\Requests\AllocationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AllocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $entreprise=Entreprise::all();
        $demandes=Demande::all();
        $allocations=Allocation::all();
        $entreprises=Entreprise::all();
         return view('allocation.index',compact('allocations','entreprises','entreprise','demandes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  $demandes=Demande::all();
         $entreprise = DB::table('allocations')
        ->join('entreprises', 'allocations.entreprise_id', '=', 'entreprises.id')
        ->select('allocations.id' ,'NOM','ALLOC_MENSUEL','PRISE','ECHEANCE','NBRE_MOIS','MONTANT_TOTAL','CONTRE_PARTIE_MENSUEL','CONTREPARTIE_ETAT')
        ->get();

        return view('allocation.create',compact('entreprise','demandes'));

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

        $enrg = Allocation::create($input);
         if ($enrg) {
             request()->session()->flash('status','Allocation enregistré');
             return redirect()->route('allocation.create');
         }else{
            request()->session()->flash('erreur','demandeur non enregistré');
             return redirect()->back();
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Allocation  $allocation
     * @return \Illuminate\Http\Response
     */
    public function show(Allocation $allocation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Allocation  $allocation
     * @return \Illuminate\Http\Response
     */
    public function edit(Allocation $allocation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Allocation  $allocation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Allocation $allocation)
    {
      $input = $request->all();
        
        $enrg = $allocation->update($input);
         if ($enrg) {
             request()->session()->flash('status','Allocation modifié');
             return redirect()->back();
         }else{
            request()->session()->flash('erreur','Allocation non modifié');
             return redirect()->back();
         }   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Allocation  $allocation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Allocation $allocation)
    {
                 $supp = $allocation->delete();
         if ($supp) {
             request()->session()->flash('status','Categorie supprimé');
             return redirect()->back();
         }else{
            request()->session()->flash('erreur','Categorie non supprimé');
             return redirect()->back();
         }
    }
}
