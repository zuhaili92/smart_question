@extends('layout.app')

@section('content')

<div class="row bg-title">
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		<h4 class="page-title">Select Course</h4> </div>
		<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
			<ol class="breadcrumb">
				<li><a href="?menu=home">Home</a></li>
				<li class="active">Select Course</li>
			</ol>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="white-box">
				<h3 class="box-title">Select Course</h3>
				<div class="table-responsive">
					<table class="table color-bordered-table purple-bordered-table">
						<thead>
							<tr>
								<th>#</th>
								<th>Course Name</th>
							</tr>
						</thead>
						<tbody>
							@php ($no = 1)
							@foreach($courses as $course)
							<tr>
								<td><?php echo $no; ?></td>
								<td><a href="courses/{{$course->id}}">{{$course->course_name}}</a></td>

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

	@section('footer')
	@if(session()->has('flash'))
	<script>

		!function($) {
			"use strict";

			var SweetAlert = function() {};

    //examples 
    SweetAlert.prototype.init = function() {

    //Success Message
    $(function(){
    	swal(" {{ session()->get('flash') }}")
    });

},
    //init
    $.SweetAlert = new SweetAlert, $.SweetAlert.Constructor = SweetAlert
}(window.jQuery),

//initializing 
function($) {
	"use strict";
	$.SweetAlert.init()
}(window.jQuery);
</script>
@endif
@endsection