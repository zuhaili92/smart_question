@extends('layout.app')

@section('content')
<div class="row bg-title">
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		<h4 class="page-title">File</h4> </div>
		<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
			<ol class="breadcrumb">
				<li><a href="/dashboard">Home</a></li>
				<li class="active">File</li>
			</ol>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-12">
			<div class="white-box">
				<h3 class="box-title m-b-0">File</h3>
				<p class="text-muted m-b-30">Please choose either one.</p>
				<div class="table-responsive">
				@include('partials.error')
					<table id="myTable" class="table table-striped">
						<thead>
							<tr>
								<th>No</th>
								<th>File Name</th>
								<th>Question Category</th>
								<th>Manage</th>
							</tr>
						</thead>
						<tbody>
							@php ($no=1)
							@foreach($files as $file)  
								<tr>
									<td>{{$no}}</td>
									<td>{{$file->file_name}}</td>
									<td>{{$file->folder_name}}</td>
									<td>
									<div class="col-sm-8">
										<div class="col-sm-4">
										<a href="/list_questions/{{$file->id}}"><button type="button" class="btn btn-default btn-circle m-r-5"><i class="ti-arrow-down"></i></button></a>
										</div>
										<div class="col-sm-4">
											{!! Form::open(['method' => 'DELETE', 'url' => ['/delfile', $file->id], 'onsubmit' => 'return confirmDelete()']) !!}
											<button type="submit" class="btn btn-default btn-circle m-r-5"><i class="ti-trash"></i></button>
											{!! Form::close() !!}
										</div>
									</div>
									</td>
								</tr>
							@php ($no++)
							@endforeach
							</tbody>
						</table>
					</div>
				</div>
			</div>

		</div>

		@endsection

		@section('footer')
		<script type="text/javascript">
		function confirmDelete() {
			var result = confirm('Are you sure you want to delete this file?');

			if (result) {
				return true;
			} else {
				return false;
			}
		}

	</script>
		@endsection