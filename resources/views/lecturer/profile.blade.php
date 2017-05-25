@extends('layout.app')

@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">My Profile</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="?menu=home">Home</a></li>
                <li class="active">My Profile</li>
            </ol>
        </div>
    </div>
    <!-- .row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">My Profile</h3>
                <p class="text-muted m-b-30 font-13"> Fill in the blanks </p>
                @include('partials.error')
                <form class="form-horizontal" method="POST" action="/profile">
                {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-md-12">Name :</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="name" value="{{$lecturer->name}}" required=""> </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">IC Number :</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="ic_no" value="{{$lecturer->ic_no}}" required=""> </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Position :</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="position" value="{{$lecturer->position}}" required=""> </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Telephone Number :</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="tel_no" value="{{$lecturer->tel_no}}" required=""> </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Staff ID :</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="staff_id" value="{{$lecturer->staff_id}}" required=""> </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Department :</label>
                        <div class="col-md-12">
                            <select name="department" class="form-control">
                                <optgroup label="Department">
                                @foreach($departments as $department)
                                <option value="{{$department->id}}" <?php if($lecturer->department == $department->id) { echo "selected"; } ?>>{{$department->department_name}}</option>
                                @endforeach
                            </select> 
                            </div>
                    </div>
                        <button type="submit" name="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                        <button type="reset" name="cancel" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                    </form>
                </div>
            </div>
        </div>
                <!-- /.row -->

@endsection