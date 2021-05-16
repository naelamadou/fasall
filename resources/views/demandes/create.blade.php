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
      <h1 class="text-center" style="color:rgb(246, 120, 58);">Listes des profils envoyés par l'employeur</h1>
      <div class="content">
        <div class="table-responsive">
      <div class="row">
          <table id="example1" class="table table-bordered table-hover"style="width:125%;">
            <thead style="color:rgb(246, 120, 58);">
              <tr>
                <th class="">Nom entreprise</th>
                 <th class="">Nom profil</th>
                 <th class="">Niveau</th>

                  <th class="">Nombre de profil</th>
                  <th class="">Date de demande</th>
                
              <th>Actions</th>
            
              </tr>
            </thead>

            <tbody>
              @foreach($demandes as $demande)
              <tr>
                <td>{{ $demande->entreprise->NOM }}</td>
                <td>{{ $demande->profil->NOM_PROFIL}}</td>
                <td>{{ $demande->profil->NIVEAU}}</td>

                <td>{{ $demande->nbre_profil}}</td>
                <td>{{ $demande->created_at}}</td>
               
                <!--  -->
                <td>

                
               
                   
                           <a href="{{route('filtredemande',$demande->profil->id)}}" class="btn btn-primary">   
                          
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5.5 5h13a1 1 0 0 1 .5 1.5l-5 5.5l0 7l-4 -3l0 -4l-5 -5.5a1 1 0 0 1 .5 -1.5" /></svg></a>   
                          
                          
<!--                      <form action="" method="post">
                              @csrf
                              @method('DELETE')
                              
                              <button type="submit" class="btn btn-danger" onclick="if(!confirm('Voulez-vous vraiment le supprimer ?')) return false; "><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg></button>
                            </form> -->

               </td>
                
                
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