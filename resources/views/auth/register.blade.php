@extends('layouts.app')

@section('content')
    @include('layouts.inc_header')
    @include('layouts.inc_nav')

    <div class="b-submit">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-8 col-sm-7 col-xs-6">
                        <div class="b-submit__main">
                            <form action="agent_register1.php" method="post" class='s-submit'>
                                <input type="hidden" value="1" name="agent_register">
                                <div class="b-submit__main-contacts wow zoomInUp" data-wow-delay="0.3s">
                                    <header class="s-headerSubmit s-lineDownLeft">
                                        <h2>User Information</h2>
                                    </header>
                                    <!--<p>Complete agent registration section. We will post a free listing of your bikes & accessories. </p>-->

                                    <div class="row">
                                        <div class="col-md-6 col-xs-12">
                                            <div class="b-submit__main-element">
                                                <label>Name  <span>*</span></label>
                                                <!-- <input type="text" name="user_name" /> -->
                                                <input id="name" type="text" class="input_fields form-control" name="name" value="{{ old('name') }}" required autofocus>

                                                @if ($errors->has('name'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('name') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="b-submit__main-element">
                                                <label>Email  <span>*</span></label>
                                                <!-- <input type="text" name="user_email" /> -->
                                                <input id="email" type="email" class="input_fields form-control" name="email" value="{{ old('email') }}" required>

                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12">
                                            <div class="b-submit__main-element">
                                                <label>Choose Password  <span>*</span></label>
                                                <!-- <input type="text" name="user_password" /> -->
                                                <input id="password" type="password" class="input_fields form-control" name="password" required>

                                                @if ($errors->has('password'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="b-submit__main-element">
                                                <label>Confirm Password  <span>*</span></label>
                                                <!-- <input type="text" name="user_password" /> -->
                                                <input id="password-confirm" type="password" class="input_fields form-control" name="password_confirmation" required>    
                                            </div>
                                        </div>
                                    </div>

                                    <header class="s-headerSubmit s-lineDownLeft">
                                        <h2>Contact Detail</h2>
                                    </header>
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12">
                                            <div class="b-submit__main-element">
                                                <label>Address <span>*</span></label>
                                                <input type="text" name="user_address" />
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="b-submit__main-element">
                                                <label>Email Address  <span>*</span></label>
                                                <div class='s-relative'>
                                                    <select class="m-select" name="city_id">
                                                        <option value="0" selected="0">Select City</option>

                                                    </select>
                                                    <span class="fa fa-caret-down"></span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-xs-12">
                                            <div class="b-submit__main-element">
                                                <label>Phone  <span>*</span></label>
                                                <!-- <input type="text" name="user_phone" /> -->
                                                <input id="number" type="text" class="input_fields form-control" name="number" value="{{ old('number') }}" required>
                                                @if ($errors->has('number'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('number') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12">
                                            <div class="b-submit__main-element">
                                                <label>Mobile  <span>*</span></label>
                                                <!-- <input type="text" name="user_mobile" /> -->
                                                <input id="number" type="text" class="input_fields form-control" name="number" value="{{ old('number') }}" required>
                                                @if ($errors->has('number'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('number') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <button name="save" type="submit" class="btn m-btn pull-right wow zoomInUp" data-wow-delay="0.3s">Save<span class="fa fa-angle-right"></span></button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--b-submit-->


<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group{{ $errors->has('have_bike') ? ' has-error' : '' }}">
                            <label for="have_bike" class="col-md-4 control-label">Do you have a bike</label>

                            <div class="col-md-6">
                                <!-- <input id="have_bike" type="email" class="form-control" name="have_bike" value="{{ old('have_bike') }}" required> -->
                                Yes <input id="have_bike_yes" type="radio" <?php if(old('have_bike') == 1){echo "checked";}?> name="have_bike" value="1" required> 
                                No <input id="have_bike_no" type="radio" <?php if(old('have_bike') == 0){echo "checked";}?> name="have_bike" value="0" required> 
                                @if ($errors->has('have_bike'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('have_bike') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div id="bike_model_div" style="display:none" class="form-group{{ $errors->has('bike_model') ? ' has-error' : '' }}">
                            <label for="bike_model" class="col-md-4 control-label">Bike model</label>

                            <div class="col-md-6">
                                <input id="bike_model" type="text" class="form-control" name="bike_model" value="{{ old('bike_model') }}" required>
                                @if ($errors->has('bike_model'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('bike_model') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <script type="text/javascript">
                            jQuery( document ).ready(function() {
                                var cc = $('input[type=radio][name=have_bike]:checked').val()
                                console.log(cc);
                                $('input[type=radio][name=have_bike]').change(function() {
                                    var a = jQuery( "input[type=radio][name=have_bike]" ).val();
                                    if(this.value == 1){
                                        jQuery( "#bike_model_div" ).css("display" , "block");
                                        jQuery( "#bike_model" ).attr("required", true);
                                    }else if(this.value == 0){
                                        jQuery( "#bike_model_div" ).css("display" , "none");
                                        jQuery( "#bike_model" ).attr("required", false);
                                    }
                                });
                            });
                        </script>

                        <div id="bike_model_div" class="form-group{{ $errors->has('number') ? ' has-error' : '' }}">
                            <label for="number" class="col-md-4 control-label">Mobile number</label>

                            <div class="col-md-6">
                                <input id="number" type="text" class="form-control" name="number" value="{{ old('number') }}" required>
                                @if ($errors->has('number'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div id="bike_model_div" class="form-group{{ $errors->has('city') ? ' has-error' : '' }}">
                            <label for="city" class="col-md-4 control-label">City</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control" name="city" value="{{ old('city') }}" required>
                                @if ($errors->has('city'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
