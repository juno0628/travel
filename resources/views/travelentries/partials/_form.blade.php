<div class="form-group">
    {!! Form::label('destination_country', 'Name:') !!}
    {!! Form::text('destination_country') !!}
</div>
 
<div class="form-group">
    {!! Form::label('slug', 'Slug:') !!}
    {!! Form::text('slug') !!}
</div>
 
<div class="form-group">
    {!! Form::label('is_international', 'International:') !!}
    {!! Form::checkbox('international') !!}
</div>
 
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description') !!}
</div>
 
<div class="form-group">
    {!! Form::submit($submit_text) !!}
</div>
