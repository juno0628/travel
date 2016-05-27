<?php

namespace app\Http\Controllers;

use app\Travelplan;
use app\Travelentry;
use app\Http\Requests;
use app\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TravelplansController extends Controller
{
    //
	public function index()
	{
		$travelplans = Travelplan::all();
		return \View::make('travelplans.index', compact('travelplans'));
	}

	public function create()
	{
		return view('travelplans.create');
	}

	public function store()
	{
		//
	}

	public function show()
	{
		return view('travelplans.show', compact('travelplans'));
	}

	public function edit(Travelplan $travelplan)
	{
		return view('travelplans.show', compact('travelplan'));
	}

	public function update(Travelplan $travelplan) 
	{
		//
	}

	public function destroy(Travelplan $travelplan)
	{
		//
	}

}
