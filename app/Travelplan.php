<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Travelplan extends Model
{
    //
	public function travelentries() 
	{
		return $this->hasMany('app\Travelentry');
	}
}
