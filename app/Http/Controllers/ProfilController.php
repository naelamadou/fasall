<?php

namespace App\Http\Controllers;

use App\Model\Profil;
use App\Model\Entreprise;
use App\Model\Demandeur;
use App\Model\Demande;

use Illuminate\Http\Request;
use MercurySeries\Flashy\Flashy;

use Illuminate\Support\Facades\Hash;


class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    $demandes=Demande::all();
          $entreprise=Entreprise::all();
          $profils=Profil::all();
          $demandeurs=Demandeur::all();
          return view('profil.index',compact('profils','demandeurs','entreprise','demandes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   $demandes=Demande::all();
         $entreprise=Entreprise::all();
        $profils=Profil::orderBy('id','DESC')
        ->get();
        return view('profil.create',compact('profils','entreprise','demandes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
                $profils = new Profil();
                $profils->demandeur_id=request('demandeur_id');
             $profils ->NOM_PROFIL = request('NOM_PROFIL');
                $profils ->NIVEAU = request('NIVEAU');
                $profils ->NOMFILE = request('NOMFILE');

              if ($request->hasFile('NOMFILE')) {
                 $imageNameArr = [];
                 foreach ($request->NOMFILE as $file) {
                 $fileName = time() . '-' . $file->getClientOriginalName();
                 $onlyName =  $name = explode('.', $fileName)[0];
                 $imageNameArr[] = $fileName;
                 $file->move(public_path('profil'), $fileName);
                 $profils->File = $fileName;
                $profils->NOMFILE = $onlyName;
                 $profils->save();

                  Flashy::message('Profils ajouté avec succés'); 
                   return redirect()->route('profil.create');   

    //return 'votre entrprise a bien ete enregistre';
}

}
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function show(Demandeur $demandeur)
    {
           $dem = Demandeur::where('id',$demandeur->id)->firstOrFail();
           dd($dem);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
       //  $profils = Profil::findOrFail($id);
       // return view('profil.create',compact('profils'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       // $data  = $request->validate([
       //      'demandeur_id'=>'required',
       //      'NOM_PROFIL' => 'required',
       //      'NIVEAU' => 'required',
       //      'NOMFILE[]'=>'required',
            
       //  ]);

       //  $profils = Profil::findOrFail($id);
       //  //$demandeur->update($data);
       //  $profils->NOM_PROFIL = request('NOM_PROFIL');
       //  $profils->NIVEAU = request('NIVEAU');
       //  $profils->NOMFILE[] = request('NOMFILE[]');
       
       //  $profil->save();
       //  Flashy::message('profil modifié avec succés');
       //  return redirect()->route('profil.create');
  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $profil = Profil::findOrFail($id);
     $profil->delete();
        return redirect()->route('profil.create')->with('Profil supprimmé avec succés');
    }
      
      public function getId(Demandeur $demandeur)
    {     $demandes=Demande::all();
            $entreprise=Entreprise::all();
           $dem = Demandeur::where('id',$demandeur->id)->firstOrFail();
          // dd($dem);
           return view('profil.index',compact('dem','entreprise','demandes'));
    }


}
