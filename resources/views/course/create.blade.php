@extends('layout.app')

@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Add Course</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="/dashboard">Home</a></li>
                <li class="active">Add Course</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">Add Course</h3>
                <p class="text-muted m-b-30 font-13"> Fill in the blanks </p>
                @include('partials.error')
                <form class="form-horizontal" method="POST" action="/addcourse">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-md-12">Course Name :</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="course_name" required=""> </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Folders :</label>
                            <div class="col-md-12">
                            @php ($no=1)
                                @foreach($folders as $folder)
                                    <div class="checkbox checkbox-success">
                                        <input id="{{$no}}" value="{{$folder->id}}" name="folder_id[]" type="checkbox">
                                        <label for="{{$no}}">{{$folder->folder_name}}</label>
                                    </div>
                                @endforeach
                            @php ($no++)
                            </div>
                        </div>
                        <button type="submit" name="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                        <button type="reset" name="cancel" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
@endsection