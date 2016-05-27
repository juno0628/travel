
@extends('layouts.default')
 
@section('content')
    <h2>Edit travelplan</h2>
 
    {!! Form::model($travelplan, ['method' => 'PATCH', 'route' => ['travelplans.update', $travelplan->slug]]) !!}
        @include('travelplans/partials/_form', ['submit_text' => 'Edit travelplan'])
    {!! Form::close() !!}
@endsection