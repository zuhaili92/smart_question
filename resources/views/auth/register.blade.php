@extends('layout.master')

@section('content')
<!-- Preloader -->
<div class="preloader">
  <svg class="circular" viewBox="25 25 50 50">
    <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10"/>
  </svg>
</div>
<section id="wrapper" class="new-login-register">
  <div class="lg-info-panel">
    <div class="inner-panel">
      <a href="javascript:void(0)" class="p-20 di"><img src="/plugins/images/logo@2x.png" width="20%" /></a>
      <div class="lg-content">
        <h2>SMART QUESTION BANK</h2>
        <p>Sign up to access this system</p>
      </div>
    </div>
  </div>

  <div class="new-login-box">
    <div class="white-box">
      <h3 class="box-title m-b-0">Sign Up </h3> <small>Enter your details below</small>
      @include('partials.error')
     <form class="form-horizontal new-lg-form" id="loginform" method="post" action="{{ route('register') }}">
     {{ csrf_field() }}
      <div class="form-group ">
        <div class="col-xs-12">
          <input class="form-control" type="text" name="name" required="" placeholder="Name"> </div>
        </div>
        <div class="form-group ">
          <div class="col-xs-12">
            <input class="form-control" type="text" name="ic_no" required="" placeholder="IC Number"> </div>
          </div>
          <div class="form-group ">
            <div class="col-xs-12">
              <input class="form-control" type="text" name="position" required="" placeholder="Position"> </div>
            </div>
            <div class="form-group ">
              <div class="col-xs-12">
                <input class="form-control" type="text" name="tel_no"  required="" placeholder="Telephone Number"> </div>
              </div>
              <div class="form-group ">
                <div class="col-xs-12">
                  <input class="form-control" type="text" name="staff_id"  required="" placeholder="Staff ID"> </div>
                </div>
                <div class="form-group ">
                  <div class="col-xs-12">
                    <select name="department" class="form-control">
                      <optgroup label="Department">
                        @foreach($departments as $department)
                        <option value="{{ $department->id }}">{{ $department->department_name }}</option>
                        @endforeach
                      </select> 
                    </div>
                  </div>
                  <div class="form-group ">
                    <div class="col-xs-12">
                      <input class="form-control" type="text" name="username" required="" placeholder="Email"> </div>
                    </div>
                    <div class="form-group ">
                      <div class="col-xs-12">
                        <input class="form-control" type="password" name="password" required="" placeholder="Password"> </div>
                      </div>
                      <div class="form-group">
                        <div class="col-xs-12">
                          <input class="form-control" type="password" name="password_confirmation" required="" placeholder="Confirm Password"> </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                          <div class="col-xs-12">
                            <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Sign Up</button>
                          </div>
                        </div>
                        <div class="form-group m-b-0">
                          <div class="col-sm-12 text-center">
                            <p>Already have an account? <a href="index.php" class="text-danger m-l-5"><b>Sign In</b></a></p>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </section>
                @endsection

                @section('footer')
                <!-- jQuery -->
                <script src="/plugins/bower_components/jquery/dist/jquery.min.js"></script>
                <!-- Bootstrap Core JavaScript -->
                <script src="/bootstrap/dist/js/bootstrap.min.js"></script>
                <!-- Menu Plugin JavaScript -->
                <script src="/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
                <!--slimscroll JavaScript -->
                <script src="/js/jquery.slimscroll.js"></script>
                <!--Wave Effects -->
                <script src="/js/waves.js"></script>
                <!-- Custom Theme JavaScript -->
                <script src="/js/custom.min.js"></script>
                <!--Style Switcher -->
                <script src="/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
                @endsection
