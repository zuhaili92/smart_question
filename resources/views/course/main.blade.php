@extends('layout.app')

@section('content')
<div class="row bg-title">
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		<h4 class="page-title">Home</h4> </div>
		<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">

			<a href="/addcourse" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light"> + Add Course</a>
		</div>
		<!-- /.col-lg-12 -->
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="white-box">
				<h3 class="box-title">Course List</h3>
				<div class="table-responsive">
					<table class="table full-color-table full-purple-table hover-table">
						<thead>
							<tr>
								<th>#</th>
								<th>Course Name</th>
								<th>Manage</th>
							</tr>
						</thead>
						<tbody>
							@php ($no = 1)
							@foreach($courses as $course)
							<tr>
								<td>{{$no}}</td>
								<td>{{$course->course_name}}</td>
								<td width="30%">
								<div class="col-sm-8">
										<div class="col-sm-4">
											<a href="/editcourse/{{$course->id}}"><button type="button" class="btn btn-default btn-circle m-r-5"><i class="ti-pencil-alt"></i></button></a>
										</div>
										<div class="col-sm-4">
											{!! Form::open(['method' => 'DELETE', 'url' => ['/delcourse', $course->id], 'onsubmit' => 'return confirmDelete()']) !!}
											<button type="submit" class="btn btn-default btn-circle m-r-5"><i class="ti-trash"></i></button>
											{!! Form::close() !!}
										</div>
									</div>
								</td>
							</tr>
							@php ($no++)
							@endforeach
							
							@if(!count($courses))
							<tr>
								<td colspan="3" align="center"> Record not found </td>

							</tr>
							@endif
						</tbody>
					</table>
				</div>
			</div>
		</div>

	</div>
	@stop

	@section('footer')
	<script type="text/javascript">
		function confirmDelete() {
			var result = confirm('Are you sure you want to delete this course?');

			if (result) {
				return true;
			} else {
				return false;
			}
		}

	</script>
	@endsection