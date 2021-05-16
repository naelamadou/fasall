@extends('layouts.backend')

@section('content')
<div class="content-wrapper">

<h1 class="text-center" style="color:rgb(42, 49, 255)" ;>Ajouter un profil pour le demandeur</h1>

<div class="col-md-12 col-lg-10 offset-1 ">
 <form action="{{route('profil.store')}} " method="post" enctype="multipart/form-data" class="dropzone">
  @csrf

  <div class="form-group">
     <input type="hidden" name="demandeur_id" value="{{$dem->id}}">
      <label for="NOM">Nom du profil</label>
      <input type="text" class="form-control" id="NOM" name="NOM_PROFIL">
      @error('NOM_PROFIL')<p class="text-danger">{{ $message }}@enderror</p>
    </div>
     
    
  <div class="form-group " >
        <label for="NIVEAU">Niveau</label>
        <select name="NIVEAU" id="NIVEAU" class="form-control">
          <option>Choisir un niveau</option>
          <option value=Baccalaureat>Baccalaureat</option>
           <option value=Licence>Licence</option>
 <option value=Master2>Master 2</option>
 <option value=Doctorat>Doctorat</option>
  
   
        </select>
        @error('region')<p class="text-danger">{{ $message }}@enderror</p>
      </div>



  <div class="from-group">
   <label for="">Curriculum Vitea</label>
   <input type="file" name="NOMFILE[]" class="form-control" multiple>
   @error('NOMFILE[]')<p class="text-danger">{{ $message }}@enderror</p>
  </div>
  



  

  <div class="from-group mt-4">
   <button type="submit" class="btn text-white" style="background-color:rgb(42, 49, 255)">Enregistrer</button>
  </div>

 </form>
</div>
</div>

@endsection