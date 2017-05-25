@extends('layout.app')

@section('content')

<div class="row bg-title">
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		<h4 class="page-title">File</h4> </div>
		<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
			<ol class="breadcrumb">
				<li><a href="/dashboard">Home</a></li>
				<li class="active">Course</li>
			</ol>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="white-box">
				<h3 class="box-title">Course</h3>
				<div class="table-responsive">
					<table class="table color-bordered-table purple-bordered-table">
						<thead>
							<tr>
								<th>#</th>
								<th>Course Name</th>
							</tr>
						</thead>
						<tbody>
							@php ($no=1)
							@foreach($courses as $course)
							<tr>
								<td>{{$no}}</td>
								<td><a href="/files/{{$course->id}}">{{$course->course_name}}</a></td>
								
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

	@endsection