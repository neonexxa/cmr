<div class="form-group{{ $errors->has('venue_id') ? ' has-error' : '' }}">
    <label for="venue_id" class="col-md-4 control-label">Venue</label>

    <div class="col-md-6">
        {!! Form::select('venue_id', $venues, null, array('class' => 'form-control', 'required' => 'true')) !!}

        @if ($errors->has('venue_id'))
            <span class="help-block">
                <strong>{{ $errors->first('venue_id') }}</strong>
            </span>
        @endif
    </div>
</div>
<br>
<div class="form-group{{ $errors->has('start') ? ' has-error' : '' }}">
    <label for="start" class="col-md-4 control-label">Start Date (When?)</label>

    <div class="col-md-6">
        {{ Form::date('start', null, array('class' => 'form-control', 'required' => 'true', 'autofocus' => 'true')) }}

        @if ($errors->has('start'))
            <span class="help-block">
                <strong>{{ $errors->first('start') }}</strong>
            </span>
        @endif
    </div>
</div>
<br>
<div class="form-group{{ $errors->has('end') ? ' has-error' : '' }}">
    <label for="end" class="col-md-4 control-label">End Date (Until?)</label>

    <div class="col-md-6">
        {{ Form::date('end', null, array('class' => 'form-control', 'required' => 'true', 'autofocus' => 'true')) }}

        @if ($errors->has('end'))
            <span class="help-block">
                <strong>{{ $errors->first('end') }}</strong>
            </span>
        @endif
    </div>
</div>
<br>
<div class="form-group{{ $errors->has('session_id') ? ' has-error' : '' }}">
    <label for="session_id" class="col-md-4 control-label">Session (What time?)</label>

    <div class="col-md-6">
        {!! Form::select('session_id[]', $sessions, null, array('multiple' => 'multiple', 'class' => 'form-control', 'required' => 'true')) !!}
    </div>
</div>
<br>
<div class="form-group{{ $errors->has('remark') ? ' has-error' : '' }}">
    <label for="remark" class="col-md-4 control-label">Remark</label>

    <div class="col-md-6">
        {{ Form::textarea('remark', null, array('class' => 'form-control', 'required' => 'true')) }}

        @if ($errors->has('remark'))
            <span class="help-block">
                <strong>{{ $errors->first('remark') }}</strong>
            </span>
        @endif
    </div>
</div>
<br>
<div class="form-group">
    <div class="col-md-8 col-md-offset-4">
        <button type="submit" class="btn btn-primary">
            {{$button_data}}
        </button>
    </div>
</div>