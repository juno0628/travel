<div class="form-group">
    {!! Form::label('destination_city', 'Destination City:') !!}
    {!! Form::text('destination_city') !!}
</div>
<div class="form-group">
    {!! Form::label('destination_country', 'Destination Country:') !!}
    {!! Form::text('destination_country') !!}
</div>
<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug') !!}
</div>
<div class="form-group">
    {!! Form::submit($submit_text, ['class'=>'btn primary']) !!}
</div>