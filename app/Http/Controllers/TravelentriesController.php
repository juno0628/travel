<?php

namespace app\Http\Controllers;

use app\Travelplan;
use app\Travelentry;
use app\Http\Requests;
use app\Http\Controllers\Controller;

use Illuminate\Http\Request;

class TravelentriesController extends Controller
{
    //
	public function index(Travelplan $travelplan)
	{
		return View::make('travelentries.index', compact('travelplan'));
	}

	public function create(Travelplan $travelplan)
	{
		return view('travelentries.create', compact('travelplan'));
	}

	public function store(Travelplan $travelplan)
	{

	}

	public function show(Travelplan $travelplan, Travelentry $travelentry)
	{
		return view('travelentries.show', compact('travelplan','travelentry'));
	}

	public function edit(Travelplan $travelplan, Travelentry $travelentry)
	{
		return view('travelentries.edit',compact('travelplan','travelentry'));
	}

	public function update(Travelplan $travelplan, Travelentry $travelentry)
	{
		//
	}

	public function destroy(Travelplan $travelplan, Travelentry $travelentry)
	{
		//
	}
}
