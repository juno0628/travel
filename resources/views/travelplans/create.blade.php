@extends('layouts.default')
 
@section('content')
    <h2>Create travelplan</h2>
 
    {!! Form::model(new App\travelplan, ['route' => ['travelplans.store']]) !!}
        @include('travelplans/partials/_form', ['submit_text' => 'Create travelplan'])
    {!! Form::close() !!}
@endsection
 
<!-- /resources/views/travelplans/edit.blade.php -->
@extends('app')
 
@section('content')
    <h2>Edit travelplan</h2>
 
    {!! Form::model($travelplan, ['method' => 'PATCH', 'route' => ['travelplans.update', $travelplan->slug]]) !!}
        @include('travelplans/partials/_form', ['submit_text' => 'Edit travelplan'])
    {!! Form::close() !!}
@endsection