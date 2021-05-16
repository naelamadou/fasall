  @extends('layouts.backend')
  @section('content')

  <!-- Page Content -->
  <div class="content">
    <!-- Full Table -->
    <div class="block">
     @if(session('success'))
      <div class="alert alert-success">
        {{ session('success') }}
      </div>
      @endif
      <h1 class="text-center" style="color:rgb(246, 120, 58);">Liste des allocations attribués</h1>
      <div class="content-wrapper">
        <div class="table-responsive">
          <div class="row">
          <table id="example1" class="table table-bordered table-hover" >
            <thead style="color:rgb(246, 120, 58);">
              <tr>
                <th class="">Nom </th>
                
                <th class="">Date de prise d'effet</th>
                <th class="">Date d'echéance</th>
                <th class="">Durée(Mois)</th>
                 <th class="">Indemnités</th>
               <th class="">Part entreprise</th>
                <th class="">Contre partie etat</th>
                <th class="">Montant total</th>
             
              <th>Actions</th>
              </tr>
            </thead>

            <tbody>
                 
             @foreach($entreprise as $entreprises)
                <tr>
                <td>{{ $entreprises->NOM ?? ''}}</td>
               
                <td>{{ $entreprises->PRISE}}</td>
                <td>{{  $entreprises->ECHEANCE }}</td>
                <td>{{  $entreprises->NBRE_MOIS}}</td>
                <td>{{ $entreprises->ALLOC_MENSUEL}}</td>
            
                  <td>{{  $entreprises->CONTRE_PARTIE_MENSUEL }}</td>
                <td>{{  $entreprises->CONTREPARTIE_ETAT }}</td>
                <td>{{  $entreprises->MONTANT_TOTAL}}</td>
                 <td>
                  <a href="" class="btn btn-primary" data-bs-toggle="modal" ><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M9 7h-3a2 2 0 0 0 -2 2v9a2 2 0 0 0 2 2h9a2 2 0 0 0 2 -2v-3" /><path d="M9 15h3l8.5 -8.5a1.5 1.5 0 0 0 -3 -3l-8.5 8.5v3" /><line x1="16" y1="5" x2="19" y2="8" /></svg></a>

                     <form action="{{route('allocation.destroy',$entreprises->id) }} " method="post">
                              @csrf
                              @method('DELETE')
                              
                              <button type="submit" class="btn btn-danger" onclick="if(!confirm('Voulez-vous vraiment le supprimer ?')) return false; "><svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="4" y1="7" x2="20" y2="7" /><line x1="10" y1="11" x2="10" y2="17" /><line x1="14" y1="11" x2="14" y2="17" /><path d="M5 7l1 12a2 2 0 0 0 2 2h8a2 2 0 0 0 2 -2l1 -12" /><path d="M9 7v-3a1 1 0 0 1 1 -1h4a1 1 0 0 1 1 1v3" /></svg></button>
                            </form>
                </td>   
              </tr>
                @endforeach
        
    

              

              
            </tbody>
          </div>
          </table>
        </div>
      </div>
    </div>
  </div>
  
  <!-- END Full Table -->
  @endsection