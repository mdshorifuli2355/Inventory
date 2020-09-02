@extends('admin_layouts')
@section('title','add Expense')
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
                           <h4> Add Expense</h4>
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

                                     <form role="form" action="{{route('store.expense') }}" method="post" enctype="multipart/form-data">
                                        @csrf


                                       <div class="form-group">
                                            <label>Expense Details</label>
                                            <input class="form-control" name="details">
                                          
                                        </div> 

                                        <div class="form-group">
                                            <label>Amount</label>
                                            <input class="form-control" name="amount">
                                          
                                        </div> 


                                         <div class="form-group">
                                            
                                            <input class="form-control" type="hidden" name="date" value="{{ date("d/m/y") }}">
                                          
                                        </div>

                                         <div class="form-group">
                                            
                                            <input class="form-control" type="hidden" name="month" value="{{ date("F") }}">
                                          
                                        </div> 

                                         <div class="form-group">
                                            
                                             <input class="form-control" type="hidden" name="year" value="{{ date("Y") }}">
                                          
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