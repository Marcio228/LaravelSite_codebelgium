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
	var start = moment().subtract(29, 'days');
    var end = moment();

    $('#{{$name}}_group').daterangepicker({
        buttonClasses: ' btn',
        applyClass: 'btn-primary',
        cancelClass: 'btn-secondary',

        startDate: start,
	    endDate: end,
	    ranges: {
	       'Today': [moment(), moment()],
	       'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
	       'Last 7 Days': [moment().subtract(6, 'days'), moment()],
	       'Last 30 Days': [moment().subtract(29, 'days'), moment()],
	       'This Month': [moment().startOf('month'), moment().endOf('month')],
	       'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
	    }
    }, function(start, end, label) {
        $('#{{$name}}').val( start.format('DD-MM-YYYY') + ' / ' + end.format('DD-MM-YYYY'));
    });
@endpush