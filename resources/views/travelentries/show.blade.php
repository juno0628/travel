@extends('layouts.default')

@section('content')
	<h2>
		{!! link_to_route('travelplans.show', $travelplan->name, [$travelplan->slug])!!} - {{$travelentry->name}}

		{{$travelentry->description}}

	</h2>

@endsection