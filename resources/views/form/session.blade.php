{{ Form::token() }}
<div class="form-group{{ $errors->has('when') ? ' has-error' : '' }}">
    <label for="when" class="col-md-4 control-label">When</label>
    
    <div class="col-md-6">
        {{ Form::text('when', null, array('class' => 'form-control', 'required' => 'true', 'autofocus' => 'true')) }}
        
        @if ($errors->has('when'))
            <span class="help-block">
                <strong>{{ $errors->first('when') }}</strong>
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