<?php

namespace App\Model;
use App\Model\Entreprise;

use Illuminate\Database\Eloquent\Model;

class Contrat extends Model
{
    protected $guarded=[];
    public function entreprise()
    {
    	return $this->belongsToMany(Entreprise::class);
    }
    public function entreprise()
	{
	return $this->belongsTo(Entreprise::class);
	}
	public function demandeur()
	{
	return $this->belongsTo(Demandeur::class);
	}
}
