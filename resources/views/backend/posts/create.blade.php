@extends('backend.layouts.admin')

@section('title', 'Create Posts')

@section('content')





<!--begin::Portlet-->
<div class="kt-portlet">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Create Blog
			</h3>
		</div>
	</div>

	<!--begin::Form-->
	<form class="kt-form">
		<div class="kt-portlet__body">
			<div class="form-group">
				{{ Form::label('post-title', 'E-Mail Address') }}
				{{ Form::text('post-title') }}
				{{ Form::textGroup('xxnamexx', trans('general.name'), 'id-card-o') }}
				<input class="form-control" type="text" id="post-title" placeholder="Enter Title">
			</div>

			<div class="form-group">
				<label>Post Slug</label>
				<input class="form-control" type="text" id="post-slug" placeholder="Enter Slug">
			</div>

			<div class="form-group">
				<label for="exampleInputPassword1">Password</label>
				<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			</div>
			<div class="form-group">
				<label>Static:</label>
				<p class="form-control-static">email@example.com</p>
			</div>
			<div class="form-group">
				<label for="exampleSelect1">Example select</label>
				<select class="form-control" id="exampleSelect1">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select>
			</div>
			<div class="form-group">
				<label for="exampleSelect2">Example multiple select</label>
				<select multiple="" class="form-control" id="exampleSelect2">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select>
			</div>
			<div class="form-group form-group-last">
				<label for="exampleTextarea">Example textarea</label>
				<textarea class="form-control" id="exampleTextarea" rows="3"></textarea>
			</div>
		</div>
		<div class="kt-portlet__foot">
			<div class="kt-form__actions">
				<button type="reset" class="btn btn-primary">Submit</button>
				<button type="reset" class="btn btn-secondary">Cancel</button>
			</div>
		</div>
	</form>

	<!--end::Form-->
</div>

<!--end::Portlet-->





















@endsection









@section('js')


@endsection



@section('css')

  
@endsection