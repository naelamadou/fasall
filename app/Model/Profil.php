<?php

namespace App\Model;
use App\Model\Demandeur;
use App\Model\Entreprise;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    protected $guarded=[];
public function demandeur()
    {
    	return $this->belongsTo(Demandeur::class);
    }
public function entreprise()
    {
    	return $this->belongsToMany(Entreprise::class);
    }

}
