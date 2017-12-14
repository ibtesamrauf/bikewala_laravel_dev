@extends('layouts.app')

@section('content')
    @include('layouts.inc_header')
    @include('layouts.inc_nav')
	<!--b-nav-->
	<section class="b-pageHeader">
		<div class="container">
			<h1 class="wow zoomInLeft" data-wow-delay="0.3s">User Control Panel</h1>
			<div class="b-pageHeader__search wow zoomInRight" data-wow-delay="0.3s">
				<h3>User Access Area</h3>
			</div>
		</div>
	</section><!--b-pageHeader-->

	<div class="b-breadCumbs s-shadow">
		<div class="container wow zoomInUp" data-wow-delay="0.3s">
        


		<nav class="b-nav">
		    <div class="container">
		        <div class="row">
		            <div class="col-sm-9 col-xs-8">
		                <div class="b-nav__list wow slideInRight" data-wow-delay="0.3s">
		                    <div class="navbar-header">
		                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav">
		                            <span class="sr-only">Toggle navigation</span>
		                            <span class="icon-bar"></span>
		                            <span class="icon-bar"></span>
		                            <span class="icon-bar"></span>
		                        </button>
		                    </div>
		                    <div class="collapse navbar-collapse navbar-main-slide" id="nav">
		                        <ul class="navbar-nav-menu">
		                            <li><a href="#"></a></li>
		                            <li><a href="#"></a></li>
		                            <li><a href="#"></a></li>
		                            <li><a href="#"></a></li>
		                            <li><a href="#"></a></li>
		                            <li><a href="#"></a></li>
		                            <li><a href="#">My Bikes</a></li>
		                            <li><a href="/bikeadd">Add Bikes</a></li>
		                            <li><a href="#">Profile</a></li> [You are logged in as <font color=red>{{ Auth::user()->name }}</font>]
		                        </ul>
		                    </div>
		                </div>
		            </div>
		        </div>
		    </div>
		</nav><!--b-nav-->



		</div>
	</div><!--b-breadCumbs-->
	<div class="b-submit">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-8 col-sm-7 col-xs-6">
					<div class="b-submit__main">
						<div class="b-submit__main-contacts wow zoomInUp" data-wow-delay="0.3s">
							<header class="s-headerSubmit s-lineDownLeft">
								<h2>User Area</h2>
							</header>
							<p>Welcome to our website. User can perform following tasks<br><br>
                            * Add Bike Detail<br>
                            * Add Bike Accessories<br>
                            * View Request from Buyers<br>
                            * Update Profile<br>
                             </p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!--b-submit-->


@endsection
