@extends('layouts.app')

@section('content')
    @include('layouts.inc_header')
    @include('layouts.inc_nav')
    <div class="b-submit">
		<div class="container">
			<div class="row">
                <!--
                <div class="col-lg-3 col-md-4 col-sm-5 col-xs-6">
                    <aside class="b-submit__aside">
						<div class="b-submit__aside-step m-active wow zoomInUp" data-wow-delay="0.5s">
							<h3>Step 1</h3>
							<div class="b-submit__aside-step-inner m-active clearfix">
								<div class="b-submit__aside-step-inner-icon">
									<span class="fa fa-car"></span>
								</div>
								<div class="b-submit__aside-step-inner-info">
									<h4>Add YOUR Bike</h4>
									<p>Select your bike &amp; add info</p>
									<div class="b-submit__aside-step-inner-info-triangle"></div>
								</div>
							</div>
						</div>
						<div class="b-submit__aside-step wow zoomInUp" data-wow-delay="0.5s">
							<h3>Step 2</h3>
							<div class="b-submit__aside-step-inner clearfix">
								<div class="b-submit__aside-step-inner-icon">
									<span class="fa fa-photo"></span>
								</div>
								<div class="b-submit__aside-step-inner-info">
									<h4>Photos &amp; videos</h4>
									<p>Add images / videos of bike</p>
								</div>
							</div>
						</div>
						<div class="b-submit__aside-step wow zoomInUp" data-wow-delay="0.5s">
							<h3>Step 3</h3>
							<div class="b-submit__aside-step-inner clearfix">
								<div class="b-submit__aside-step-inner-icon">
									<span class="fa fa-user"></span>
								</div>
								<div class="b-submit__aside-step-inner-info">
									<h4>Contact details</h4>
									<p>Choose bike specifications</p>
								</div>
							</div>
						</div>
					</aside>
				</div>
                -->
				<div class="col-lg-9 col-md-8 col-sm-7 col-xs-6">
					<div class="b-submit__main">
						<header class="s-headerSubmit s-lineDownLeft wow zoomInUp" data-wow-delay="0.5s">
							<h2 class="">Add Your Bike Details</h2>
						</header>
						<form class="s-submit clearfix" action="bikeadd.php" method="POST">
							<div class="row">
								<div class="col-md-6 col-xs-12">

									<div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
										<label>Select Type</label>
										<div class='s-relative'>
											<select class="m-select" name="bike_type">

												<option value="1" selected>New</option>
												<option value="2">Used</option>
											</select>
											<span class="fa fa-caret-down"></span>
										</div>
									</div>
									<div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
										<label>Model <span>*</span></label>
										<div class='s-relative' id="modeldiv">
											<select class="m-select" name="model_id">
												<option value="" selected="">Select Make First</option>												</select>
											<span class="fa fa-caret-down"></span>
										</div>

									</div>

									<div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
										<label>Mileage<span>*</span></label>
										<div class="b-submit__main-contacts-inputSelect">
											<input type="text" name="bike_mileage"/>
											<div class="b-submit__main-contacts-select">
												<select name="km" class="m-select">
													<option>IN KMS</option>
												</select>
												<span class="fa fa-caret-down"></span>
											</div>
										</div>
									</div>

                                    <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                                        <label>Color<span>*</span></label>
                                        <div class='s-relative'>
                                            <select class="m-select" name="bike_color">
                                                <option value="0" selected>Select Color</option>
                                                <option value="Blue">Blue</option>
                                                <option value="Grey">Grey</option>
                                                <option value="Red">Red</option>
                                            </select>
                                            <span class="fa fa-caret-down"></span>
                                        </div>
                                    </div>

                                    <div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
                                        <label>City<span>*</span></label>
                                        <div class='s-relative'>
											<select class="m-select" name="city_id">
												<option value="0" selected="0">Select City</option>
											</select>
                                            <span class="fa fa-caret-down"></span>
                                        </div>
                                    </div>
								</div>


								<div class="col-md-6 col-xs-12">
									<div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">

										<div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
											<label>Make <span>*</span></label>
											<div class='s-relative'>
												<select class="m-select" name="make_id" onChange="getmodel(this.value)">
													<option value="0" selected="0">Select Make</option>
													
												</select>
												<span class="fa fa-caret-down"></span>
											</div>
										</div>

										<div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
											<label>Manufacturer Year<span>*</span></label>
											<div class='s-relative'>
												<select class="m-select" name="bike_year">
													<option value="0" selected>Select Year</option>
													<option value="2010">2010</option>
													<option value="2011">2011</option>
													<option value="2012">2012</option>
													<option value="2013">2013</option>
													<option value="2014">2014</option>
													<option value="2015">2015</option>
													<option value="2016">2016</option>
												</select>
												<span class="fa fa-caret-down"></span>
											</div>
										</div>
										<div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
											<div class='s-relative'>
												<label>Registration No.<span>*</span></label>
												<input placeholder="Bike Registration No." type="text" name="bike_regno" />
											</div>
										</div>
									</div>
									<div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.5s">
										<div class='s-relative'>
											<label>Sale Price <span>*</span></label>
											<input placeholder="Sale Price" type="text" name="bike_price" />
										</div>
									</div>
								</div>
							</div>
                            <br>

                            <div class="b-submit__main-file wow zoomInUp" data-wow-delay="0.3s">
                                <header class="s-headerSubmit s-lineDownLeft">
                                    <h2>Write Additional Comments</h2>
                                </header>
                                <!--
								<p>Features</p>
                            <div class="row">
								<div class="col-md-6 col-xs-12">
									<div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.3s">
										<input type="checkbox" name="bike_feature_name1" id="bike_feature_name1" value="Anti Lock Braking System (ABS)" />
										<label class="s-submitCheckLabel" for="bike_feature_name1"><span class="fa fa-check"></span></label>
										<label class="s-submitCheck" for="bike_feature_name1">Anti Lock Braking System (ABS)</label>
									</div>
									<div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.3s">
										<input type="checkbox" name="bike_feature_name2" id="bike_feature_name2" value="BS Type Carburetor Fuel System" />
										<label class="s-submitCheckLabel" for="bike_feature_name2"><span class="fa fa-check"></span></label>
										<label class="s-submitCheck" for="bike_feature_name2">BS Type Carburetor Fuel System</label>
									</div>
									<div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.3s">
										<input type="checkbox" name="bike_feature_name3" id="bike_feature_name3" value="Decompressor Kick Start System" />
										<label class="s-submitCheckLabel" for="bike_feature_name3"><span class="fa fa-check"></span></label>
										<label class="s-submitCheck" for="bike_feature_name3">Decompressor Kick Start System</label>
									</div>
								</div>
								<div class="col-md-6 col-xs-12">
									<div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.3s">
										<input type="checkbox" name="bike_feature_name4" id="bike_feature_name4" value="CDI Ignition System" />
										<label class="s-submitCheckLabel" for="bike_feature_name4"><span class="fa fa-check"></span></label>
										<label class="s-submitCheck" for="bike_feature_name4">CDI&nbsp;Ignition System</label>
									</div>
									<div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.3s">
										<input type="checkbox" name="bike_feature_name5" id="bike_feature_name5" value="Gear Indicator" />
										<label class="s-submitCheckLabel" for="bike_feature_name5"><span class="fa fa-check"></span></label>
										<label class="s-submitCheck" for="bike_feature_name5">Gear Indicator</label>
									</div>
									<div class="b-submit__main-element wow zoomInUp" data-wow-delay="0.3s">
										<input type="checkbox" name="bike_feature_name6" id="bike_feature_name6" value="4-Speed Transmission" />
										<label class="s-submitCheckLabel" for="bike_feature_name6"><span class="fa fa-check"></span></label>
										<label class="s-submitCheck" for="bike_feature_name6">4-Speed Transmission </label>
									</div>
								</div>
							</div>-->
                                <textarea name="bike_detail" cols="75"></textarea>
                            </div>
                            <div class="b-submit__main-file wow zoomInUp" data-wow-delay="0.3s">
									<header class="s-headerSubmit s-lineDownLeft wow zoomInUp" data-wow-delay="0.3s">
										<h2>Upload Your Bike Photos</h2>
									</header>
									<p class=" wow zoomInUp" data-wow-delay="0.3s">You can upload upto 10 photos of your vehicle here.</p>
									<label class="b-submit__main-file-label btn m-btn wow zoomInUp" data-wow-delay="0.3s">
										
										<span>CHOOSE A  PHOTO</span>
										<span class="fa fa-angle-right" onClick=""></span>
                                    </label>
									<label>Max. file size: 3.5 MB. Allowed images: jpg, gif, png.</label>
                            </div>

                            <?php
                            if (!(isset($_SESSION['user_id']) && $_SESSION['user_id'] != ''))
                            {
                            ?>
                                <div class="b-submit__main-contacts wow zoomInUp" data-wow-delay="0.3s">
									<header class="s-headerSubmit s-lineDownLeft">
										<h2>Tell Us How Buyers Contact You</h2>
									</header>
									<!--<p>Curabitur libero. Donec facilisis velit eu est. Phasellus cons quat aenean vitae quam. </p>-->
									<div class="row">
										<div class="col-md-6 col-xs-12">
											<div class="b-submit__main-element">
												<label>Name  <span>*</span></label>
												<input type="text" name="bike_seller_name" />
											</div>
										</div>
										<div class="col-md-6 col-xs-12">
											<div class="b-submit__main-element">
												<label>Email Address  <span>*</span></label>
												<input type="text" name="bike_seller_email" />
											</div>
										</div>
									</div>
									<div class="row">
										<div class="col-md-6 col-xs-12">
											<div class="b-submit__main-element">
												<label>Choose Password  <span>(By choosing password you will be our registered user)</span></label>
												<input type="text" name="user_password" />
											</div>
										</div>
										<div class="col-md-6 col-xs-12">
											<div class="b-submit__main-element">
												<label>Confirm Password  <span><br><br></span></label>
												<input type="text" name="user_password" />
											</div>
										</div>
									</div>

									<div class="row">
										<div class="col-md-6 col-xs-12">
											<div class="b-submit__main-element">
												<label>Mobile Number  <span>*</span></label>
												<input type="text" name="bike_seller_contactno" />
											</div>
										</div>
										<div class="col-md-6 col-xs-12">
											<div class="b-submit__main-element">
												<label>City  <span>*</span></label>
												<div class='s-relative'>
													<select class="m-select" name="bike_seller_city_id">
														<option value="0" selected="0">Select City</option>
														
													</select>
													<span class="fa fa-caret-down"></span>
												</div>

											</div>
										</div>
									</div>
								</div>
                            <?php
                            }
                            ?>
                            <button name="Submit"  type="submit" class="btn m-btn pull-right wow zoomInUp" data-wow-delay="0.5s">SUBMIT<span class="fa fa-angle-right"></span></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div><!--b-submit-->

@endsection
