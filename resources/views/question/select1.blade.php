@extends('layout.app')

@section('content')
<div class="row bg-title">
    <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
        <h4 class="page-title">Select Question Category</h4> </div>
        <div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
            <ol class="breadcrumb">
                <li><a href="/dashboard">Home</a></li>
                <li><a href="/courses">Select Course</a></li>
                <li class="active">Select Question Category</li>
            </ol>
        </div>
    </div>

<div class="row el-element-overlay">
                    <!-- /.usercard -->
                    <div class="col-md-12">
                        <h4>Select Question Category <br/><small>Please choose either one</small></h4>
                        <hr>
                    </div>
                    @foreach ($folder_data as $folder_ids)
                    <?php $folder = \App\Folder::where('id','=',$folder_ids)->first(); ?>
                     
                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
                        <div class="white-box">
                            <div class="el-card-item">
                                <div class="el-card-avatar el-overlay-1"> <img src="/plugins/images/files.png" />
                                    <div class="el-overlay scrl-up">
                                        <ul class="el-info">
                                            <li><a class="btn btn-primary" href="/course/{{$courses->id}}/folder/{{$folder->id}}"><i class="ti-arrow-down"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="el-card-content">
                                    <h3 class="box-title">{{$folder->folder_name}}</h3> 
                                    <br/> </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.usercard-->
                    @endforeach
                </div>
@endsection