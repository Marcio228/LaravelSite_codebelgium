@extends('backend.layouts.admin')

@section('title', 'Posts')

@section('content')


<!--begin::Portlet-->
<div class="kt-portlet">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Blogs
			</h3>
		</div>
	</div>
	<div class="kt-portlet__body">

		<!--begin::Section-->
		<div class="kt-section">
			<div class="kt-section__content">
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Date</th>
							<th>Title</th>
							<th>Slug</th>
							<th>Category</th>
						</tr>
					</thead>
					<tbody>
						@foreach($posts as $post)
							<tr>
								<th scope="row">{{ $post->id }}</th>
								<td>{{ $post->PublishedDate }}</td>
								<td>{{ $post->title }}</td>
								<td>{{ $post->slug }}</td>
								{{-- <td>{{ $post->category->name }}</td> --}}
							</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>

		<!--end::Section-->
	</div>

	<!--end::Form-->
</div>

<!--end::Portlet-->




























@endsection









@section('js')


@endsection



@section('css')

  
@endsection