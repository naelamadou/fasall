@extends('layouts.backend1')
@section('content')
         
<div class="content-wrapper">
  <h1 class="text-center" style="color:rgb(42, 49, 255);font-size: 150%;">Veuillez demander un profil</h1>
  <form class="col-md-12 col-lg-10 offset-1" action="{{route('demande.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-group ">
      <label for="NOM">Non entreprise</label>
   <select class="form-control" name="entreprise_id">
     <option></option>
     @foreach($entreprise as $entreprises)
     <option value="{{$entreprises->id}} ">{{$entreprises->NOM}} </option>

     @endforeach
   </select>
    </div>

    <div class="form-group">
      <label for="PRENOM">Nom Profils</label>
     <select class="form-control"  name="profil_id">
     <option></option>
     @foreach($profils as $profil)
     <option value="{{$profil->id}} ">{{$profil->NOM_PROFIL}} </option>

     @endforeach
   </select>
    </div>
      <div class="form-group">
      <label for="PRENOM">Niveau</label>
     <select class="form-control"  name="niveau">
     <option></option>
     @foreach($profils as $profil)
     <option value="{{$profil->NIVEAU}} ">{{$profil->NIVEAU}} </option>

     @endforeach
   </select>
    </div>

   <div class="form-group">
      <label for="DATE">Nombre de profil</label>
      <input type="number" class="form-control" id="DATE" name="nbre_profil">
      
    </div>

    
    <div class="form-group col-md-12 col-lg-10 offset-1">
      <button type="submit" class="btn  mt-3 btn-lg btn-block text-white" style="background-color:rgb(42, 49, 255);">Enregister</button>
    </div>
  </form>

   
</div>
@endsection