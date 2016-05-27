<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Travelentry extends Model
{
    //
	public function project()
	{
		return $this->belongsTo('app\Travelplan');
	}
}
