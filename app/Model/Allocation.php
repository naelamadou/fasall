<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Allocation extends Model
{
    protected $guarded=[];
     public function entreprise()
	{
	return $this->belongsTo(Entreprise::class);
	}
}
