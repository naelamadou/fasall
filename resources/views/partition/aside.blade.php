<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
      <img src="{{ asset('public/dist/img/emploie.jpg') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light" style="font-size: 100%; font-weight: bold;">CNEE</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <!--img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"--s>
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div-->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

               <li class="nav-main-item has-treeview menu-open">
                        <a class="nav-link active" href="{{route('home')}}">
                            <i class="fas fa-bell"></i>
                            <span class="nav-main-link-name">Bienvenue</span>
                        </a>
                    </li>

          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">

                <i class="fa fa-user" aria-hidden="true"></i>
              <p>
                Gestion Utilisateur
      
              </p>
            </a>
            
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('user.add') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Ajouter</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('show.user') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Lister</p>
                </a>
              </li>
             
            </ul>
          </li>
     <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">

                <i class="fas fa-briefcase" aria-hidden="true"></i>
              <p>
                Gestion Entreprise
              </p>
               </a>
               <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('entreprise.create')}}"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Entreprise</p>
                </a>
              </li>
      
             </ul>
           
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="fa fa-user" aria-hidden="true"></i>
              <p>
                Gestion Demandeur
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                
        <a href="{{route('demandeur.index')}}" class="nav-link" >
         <i class="far fa-circle nav-icon"></i>

           <p>Ajouter</p>
        </a>
              </li>
              <li class="nav-item">
      <a href="{{route('demandeur.create')}}" class=" nav-link" >

                  <i class="far fa-circle nav-icon"></i>
                  <p>Liste</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('profil.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Liste Profil</p>
                </a>
              </li>
            </ul>
          </li>
             
         
            <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <i class="nav-icon far fa-calendar-alt"></i>
              <p>
                Gestion CNEE
               
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('allocation.index')}}"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Contre Partie</p>
                </a>
              </li>
             <li class="nav-item">
                <a href="{{route('allocation.create')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Liste allocation</p>
                </a>
              </li>
              </ul>
          </li>
           <li class="nav-item has-treeview">
            <a href="#" class="nav-link active">
              <!-- <i class="nav-main-link-icon si si-cursor"></i> -->
              <!-- Download SVG icon from http://tabler-icons.io/i/location -->
  <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M21 3l-6.5 18a0.55 .55 0 0 1 -1 0l-3.5 -7l-7 -3.5a0.55 .55 0 0 1 0 -1l18 -6.5" /></svg>
              <p>
              Suivi demandeur
              </p>
            </a>

             <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('demande.create')}}"  class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Profils demandés</p>
                </a>
              </li>
             <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p></p>
                </a>
              </li>
              </ul>
          </li>
          
        </ul>     
              
              
              
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>