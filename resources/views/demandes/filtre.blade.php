@inject('hp','App\services\Helpers')
  @extends('layouts.backend')

  @section('content')
<div class="content-wrapper" >

    <!-- Full Table -->
    <div class="modal-content">
      @if(session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
      @endif
      <h1 class="text-center" style="color:rgb(246, 120, 58);">Listes des demandeur ayant le profil informaticien</h1>
      <div class="content">
        <div class="table-responsive">
      <div class="row">
          <table id="example1" class="table table-bordered table-hover"style="width:125%;">
            <thead style="color:rgb(246, 120, 58);">
              <tr>
                <th class="">Nom </th>
                 <th class="">Prénom</th>
                 <th class="">Profil</th>
                 <th class="">Niveau</th>
                 <th class="">Curriculum vitea</th>                
              <th>Actions</th>
            
              </tr>
            </thead>

            <tbody>
              @foreach($hp->getProfilbyid($demandes->profil_id) as $profil)
              <tr>
                <td>{{ $profil->demandeur->NOM}}</td>
                <td>{{ $profil->demandeur->PRENOM}}</td>
                <td>{{ $profil->NOM_PROFIL}}</td>
                <td>{{ $profil->NIVEAU}}</td>
                <td>{{ $profil->NOMFILE}}</td>
            
              </tr>

              @endforeach
            </tbody>
          
          </table>
        </div>
      </div>
      </div>
    </div>

  </div> 

   @endsection