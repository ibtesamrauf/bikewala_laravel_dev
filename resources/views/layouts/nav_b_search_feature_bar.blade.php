<br><br>
<section class="b-search">
	<div class="container">
		<form action="bikelisting.php" method="POST" class="b-search__main"  style="background-image: linear-gradient(rgba(0,0,0,0.15), rgba(0,0,0,0.3)), url(images/bike_banner3.jpg)">
			<div class="b-search__main-title wow zoomInUp" data-wow-delay="0.3s">
				<h2>LOOKING FOR BIKE? FIND IT HERE</h2>
			</div>
			<div class="b-search__main-type wow zoomInUp" data-wow-delay="0.3s">
				<!--<div class="col-xs-12 col-md-2 s-noLeftPadding">
					<h4>Select vehicle type</h4>
				</div>-->
			</div>
			<div class="b-search__main-form wow zoomInUp" data-wow-delay="0.3s">
				<div class="row">
					<div class="col-xs-12 col-md-8">
						<div class="m-firstSelects">
							<div class="col-xs-4">
								<select name="make_id" onChange="getmodel(this.value)">
                                    <option value="0" selected="0">Any Make</option>
                                    <?php
                                    $query_make = "SELECT make_id, make_name FROM tbl_make where make_status = 1 order by make_id LIMIT 0,100";
                                    $result_make = mysql_query($query_make) or die('Error, query failed');
                                    echo $query_make;
                                    while($row_make = mysql_fetch_array($result_make)) {

                                        $make_id = $row_make['make_id'];
                                        $make_name = $row_make['make_name'];

                                        ?>
                                        <option value="<?php echo $make_id; ?>"><?php echo $make_name; ?></option>
                                        <?php
                                    }
                                    ?>
								</select>
								<span class="fa fa-caret-down"></span>
								<p><font color="black"> MISSING MANUFACTURER?</font></p>
							</div>
                            <div class="col-xs-4" id="modeldiv">
								<select name="model_id">
									<option value="" selected="">Select Make First</option>
								</select>
								<span class="fa fa-caret-down"></span>
								<p><font color="black"> MISSING MODEL?</font></p>
							</div>
							<div class="col-xs-4">
                                <select name="city_id">
                                    <option value="0" selected="">Any City</option>
                                    <?php
                                    $query_city = "SELECT city_id, city_name FROM tbl_city where city_status = 1 order by city_id LIMIT 0,100";
                                    $result_city = mysql_query($query_city) or die('Error, query failed');
                                    echo $query_city;
                                    while($row_city = mysql_fetch_array($result_city)) {

                                        $city_id = $row_city['city_id'];
                                        $city_name = $row_city['city_name'];

                                        ?>
                                        <option value="<?php echo $city_id; ?>"><?php echo $city_name; ?></option>
                                        <?php
                                    }
                                    ?>
                                </select>
								<span class="fa fa-caret-down"></span>
								<p><font color="black"> E.G:  KARACHI, LAHORE, ISLAMABAD</font></p>
							</div>
						</div>
                        <div class="col-xs-radio">
                            <input type="radio" value="1" name="bike_type" checked><SPAN STYLE="color: #999999; font:600 10px 'Open Sans',sans-serif;">&nbsp;<font color="black"> New Bike</font></span>
                            &nbsp;&nbsp;&nbsp;<input type="radio" value="0" name="bike_type"><SPAN STYLE="color: #999999; font:600 10px 'Open Sans',sans-serif;">&nbsp;<font color="black"> Used Bike</font></span>
                        </div>
					</div>

					<div class="col-md-4 col-xs-12 text-left s-noPadding">
						<div class="b-search__main-form-range">
							<label>PRICE RANGE</label>
							<div class="slider"></div>
							<input type="hidden" name="min_range" class="j-min" />
							<input type="hidden" name="max_range" class="j-max" />
						</div>
						<div class="b-search__main-form-submit">
							<a href="#"><strong>Advanced search</strong></a>
                            <button type="submit" class="btn m-btn">Search the Bike<span class="fa fa-angle-right"></span></button>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</section><!--b-search-->
