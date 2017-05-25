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
                <li><a href="/course/{{$course_id}}/folder/{{$folder_id}}">Select Question</a></li>
                <li class="active">Create File Name</li>
            </ol>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">Question</h3>
                <p class="text-muted m-b-30 font-13"> Fill in the blanks </p>
                @include('partials.error')
                <form class="form-horizontal" method="POST" action="/course/{{$course_id}}/folder/{{$folder_id}}/files">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-md-12">File Name : </label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="file_name" required="true"> 
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-success waves-effect waves-light m-r-10">Save File</button>
                    <button type="reset" name="cancel" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                </form>
            </div>
        </div>
    </div>
@endsection