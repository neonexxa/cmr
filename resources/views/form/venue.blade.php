
<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    <label for="name" class="col-md-4 control-label">Name</label>

    <div class="col-md-6">
        {{ Form::text('name', null, array('class' => 'form-control', 'required' => 'true', 'autofocus' => 'true')) }}

        @if ($errors->has('name'))
            <span class="help-block">
                <strong>{{ $errors->first('name') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('location') ? ' has-error' : '' }}">
    <label for="location" class="col-md-4 control-label">Location</label>

    <div class="col-md-6">
        {{ Form::text('location', null, array('class' => 'form-control', 'required' => 'true')) }}

        @if ($errors->has('location'))
            <span class="help-block">
                <strong>{{ $errors->first('location') }}</strong>
            </span>
        @endif
    </div>
</div>
<div class="form-group{{ $errors->has('status_id') ? ' has-error' : '' }}">
    <label for="status_id" class="col-md-4 control-label">Status</label>

    <div class="col-md-6">
        {!! Form::select('status_id', $statuses, null, array('class' => 'form-control', 'required' => 'true')) !!}

        @if ($errors->has('status_id'))
            <span class="help-block">
                <strong>{{ $errors->first('status_id') }}</strong>
            </span>
        @endif
    </div>
</div>

<div class="form-group">
    <div class="col-md-8 col-md-offset-4">
        <button type="submit" class="btn btn-primary">
            {{$button_data}}
        </button>
    </div>
</div>