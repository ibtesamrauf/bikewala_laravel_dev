@extends('layouts.app')

@section('content')
    @include('layouts.inc_header')
    @include('layouts.inc_nav')
    <?php 
        $city_array = array('Karachi','Lahore','Faisalabad','Rawalpindi','Multan','Gujranwala','Hyderabad','Peshawar',
        'Islamabad','Quetta','Sargodha','Sialkot','Bahawalpur','Sukkur','Kandhkot','Shekhupura',
        'Mardan','Gujrat','Larkana','Kasur','Rahim Yar Khan','Sahiwal','Okara','Wah Cantonment',
        'Dera Ghazi Khan','Mingora','Mirpur Khas','Chiniot','Nawabshah','Kamoke','Burewala','Jhelum',
        'Sadiqabad','Khanewal','Hafizabad','Kohat','Jacobabad','Shikarpur','Muzaffargarh','Khanpur',
        'Gojra','Bahawalnagar','Abbottabad','Muridke','Pakpattan','Khuzdar','Jaranwala','Chishtian',
        'Daska','Mandi Bahauddin','Ahmadpur East','Kamalia','Tando Adam','Khairpur','Dera Ismail Khan',
        'Vehari','Nowshera','Dadu','Wazirabad','Khushab','Charsada','Swabi','Chakwal','Mianwali',
        'Tando Allahyar','Kot Adu','Farooka','Chichawatni','Vihari');
    ?>
    
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>

    <!-- email varification register part -->
    @if(Session::has('alert'))
    <div class="alert alert-success">
        {{ Session::get('alert') }}
        @php
        Session::forget('alert');
        @endphp
    </div>
    @endif

    <div class="b-submit">
            <div class="container">
                <div class="row">
                    <div class="col-lg-9 col-md-8 col-sm-7 col-xs-6">
                        <div class="b-submit__main">
                            <form action="{{ route('register') }}" method="POST" class='s-submit'>
                                {{ csrf_field() }}
                                <input type="hidden" value="1" name="agent_register">
                                <div class="b-submit__main-contacts wow zoomInUp" data-wow-delay="0.3s">
                                    <header class="s-headerSubmit s-lineDownLeft">
                                        <h2>User Information</h2>
                                    </header>
                                    <!--<p>Complete agent registration section. We will post a free listing of your bikes & accessories. </p>-->

                                    <div class="row">
                                        <div class="col-md-6 col-xs-12{{ $errors->has('name_person') ? ' has-error' : '' }}">
                                            <div class="b-submit__main-element">
                                                <label for="name_person" class="col-md-4 control-label">Name  <span>*</span></label>
                                                <!-- <input type="text" name="user_name" /> -->
                                                <input id="name_person" type="text" style="{{ $errors->has('name_person') ? 'border-color: #a94442;' : '' }}" class="input_fields form-control" name="name_person" value="{{ old('name_person') }}" required autofocus>

                                                @if ($errors->has('name_person'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('name_person') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12{{ $errors->has('email') ? ' has-error' : '' }}">
                                            <div class="b-submit__main-element">
                                                <label for="email" class="col-md-4 control-label">Email  <span>*</span></label>
                                                <!-- <input type="text" name="user_email" /> -->
                                                <input id="email" type="email" style="{{ $errors->has('email') ? 'border-color: #a94442;' : '' }}" class="input_fields form-control" name="email" value="{{ old('email') }}" required>

                                                @if ($errors->has('email'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('email') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12{{ $errors->has('password') ? ' has-error' : '' }}">
                                            <div class="b-submit__main-element">
                                                <label for="password" class="col-md-4 control-label">Choose Password  <span>*</span></label>
                                                <!-- <input type="text" name="user_password" /> -->
                                                <input id="password" type="password" style="{{ $errors->has('password') ? 'border-color: #a94442;' : '' }}" class="input_fields form-control" name="password" required>

                                                @if ($errors->has('password'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('password') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12{{ $errors->has('mobile_number') ? ' has-error' : '' }}">
                                            <div class="b-submit__main-element">
                                                <label for="password_confirmation" class="col-md-4 control-label">Confirm Password  <span>*</span></label>
                                                <!-- <input type="text" name="user_password" /> -->
                                                <input id="password-confirm" type="password" style="{{ $errors->has('password_confirmation') ? 'border-color: #a94442;' : '' }}" class="input_fields form-control" name="password_confirmation" required>    
                                            </div>
                                        </div>
                                    </div>








                                    <header class="s-headerSubmit s-lineDownLeft">
                                        <h2>Bike Detail</h2>
                                    </header>

                                    <div class="row">

                                        <div class="col-md-6 col-xs-12{{ $errors->has('have_bike') ? ' has-error' : '' }}">
                                            <div class="b-submit__main-element">
                                                <label for="have_bike" class="col-md-4 control-label">Do you have a bike</label>

                                                    <!-- <input id="have_bike" type="email" class="form-control" name="have_bike" value="{{ old('have_bike') }}" required> -->
                                                    <span style="padding-right: 5px;">Yes</span>
                                                    <input id="have_bike_yes" type="radio" <?php if(old('have_bike') == 1){echo "checked";}?> name="have_bike" value="1" required style=" visibility: unset;"> 
                                                     
                                                    <span style="padding-left: 27px; padding-right: 5px;">No</span>
                                                    <input id="have_bike_no" type="radio" <?php if(old('have_bike') == 0){echo "checked";}?> name="have_bike" value="0" required style=" visibility: unset;"> 
                                                    @if ($errors->has('have_bike'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('have_bike') }}</strong>
                                                        </span>
                                                    @endif
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-xs-12{{ $errors->has('bike_model') ? ' has-error' : '' }}" id="bike_model_div" style="display:none" >
                                            <div class="b-submit__main-element">
                                                <label for="bike_model" class="col-md-4 control-label">Bike model  <span>*</span></label>
                                                
                                                <input id="bike_model" type="text" style="{{ $errors->has('name_person') ? 'border-color: #a94442;' : '' }}" class="input_fields form-control" name="bike_model" value="{{ old('bike_model') }}">
                                                @if ($errors->has('bike_model'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('bike_model') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>

                                    </div>


                                    <script type="text/javascript">
                                        jQuery( document ).ready(function() {
                                            var cc = $('input[type=radio][name=have_bike]:checked').val()
                                            // console.log(cc);
                                            if(cc){
                                                jQuery( "#bike_model_div" ).css("display" , "block");
                                                jQuery( "#bike_model" ).attr("required", true);
                                            }
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


                                    <header class="s-headerSubmit s-lineDownLeft">
                                        <h2>Contact Detail</h2>
                                    </header>
                                    <div class="row">
                                        <div class="col-md-6 col-xs-12{{ $errors->has('name_person') ? ' has-error' : '' }}">
                                            <div class="b-submit__main-element">
                                                <label for="address" class="col-md-4 control-label">Address <span>*</span></label>
                                                <!-- <input type="text" name="user_address" /> -->
                                                <input id="address" type="text" style="{{ $errors->has('address') ? 'border-color: #a94442;' : '' }}" class="input_fields form-control" name="address" value="{{ old('address') }}" required autofocus>
                                                @if ($errors->has('address'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('address') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12{{ $errors->has('mobile_number') ? ' has-error' : '' }}">
                                            <div class="b-submit__main-element">
                                                <label for="city" class="col-md-4 control-label">City  <span>*</span></label>
                                                <div class='s-relative'>
                                                    <select class="m-select" name="city">                                                        
                                                        <!-- <option value="0" selected="0">Select City</option> -->
                                                        @foreach ($city_array as $city)
                                                            <option value="{{ $city }}" selected="{{ old('city') }}">{{ $city }}</option>
                                                        @endforeach

                                                    </select>
                                                    <!-- <input id="city" type="text" class="form-control" name="city" value="{{ old('city') }}" required> -->
                                                    @if ($errors->has('city'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('city') }}</strong>
                                                        </span>
                                                    @endif
                                                    <span class="fa fa-caret-down"></span>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 col-xs-12{{ $errors->has('mobile_number') ? ' has-error' : '' }}">
                                            <div class="b-submit__main-element">
                                                <label for="phone_number" class="col-md-4 control-label">Phone  <span>*</span></label>
                                                <!-- <input type="text" name="user_phone" /> -->
                                                <input id="phone_number" type="text" style="{{ $errors->has('phone_number') ? 'border-color: #a94442;' : '' }}" class="input_fields form-control" name="phone_number" value="{{ old('phone_number') }}" required>
                                                @if ($errors->has('phone_number'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                                    </span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-xs-12{{ $errors->has('mobile_number') ? ' has-error' : '' }}">
                                            <div class="b-submit__main-element">
                                                <label for="mobile_number" class="col-md-4 control-label">Mobile  <span>*</span></label>
                                                <!-- <input type="text" name="user_mobile" /> -->
                                                <input id="mobile_number" type="text" style="{{ $errors->has('mobile_number') ? 'border-color: #a94442;' : '' }}" class="input_fields form-control" name="mobile_number" value="{{ old('mobile_number') }}" required>
                                                @if ($errors->has('mobile_number'))
                                                    <span class="help-block">
                                                        <strong>{{ $errors->first('mobile_number') }}</strong>
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

@endsection
