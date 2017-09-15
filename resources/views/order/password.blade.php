@extends('layouts.app')

@section('title')
    Profile
@endsection

@section('content')


                        <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h3 class="page-title">Edit User <small> Edit Existing User Data.</small></h3>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Dashboard</a>
                                        </li>
                                        <li class="active">
                                            Edit User
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->

                        <!-- /row -->
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="portlet">
                                    <div class="portlet-heading portlet-default">
                                        <h3 class="portlet-title text-dark">
                                            USER FORM <small>Requierd</small>
                                        </h3>
                                        <div class="portlet-widgets">                                            
                                            <a data-toggle="collapse" data-parent="#accordion1" href="#bg-default"><i class="ion-minus-round"></i></a>
                                            <span class="divider"></span>
                                            <a href="#" class="zoom"><i class="ion-arrow-resize"></i></a>
                                            <span class="divider"></span>
                                            <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div id="bg-default" class="panel-collapse collapse in">
                                        <div class="portlet-body">                           
				                        	<div class='row'>
				                        		<div class="col-md-6 col-md-offset-3"> 
                                                    {!! Form::open(array('method'=>'POST', 'class'=>'form-horizontal m-b-30')) !!}
                                                        @if($errors->count() > 0)
                                                        <h3>{{ $errors->count() }} error prohibited this user from being saved</h3>
                                                        <ul class="m-b-30 error">
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>    
                                                        @endif

                                                        <div class="form-group">
                                                            <label class="col-md-12">Current Password</label>
                                                            <div class="col-md-12">
                                                                {!! Form::password('mypassword', ['placeholder'=>'Enter Current Password', 'class'=>'form-control']) !!}
                                                            </div>
                                                        </div>
                                                        <br>
                                                        <div class="form-group">
                                                            <label class="col-md-12">New Password</label>
                                                            <div class="col-md-12">
                                                                {!! Form::password('password', ['placeholder'=>'Enter New Password', 'class'=>'form-control']) !!}
                                                            <span class="pull-right"><i>Password length minimum 6 and maximum 18 </i></span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label class="col-md-12">Confirm Password</label>
                                                            <div class="col-md-12">
                                                                {!! Form::password('password_confirmation', ['placeholder'=>'Confirm Password', 'class'=>'form-control']) !!}
                                                            </div>
                                                        </div>
                                                      
                                                        {!! Form::submit('Submit', [ 'class'=>'btn btn-danger']) !!}
                                                       
                                                    {!! Form::close() !!}

                                                </div>
                                            </div>
                                        </div>            
                                    </div>
                                </div>
                            </div>        
                        </div>
                    </div>
                </div>            
                <!-- /row -->
            </div>

         
@endsection

