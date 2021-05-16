<?php

namespace App\Model;
use App\Model\Profil;
use App\Model\Entreprise;

use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    protected $guarded=[];

    public function entreprise()
	{
	return $this->belongsTo(Entreprise::class);
	}
	public function profil()
	{
	return $this->belongsTo(Profil::class);
	}
}


