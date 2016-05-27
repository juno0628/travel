@extends('layouts.default')
 
@section('content')
    <h2>travelplans</h2>
 
    @if ( !$travelplans->count() )
        <p>Please create travelplans</p>
    @else
        <ul>
            @foreach( $travelplans as $travelplan )
                <li>
                    {!! Form::open(array('class' => 'form-inline', 'method' => 'DELETE', 'route' => array('travelplans.destroy', $travelplan->slug))) !!} Going to: 
                        <a href="{{ route('travelplans.show', $travelplan->slug) }}">{{ $travelplan->destination_city }}, {{ $travelplan->destination_country }} </a>
                        (
                            {!! link_to_route('travelplans.edit', 'Edit', array($travelplan->slug), array('class' => 'btn btn-info')) !!},
                            {!! Form::submit('Delete', array('class' => 'btn btn-danger')) !!}
                        )
                    {!! Form::close() !!}
                </li>
            @endforeach
        </ul>
    @endif
 
    <p>
        {!! link_to_route('travelplans.create', 'Create travelplan') !!}
    </p>
@endsection