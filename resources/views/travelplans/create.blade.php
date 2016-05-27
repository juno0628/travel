@extends('layouts.default')
 
@section('content')
    <h2>Create travelplan</h2>
 
    {!! Form::model(new App\travelplan, ['route' => ['travelplans.store']]) !!}
        @include('travelplans/partials/_form', ['submit_text' => 'Create travelplan'])
    {!! Form::close() !!}
@endsection
 
