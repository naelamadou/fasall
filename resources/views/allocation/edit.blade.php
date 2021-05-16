@extends('layouts.backend')
@section('content')
<div class="content-wrapper">
  <h1 class="text-center" style="color:rgb(246, 120, 58);">Modifier l'allocation de l'entreprise</h1>
  <form class="col-md-12 col-lg-10 offset-1" action="{{ route('allocation.update',$allocation->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
      <label for="entreprise_id">Entreprise</label>
      <select class="form-control" id="entreprise_id" name="entreprise_id">
        <option disabled>Choisir entreprise</option>
        @foreach($entreprise as $eta)
        <option value="{{ $eta->id }}">{{ $eta->NOM }}</option>
        @endforeach
      </select>
      @error('entreprise_id')<p class="text-danger">{{ $message }}@enderror</p>
    </div>

    <div class="form-group">
      <label for="PRENOM">Allocation mensuelle</label>
       <input type="text" class="form-control" id="ALLOC_MENSUEL" name="ALLOC_MENSUEL" value="{{ $allocation->ALLOC_MENSUEL}}">
      @error('ALLOC_MENSUEL')<p class="text-danger">{{ $message }}@enderror</p>
    </div>
     <div class="form-group">
      <label for="PRENOM">Date de prise d'effet</label>
       <input type="text" class="form-control" id="PRISE" name="PRISE" value="{{ $allocation->PRISE}}">
      @error('PRISE')<p class="text-danger">{{ $message }}@enderror</p>
    </div>

   <div class="form-group">
      <label for="DATE">Date d'echéance</label>
      <input type="date" class="form-control" id="ECHEANCE" name="ECHEANCE" value="{{ $allocation->ECHEANCE}}">
      @error('ECHEANCE')<p class="text-danger">{{ $message }}@enderror</p>
    </div>




     <div class="form-group">
      <label for="ADRESSE">Nombre de mois</label>
      <input type="text" class="form-control" id="NBRE_MOIS" name="NBRE_MOIS" value="{{ $allocation->NBRE_MOIS}}">
      @error('ADRESSE')<p class="text-danger">{{ $message }}@enderror</p>
    </div>
     <div class="form-group">
      <label for="TEL">Contre partie mensuelle</label>
      <input type="text" class="form-control" id="CONTRE_PARTIE_MENSUE" name="CONTRE_PARTIE_MENSUEL" value="{{ $allocation->CONTRE_PARTIE_MENSUEL}}">
      @error('CONTRE_PARTIE_MENSUEL')<p class="text-danger">{{ $message }}@enderror</p>
    </div>
    <div class="form-group">
      <label for="EMAIL">Contre partie etat</label>
      <input type="text" class="form-control" id="CONTREPARTIE_ETAT" name="CONTREPARTIE_ETAT" value="{{ $allocation->CONTREPARTIE_ETAT }}">
      @error('CONTREPARTIE_ETAT')<p class="text-danger">{{ $message }}@enderror</p>
    </div>

      
    

 


    <div class="form-group col-md-12 col-lg-10 offset-1">
      <button type="submit" class="btn  mt-3 btn-lg btn-block text-white" style="background-color:rgb(246, 120, 58);">Enregister</button>
    </div>
  </form>
</div>
@endsection
