@extends('layouts.public')
@section('title')
    Register
@endsection
@section('body')

    <div id="login-container" class="base-bg-color_light">


        <section id="headline">
            <div class="container">
                <div class="section-title clearfix">
                    <h2 class="fl-l">Register</h2>

                    <ul id="breadcrumbs" class="fl-r">
                        <li><a href="{{route('welcome')}}">Home</a></li>
                        <li>Register</li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="contact" class="base-bg-color_light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <h3>User Login Screen</h3>

                        <p>
                            Introducing crystals splash. Very bigger brings most velvety treat burst unique choosy it's
                            spring. Satisfying sleek clinically made reputation agree hello full-bodied. New talking
                            waxy magically made exotic aroma odor newest.
                        </p>

                        <div class="col-md-12">
                            <form METHOD="post" action="{{ route('register') }}">
                                {{ csrf_field() }}
                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-4 control-label">Your name*</label>


                                    <input id="name" type="text" name="name"
                                           value="{{ old('name') }}" required/>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif

                                </div>
                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address*</label>


                                    <input id="email" type="email" name="email"
                                           value="{{ old('email') }}" required/>

                                    @if ($errors->has('email'))
                                        <span class="help-block">
                                    <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                    @endif

                                </div>
                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Password*</label>


                                    <input id="password" type="password" class="form-control" name="password"
                                           required>

                                    @if ($errors->has('password'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                    @endif

                                </div>


                                <div class="form-group">
                                    <label for="password-confirm" class="col-md-4 control-label">Confirm
                                        Password*</label>


                                    <input id="password-confirm" type="password" class="form-control"
                                           name="password_confirmation" required>

                                </div>


                                <input class="base-text-color" type="submit" value="Register"/>
                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </section>
    </div>

@endsection
