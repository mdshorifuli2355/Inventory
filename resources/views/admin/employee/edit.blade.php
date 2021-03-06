@extends('admin_layouts')
@section('title','Edit Employee')
@section('admin_content')



<div id="page-wrapper">

    
 <div class="row">
                {{-- <div class="col-lg-12">
                    <h1 class="page-header">Employee</h1>
                </div> --}}
                <!-- /.col-lg-12 -->
            </div>
            <br>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                           <h5> Add Employee</h5>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">

                                    <p class="alert-success">
                                    	<?php
                            $msg=Session::get('msg');
                        if($msg){
                            echo $msg;
                            Session::put('msg',null);
                        }else{

                        }

                        ?>
                        </p>

                                    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

             <form role="form" action="{{ route('update.employee',$employee->id) }}" method="post" enctype="multipart/form-data">
                @csrf


                <div class="form-group">
                    <label>Employee name</label>
                    <input class="form-control" name="name" value="{{ $employee->name }}">
                  
                </div> 


                 <div class="form-group">
                    <label>Employee email</label>
                    <input class="form-control" type="email" name="email" value="{{ $employee->email }}">
                  
                </div>

                

             



         <div class="form-group">
                    <label>phone Number</label>
                    <input class="form-control" name="phone" value="{{ $employee->phone }}">
                  
                </div>

                 <div class="form-group">
                    <label>Address</label>
                    <input class="form-control" name="Address" value="{{ $employee->Address }}">
                  
                </div>

                 <div class="form-group">
                    <label>experience</label>
                    <input class="form-control" name="experience" value="{{ $employee->experience }}">
                  
                </div>


                

                <div class="form-group">
                    <label>photo</label>
                    <input type="file" name="photo">
                    <img src="{{asset($employee->photo)}}"style="width: 150px;height: 100px;">
                    <input type="hidden" name="old_image" value="{{$employee->photo}}">
                </div>


                 <div class="form-group">
                    <label>salary</label>
                    <input class="form-control" name="salary" value="{{ $employee->salary }}">
                  
                </div>


                 <div class="form-group">
                    <label>vacation</label>
                    <input class="form-control" name="vacation" value="{{ $employee->vacation }}">
                  
                </div>

              


               
                <button type="submit" class="btn btn-danger">Submit Button</button>
                <button type="reset" class="btn btn-default">Reset Button</button>
            </form>


                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                
                                <!-- /.col-lg-6 (nested) -->
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>

        
        </div>
  @endsection