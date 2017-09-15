@extends('layouts.app')

@section('title')
    Edit Measurement
@endsection

@section('content')  

                        <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h3 class="page-title">Edit Measurement <small>Edit Existing Measurement Data.</small></h3>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Dashboard</a>
                                        </li>
                                        <li class="active">
                                            Order
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
                                            Measurement FORM <small>Requierd</small>
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
						                            {!! Form::model($measurement, ['route'=>['measurements.update', $measurement->id], 'method'=>'PATCH', 'class'=>'form-horizontal m-b-30']) !!}
                                                        <p class="title text-primary font-w600">Top Body :</p>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="col-md-12">Neck</label>
                                                                    <div class="col-md-12">
                                                                        {!! Form::text('neck', null, ['class'=>'form-control','required']) !!}
                                                                    </div>  
                                                                </div>       
                                                            </div>  
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="col-md-12">Sleeve</label>
                                                                    <div class="col-md-12">
                                                                        {!! Form::text('sleeve', null, ['class'=>'form-control','required']) !!}
                                                                    </div>  
                                                                </div>       
                                                            </div> 
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="col-md-12">Bicep</label>
                                                                    <div class="col-md-12">
                                                                        {!! Form::text('bicep', null, ['class'=>'form-control','required']) !!}
                                                                    </div>  
                                                                </div>       
                                                            </div> 
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="col-md-12">Wrist</label>
                                                                    <div class="col-md-12">
                                                                        {!! Form::text('wrist', null, ['class'=>'form-control','required']) !!}
                                                                    </div>  
                                                                </div>       
                                                            </div> 
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="col-md-12">length</label>
                                                                    <div class="col-md-12">
                                                                        {!! Form::text('length', null, ['class'=>'form-control','required']) !!}
                                                                    </div>  
                                                                </div>       
                                                            </div> 
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="col-md-12">shoulder</label>
                                                                    <div class="col-md-12">
                                                                        {!! Form::text('shoulder', null, ['class'=>'form-control','required']) !!}
                                                                    </div>  
                                                                </div>       
                                                            </div> 
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="col-md-12">chest</label>
                                                                    <div class="col-md-12">
                                                                        {!! Form::text('chest', null, ['class'=>'form-control','required']) !!}
                                                                    </div>  
                                                                </div>       
                                                            </div>                                                           
                                                        </div>		
                                                        <p class="title text-primary font-w600">Middle Body :</p> 
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="col-md-12">Waist</label>
                                                                    <div class="col-md-12">
                                                                        {!! Form::text('waist', null, ['class'=>'form-control','required']) !!}
                                                                    </div>  
                                                                </div>       
                                                            </div>  
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="col-md-12">Hips</label>
                                                                    <div class="col-md-12">
                                                                        {!! Form::text('hips', null, ['class'=>'form-control','required']) !!}
                                                                    </div>  
                                                                </div>       
                                                            </div>                                                            
                                                        </div>  
                                                        <p class="title text-primary font-w600">Bottom Body :</p> 
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="col-md-12">thigh</label>
                                                                    <div class="col-md-12">
                                                                        {!! Form::text('thigh', null, ['class'=>'form-control','required']) !!}
                                                                    </div>  
                                                                </div>       
                                                            </div> 
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="col-md-12">crotch</label>
                                                                    <div class="col-md-12">
                                                                        {!! Form::text('crotch', null, ['class'=>'form-control','required']) !!}
                                                                    </div>  
                                                                </div>       
                                                            </div> 
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="col-md-12">ankles</label>
                                                                    <div class="col-md-12">
                                                                        {!! Form::text('ankles', null, ['class'=>'form-control','required']) !!}
                                                                    </div>  
                                                                </div>       
                                                            </div> 
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="col-md-12">inseam</label>
                                                                    <div class="col-md-12">
                                                                        {!! Form::text('inseam', null, ['class'=>'form-control','required']) !!}
                                                                    </div>  
                                                                </div>       
                                                            </div> 
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label class="col-md-12">outseam</label>
                                                                    <div class="col-md-12">
                                                                        {!! Form::text('outseam', null, ['class'=>'form-control','required']) !!}
                                                                    </div>  
                                                                </div>       
                                                            </div> 
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label class="col-md-12">Other</label>
                                                                    <div class="col-md-12">
                                                                        {!! Form::textarea('other_measurements', null, ['rows'=>'1', 'class'=>'form-control','required']) !!}
                                                                    </div>  
                                                                </div>   
                                                            </div>                                                       
                                                        </div>                 
                                                        {!! Form::submit('Submit', ['class'=>'btn btn-danger waves-light']) !!}
                                                    {!! Form::close() !!}
                                                </div>
                                            </div>
                                        </div>            
                                    </div>
                                </div>
                            </div>        
                        </div>

@endsection