<br><br><br><br><br><br>
<section class="b-featured">
	<div class="container">
		<h2 class="s-title wow zoomInUp" data-wow-delay="0.3s">Featured Vehicles</h2>
		<div id="carousel-small" class="owl-carousel enable-owl-carousel" data-items="4" data-navigation="true" data-auto-play="true" data-stop-on-hover="true" data-items-desktop="4" data-items-desktop-small="4" data-items-tablet="3" data-items-tablet-small="2">
			<div>
				<div class="b-featured__item wow rotateIn" data-wow-delay="0.3s" data-wow-offset="150">
					<a href="detail.html">
						<img src="media/186x113/mers.jpg" alt="mers" />
						<!--<span class="m-premium">Premium</span>-->
					</a>
					<div class="b-featured__item-price">
						Rs.65,900
					</div>
					<div class="clearfix"></div>
					<h5><a href="detail.html">UNIQUE</a></h5>
					<div class="b-featured__item-count"><span class="fa fa-tachometer"></span>35,000 KM</div>
					<div class="b-featured__item-links">
						<a href="#">Used</a>
						<a href="#">2014</a>
						<a href="#">Red</a>
					</div>
				</div>
			</div>
			<div>
				<div class="b-featured__item wow rotateIn" data-wow-delay="0.3s" data-wow-offset="150">
					<a href="detail.html">
						<img src="media/186x113/audi.jpg" alt="audi" />
					</a>
					<div class="b-featured__item-price">
						Rs.130,825
					</div>
					<div class="clearfix"></div>
					<h5><a href="detail.html">SUZUKI AGR</a></h5>
					<div class="b-featured__item-count"><span class="fa fa-tachometer"></span>16,000 KM</div>
					<div class="b-featured__item-links">
						<a href="#">Used</a>
						<a href="#">2014</a>
						<a href="#">Red</a>
					</div>
				</div>
			</div>
			<div>
				<div class="b-featured__item wow rotateIn" data-wow-delay="0.3s" data-wow-offset="150">
					<a href="detail.html">
						<img src="media/186x113/aston.jpg" alt="aston" />
						<!--<span class="m-leasing">LEASING AVAILABLE</span>-->
					</a>
					<div class="b-featured__item-price">
						Rs.50,825
					</div>
					<div class="clearfix"></div>
					<h5><a href="detail.html">YAMAHA MBR</a></h5>
					<div class="b-featured__item-count"><span class="fa fa-tachometer"></span>35,000 KM</div>
					<div class="b-featured__item-links">
						<a href="#">Used</a>
						<a href="#">2014</a>
						<a href="#">Red</a>
					</div>
				</div>
			</div>
			<div>
				<div class="b-featured__item wow rotateIn" data-wow-delay="0.3s" data-wow-offset="150">
					<a href="detail.html">
						<img src="media/186x113/aston.jpg" alt="aston" />
						<span class="m-leasing">LEASING AVAILABLE</span>
					</a>
					<div class="b-featured__item-price">
						Rs.30,000
					</div>
					<div class="clearfix"></div>
					<h5><a href="detail.html">HONDA CD-70</a></h5>
					<div class="b-featured__item-count"><span class="fa fa-tachometer"></span>28,000 KM</div>
					<div class="b-featured__item-links">
						<a href="#">Used</a>
						<a href="#">2014</a>
						<a href="#">Red</a>
					</div>
				</div>
			</div>
			<div>
				<div class="b-featured__item wow rotateIn" data-wow-delay="0.3s" data-wow-offset="150">
					<a href="detail.html">
						<img src="media/186x113/jaguar.jpg" alt="jaguar" />
					</a>
					<div class="b-featured__item-price">
						Rs.30,825
					</div>
					<div class="clearfix"></div>
					<h5><a href="detail.html">HONDA CG-125</a></h5>
					<div class="b-featured__item-count"><span class="fa fa-tachometer"></span>15,000 KM</div>
					<div class="b-featured__item-links">
						<a href="#">Used</a>
						<a href="#">2014</a>
						<a href="#">Red</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section><!--b-featured-->
<br><br>