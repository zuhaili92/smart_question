@extends('layout.app')

@section('header')
    <!-- Menu CSS -->
    <link href="/plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/plugins/bower_components/html5-editor/bootstrap-wysihtml5.css" />
<script>
    function showCategory(str) {
      if (str=="") {
        document.getElementById("ques_cat").innerHTML="";
        return;
    } 
    if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("ques_cat").innerHTML=this.responseText;
  }
}
xmlhttp.open("GET","/getquestion/"+str,true);
xmlhttp.send();
}
</script>
@endsection

@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Create Question</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="?menu=home">Home</a></li>
                <li class="active">Create Question</li>
            </ol>
        </div>
    </div>
    <!-- .row -->
    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                <h3 class="box-title m-b-0">Create Question</h3>
                <p class="text-muted m-b-30 font-13"> Fill in the blanks </p>
                @include('partials.error')
                <form class="form-horizontal" method="POST" action="/create_question">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label class="col-md-12">Question ID</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="question_id" value="{{$num_id}}" disabled="true"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Course :</label>
                        <div class="col-md-12">
                            <select class="selectpicker" name="course_id" data-style="form-control" onchange="showCategory(this.value)">
                                <option>_Select Course_</option>
                                @foreach($courses as $course)
                                <option value="{{$course->id}}">{{$course->course_name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Question Category :</label>
                        <div class="col-md-12">
                            <div id="ques_cat">
                                <select class="selectpicker" data-style="form-control" disabled="">
                                    <option>_Select Question Category_</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Question</label>
                        <div class="col-md-12">
                            <textarea class="textarea_editor form-control" name="question" rows="15" placeholder="Enter text ..."></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-12">Question Keyword</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" name="question_keyword"> 
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-12">
                            <label class="control-label">Level</label>
                            <div class="radio-list">
                                <label class="radio-inline p-0">
                                    <div class="radio radio-info">
                                        <input type="radio" name="level" id="level_1" value="1">
                                        <label for="level_1">1</label>
                                    </div>
                                </label>
                                <label class="radio-inline">
                                    <div class="radio radio-info">
                                        <input type="radio" name="level" id="level_2" value="2">
                                        <label for="level_2">2 </label>
                                    </div>
                                </label>
                                <label class="radio-inline">
                                    <div class="radio radio-info">
                                        <input type="radio" name="level" id="level_3" value="3">
                                        <label for="level_3">3 </label>
                                    </div>
                                </label>
                                <label class="radio-inline">
                                    <div class="radio radio-info">
                                        <input type="radio" name="level" id="level_4" value="4">
                                        <label for="level_4">4 </label>
                                    </div>
                                </label>
                                <label class="radio-inline">
                                    <div class="radio radio-info">
                                        <input type="radio" name="level" id="level_5" value="5">
                                        <label for="level_5">5 </label>
                                    </div>
                                </label>
                            </div>
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


    @section('footer')
    @if(!count($courses))
    <script>
        !function($) {
            "use strict";

            var SweetAlert = function() {};

                //examples 
                SweetAlert.prototype.init = function() {


                //A title with a text under
                $(window).load(function(){
                    swal({   
                        title: "Opps!",   
                        text: "You have to insert atleast 1 course.",   
                        type: "warning"
                    }, function() { 
                        jQuery(this).dialog(window.location='/addcourse'); 
                    });
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
        <script src="/plugins/bower_components/html5-editor/wysihtml5-0.3.0.js"></script>
        <script src="/plugins/bower_components/html5-editor/bootstrap-wysihtml5.js"></script>
        <script>
            $(document).ready(function() {
                $('.textarea_editor').wysihtml5();
            });
        </script>
        @endsection


