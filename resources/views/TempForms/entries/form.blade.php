<div class="form-group {{ $errors->has('date_of_absence') ? 'has-error' : ''}}">
    {!! Form::label('date_of_absence', 'Date Of Absence', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::date('date_of_absence', null, ['class' => 'form-control']) !!}
        {!! $errors->first('date_of_absence', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('hours') ? 'has-error' : ''}}">
    {!! Form::label('hours', 'Hours', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('hours', null, ['class' => 'form-control']) !!}
        {!! $errors->first('hours', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('form_id') ? 'has-error' : ''}}">
    {!! Form::label('form_id', 'Form Id', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::number('form_id', null, ['class' => 'form-control']) !!}
        {!! $errors->first('form_id', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
