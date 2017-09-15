@extends('layouts.login-layout')

@section('title')
    login 
@endsection

@section('content')


                    {!! Form::open(array('class' => 'form-horizontal form-material')) !!}

                        <a href="javascript:void(0)" class="text-center db">
                            <img src="{{ asset('images/lily-logo.png')}}" alt="Home" width="100px" />
                            <h3 class=" text-left m-t-40">Login</h3>
                        </a>                          
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="form-material col-xs-12">
                                {!! Form::email('email','',[ 'placeholder'=>"Email", 'class'=>"form-control"]) !!}
                                
                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-xs-12">
                                {!! Form::password('password',[ 'placeholder'=>"password", 'class'=>"form-control"]) !!}

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <div class="checkbox checkbox-primary pull-left p-t-0">
                                  <input id="checkbox-signup" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                  <label for="checkbox-signup"> Remember me </label>
                                </div>
                                <a href="javascript:void(0)" onclick="alert('Alert! Please contact with Developer.')" id="to-recover" class="text-dark pull-right"><i class="fa fa-lock m-r-5"></i> Forgot pwd?</a> 
                            </div>
                        </div>
                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-warning btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
                            </div>
                        </div>
                    {!! Form::close() !!}
                

@endsection
