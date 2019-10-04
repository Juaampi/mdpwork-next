@extends('layouts.app')

@section('content')
<div class="wrapper">
	<div class="preloader"></div>
	<!-- Modal -->
	<div class="sign_up_modal modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
	  	<div class="modal-dialog modal-dialog-centered" role="document">
	    	<div class="modal-content">
		      	<div class="modal-header">
		        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
		      	</div>
	    		<ul class="sign_up_tab nav nav-tabs" id="myTab" role="tablist">
				  	<li class="nav-item">
				    	<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Login</a>
				  	</li>
				  	<li class="nav-item">
				    	<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Register</a>
				  	</li>
				</ul>
				<div class="tab-content" id="myTabContent">
				  	<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<div class="login_form">
							<form action="#">
								<div class="heading">
									<h3 class="text-center">Quick Login</h3>
									<p class="text-center">Don't have an account? <a class="text-thm" href="#">Sign Up!</a></p>
								</div>
								 <div class="form-group">
							    	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
								</div>
								<div class="form-group">
							    	<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
								</div>
								<div class="form-group form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck1">
									<label class="form-check-label" for="exampleCheck1">Remember me</label>
									<a class="tdu text-thm float-right" href="#">Forgot Password?</a>
								</div>
								<button type="submit" class="btn btn-log btn-block btn-thm">Login</button>
								<hr>
								<div class="row mt40">
									<div class="col-lg">
										<button type="submit" class="btn btn-block color-white bgc-fb"><i class="fa fa-facebook float-left mt5"></i> Facebook</button>
									</div>
									<div class="col-lg">
										<button type="submit" class="btn btn-block color-white bgc-gogle"><i class="fa fa-google float-left mt5"></i> Google</button>
									</div>
								</div>
							</form>
						</div>
				  	</div>
				  	<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<div class="sign_up_form">
							<div class="heading">
								<h3 class="text-center">Create New Account</h3>
								<p class="text-center">Don't have an account? <a class="text-thm" href="#">Sign Up!</a></p>
							</div>
							<form action="#">
								<div class="form-group">
							    	<input type="text" class="form-control" id="exampleInputName1" placeholder="User Name">
								</div>
								 <div class="form-group">
							    	<input type="email" class="form-control" id="exampleInputEmail2" placeholder="Email">
								</div>
								<div class="form-group">
							    	<input type="number" class="form-control" id="exampleInputPhone1" placeholder="Phone Number">
								</div>
								<div class="form-group">
									<select id="inputState1" class="form-control">
								        <option selected>Select Sector</option>
								        <option>Web Developer</option>
								        <option>Ui/Ux Designer</option>
								        <option>Photoeditor</option>
								        <option>Graphics Designer</option>
								    </select>
								</div>
								<div class="form-group">
							    	<input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
								</div>
								<div class="form-group form-check">
									<input type="checkbox" class="form-check-input" id="exampleCheck2">
									<label class="form-check-label" for="exampleCheck2">By Registering You Confirm That You Accept <a class="text-thm" href="page-terms-and-policies.html">Terms & Conditions</a> And <a class="text-thm" href="page-terms-and-policies.html">Privacy Policy</a></label>
								</div>
								<button type="submit" class="btn btn-log btn-block btn-dark">Register</button>
								<hr>
								<div class="row mt40">
									<div class="col-lg">
										<button type="submit" class="btn btn-block color-white bgc-fb"><i class="fa fa-facebook float-left mt5"></i> Facebook</button>
									</div>
									<div class="col-lg">
										<button type="submit" class="btn btn-block color-white bgc-gogle"><i class="fa fa-google float-left mt5"></i> Google</button>
									</div>
								</div>
							</form>
						</div>
				  	</div>
				</div>
	    	</div>
	  	</div>
	</div>

	<!-- Home Design -->
	<section class="home-one style2 bgc-lightgray">
		<div class="container">
			<div class="row home-content">
				<div class="col-lg-12">
					<div class="find-cand-sec">
						<div class="mockup-top"><img class="animute" src="images/home/home2_bg.png" alt="" /></div>
					</div>
				</div>
				<div class="col-lg-8">
					<div class="home-text">
						<h2 class="fz40">Find The Job That Fits Your Life</h2>
						<p>Each month, more than 7 million jobseekers turn to website in their search for work, making over 160,000 applications every day.</p>
					</div>
				</div>
				<div class="col-lg-12">
					<div class="home-job-search-box mt20 mb20">
						<form class="form-inline">
							<div class="search_option_one">
							    <div class="form-group">
							    	<label for="exampleInputName"><span class="flaticon-search"></span></label>
							    	<input type="text" class="form-control h70" id="exampleInputName" placeholder="Job Title or Keywords">
							    </div>
							</div>
							<div class="search_option_two">
							    <div class="form-group">
							    	<label for="exampleInputEmail"><span class="flaticon-location-pin"></span></label>
							    	<input type="text" class="form-control h70" id="exampleInputEmail" placeholder="Location">
							    </div>
							</div>
							<div class="search_option_button">
							    <button type="submit" class="btn btn-thm btn-secondary h70">Search</button>
							</div>
						</form>
					</div>
					<p><span class="color-black22">Trending Keywords:</span> DesignCer,  Developer,  Web,  IOS,  PHP,  Senior,  Engineer</p>
				</div>
			</div>
		</div>
	</section>

	<!-- Popular Job Categories -->
	<section class="popular-job bgc-fa">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="ulockd-main-title">
						<h3 class="mt0">Popular Job Categories</h3>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-lg-3">
					<a href="#" class="icon_hvr_img_box style2 sbbg1">
						<div class="overlay">
							<div class="icon"><span class="flaticon-pen"></span></div>
							<div class="details">
								<h5>Design, Art & Multimedia</h5>
								<p>22 Open Positions</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-lg-3">
					<a href="#" class="icon_hvr_img_box style2 sbbg2">
						<div class="overlay">
							<div class="icon"><span class="flaticon-mortarboard"></span></div>
							<div class="details">
								<h5>Education Training</h5>
								<p>48 Open Positions</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-lg-3">
					<a href="#" class="icon_hvr_img_box style2 sbbg3">
						<div class="overlay">
							<div class="icon"><span class="flaticon-bars"></span></div>
							<div class="details">
								<h5>Accounting / Finance</h5>
								<p>97 Open Positions</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-lg-3">
					<a href="#" class="icon_hvr_img_box style2 sbbg4">
						<div class="overlay">
							<div class="icon"><span class="flaticon-interview"></span></div>
							<div class="details">
								<h5>Human Resource</h5>
								<p>17 Open Positions</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-lg-3">
					<a href="#" class="icon_hvr_img_box style2 sbbg5">
						<div class="overlay">
							<div class="icon"><span class="flaticon-antenna"></span></div>
							<div class="details">
								<h5>Telecommunications</h5>
								<p>60 Open Positions</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-lg-3">
					<a href="#" class="icon_hvr_img_box style2 sbbg6">
						<div class="overlay">
							<div class="icon"><span class="flaticon-food"></span></div>
							<div class="details">
								<h5>Restaurant / Food Service</h5>
								<p>22 Open Positions</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-lg-3">
					<a href="#" class="icon_hvr_img_box style2 sbbg7">
						<div class="overlay">
							<div class="icon"><span class="flaticon-customer-support"></span></div>
							<div class="details">
								<h5>Construction / Facilities</h5>
								<p>05 Open Positions</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-lg-3">
					<a href="#" class="icon_hvr_img_box style2 sbbg8">
						<div class="overlay">
							<div class="icon"><span class="flaticon-care"></span></div>
							<div class="details">
								<h5>Health</h5>
								<p>10 Open Positions</p>
							</div>
						</div>
					</a>
				</div>
				<div class="col-lg-6 offset-lg-3">
					<div class="pjc_all_btn text-center">
						<a class="btn btn-thm" href="#">Browse All Categories <span class="flaticon-right-arrow pl10"></span></a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- How It's Work -->
	<section class="popular-job">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 text-center">
					<div class="ulockd-main-title">
						<h3 class="mt0">How It Works?</h3>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-lg-4 prpl5">
					<div class="icon_box_hiw">
						<div class="icon"><div class="list_tag float-right"><p>1</p></div><span class="flaticon-unlocked"></span></div>
						<div class="details">
							<h4>Create An Account</h4>
							<p>Post a job to tell us about your project. We'll quickly match you with the right freelancers.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4 prpl5 mt20-xxsd">
					<div class="icon_box_hiw">
						<div class="icon middle"><div class="list_tag float-right"><p>2</p></div><span class="flaticon-job"></span></div>
						<div class="details">
							<h4>Search Jobs</h4>
							<p>Browse profiles, reviews, and proposals then interview top candidates.</p>
						</div>
					</div>
				</div>
				<div class="col-sm-6 col-lg-4 prpl5 mt20-xxsd">
					<div class="icon_box_hiw">
						<div class="icon"><div class="list_tag float-right"><p>3</p></div><span class="flaticon-trophy"></span></div>
						<div class="details">
							<h4>Save & Apply</h4>
							<p>Use the Upwork platform to chat, share files, and collaborate from your desktop or on the go.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Features Job List Design -->
	<section class="popular-job bgc-fa pb30">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="ulockd-main-title">
						<h3 class="mt0">Featured Jobs</h3>
						<a class="text-thm float-right" href="#">Browse All Jobs <i class="flaticon-right-arrow pl15"></i></a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12 col-lg-12">
					<div class="fj_post">
						<div class="details">
							<h5 class="job_chedule text-thm mt0">Full Time</h5>
							<div class="thumb fn-smd">
								<img class="img-fluid" src="images/partners/1.jpg" alt="1.jpg">
							</div>
							<h4>JEB Product Sales Specialist, Russia & CIS</h4>
							<p>Posted 23 August by <a class="text-thm" href="#">Wiggle CRC</a></p>
							<ul class="featurej_post">
								<li class="list-inline-item"><span class="flaticon-location-pin"></span> <a href="#">Bothell, WA, USA</a></li>
								<li class="list-inline-item"><span class="flaticon-price pl20"></span> <a href="#">$13.00 - $18.00 per hour</a></li>
							</ul>
						</div>
						<a class="btn btn-md btn-transparent float-right fn-smd" href="#">Browse Job</a>
					</div>
				</div>
				<div class="col-sm-12 col-lg-12">
					<div class="fj_post">
						<div class="details">
							<h5 class="job_chedule text-thm mt0">Part Time</h5>
							<div class="thumb fn-smd">
								<img class="img-fluid" src="images/partners/2.jpg" alt="2.jpg">
							</div>
							<h4>General Ledger Accountant</h4>
							<p>Posted 23 August by <a class="text-thm" href="#">Robert Half Finance & Accounting</a></p>
							<ul class="featurej_post">
								<li class="list-inline-item"><span class="flaticon-location-pin"></span> <a href="#">RG40, Wokingham</a></li>
								<li class="list-inline-item"><span class="flaticon-price pl20"></span> <a href="#">$13.00 - $18.00 per hour</a></li>
							</ul>
						</div>
						<a class="btn btn-md btn-transparent float-right fn-smd" href="#">Browse Job</a>
					</div>
				</div>
				<div class="col-sm-12 col-lg-12">
					<div class="fj_post">
						<div class="details">
							<h5 class="job_chedule text-thm mt0">Full Time</h5>
							<div class="thumb fn-smd">
								<img class="img-fluid" src="images/partners/3.jpg" alt="3.jpg">
							</div>
							<h4>Junior Digital Graphic Designer</h4>
							<p>Posted 23 August by <a class="text-thm" href="#">Parkside Recruitment - Uxbridge Finance</a></p>
							<ul class="featurej_post">
								<li class="list-inline-item"><span class="flaticon-location-pin"></span> <a href="#">New Denham, UB8 1JG</a></li>
								<li class="list-inline-item"><span class="flaticon-price pl20"></span> <a href="#">$13.00 - $18.00 per hour</a></li>
							</ul>
						</div>
						<a class="btn btn-md btn-transparent float-right fn-smd" href="#">Browse Job</a>
					</div>
				</div>
				<div class="col-sm-12 col-lg-12">
					<div class="fj_post">
						<div class="details">
							<h5 class="job_chedule text-thm mt0">Full Time</h5>
							<div class="thumb fn-smd">
								<img class="img-fluid" src="images/partners/4.jpg" alt="4.jpg">
							</div>
							<h4>UX/UI Designer</h4>
							<p>Yesterday <a class="text-thm" href="#">NonStop Recruitment Ltd</a></p>
							<ul class="featurej_post">
								<li class="list-inline-item"><span class="flaticon-location-pin"></span> <a href="#">Bothell, WA, USA</a></li>
								<li class="list-inline-item"><span class="flaticon-price pl20"></span> <a href="#">$13.00 - $18.00 per hour</a></li>
							</ul>
						</div>
						<a class="btn btn-md btn-transparent float-right fn-smd" href="#">Browse Job</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Browse Local Jobs -->
	<section class="job-location pb30">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="ulockd-main-title">
						<h3 class="mt0">Browse Local Jobs</h3>
						<a class="text-thm float-right" href="#">Browse All Local Jobs <i class="flaticon-right-arrow pl15"></i></a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-6 col-lg-4">
					<a href="#" class="job_loc_img_box">
						<div class="thumb"><img class="img-fluid" src="images/service/9.jpg" alt="9.jpg"></div>
						<div class="details">
							<h4>London</h4>
							<h5>152,141</h5>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-lg-4">
					<a href="#" class="job_loc_img_box">
						<div class="thumb"><img class="img-fluid" src="images/service/10.jpg" alt="10.jpg"></div>
						<div class="details">
							<h4>Manchester</h4>
							<h5>586,478</h5>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-lg-4">
					<a href="#" class="job_loc_img_box">
						<div class="thumb"><img class="img-fluid" src="images/service/11.jpg" alt="11.jpg"></div>
						<div class="details">
							<h4>Liverpool</h4>
							<h5>15,258</h5>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-lg-4">
					<a href="#" class="job_loc_img_box">
						<div class="thumb"><img class="img-fluid" src="images/service/12.jpg" alt="12.jpg"></div>
						<div class="details">
							<h4>Istanbul</h4>
							<h5>152,141</h5>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-lg-4">
					<a href="#" class="job_loc_img_box">
						<div class="thumb"><img class="img-fluid" src="images/service/13.jpg" alt="13.jpg"></div>
						<div class="details">
							<h4>New York</h4>
							<h5>586,478</h5>
						</div>
					</a>
				</div>
				<div class="col-sm-6 col-lg-4">
					<a href="#" class="job_loc_img_box">
						<div class="thumb"><img class="img-fluid" src="images/service/14.jpg" alt="14.jpg"></div>
						<div class="details">
							<h4>Los Angeles</h4>
							<h5>15,258</h5>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>

	<!-- Expert Freelancer List -->
	<section class="expert-freelancer bgc-fa">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="ulockd-main-title">
						<h3 class="mt0">Hire Expert Freelancer</h3>
						<a class="text-thm float-right" href="#">Browse All Freelancers <i class="flaticon-right-arrow pl15"></i></a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="ef_slider">
						<div class="item">
							<div class="ef_post">
								<div class="ef_header">
									<h4 class="hr_rate"><span class="text-thm">$150</span> <small>/hr</small></h4>
									<a class="ef_bookmark" href="#" title="BookMark Freelancer"><span class="flaticon-bookmark"></span></a>
								</div>
								<div class="thumb text-center">
									<img class="img-fluid" src="images/team/1.jpg" alt="1.jpg">
								</div>
								<div class="freelancer_review">
									<div class="everage_rating">4.5</div>
									<ul class="rating_list">
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star-o"></span></a></li>
									</ul>
									<h4 class="title">Ali TUFAN</h4>
									<p>App Designer</p>
								</div>
								<div class="details">
									<div class="job_locate">
										<p>Location</p>
										<ul class="float-right">
											<li class="list-inline-item m0"><p>Turkey</p></li>
											<li class="list-inline-item m0"><img class="img-fluid pl5" src="images/resource/turkey.png" alt="turkey.png"></li>
										</ul>
									</div>
									<div class="job_srate">
										<p>Job Success</p>
										<p class="float-right">100%</p>
									</div>
									<div class="ef_prf_link mt10">
										<a class="btn btn-block btn-transparent" href="#">View Profile <i class="flaticon-right-arrow pl10"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="ef_post">
								<div class="ef_header">
									<h4 class="hr_rate"><span class="text-thm">$85</span> <small>/hr</small></h4>
									<a class="ef_bookmark" href="#" title="BookMark Freelancer"><span class="flaticon-bookmark"></span></a>
								</div>
								<div class="thumb text-center">
									<img class="img-fluid" src="images/team/2.jpg" alt="2.jpg">
								</div>
								<div class="freelancer_review">
									<div class="everage_rating">4.5</div>
									<ul class="rating_list">
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star-o"></span></a></li>
									</ul>
									<h4 class="title">Dominikus YURI</h4>
									<p>Front-end Developer</p>
								</div>
								<div class="details">
									<div class="job_locate">
										<p>Location</p>
										<ul class="float-right">
											<li class="list-inline-item m0"><p>United States</p></li>
											<li class="list-inline-item m0"><img class="img-fluid pl5" src="images/resource/usa.png" alt="usa.png"></li>
										</ul>

									</div>
									<div class="job_srate">
										<p>Job Success</p>
										<p class="float-right">100%</p>
									</div>
									<div class="ef_prf_link mt10">
										<a class="btn btn-block btn-transparent" href="#">View Profile <i class="flaticon-right-arrow pl10"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="ef_post">
								<div class="ef_header">
									<h4 class="hr_rate"><span class="text-thm">$200</span> <small>/hr</small></h4>
									<a class="ef_bookmark" href="#" title="BookMark Freelancer"><span class="flaticon-bookmark"></span></a>
								</div>
								<div class="thumb text-center">
									<img class="img-fluid" src="images/team/3.jpg" alt="3.jpg">
								</div>
								<div class="freelancer_review">
									<div class="everage_rating">4.5</div>
									<ul class="rating_list">
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star-o"></span></a></li>
									</ul>
									<h4 class="title">Deanna ROSE</h4>
									<p>UI - UX Designer</p>
								</div>
								<div class="details">
									<div class="job_locate">
										<p>Location</p>
										<ul class="float-right">
											<li class="list-inline-item m0"><p>Brazil</p></li>
											<li class="list-inline-item m0"><img class="img-fluid pl5" src="images/resource/brazil.png" alt="brazil.png"></li>
										</ul>

									</div>
									<div class="job_srate">
										<p>Job Success</p>
										<p class="float-right">100%</p>
									</div>
									<div class="ef_prf_link mt10">
										<a class="btn btn-block btn-transparent" href="#">View Profile <i class="flaticon-right-arrow pl10"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="ef_post">
								<div class="ef_header">
									<h4 class="hr_rate"><span class="text-thm">$150</span> <small>/hr</small></h4>
									<a class="ef_bookmark" href="#" title="BookMark Freelancer"><span class="flaticon-bookmark"></span></a>
								</div>
								<div class="thumb text-center">
									<img class="img-fluid" src="images/team/4.jpg" alt="4.jpg">
								</div>
								<div class="freelancer_review">
									<div class="everage_rating">4.5</div>
									<ul class="rating_list">
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star-o"></span></a></li>
									</ul>
									<h4 class="title">Lori Ramos</h4>
									<p>UX/UI Designer</p>
								</div>
								<div class="details">
									<div class="job_locate">
										<p>Location</p>
										<ul class="float-right">
											<li class="list-inline-item m0"><p>Turkey</p></li>
											<li class="list-inline-item m0"><img class="img-fluid pl5" src="images/resource/turkey.png" alt="turkey.png"></li>
										</ul>
									</div>
									<div class="job_srate">
										<p>Job Success</p>
										<p class="float-right">88%</p>
									</div>
									<div class="ef_prf_link mt10">
										<a class="btn btn-block btn-transparent" href="#">View Profile <i class="flaticon-right-arrow pl10"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="ef_post">
								<div class="ef_header">
									<h4 class="hr_rate"><span class="text-thm">$150</span> <small>/hr</small></h4>
									<a class="ef_bookmark" href="#" title="BookMark Freelancer"><span class="flaticon-bookmark"></span></a>
								</div>
								<div class="thumb text-center">
									<img class="img-fluid" src="images/team/5.jpg" alt="5.jpg">
								</div>
								<div class="freelancer_review">
									<div class="everage_rating">4.5</div>
									<ul class="rating_list">
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star-o"></span></a></li>
									</ul>
									<h4 class="title">Michele Snyder</h4>
									<p>Front-End Developer</p>
								</div>
								<div class="details">
									<div class="job_locate">
										<p>Location</p>
										<ul class="float-right">
											<li class="list-inline-item m0"><p>Turkey</p></li>
											<li class="list-inline-item m0"><img class="img-fluid pl5" src="images/resource/turkey.png" alt="turkey.png"></li>
										</ul>
									</div>
									<div class="job_srate">
										<p>Job Success</p>
										<p class="float-right">88%</p>
									</div>
									<div class="ef_prf_link mt10">
										<a class="btn btn-block btn-transparent" href="#">View Profile <i class="flaticon-right-arrow pl10"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="ef_post">
								<div class="ef_header">
									<h4 class="hr_rate"><span class="text-thm">$150</span> <small>/hr</small></h4>
									<a class="ef_bookmark" href="#" title="BookMark Freelancer"><span class="flaticon-bookmark"></span></a>
								</div>
								<div class="thumb text-center">
									<img class="img-fluid" src="images/team/6.jpg" alt="6.jpg">
								</div>
								<div class="freelancer_review">
									<div class="everage_rating">4.5</div>
									<ul class="rating_list">
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star-o"></span></a></li>
									</ul>
									<h4 class="title">Randall Warren</h4>
									<p>Graphics Designer</p>
								</div>
								<div class="details">
									<div class="job_locate">
										<p>Location</p>
										<ul class="float-right">
											<li class="list-inline-item m0"><p>Turkey</p></li>
											<li class="list-inline-item m0"><img class="img-fluid pl5" src="images/resource/turkey.png" alt="turkey.png"></li>
										</ul>
									</div>
									<div class="job_srate">
										<p>Job Success</p>
										<p class="float-right">88%</p>
									</div>
									<div class="ef_prf_link mt10">
										<a class="btn btn-block btn-transparent" href="#">View Profile <i class="flaticon-right-arrow pl10"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="ef_post">
								<div class="ef_header">
									<h4 class="hr_rate"><span class="text-thm">$150</span> <small>/hr</small></h4>
									<a class="ef_bookmark" href="#" title="BookMark Freelancer"><span class="flaticon-bookmark"></span></a>
								</div>
								<div class="thumb text-center">
									<img class="img-fluid" src="images/team/7.jpg" alt="7.jpg">
								</div>
								<div class="freelancer_review">
									<div class="everage_rating">4.5</div>
									<ul class="rating_list">
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star-o"></span></a></li>
									</ul>
									<h4 class="title">Peter Hawkins</h4>
									<p>Magento Certified Developer</p>
								</div>
								<div class="details">
									<div class="job_locate">
										<p>Location</p>
										<ul class="float-right">
											<li class="list-inline-item m0"><p>Turkey</p></li>
											<li class="list-inline-item m0"><img class="img-fluid pl5" src="images/resource/turkey.png" alt="turkey.png"></li>
										</ul>
									</div>
									<div class="job_srate">
										<p>Job Success</p>
										<p class="float-right">88%</p>
									</div>
									<div class="ef_prf_link mt10">
										<a class="btn btn-block btn-transparent" href="#">View Profile <i class="flaticon-right-arrow pl10"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="ef_post">
								<div class="ef_header">
									<h4 class="hr_rate"><span class="text-thm">$150</span> <small>/hr</small></h4>
									<a class="ef_bookmark" href="#" title="BookMark Freelancer"><span class="flaticon-bookmark"></span></a>
								</div>
								<div class="thumb text-center">
									<img class="img-fluid" src="images/team/8.jpg" alt="8.jpg">
								</div>
								<div class="freelancer_review">
									<div class="everage_rating">4.5</div>
									<ul class="rating_list">
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star-o"></span></a></li>
									</ul>
									<h4 class="title">Martha Griffin</h4>
									<p>Medical Professed</p>
								</div>
								<div class="details">
									<div class="job_locate">
										<p>Location</p>
										<ul class="float-right">
											<li class="list-inline-item m0"><p>Turkey</p></li>
											<li class="list-inline-item m0"><img class="img-fluid pl5" src="images/resource/turkey.png" alt="turkey.png"></li>
										</ul>
									</div>
									<div class="job_srate">
										<p>Job Success</p>
										<p class="float-right">88%</p>
									</div>
									<div class="ef_prf_link mt10">
										<a class="btn btn-block btn-transparent" href="#">View Profile <i class="flaticon-right-arrow pl10"></i></a>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="ef_post">
								<div class="ef_header">
									<h4 class="hr_rate"><span class="text-thm">$150</span> <small>/hr</small></h4>
									<a class="ef_bookmark" href="#" title="BookMark Freelancer"><span class="flaticon-bookmark"></span></a>
								</div>
								<div class="thumb text-center">
									<img class="img-fluid" src="images/team/9.jpg" alt="9.jpg">
								</div>
								<div class="freelancer_review">
									<div class="everage_rating">4.5</div>
									<ul class="rating_list">
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star color-golden"></span></a></li>
										<li class="list-inline-item"><a href="#"><span class="fa fa-star-o"></span></a></li>
									</ul>
									<h4 class="title">Kathleen Moreno</h4>
									<p>Marketing Expert</p>
								</div>
								<div class="details">
									<div class="job_locate">
										<p>Location</p>
										<ul class="float-right">
											<li class="list-inline-item m0"><p>Turkey</p></li>
											<li class="list-inline-item m0"><img class="img-fluid pl5" src="images/resource/turkey.png" alt="turkey.png"></li>
										</ul>
									</div>
									<div class="job_srate">
										<p>Job Success</p>
										<p class="float-right">88%</p>
									</div>
									<div class="ef_prf_link mt10">
										<a class="btn btn-block btn-transparent" href="#">View Profile <i class="flaticon-right-arrow pl10"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Footer Top Area -->
	<section class="footer_top_area p0">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-lg-2 pb25 pt25">
					<div class="logo-widget">
						<img class="img-fluid" src="images/header-logo.png" alt="header-logo.png">
					</div>
				</div>
				<div class="col-sm-12 col-lg-6 pb25 pt25 pl60 pr40 brdr_left_right">
					<div class="row">
						<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
							<div class="funfact_one">
								<div class="timer">2,395</div>
								<p>Jobs Added</p>
							</div>
						</div>
						<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
							<div class="funfact_one">
								<div class="timer">1,267</div>
								<p>Jobs Posted</p>
							</div>
						</div>
						<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
							<div class="funfact_one">
								<div class="timer">1,095</div>
								<p>Companies</p>
							</div>
						</div>
						<div class="col-xs-6 col-sm-3 col-md-3 col-lg-3">
							<div class="funfact_one">
								<div class="timer">7,348</div>
								<p>Freelancer</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-12 col-lg-4 pb25 pt25 pl30">
					<div class="footer_social_widget mt15">
						<p class="float-left mt10">Follow Us</p>
						<ul>
							<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fa fa-pinterest"></i></a></li>
							<li class="list-inline-item"><a href="#"><i class="fa fa-dribbble"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Footer -->
	<section class="footer_one">
		<div class="container">
			<div class="row">
				<div class="col-sm-6 col-md-4 col-md-3 col-lg-2">
					<div class="quick_link_widget">
						<h4>Quick Links</h4>
						<ul class="list-unstyled">
							<li><a href="#">Job Packages</a></li>
							<li><a href="#">Post New Job</a></li>
							<li><a href="#">Jobs Listing</a></li>
							<li><a href="#">Jobs Style Grid</a></li>
							<li><a href="#">Employer Listing</a></li>
							<li><a href="#">Employers Grid</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-6 col-md-4 col-md-3 col-lg-3">
					<div class="candidate_widget">
						<h4>For Candidates</h4>
						<ul class="list-unstyled">
							<li><a href="#">User Dashboard</a></li>
							<li><a href="#">CV Packages</a></li>
							<li><a href="#">Candidate Listing</a></li>
							<li><a href="#">Candidates Grid</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-4 col-md-4 col-md-3 col-lg-3">
					<div class="employe_widget">
						<h4>For Employers</h4>
						<ul class="list-unstyled">
							<li><a href="#">Post New</a></li>
							<li><a href="#">Job Employer Listing</a></li>
							<li><a href="#">Employers Grid</a></li>
							<li><a href="#">Job Packages</a></li>
							<li><a href="#">Jobs Listing</a></li>
							<li><a href="#">Jobs Style Grid</a></li>
						</ul>
					</div>
				</div>
				<div class="col-sm-8 col-md-6 col-md-3 col-lg-4">
					<div class="newsletter_widget">
						<h4>Newsletter</h4>
						<p>Subscribe to CareerUp Pacific newsletter to get the latest jobs posted, candidates ,and other latest news stay updated.</p>
						<form class="form-inline mailchimp_form">
							<label class="sr-only" for="inlineFormInputMail2">Name</label>
							<input type="email" class="form-control mb-2 mr-sm-2" id="inlineFormInputMail2" placeholder="Enter your email address">
							<button type="submit" class="btn btn-primary mb-2"><span class="fa fa-paper-plane-o"></span></button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Our Footer Bottom Area -->
	<section class="footer_bottom_area p0">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 pb10 pt10">
					<div class="copyright-widget tac-smd mt20">
						<p>© 2019 CareerUp. All Rights Reserved.</p>
					</div>
				</div>
				<div class="col-lg-8 pb10 pt10">
					<div class="footer_menu text-right mt10">
						<ul>
							<li class="list-inline-item"><a href="page-terms-and-policies.html">Site Map</a></li>
							<li class="list-inline-item"><a href="page-terms-and-policies.html">Privacy Policy</a></li>
							<li class="list-inline-item"><a href="page-terms-and-policies.html">Terms of Service</a></li>
							<li class="list-inline-item"><a href="page-terms-and-policies.html">Security & Privacy</a></li>
							<li class="list-inline-item">
								<select class="selectpicker show-tick">
									<option>English</option>
									<option>Frenc</option>
									<option>Italian</option>
									<option>Spanish</option>
									<option>Turkey</option>
								</select>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
<a class="scrollToHome text-thm" href="#"><i class="flaticon-rocket-launch"></i></a>
</div>
<!-- Wrapper End -->
@endsection
