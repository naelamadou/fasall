@extends('layouts.backend')
@section('content')
<div class="content-wrapper">
  <h1 class="text-center" style="color:rgb(42, 49, 255);">Attribuer une allocation pour une entreprise</h1>
  <form class="col-md-12 col-lg-10 offset-1" action="{{route('allocation.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="entreprise_id">Entreprise</label>
      <select class="form-control" id="entreprise_id" name="entreprise_id">
        <option disabled>Choisir entreprise</option>
        @foreach($entreprises as $eta)
        <option value="{{ $eta->id }}">{{ $eta->NOM }}</option>
        @endforeach
      </select>
      @error('entreprise_id')<p class="text-danger">{{ $message }}@enderror</p>
    </div>
   
   
   <div class="form-group">
      <label for="DATE">Date de prise d'effet</label>
      <input type="date" class="form-control" id="PRISE" name="PRISE">
      @error('PRISE')<p class="text-danger">{{ $message }}@enderror</p>
    </div>

  

     <div class="form-group">
      <label for="ADRESSE">Date d'echéance</label>
      <input type="DATE" class="form-control" id="ECHEANCE" name="ECHEANCE">
      @error('ECHEANCE')<p class="text-danger">{{ $message }}@enderror</p>
    </div>
     <div class="form-group">
      <label for="TEL">Durée (Mois)</label>
      <input type="text" class="form-control" id="Tel" name="NBRE_MOIS">
      @error('NBRE_MOIS')<p class="text-danger">{{ $message }}@enderror</p>
    </div>
    <div class="form-group">
      <label for="PRENOM">Indemnités</label>
       <input type="text" class="form-control" id="ALLOC_MENSUEL" name="ALLOC_MENSUEL">
      @error('ALLOC_MENSUEL')<p class="text-danger">{{ $message }}@enderror</p>
    </div>
    <div class="form-group">
      <label for="EMAIL">Part entreprise</label>
      <input type="text" class="form-control" id="EMAIL" name="CONTRE_PARTIE_MENSUEL">
      @error('CONTRE_PARTIE_MENSUEL')<p class="text-danger">{{ $message }}@enderror</p>
    </div>
    <div class="form-group">
      <label for="text">Contre partie etat</label>
      <input type="text" class="form-control" id="CONTREPARTIE_ETAT" name="CONTREPARTIE_ETAT">
      @error('CONTREPARTIE_ETAT')<p class="text-danger">{{ $message }}@enderror</p>
    </div>
     <div class="form-group">
      <label for="TEL">Montant total</label>
      <input type="text" class="form-control" id="MONTANT_TOTAL" name="MONTANT_TOTAL">
      @error('MONTANT_TOTAL')<p class="text-danger">{{ $message }}@enderror</p>
    </div>

      
    

 


    <div class="form-group col-md-12 col-lg-10 offset-1">
      <button type="submit" class="btn  mt-3 btn-lg btn-block text-white" style="background-color:rgb(42, 49, 255);">Enregister</button>
    </div>
  </form>
</div>
@endsection
