@extends('layout.app')

@section('content')
<div class="row bg-title">
	<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
		<h4 class="page-title">Select Question</h4> </div>
		<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
			<ol class="breadcrumb">
				<li><a href="/dashboard">Home</a></li>
				<li><a href="/courses">Select Course</a></li>
				<li><a href="/courses/{{$course_id}}">Select Question Category</a></li>
				<li class="active">Select Question</li>
			</ol>
		</div>
	</div>

	<div class="row">
		<div class="col-sm-12">
			<div class="white-box">
				<h3 class="box-title m-b-0">Select Question</h3>
				<div class="table-responsive">
				@include('partials.error')
					<form class="form-horizontal" method="POST" action="/course/{{$course_id}}/folder/{{$folder_id}}">
					{{ csrf_field() }}
						<table id="myTable" class="table table-striped">
							<thead>
								<tr>
									<th>#</th>
									<th>Question ID</th>
									<th>Question</th>
									<th>Question Keyword</th>
									<th>Level</th>
								</tr>
							</thead>
							<tbody>
								@foreach($questions as $question)
								<?php 

								$num_question = $question->id;
								if($num_question<=9)
								{
									$num_id = "000".$num_question;
								}
								elseif($num_question<=99)
								{
									$num_id = "00".$num_question;
								}
								elseif($num_question<=999)
								{
									$num_id = "0".$num_question;
								}
								else
								{
									$num_id = $num_question;
								}
								?>
								<tr>
									<td>
										<div class="checkbox checkbox-primary">
											<input id="checkbox0" class="form-control" type="checkbox" name="question_selected[]" value="<?php echo $num_question; ?>">
											<label for="checkbox0">&nbsp;</label>
										</div>

									</td>
									<td>{{$num_id}}</td>
									<td>{{$question->question}}</td>
									<td>{{$question->question_keyword}}</td>
									<td>{{$question->level}}</td>
								</tr>
								@endforeach
							</tbody>
						</table>
						<div class="col-lg-2 col-sm-4 col-xs-12">
							<button class="btn btn-block btn-primary">Select</button>
						</div>
						<div class="col-lg-2 col-sm-4 col-xs-12">   
							<button type="reset" class="btn btn-block btn-danger">Reset</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	@endsection