@extends('layouts.app')

@section('title')
    Add Salary
@endsection

@section('content')


                        <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h3 class="page-title">Add Salary <small> Add New Salary Data.</small></h3> 
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Dashboard</a>
                                        </li>
                                        <li class="active">
                                            Add Salary
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
                                            SALARY FORM <small>Requierd</small>
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
						                            {!! Form::open(['route'=>'salaries.store', 'class'=>'form-horizontal m-b-30']) !!}
						                                <div class="form-group">
						                                    <label class="col-md-12">Name</label>
						                                    <div class="col-md-12">
						                                         {!! Form::select('staff_id', $staff, null, ['id'=>'product_id', 'class'=>'form-control select2','required']) !!}
						                                    </div>
						                                </div>
						                                <div class="row">						                                
								                            <div class="col-md-6">
								                            	<div class="form-group">
								                                    <label class="col-md-12">Month</label>
								                                    <div class="col-md-12">
								                                         {!! Form::select('salary_month', array( 'January' => 'January', 'February' => 'February', 'March' => 'March', 'April' => 'April', 'May' => 'May', 'June' => 'June', 'July' => 'July', 'August' => 'August', 'September' => 'September', 'October' => 'October', 'November' => 'November', 'December' => 'December'), null, ['class'=>'form-control','required']) !!}
								                                    </div>
								                                </div>
								                            </div>
								                            <div class="col-md-6">
						            							<div class="form-group">
								                                    <label class="col-md-12">Salary Paid</label>
								                                    <div class="col-md-12">
								                                         {!! Form::number('salary_paid', '', ['class'=>'form-control', 'placeholder'=>'ENTER PAID AMMOUNT','required']) !!}
								                                    </div>
								                                </div>
								                            </div>
							                            </div>
							                            {!! Form::hidden('salary_date', Carbon\Carbon::today()->format('d-m-Y')) !!}  
									                    {!! Form::submit('Submit', ['class'=>'btn btn-danger waves-light']) !!}
									                {!! Form::close() !!}
									            </div>
								            </div>
								        </div>  
							        </div>        
					            </div>
					        </div>
					    </div>            
			            <!-- /row -->

         
@endsection