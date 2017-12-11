@extends('layouts.app')

@section('content')
    @include('layouts.inc_header')
    @include('layouts.inc_nav')

    <!--b-breadCumbs-->
    <div class="b-submit">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-8 col-sm-7 col-xs-6">
                    <div class="b-submit__main">
                        <form method="POST" action="{{ route('login') }}" class='s-submit'>
                            {{ csrf_field() }}
                            <div class="b-submit__main-contacts wow zoomInUp" data-wow-delay="0.3s">
                                <header class="s-headerSubmit s-lineDownLeft">
                                    <h2>Login Information</h2>
                                </header>
                                <?php if (!empty($_GET["msg"]))
                                {
                                ?>
                                <font face="Arial" size="2" color=red><?php echo $_GET["msg"];?></font>
                                <?php
                                }
                                ?>

                                <!--<p>Enter login credentials to access agent specific modules. </p>-->
                                <div class="row">
                                    <div class="col-md-6 col-xs-12{{ $errors->has('email') ? ' has-error' : '' }}">
                                        <div class="b-submit__main-element">
                                            <label for="email" class="col-md-4 control-label">Email  <span>*</span></label>
                                            <!-- <input type="text" name="user_email" /> -->

                                            <input id="email" type="email" style="{{ $errors->has('email') ? 'border-color: #a94442;' : '' }}" class="input_fields form-control" name="email" value="{{ old('email') }}" required autofocus>
                                            @if ($errors->has('email'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('email') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>
                                   

                                    <div class="col-md-6 col-xs-12{{ $errors->has('password') ? ' has-error' : '' }}">
                                        <div class="b-submit__main-element">
                                            <label for="password" class="col-md-4 control-label">Password  <span>*</span></label>
                                            <!-- <input type="text" name="user_password" /> -->

                                            <input id="password" type="password" style="{{ $errors->has('password') ? 'border-color: #a94442;' : '' }}" class="input_fields form-control" name="password" required>
                                            @if ($errors->has('password'))
                                                <span class="help-block">
                                                    <strong>{{ $errors->first('password') }}</strong>
                                                </span>
                                            @endif
                                        </div>
                                    </div>

                                    

                                </div>
                                <div class="row">
                                    <div class="col-md-6 col-xs-12">
                                        <div class="b-submit__main-element">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" style=" visibility: unset; " name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6 col-xs-12">
                                        <div class="b-submit__main-element">
                                            <label>Forogt Password. Click <a href="{{ route('password.request') }}">here</a> to retrieve login information.</label>
                                        </div>
                                    </div>
                                </div>



                            </div>
                            <button name="save" type="submit" class="btn m-btn pull-right wow zoomInUp" data-wow-delay="0.3s">Sign In<span class="fa fa-angle-right"></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div><!--b-submit-->
@endsection
