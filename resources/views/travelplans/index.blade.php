@extends('layout.default')

@section('content')
	<h2>Travel Plans from travelplans index page</h2>
	<!-- @if (!$travelplans->count())
		<p> Please start creating plans </p>
	@else 
		<ul>
				@foreach($travelplans as $travelplan)
					<li><a href="{{route('travelplans.travelentries.show', [$travelplan->slug, $travelentry->slug])}}">{{$travelentry->name}}</a></li>
				@endforeach
		</ul>
	@endif
	<p>
		{!! link_to_route('travelplans.create',' 'Create Travelplan')!!}
	</p> -->
@stop