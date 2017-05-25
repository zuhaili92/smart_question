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
				<div class="table-responsive">
					<form class="form-horizontal" target="_blank" method="POST" action="/documents/{{$id->id}}">
						{{ csrf_field() }}
						<table id="myTable" class="table table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Question</th>
									<th>Level</th>
								</tr>
							</thead>
							<tbody>
								@php ($no=1)
								@foreach($questions as $question)
								<tr>
									<td>{{$no}}</td>
									<td>{!!$question->question!!}</td>
									<td>{{$question->level}}</td>
								</tr>
								@php ($no++)
								@endforeach
							</tbody>
						</table>

						<div class="col-lg-2 col-sm-4 col-xs-12">   
							<button class="btn btn-block btn-danger">Download</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>

	@endsection