@if(Auth::user()->isAdmin())
    <div class="form-group {{ $errors->has('user_id') ? 'has-error' : ''}}">
        {!! Form::label('user_id', 'Employee', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            <select name="user_id" class="form-control">
                @foreach(App\User::all() as $user)
                    <option value="{{$user->id}}"> {{ $user->name }}</option>
                @endforeach
            </select>
            {!! $errors->first('user_id', '<p class="help-block">:message</p>') !!}
        </div>
    </div>
@endif
<div class="form-group {{ $errors->has('date_of_request') ? 'has-error' : ''}}">
    {!! Form::label('date_of_request', 'Date Of Request', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::date('date_of_request', null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('date_of_request', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('status') ? 'has-error' : ''}}">
    {!! Form::label('status', 'Status', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('status', ['Full Time'=>'Full Time', 'Part Time' =>'Part Time', 'Salary' =>'Salary', 'Hourly' =>'Hourly'], null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('status', '<p class="help-block">:message</p>') !!}
    </div>
</div><div class="form-group {{ $errors->has('type_of_absence') ? 'has-error' : ''}}">
    {!! Form::label('type_of_absence', 'Type Of Absence', ['class' => 'col-md-4 control-label']) !!}
    <div class="col-md-6">
        {!! Form::select('type_of_absence', ['Sick'=> 'Sick' , 'Vacation'=> 'Vacation' , 'Bereavement'=> 'Bereavement' , 'Time off without pay'=>'Time off without pay', 'Holiday Vacation' =>'Holiday Vacation', 'Military Leave' =>'Military Leave', 'Jury Duty'=>'Jury Duty', 'Maternity Leave'=>'Maternity Leave'], null, ['class' => 'form-control', 'required' => 'required']) !!}
        {!! $errors->first('type_of_absence', '<p class="help-block">:message</p>') !!}
    </div>
</div>

<div class="form-group">
    <div class="col-md-offset-4 col-md-4">
        {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
    </div>
</div>
