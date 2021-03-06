@stack($name . '_input_start')

<div  style="float:left" class="form-group {{ $col }} {{ isset($attributes['required']) ? 'required' : '' }} {{ $errors->has($name) ? 'has-error' : 'validated' }}">
	{!! Form::label($name, $text, ['class' => 'form-control-label']) !!}
	<div class="input-group date">
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
	$('#{{$name}}').datetimepicker({
	    todayHighlight: true,
	    autoclose: true,
	    pickerPosition: 'bottom-left',
	    todayBtn: true,
	    format: 'yyyy/mm/dd hh:ii'
	});
@endpush