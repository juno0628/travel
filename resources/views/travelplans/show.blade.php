@extends('layouts.default')

@section('content')
	<h2>{{ $travelplan->category}}</h2>

	@if ( !$travelplan->travelentries->count())
		No Travelentries for this Travelplan
	@else
		<ul>
				@foreach( $travelplan->travelentries as $travelentry)
					<li> 
							{!! Form::open(array('class' => 'form-inline','method'=>'DELETE', 'route' => array('travelplans.travelentries.destroy', $travelplan->slug, $travelentry->slug))) !!}
							<a href="{{ route('travelplans.travelentries.show', [$travelplan->slug, $travelentry->slug]) }}">{{ $travelentry->category}}</a>
							(
							  {!! link_to_route('travelplans.travelentries.edit', 'Edit', array($travelplan->slug, $travelentry->slug), array('class' => 'btn btn-info')) !!}, 
                            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
								}
							)
							{!! Form::close() !!}
					</li>
				@endforeach
		</ul>
	@endif

	<p>
		{!! link_to_route('travelplans.index', 'Back to travelplans') !!} |
    {!! link_to_route('travelplans.travelentries.create', 'Create Travelentry', $travelplan->slug) !!}
	</p>

@stop