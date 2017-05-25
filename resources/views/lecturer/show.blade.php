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
                <form class="form-horizontal" method="POST" action="/setting" name="updatepass">
                    @include('partials.error')
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-md-12">Current Password :</label>
                        <div class="col-md-12">
                            <input type="password" class="form-control" name="currentpassword" required=""> </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">New Password :</label>
                            <div class="col-md-12">
                                <input type="password" class="form-control" name="password" required=""> </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Confirm Password :</label>
                                <div class="col-md-12">
                                    <input type="password" class="form-control" name="password_confirmation" required=""> </div>
                                </div>

                                <button type="submit" name="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                                <button type="reset" name="cancel" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>

@endsection