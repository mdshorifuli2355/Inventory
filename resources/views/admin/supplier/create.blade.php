@extends('admin_layouts')
@section('title','add Supplier')
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
                           <h4> Add Supplier</h4>
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

                                     <form role="form" action="{{route ('store.supplier') }}" method="post" enctype="multipart/form-data">
                                        @csrf


                                       <div class="form-group">
                                            <label>Supplier name</label>
                                            <input class="form-control" name="name">
                                          
                                        </div> 


                                         <div class="form-group">
                                            <label>Supplier email</label>
                                            <input class="form-control" type="email" name="email">
                                          
                                        </div>


                                 <div class="form-group">
                                            <label>phone Number</label>
                                            <input class="form-control" name="phone">
                                          
                                        </div>

                                         <div class="form-group">
                                            <label>Address</label>
                                            <input class="form-control" name="Address">
                                          
                                        </div>

                                         <div class="form-group">
                                            <label>Shop name</label>
                                            <input class="form-control" name="shopname">
                                          
                                        </div>


                                        

                                        <div class="form-group">
                                            <label>photo</label>
                                            <input type="file" name="photo">
                                        </div>

                                         <div class="form-group">
                                            <label>Account holder</label>
                                            <input class="form-control" name="account_holder">
                                          
                                        </div>

                                        <div class="form-group">
                                            <label>Account Number</label>
                                            <input class="form-control" name="account_number">
                                          
                                        </div>


                                         <div class="form-group">
                                            <label>Bank name</label>
                                            <input class="form-control" name="bank_name">
                                          
                                        </div>

                                         <div class="form-group">
                                            <label>Bank branch</label>
                                            <input class="form-control" name="bank_branch">
                                          
                                        </div>

                                            <div class="form-group">
                                            <label>Supplier Type</label>
                                            <select class="form-control" name="type">
                                                <option disabled="" selected=""></option>
                                               
                                                <option value="1">Distributor</option>
                                                <option value="2">Whole Seller</option>
                                                <option value="3">Brochure</option>
                                                
                                             
                                               
                                            </select>
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