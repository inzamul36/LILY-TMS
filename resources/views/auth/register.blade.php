@extends('layouts.login-layout')

@section('title')
    Register 
@endsection

@section('content')


                    <form class="form-horizontal form-material" id="loginform" role="form" method="POST" action="{{ route('register') }}"> 

                        {{ csrf_field() }}

                        <a href="javascript:void(0)" class="text-center db">
                            <img src="{{ asset('images/lily-logo.png')}}" alt="Home" width="100px" />
                            <h3 class=" text-left m-t-40">Register</h3>
                        </a>                          
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="form-material col-xs-12">
                                <input id="name" type="text" placeholder="Name" class="form-control" name="name" value="{{ old('name') }}" autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <div class="col-xs-12">
                                <input id="email" type="email" placeholder="Email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <div class="col-xs-12">
                                <input id="password" type="password" placeholder="Password" class="form-control" name="password" >

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-xs-12">
                                <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation">
                            </div>
                        </div>

                        <div class="form-group text-center m-t-20">
                            <div class="col-xs-12">
                                <button class="btn btn-warning btn-lg btn-block text-uppercase waves-effect waves-light" type="submit">Register</button>
                            </div>
                        </div>
                    </form>

@endsection
