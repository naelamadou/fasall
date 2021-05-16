<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Formulaire d'adhesion a la convention Etat Employeur</title>

    <!-- Icons font CSS-->
    <link href="public/asset2/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="public/asset2/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="public/asset2/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="public/asset2/vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="public/asset2/css/main.css" rel="stylesheet" media="all">
</head> 

<body>

<div class="bg-image" style="background-image: url('{{ asset('public/dist/img/fatoush.jpg') }}');">

<div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
            <h2 class="title">Formulaire d'adhesion a la convention Etat Employeur </h2>
                     @if(session('success'))
 <div class="alert alert-success">
  {{ session('success') }}
  </div>
 @endif

                </div>
<form class="" action="{{ route('entreprise.index') }}" method="POST" enctype="multipart/form-data">
  @csrf

 


 <div class="form-row">
 <div class="form-group col-md-5">
      <label for="NOM">Nom/Entreprise</label>
      <input type="text" class="input--style-5" id="NOM" placeholder="Nom" name="NOM">
      @error('NOM')<p class="text-danger">{{ $message }}@enderror</p>

    </div>

     
 <div class="form-group col-md-5">
      <label for="">Activite Principal</label>
      <input type="text" class="input--style-5" id="activite" placeholder="activite" name="activite">
      @error('activite')<p class="text-danger">{{ $message }}@enderror</p>

    </div>
  </div>


<div class="form-row">

 <div class="form-group col-md-5">
   <label for="">Nombre d'employers</label>
   <input type="number"  class="input--style-5" id="nombre" placeholder="nombre" name="nombre">
      @error('nombre')<p class="text-danger">{{ $message }}@enderror</p> 
  </div>


 <div class="form-group col-md-5">
      <label for="NOM">Adresse</label>
      <input type="text" class="input--style-5" id="adresse" placeholder="adresse" name="adresse">
      @error('adresse')<p class="text-danger">{{ $message }}@enderror</p>
    </div>
  </div>
  
<div class="form-row">

<div class="form-group col-md-5">
      <label for="EMAIL">Email</label>
      <input type="text" class="input--style-5" id="EMAIL" placeholder="xyz@adresse.com" name="EMAIL">
      @error('EMAIL')<p class="text-danger">{{ $message }}@enderror</p>
    </div>


                        

<div class="form-group col-md-5">
      <label for="TEL">Telephone</label>
      <input type="int" class="input--style-5" id="TEL" placeholder="(+221)" name="TEL">
      @error('TEL')<p class="text-danger">{{ $message }}@enderror</p>
    </div>



 <div class="form-group col-md-5">
      <label for="NOM">NINEA</label>
      <input type="text" class="input--style-5" id="NINEA" name="NINEA">
      @error('NINEA')<p class="text-danger">{{ $message }}@enderror</p>
    </div>

 <div class="form-group col-md-5">
      <label for="NOM">Régistre de commerce</label>
      <input type="text" class="input--style-5" id="REGIT_COMMERCE" name="REGIT_COMMERCE">
      @error('REGIT_COMMERCE')<p class="text-danger">{{ $message }}@enderror</p>
    </div>

  </div>


   <div class="form-group col-md-10">
   <label for="">Parcourir pour joindre la demande</label>
   <input type="file" name="NOM_FICHIER_DEMANDE[]" class="input--style-5" >
  </div>

         
              <div>
    <button class="btn btn--radius-2 btn--red" type="submit">Enregistrer</button>
                        </div>
                      </form>
                      </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="public/asset2/vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="public/asset2/vendor/select2/select2.min.js"></script>
    <script src="public/asset2/vendor/datepicker/moment.min.js"></script>
    <script src="public/asset2/vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="public/asset2/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->





