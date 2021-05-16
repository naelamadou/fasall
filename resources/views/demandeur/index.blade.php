@extends('layouts.backend')
@section('content')
         
<div class="content-wrapper">
  <h1 class="text-center" style="color:rgb(42, 49, 255);font-size: 150%;">Ajouter un nouveau demandeur</h1>
  <form class="col-md-12 col-lg-10 offset-1" action="{{route('demandeur.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group ">
      <label for="NOM">Nom</label>
      <input type="text" class="form-control" id="NOM" name="NOM">
      @error('NOM')<p class="text-danger">{{ $message }}@enderror</p>
    </div>

    <div class="form-group">
      <label for="PRENOM">Prénom</label>
       <input type="text" class="form-control" id="PRENOM" name="PRENOM">
      @error('PRENOM')<p class="text-danger">{{ $message }}@enderror</p>
    </div>
<div class="form-group">
  <label>Sexe</label>
    <div class="form-check">
        <label class="form-check-label">
          <input class="form-check-input" type="radio" name="SEXE" value="Masculin">
          Masculin
        </label>
        <label class="form-check-label"style="position:relative;left:50%; " >
          <input class="form-check-input" type="radio" name="SEXE"style="left:5%;" value="Féminin" >
          Féminin
        </label>

      </div>
       @error('SEXE')<p class="text-danger">{{ $message }}@enderror</p>
   </div>   
   <div class="form-group">
      <label for="DATE">Date de naissance</label>
      <input type="date" class="form-control" id="DATE" name="DATE">
      @error('DATE')<p class="text-danger">{{ $message }}@enderror</p>
    </div>

    <div class="form-group " >
        <label for="region">Région de naissance</label>
        <select name="region" id="region" class="form-control">
           <option value=Dakar>Dakar</option>
 <option value=Thiés>Thiés</option>
 <option value=Saint-Louis>Saint-Louis</option>
  <option value=Louga>Louga</option>
   <option value=Matam>Matam</option>
    <option value=Kaffrine>Kaffrine</option>
    <option value=Kaolack>Kaolack</option>
    <option value=kédougou>Kédougou</option>
    <option value=Kolda>Kolda</option>
    <option value=Diourbel>Diourbel</option>
    <option value=Fatick>Fatick</option>
    <option value=Zichinchor>Zichinchor</option>
    <option value=Sédhiou>Sédhiou</option>
    <option value=Tambacounda>Tambacounda</option>
        </select>
        @error('region')<p class="text-danger">{{ $message }}@enderror</p>
      </div>


     <div class="form-group">
      <label for="ADRESSE">Adresse</label>
      <input type="text" class="form-control" id="ADRESSE" name="ADRESSE">
      @error('ADRESSE')<p class="text-danger">{{ $message }}@enderror</p>
    </div>
     <div class="form-group">
      <label for="TEL">Téléphone</label>
      <input type="tel" class="form-control" id="Tel" name="TEL">
      @error('TEL')<p class="text-danger">{{ $message }}@enderror</p>
    </div>
    <div class="form-group">
      <label for="EMAIL">Email</label>
      <input type="email" class="form-control" id="EMAIL" name="EMAIL">
      @error('EMAIL')<p class="text-danger">{{ $message }}@enderror</p>
    </div>
    <div class="form-group col-md-12 col-lg-10 offset-1">
      <button type="submit" class="btn  mt-3 btn-lg btn-block text-white" style="background-color:rgb(42, 49, 255);">Enregister</button>
    </div>
  </form>

   
</div>
@endsection