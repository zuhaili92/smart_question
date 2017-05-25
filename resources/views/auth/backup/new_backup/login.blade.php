@extends('layout.master')

@section('content')
<!-- Preloader -->
<div class="preloader">
  <div class="cssload-speeding-wheel"></div>
</div>
<section id="wrapper" class="login-register">
  <div class="login-box login-sidebar">
    <div class="white-box">
      <form class="form-horizontal form-material" method="POST" id="loginform" action="{{ route('login') }}">
        {{ csrf_field() }}
        <a href="javascript:void(0)" class="text-center db"><img src="/plugins/images/logo@2x.png" width="50%" alt="Home" /><br/><img src="/plugins/images/title.png" width="50%" alt="Home" /></a>  

        @include('partials.error')

        <div class="form-group m-t-40">
          <div class="col-xs-12">
            <input class="form-control" type="text" name="username" required="" placeholder="Username">
          </div>
        </div>
        <div class="form-group">
          <div class="col-xs-12">
            <input class="form-control" type="password" name="password" required="" placeholder="Password">
          </div>
        </div>
        <div class="form-group">
          <div class="col-md-12">
            <div class="checkbox checkbox-primary pull-left p-t-0">
              <input id="checkbox-signup" type="checkbox">
              <label for="checkbox-signup"> Remember me </label>
            </div>
            <a href="javascript:void(0)" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Forgot password?</a> </div>
          </div>
          <div class="form-group text-center m-t-20">
            <div class="col-xs-12">
              <button class="btn btn-info btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
            </div>
          </div>
          <div class="form-group m-b-0">
            <div class="col-sm-12 text-center">
              <p>Don't have an account? <a href="/register" class="text-primary m-l-5"><b>Sign Up</b></a></p>
            </div>
          </div>
        </form>
        <form class="form-horizontal" id="recoverform" method="POST" action="">
          <div class="form-group ">
            <div class="col-xs-12">
              <h3>Recover Password</h3>
              <p class="text-muted">Enter your Email and instructions will be sent to you! </p>
            </div>
          </div>
          <div class="form-group ">
            <div class="col-xs-12">
              <input class="form-control" type="text" name="email" required="" placeholder="Email">
            </div>
          </div>
          <div class="form-group text-center m-t-20">
            <div class="col-xs-12">
              <button class="btn btn-primary btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Reset</button>
            </div>
          </div>
          <div class="form-group m-b-0">
            <div class="col-sm-12 text-center">
              <p>Have an account? <a href="/" class="text-primary m-l-5"><b>Sign In</b></a></p>
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
  <!-- Sweet-Alert  -->
  <script src="/plugins/bower_components/sweetalert/sweetalert.min.js"></script>

  <!-- Custom Theme JavaScript -->
  <script src="/js/custom.min.js"></script>
  <!--Style Switcher -->
  <script src="/plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
  @endsection
