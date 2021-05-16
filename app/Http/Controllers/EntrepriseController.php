<?php

namespace App\Http\Controllers;

use App\Model\Entreprise;
use App\Model\Demande;
use Illuminate\Http\Request;


use MercurySeries\Flashy\Flashy;
use Illuminate\Support\Facades\DB;
// appel de la facde mail
use Illuminate\Support\Facades\Mail;
use App\Mail\DemandeMail;


class EntrepriseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response

     */
    public function entreprise()
    {
      return view('entreprise.HomeEntreprise');  
    }
    public function index()
    {    $demandes=Demande::all();
        $entreprise=Entreprise::all();
        return view('entreprise.index',compact('entreprise','demandes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          $demandes=Demande::all();
        $entreprise = Entreprise::orderBy('id','DESC')
       ->paginate(9);
        return view('entreprise.create',compact('entreprise','demandes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         
     $entreprise = new Entreprise();
          $entreprise->NOM = request('NOM');
          $entreprise->activite = request('activite');
          $entreprise->nombre = request('nombre');
           $entreprise->TEL = request('TEL');
            $entreprise->ADRESSE = request('adresse');
             $entreprise->EMAIL = request('EMAIL');
              $entreprise->NINEA = request('NINEA');
               $entreprise->REGIT_COMMERCE = request('REGIT_COMMERCE');

$entreprise->NOM_FICHIER_DEMANDE = request('NOM_FICHIER_DEMANDE');

if ($request->hasFile('NOM_FICHIER_DEMANDE')) {
            $imageNameArr = [];
           foreach ($request->NOM_FICHIER_DEMANDE as $file) {
         
            $fileName = time() . '-' . $file->getClientOriginalName();
            $onlyName =  $name = explode('.', $fileName)[0];
              $imageNameArr[] = $fileName;
               
             $file->move(public_path('entreprise'), $fileName);
              
                $entreprise->File = $fileName;
               $entreprise->NOM_FICHIER_DEMANDE = $onlyName;
      
                $entreprise->save();
    Flashy::message('Entreprise ajouté avec succés');
return redirect()->route('entreprise.index');
    //return 'votre entrprise a bien ete enregistre';
}

}
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function show(Entreprise $entreprise)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function edit(Entreprise $entreprise)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Entreprise $entreprise)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Entreprise  $entreprise
     * @return \Illuminate\Http\Response
     */
    public function destroy(Entreprise $entreprise)
    {
        //
    }
    public function validerEntreprise($id)
    {

         $valider = "validé";
        $entreprises=Entreprise::find($id);
        $validDemande=$entreprises;
       
       Flashy::message('email envoye!!!', 'http://localhost/entreprise/create');
       MAIL::to($entreprises->EMAIL)->send(new DemandeMail());
          return redirect()->route('entreprise.create');
           

    }
  public function rejeterEntreprise($id)
    {
        $rejectDemande = "rejeté";
        $validDemande = Entreprise::find($id);
        //$validDemande->etat = $rejectDemande;
        $validDemande->update();
        Flashy::message('Demande rejeté!!!', 'http://localhost/entreprise/create');
        return redirect()->route('entreprise.create');
    }

}
