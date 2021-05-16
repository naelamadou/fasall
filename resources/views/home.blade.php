@extends('layouts.backend')

@section('content')


<!-- <div class="content-wrapper">
<div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
</div> -->



<section class="content-wrapper">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>{{count($entreprise)}}</h3>

                <p>Entreprises</p>
              </div>
              <div class="icon">
                <i class="fas fa-briefcase"></i>
              </div>
               
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>{{count($demandeur)}}</h3>

                <p>Demandeurs</p>
              </div>
              <div class="icon"><i class='fas fa-graduation-cap'></i>
              </div>
              <!-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> -->
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>{{count($profil)}}</h3>

                <p>Profils</p>
              </div>
              <div class="icon">
               <i class="fas fa-book-reader"></i>
              </div>
             
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- < small box> -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>{{count($user)}}</h3>

                <p>Utilisateurs</p>
              </div>
              <div class="icon"><i class="fa fa-user" ></i>
              </div>
              
            </div>
          </div> 
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
        
        </div>
        <!-- /.row (main row) -->
      
    </section>
@endsection
