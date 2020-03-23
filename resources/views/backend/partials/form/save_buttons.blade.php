@stack('save_buttons_start')

<div class="{{ $col }}">
    <div class="form-group no-margin">
        {!! Form::button('<i class="fa fa-save"></i> &nbsp;' . trans('general.save'), ['type' => 'submit', 'class' => 'btn btn-primary']) !!}
        <a href="{{ url($cancel) }}" class="btn btn-secondary"><i class="fa fa-times-circle"></i> &nbsp;{{ trans('general.cancel') }}</a>
    </div>
</div>

@stack('save_buttons_end')