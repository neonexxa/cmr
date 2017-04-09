
<div class="form-group{{ $errors->has('label') ? ' has-error' : '' }}">
    <label for="label" class="col-md-4 control-label">Label</label>

    <div class="col-md-6">
        {{ Form::text('label', null, array('class' => 'form-control', 'required' => 'true', 'autofocus' => 'true')) }}

        @if ($errors->has('label'))
            <span class="help-block">
                <strong>{{ $errors->first('label') }}</strong>
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