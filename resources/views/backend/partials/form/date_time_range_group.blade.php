@stack($name . '_input_start')

<div  style="float:left" class="form-group {{ $col }} {{ isset($attributes['required']) ? 'required' : '' }} {{ $errors->has($name) ? 'has-error' : 'validated' }}">
	{!! Form::label($name, $text, ['class' => 'form-control-label']) !!}
	<div class="input-group" id="{{$name}}_group">
		<div class="input-group-prepend"><span class="input-group-text"><i class="{{$icon}}"> </i></span></div>
		{!! Form::text($name, $value, array_merge(['class' =>   $errors->has($name) ? 'form-control is-invalid' : 'form-control', 'placeholder' => trans('general.form.enter', ['field' => $text])], $attributes)) !!}

		@error($name)
			<div class="invalid-feedback">{{ $message }}</div>
		@enderror
	</div>
	<span class="form-text text-muted">{!! trans('general.form.enter', ['field' => $text]) !!}</span>	
</div>

@stack($name . '_input_end')


@push('onloadscripts')
    $('#{{$name}}_group').daterangepicker({
        buttonClasses: ' btn',
        applyClass: 'btn-primary',
        cancelClass: 'btn-secondary',

        timePicker: true,
        timePickerIncrement: 30,
        locale: {
            format: 'MM/DD/YYYY h:mm A'
        }
    }, function(start, end, label) {
        $('#{{$name}}').val( start.format('MM/DD/YYYY h:mm A') + ' / ' + end.format('MM/DD/YYYY h:mm A'));
    });
@endpush