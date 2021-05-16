@extends('layouts.backend')
@section('content')   
<div class="content-wrapper">
<h1 class="text-center" style="color:rgb(42, 49, 255);">Modifier les informations du demandeur</h1>
<form class="col-md-12 col-lg-10 offset-1" action="{{route('demandeur.update',$dem->id)}}" method="POST">
    @csrf
     @method('PUT')
    <div class="form-group">
      <label for="NOM">Nom</label>
      <input type="text" class="form-control" id="NOM" name="NOM"value="{{ $dem->NOM ?? '' }}">
      @error('NOM')<p class="text-danger">{{ $message }}@enderror</p>
    </div>
    <div class="form-group">
      <label for="PRENOM">Prénom</label>
       <input type="text" class="form-control" id="PRENOM" name="PRENOM" value="{{ $dem->PRENOM }}">
      @error('PRENOM')<p class="text-danger">{{ $message }}@enderror</p>
    </div>
<div class="form-group">
  <label>Sexe</label>
    <div class="form-check">
        <label class="form-check-label">
          @if($dem->SEXE === "Masculin")
              <input class="form-check-input"  type="radio" name="SEXE" value="{{ $dem->SEXE}}" checked>Masculin
              @elseif($dem->SEXE === "Féminin")
              <input class="form-check-input"  type="radio" name="SEXE" value="{{ $dem->SEXE}}" >Masculin
          @endif
        </label>
        <label class="form-check-label"style="position:relative;left:50%; " >
          @if($dem->SEXE === "Féminin")
            <input class="form-check-input" type="radio" name="SEXE"style="left:5%;" value="{{ $dem->SEXE }}" checked >Féminin
            @elseif($dem->SEXE === "Masculin")
            <input class="form-check-input" type="radio" name="SEXE"style="left:5%;" value="{{ $dem->SEXE }}" >Féminin
          @endif
        </label>
    </div>
       @error('SEXE')<p class="text-danger">{{ $message }}@enderror</p>
   </div>   
   <div class="form-group">
      <label for="DATE">Date de naissance</label>
      <input type="date" class="form-control" id="DATE" name="DATE" value="{{ $dem->DATE }}">
      @error('DATE')<p class="text-danger">{{ $message }}@enderror</p>
    </div>

    <div class="form-group " >
        <label for="region">Région de naissance</label>
        <select name="region" id="region" class="form-control" value="{{ $dem->region }}" >
          <option value="{{ $dem->region }}">{{ $dem->region }}</option>
         
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
      <input type="text" class="form-control" id="ADRESSE" name="ADRESSE" value="{{ $dem->ADRESSE }}">
      @error('ADRESSE')<p class="text-danger">{{ $message }}@enderror</p>
    </div>
     <div class="form-group">
      <label for="TEL">Téléphone</label>
      <input type="tel" class="form-control" id="Tel" name="TEL" value="{{ $dem->TEL}}">
      @error('TEL')<p class="text-danger">{{ $message }}@enderror</p>
    </div>
    <div class="form-group">
      <label for="EMAIL">Email</label>
      <input type="email" class="form-control" id="EMAIL" name="EMAIL" value="{{ $dem->EMAIL }}">
      @error('EMAIL')<p class="text-danger">{{ $message }}@enderror</p>
    </div>
    <div class="form-group col-md-12 col-lg-10 offset-1">
      <button type="submit" class="btn  mt-3 btn-lg btn-block text-white" style="background-color:rgb(42, 49, 255);">Modifier</button>
    </div>
  </form>
</div>
@endsection
