<?php 

namespace App\services;

use App\Model\Demandeur;
use App\Model\Demande;
use App\Model\Profil;


class Helpers 
{


public function getProfilbyid($id)

{

	$listeprofil= Profil::where('id',$id)->get();
	//dd($listeprofil);
	return $listeprofil;
}



















}


















 ?>