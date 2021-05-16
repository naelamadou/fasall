
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
       <h1 class="text-center" style="color:rgb(246, 120, 58);font-size: 150%;">Liste des entreprises demandant une adhésion</h1>
         <div class="content-wrapper">

        <div class="table-responsive">
          <div class="row">
      <table id="example1" class="table table-bordered table-hover" >
            <thead style="color:rgb(246, 120, 58);">
          
            <tr>
            
              <th >Nom/Entreprise</th>
           
              <th>Adresse</th>
              <th>Email</th>
              <th>Activité principal</th>
              <th>NINEA</th>
              <th>Registre commerce</th>
              <th>Fichier de demande</th>
               <th  style="width: 14%;" >Actions</th>
              
      
            </tr>
          </thead>
        
          <tbody>
          	  @foreach($entreprise as $entreprises)
              <tr>
               <td class="font-w600 font-size-sm" >
                                <a href="" style="color: black;">{{ $entreprises->NOM }}</a>
                            </td>
                            <td class="font-w600 font-size-sm" >
                                <a href="" style="color: black;">{{ $entreprises->ADRESSE }}</a>
                            </td>

                        <td class="font-w600 font-size-sm" >
                                <a href="" style="color: black;">{{ $entreprises->EMAIL }}</a>
                            </td>
                            <td class="font-w600 font-size-sm" >
                                <a href="" style="color: black;">{{ $entreprises->activite}}</a>
                            </td>
   
                            <td class="font-w600 font-size-sm" >
                                <a href="" style="color: black;">{{ $entreprises->NINEA }}</a>
                            </td>

                          <td class="font-w600 font-size-sm" >
                                <a href="" style="color: black;">{{ $entreprises->REGIT_COMMERCE }}</a>
                           </td>
                            
                           <td class="font-w600 font-size-sm" >
                       <a href="{{asset('public/entreprise/'.$entreprises->FILE)}}" style="color: black;" target="_blank">{{ $entreprises->FILE }}</a>
                      </td>
                      <td>
                        <a href=" {{ route('validerEntreprise',$entreprises->id) }}"class="btn btn-primary"><!-- Download SVG icon from http://tabler-icons.io/i/check -->

                          <!-- moi -->
  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M5 12l5 5l10 -10" /></svg></a>
                        <!-- Download SVG icon from http://tabler-icons.io/i/x -->
<a href=" {{ route('rejeterEntreprise',$entreprises->id) }} "class="btn btn-danger"  > <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><line x1="18" y1="6" x2="6" y2="18" /><line x1="6" y1="6" x2="18" y2="18" /></svg></a> 
                      </td>

                     
              @endforeach
          </tbody>
        
        </table>
      </div>
        {{ $entreprise->links() }}
      </div>
    </div>
  </div>
  <!-- END Full Table -->
  @endsection