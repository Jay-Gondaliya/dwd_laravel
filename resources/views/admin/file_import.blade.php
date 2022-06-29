@extends('admin.layouts.main')

@section('title') {{ $title }} @stop
@section('heading') {{ $title }} @stop

@section('content')
<link id="style" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

<!-- Style css -->
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/css/dark.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" />
<link href="{{ asset('assets/css/skin-modes.css') }}" rel="stylesheet" />

<!-- Animate css -->
<link href="{{ asset('assets/css/animated.css') }}" rel="stylesheet" />


<!-- P-scroll bar css-->
<link href="{{ asset('assets/plugins/p-scrollbar/p-scrollbar.css') }}" rel="stylesheet" />

<!---Icons css-->
<link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" />

<!-- INTERNAL Select2 css -->
<link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />

<!-- INTERNAL File Uploads css -->
<link href="{{ asset('assets/plugins/fancyuploder/fancy_fileupload.css') }}" rel="stylesheet" />

<!-- INTERNAL Time picker css -->
<link href="{{ asset('assets/plugins/time-picker/jquery.timepicker.css') }}" rel="stylesheet" />

<!-- INTERNAL Date Picker css -->
<link href="{{ asset('assets/plugins/date-picker/date-picker.css') }}" rel="stylesheet" />

<!--Date Picker-->
<link href="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.css') }}" rel="stylesheet" />

<!-- INTERNAL File Uploads css-->
<link href="{{ asset('assets/plugins/fileupload/css/fileupload.css') }}" rel="stylesheet" type="text/css" />

<!-- INTERNAL Mutipleselect css-->
<link rel="stylesheet" href="{{ asset('assets/plugins/multipleselect/multiple-select.css') }}">

<!-- INTERNAL Sumoselect css-->
<link rel="stylesheet" href="{{ asset('assets/plugins/sumoselect/sumoselect.css') }}">

<!-- INTERNAL telephoneinput css-->
<link rel="stylesheet" href="{{ asset('assets/plugins/telephoneinput/telephoneinput.css') }}">

<!-- INTERNAL Jquerytransfer css-->
<link rel="stylesheet" href="{{ asset('assets/plugins/jQuerytransfer/jquery.transfer.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/jQuerytransfer/icon_font/icon_font.css') }}">

<!-- INTERNAL multi css-->
<link rel="stylesheet" href="{{ asset('assets/plugins/multi/multi.min.css') }}">
<link href="{{ asset('assets/plugins/tabs/style.css') }}" rel="stylesheet" />
<!-- Color Skin css -->
<link id="theme" href="{{ asset('assets/colors/color1.css') }}" rel="stylesheet" type="text/css" />
<div class="page-header border-bottom">
	<div class="page-leftheader">
		<h4 class="page-title mb-0 text-primary">Create Voter</h4>
	</div>
</div>
<div class="row">
	<form class="mt-5" id="fileDataForm">
		@csrf
		<div class="row">
			<div class="col-md-6 input-group mb-4">
				<div class="input-group-text">
					<i class="fe fe-user"></i>
				</div>
				<input type="file" class="form-control" name="file_data" id="file_data" />
			</div>
			<div class="col-md-3 input-group mb-4">
				<button type="button" class="btn btn-primary btn-sm" id="addFileData">Voter File Upload</button>
			</div>
		</div>
	</form>

	<div class="col-md-12">
		<div class="card-body p-3">
			<div class="panel panel-primary">
				<div class="tab-menu-heading p-0">
					<div class="tabs-menu">
						<ul class="nav panel-tabs" id="pills-tab" role="tablist">
							<li class="">
								<a class="active" id="demo1" data-toggle="pill" href="#pills-1" role="tab">Personal Info</a>
							</li>
							<li class="">
								<a class="" id="demo2" data-toggle="pill" href="#pills-2" role="tab">Contact Info</a>
							</li>
							<li class="">
								<a class="" id="demo3" data-toggle="pill" href="#pills-3" role="tab">Location</a>
							</li>
							<li class="">
								<a class="" id="demo4" data-toggle="pill" href="#pills-4" role="tab">Social Media</a>
							</li>
							<li class="">
								<a class="" id="demo5" data-toggle="pill" href="#pills-5" role="tab">Voter's Mobilization</a>
							</li>
							<li class="">
								<a class="" id="demo6" data-toggle="pill" href="#pills-6" role="tab">Voter's Engagement</a>
							</li>
						</ul>
					</div>
				</div>
				<form id="createVoterForm">
					@csrf
					<input type="hidden" name="voter_id" value="{{ $editVoter->id }}" />
					<div class="panel-body tabs-menu-body">
						<div class="tab-content" id="pills-tabContent">
							<div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="demo1">
								<div class="row">
									<div class="col-lg-4">
										<div class="form-group">
											<label for="validationCustom01" class="form-label">First Name</label>
											<input type="text" class="form-control" name="fname" value="{{ $editVoter->fname }}" placeholder="First Name">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Middle Name</label>
											<input type="text" class="form-control" name="mname" value="{{ $editVoter->mname }}" placeholder="Middle Name">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Last Name</label>
											<input type="text" class="form-control" name="lname" value="{{ $editVoter->lname }}" placeholder="Last Name">
										</div>
									</div>
									<div class="col-lg-4">
										<label class="form-label">Gender</label>
										<ul class="new_inline_radio">
											<li>
												<label class="custom-control custom-radio">
													<input type="radio" class="custom-control-input" name="gender" value="male" checked="">
													<span class="custom-control-label">Male</span>
												</label>
											</li>
											<li>
												<label class="custom-control custom-radio">
													<input type="radio" class="custom-control-input" name="gender" value="female">
													<span class="custom-control-label">Female</span>
												</label>
											</li>
										</ul>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Date of Birth</label>
											<div class="input-group">
												<div class="input-group-prepend">
													<div class="input-group-text">
														<svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18">
															<path d="M0 0h24v24H0V0z" fill="none" />
															<path d="M20 3h-1V1h-2v2H7V1H5v2H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 2v3H4V5h16zM4 21V10h16v11H4z" />
															<path d="M4 5.01h16V8H4z" opacity=".3" />
														</svg>
													</div>
												</div><input class="form-control fc-datepicker" value="{{ $editVoter->dob }}" type="date" name="dob">
											</div>
										</div>
									</div>
									<div class="col-12 col-sm-12" id="btnNext">
										<a class="btn btn-primary btnNext">Save and Next</a>
									</div>
								</div>

							</div>
							<div class="tab-pane fade" id="pills-2" role="tabpanel" aria-labelledby="demo2">
								<div class="row">

									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Mobile number</label>
											<input type="number" class="form-control" name="mobile" value="{{ $editVoter->mobile }}" placeholder="Mobile number">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Enter OTP</label>
											<input type="text" class="form-control" id="enterotp" placeholder="Enter OTP">
											<a href="#" class="resend_otp">Resend OTP</a>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Email Address</label>
											<input type="email" class="form-control" name="email" value="{{ $editVoter->email }}" placeholder="Email Address">
										</div>
									</div>
									<div class="col-12 col-sm-12" id="btnNext">
										<a class="btn btn-primary btnNext">Save and Next</a>
									</div>
								</div>

							</div>
							<div class="tab-pane fade" id="pills-3" role="tabpanel" aria-labelledby="demo3">
								<div class="row">

									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">State</label>
											<select class="form-control select2" data-placeholder="Choose one (with searchbox)" name="state">
												<option>Select State</option>
												<option value="1" @if($editVoter->state == "1") {{'selected'}}@endif>ABIA</option>
												<option value="2" @if($editVoter->state == "2") {{'selected'}}@endif>ADAMAWA</option>
												<option value="3" @if($editVoter->state == "3") {{'selected'}}@endif>AKWA IBOM</option>
												<option value="4" @if($editVoter->state == "4") {{'selected'}}@endif>ANAMBRA</option>
												<option value="5" @if($editVoter->state == "5") {{'selected'}}@endif>BAUCHI</option>
												<option value="6" @if($editVoter->state == "6") {{'selected'}}@endif>BAYELSA</option>
												<option value="7" @if($editVoter->state == "7") {{'selected'}}@endif>BENUE</option>
												<option value="8" @if($editVoter->state == "8") {{'selected'}}@endif>BORNO</option>
												<option value="9" @if($editVoter->state == "9") {{'selected'}}@endif>CROSS RIVER</option>
												<option value="10" @if($editVoter->state == "10") {{'selected'}}@endif>DELTA</option>
												<option value="11" @if($editVoter->state == "11") {{'selected'}}@endif>EBONYI</option>
												<option value="12" @if($editVoter->state == "12") {{'selected'}}@endif>EDO</option>
												<option value="13" @if($editVoter->state == "13") {{'selected'}}@endif>EKITI</option>
												<option value="14" @if($editVoter->state == "14") {{'selected'}}@endif>ENUGU</option>
												<option value="37" @if($editVoter->state == "37") {{'selected'}}@endif>FEDERAL CAPITAL TERRITORY</option>
												<option value="15" @if($editVoter->state == "15") {{'selected'}}@endif>GOMBE</option>
												<option value="16" @if($editVoter->state == "16") {{'selected'}}@endif>IMO</option>
												<option value="17" @if($editVoter->state == "17") {{'selected'}}@endif>JIGAWA</option>
												<option value="18" @if($editVoter->state == "18") {{'selected'}}@endif>KADUNA</option>
												<option value="19" @if($editVoter->state == "19") {{'selected'}}@endif>KANO</option>
												<option value="20" @if($editVoter->state == "20") {{'selected'}}@endif>KATSINA</option>
												<option value="21" @if($editVoter->state == "21") {{'selected'}}@endif>KEBBI</option>
												<option value="22" @if($editVoter->state == "22") {{'selected'}}@endif>KOGI</option>
												<option value="23" @if($editVoter->state == "23") {{'selected'}}@endif>KWARA</option>
												<option value="24" @if($editVoter->state == "24") {{'selected'}}@endif>LAGOS</option>
												<option value="25" @if($editVoter->state == "25") {{'selected'}}@endif>NASARAWA</option>
												<option value="26" @if($editVoter->state == "26") {{'selected'}}@endif>NIGER</option>
												<option value="27" @if($editVoter->state == "27") {{'selected'}}@endif>OGUN</option>
												<option value="28" @if($editVoter->state == "28") {{'selected'}}@endif>ONDO</option>
												<option value="29" @if($editVoter->state == "29") {{'selected'}}@endif>OSUN</option>
												<option value="30" @if($editVoter->state == "30") {{'selected'}}@endif>OYO</option>
												<option value="31" @if($editVoter->state == "31") {{'selected'}}@endif>PLATEAU</option>
												<option value="32" @if($editVoter->state == "32") {{'selected'}}@endif>RIVERS</option>
												<option value="33" @if($editVoter->state == "33") {{'selected'}}@endif>SOKOTO</option>
												<option value="34" @if($editVoter->state == "34") {{'selected'}}@endif>TARABA</option>
												<option value="35" @if($editVoter->state == "35") {{'selected'}}@endif>YOBE</option>
												<option value="36" @if($editVoter->state == "36") {{'selected'}}@endif>ZAMFARA</option>
											</select>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">LGA</label>
											<select class="form-control select2" name="lga" data-placeholder="Choose one (with searchbox)">
												<option>Select LGA</option>
												<option value="01" @if($editVoter->lga == "01") {{'selected'}}@endif>AGEGE</option>
												<option value="02" @if($editVoter->lga == "02") {{'selected'}}@endif>AJEROMI/IFELODUN</option>
												<option value="03" @if($editVoter->lga == "03") {{'selected'}}@endif>ALIMOSHO</option>
												<option value="04" @if($editVoter->lga == "04") {{'selected'}}@endif>AMUWO-ODOFIN</option>
												<option value="05" @if($editVoter->lga == "05") {{'selected'}}@endif>APAPA</option>
												<option value="06" @if($editVoter->lga == "06") {{'selected'}}@endif>BADAGRY</option>
												<option value="07" @if($editVoter->lga == "07") {{'selected'}}@endif>EPE</option>
												<option value="08" @if($editVoter->lga == "08") {{'selected'}}@endif>ETI-OSA</option>
												<option value="09" @if($editVoter->lga == "09") {{'selected'}}@endif>IBEJU/LEKKI</option>
												<option value="10" @if($editVoter->lga == "10") {{'selected'}}@endif>IFAKO-IJAYE</option>
												<option value="11" @if($editVoter->lga == "11") {{'selected'}}@endif>IKEJA</option>
												<option value="12" @if($editVoter->lga == "12") {{'selected'}}@endif>IKORODU</option>
												<option value="13" @if($editVoter->lga == "13") {{'selected'}}@endif>KOSOFE</option>
												<option value="14" @if($editVoter->lga == "14") {{'selected'}}@endif>LAGOS ISLAND</option>
												<option value="15" @if($editVoter->lga == "15") {{'selected'}}@endif>LAGOS MAINLAND</option>
												<option value="16" @if($editVoter->lga == "16") {{'selected'}}@endif>MUSHIN</option>
												<option value="17" @if($editVoter->lga == "17") {{'selected'}}@endif>OJO</option>
												<option value="18" @if($editVoter->lga == "18") {{'selected'}}@endif>OSHODI/ISOLO</option>
												<option value="19" @if($editVoter->lga == "19") {{'selected'}}@endif>SOMOLU</option>
												<option value="20" @if($editVoter->lga == "20") {{'selected'}}@endif>SURULERE</option>
											</select>

										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Ward</label>
											<select class="form-control select2" name="ward" data-placeholder="Choose one (with searchbox)">
												<option>Select Ward</option>
												<option value="5847" @if($editVoter->ward == "5847") {{'selected'}}@endif>ISALE/IDIMANGORO</option>
												<option value="5848" @if($editVoter->ward == "5848") {{'selected'}}@endif>ILORO/ONIPETESI</option>
												<option value="5849" @if($editVoter->ward == "5849") {{'selected'}}@endif>ONIWAYA/PAPA-UKU</option>
												<option value="5850" @if($editVoter->ward == "5850") {{'selected'}}@endif>AGBOTIKUYO/DOPEMU</option>
												<option value="5851" @if($editVoter->ward == "5851") {{'selected'}}@endif>OYEWOLE/PAPA ASHAFA</option>
												<option value="5852" @if($editVoter->ward == "5852") {{'selected'}}@endif>OKEKOTO</option>
												<option value="5853" @if($editVoter->ward == "5853") {{'selected'}}@endif>KEKE</option>
												<option value="5854" @if($editVoter->ward == "5854") {{'selected'}}@endif>DAROCHA</option>
												<option value="5855" @if($editVoter->ward == "5855") {{'selected'}}@endif>TABON TABON/OKO OBA</option>
												<option value="5856" @if($editVoter->ward == "5856") {{'selected'}}@endif>ORILE AGEGE/OKO OBA</option>
												<option value="5857" @if($editVoter->ward == "5857") {{'selected'}}@endif>ISALE ODO</option>
											</select>
										</div>
									</div>
									<div class="col-lg-12">
										<div class="form-group">
											<label class="form-label">Resident Address</label>
											<textarea class="form-control" name="address" rows="4" placeholder="Resident Address">{{ $editVoter->address }}</textarea>
										</div>
									</div>
									<div class="col-12 col-sm-12" id="btnNext">
										<a class="btn btn-primary btnNext">Save and Next</a>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="pills-4" role="tabpanel" aria-labelledby="demo4">
								<div class="row">
									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Facebook</label>
											<input type="text" class="form-control" name="fb" value="{{ $editVoter->fb }}" placeholder="Facebook Username">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Instagram</label>
											<input type="text" class="form-control" name="insta" value="{{ $editVoter->insta }}" placeholder="Instagram Username">
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Twitter</label>
											<input type="text" class="form-control" name="twitter" value="{{ $editVoter->twitter }}" placeholder="Twitter Username">
										</div>
									</div>

									<div class="col-12 col-sm-12" id="btnNext">
										<a class="btn btn-primary btnNext">Save and Next</a>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="pills-5" role="tabpanel" aria-labelledby="demo5">
								<div class="row">

									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Do you have a permanent voters card?</label>
											<select class="form-control select2" name="is_voter">
												<option>-- Select --</option>
												<option value="1" @if($editVoter->is_voter == "1") {{'selected'}}@endif>Yes</option>
												<option value="0" @if($editVoter->is_voter == "0") {{'selected'}}@endif>No</option>
											</select>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Reason for not having a PVC?</label>
											<select class="form-control select2" name="is_pvc">
												<option>-- Select --</option>
												<option value="1" @if($editVoter->is_pvc == "1") {{'selected'}}@endif>Not of age</option>
												<option value="2" @if($editVoter->is_pvc == "2") {{'selected'}}@endif>Not interested</option>
												<option value="3" @if($editVoter->is_pvc == "3") {{'selected'}}@endif>Lost faith in process</option>
												<option value="4" @if($editVoter->is_pvc == "4") {{'selected'}}@endif>Not enough education/information</option>
												<option value="5" @if($editVoter->is_pvc == "5") {{'selected'}}@endif>Sickness</option>
											</select>
										</div>
									</div>
									<div class="col-12 col-sm-12" id="btnNext">
										<a class="btn btn-primary btnNext">Save and Next</a>
									</div>
								</div>
							</div>
							<div class="tab-pane fade" id="pills-6" role="tabpanel" aria-labelledby="demo6">
								<div class="row">

									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Voted Last Election?</label>
											<select class="form-control select2">
												<option>-- Select --</option>
												<option>Yes</option>
												<option>No</option>
											</select>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Reason for not voting in last election?</label>
											<select class="form-control select2">
												<option>-- Select --</option>
												<option>Moved to new location</option>
												<option>Not of age</option>
												<option>Not interested</option>
												<option>Lost faith in process</option>
												<option>Not enough education/information</option>
												<option>Sickness</option>
											</select>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Whom did you vote for in the last election?</label>
											<select class="form-control select2">
												<option>-- Select --</option>
												<option>Lorem ipsum</option>
												<option>Lorem ipsum</option>
												<option>Lorem ipsum</option>
												<option>Lorem ipsum</option>
											</select>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">What party are you sympathetic to?</label>
											<select class="form-control select2">
												<option>-- Select --</option>
												<option>Lorem ipsum</option>
												<option>Lorem ipsum</option>
												<option>Lorem ipsum</option>
												<option>Lorem ipsum</option>
											</select>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">What things are important to you that you think the government Should provide?</label>
											<select class="form-control select2">
												<option>-- Select --</option>
												<option>Education</option>
												<option>Employment</option>
												<option>Cleanliness</option>
												<option>Environment</option>
												<option>Crime</option>
											</select>
										</div>
									</div>

									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Moved from a registered ward to a new one?</label>
											<select class="form-control select2">
												<option>-- Select --</option>
												<option>Yes</option>
												<option>No</option>
											</select>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">If yes, Have you registered in the new ward?</label>
											<select class="form-control select2">
												<option>-- Select --</option>
												<option>Yes</option>
												<option>No</option>
											</select>
										</div>
									</div>
									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Have you registered for the Feb 2022 elections?</label>
											<select class="form-control select2">
												<option>-- Select --</option>
												<option>Yes</option>
												<option>No</option>
											</select>
										</div>
									</div>

									<div class="col-lg-4">
										<div class="form-group">
											<label class="form-label">Would you like to support a deserving candidate via donations?</label>
											<select class="form-control select2">
												<option>-- Select --</option>
												<option>Yes</option>
												<option>No</option>
											</select>
										</div>
									</div>

									<div class="col-12 mb-2 mt-2">
										<button class="btn btn-primary createVoter" type="button">Save and Next</button>
									</div>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<!-- Bootstrap5 js-->
<script src="{{ asset('assets/plugins/bootstrap/popper.min.js') }}"></script>
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

<!--Othercharts js-->
<script src="{{ asset('assets/plugins/othercharts/jquery.sparkline.min.js') }}"></script>

<!-- Circle-progress js-->
<script src="{{ asset('assets/js/circle-progress.min.js') }}"></script>

<!-- Jquery-rating js-->
<script src="{{ asset('assets/plugins/rating/jquery.rating-stars.js') }}"></script>

<!--Sidemenu js-->
<script src="{{ asset('assets/plugins/sidemenu/sidemenu.js') }}"></script>

<!-- P-scroll js-->
<script src="{{ asset('assets/plugins/p-scrollbar/p-scrollbar.js') }}"></script>
<script src="{{ asset('assets/plugins/p-scrollbar/p-scroll1.js') }}"></script>
<script src="{{ asset('assets/plugins/p-scrollbar/p-scroll.js') }}"></script>

<!-- INTERNAL Select2 js -->
<script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
<script src="{{ asset('assets/js/select2.js') }}"></script>

<!-- INTERNAL Timepicker js -->
<script src="{{ asset('assets/plugins/time-picker/jquery.timepicker.js') }}"></script>
<script src="{{ asset('assets/plugins/time-picker/toggles.min.js') }}"></script>

<!-- INTERNAL Datepicker js -->
<script src="{{ asset('assets/plugins/date-picker/date-picker.js') }}"></script>
<script src="{{ asset('assets/plugins/date-picker/jquery-ui.js') }}"></script>
<script src="{{ asset('assets/plugins/input-mask/jquery.maskedinput.js') }}"></script>

<!-- INTERNAL File-Uploads Js-->
<script src="{{ asset('assets/plugins/fancyuploder/jquery.ui.widget.js') }}"></script>
<script src="{{ asset('assets/plugins/fancyuploder/jquery.fileupload.js') }}"></script>
<script src="{{ asset('assets/plugins/fancyuploder/jquery.iframe-transport.js') }}"></script>
<script src="{{ asset('assets/plugins/fancyuploder/jquery.fancy-fileupload.js') }}"></script>
<script src="{{ asset('assets/plugins/fancyuploder/fancy-uploader.js') }}"></script>

<!-- INTERNAL File uploads js -->
<script src="{{ asset('assets/plugins/fileupload/js/dropify.js') }}"></script>
<script src="{{ asset('assets/js/filupload.js') }}"></script>

<!-- INTERNAL Multipleselect js -->
<script src="{{ asset('assets/plugins/multipleselect/multiple-select.js') }}"></script>
<script src="{{ asset('assets/plugins/multipleselect/multi-select.js') }}"></script>

<!--INTERNAL Sumoselect js-->
<script src="{{ asset('assets/plugins/sumoselect/jquery.sumoselect.js') }}"></script>

<!--INTERNAL telephoneinput js-->
<script src="{{ asset('assets/plugins/telephoneinput/telephoneinput.js') }}"></script>
<script src="{{ asset('assets/plugins/telephoneinput/inttelephoneinput.js') }}"></script>

<!--INTERNAL jquery transfer js-->
<script src="{{ asset('assets/plugins/jQuerytransfer/jquery.transfer.js') }}"></script>

<!--INTERNAL multi js-->
<script src="{{ asset('assets/plugins/multi/multi.min.js') }}"></script>

<!--INTERNAL Form Advanced Element -->
<script src="{{ asset('assets/js/formelementadvnced.js') }}"></script>
<script src="{{ asset('assets/js/form-elements.js') }}"></script>
<script src="{{ asset('assets/js/file-upload.js') }}"></script>

<!-- Color Picker-->
<script src="{{ asset('assets/plugins/spectrum-colorpicker/spectrum.js') }}"></script>

<!--Date Range Picker-->
<script src="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>

<!-- Custom js-->
<script src="{{ asset('assets/plugins/tabs/jquery.multipurpose_tabcontent.js') }}"></script>
<script src="{{ asset('assets/js/tabs.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(document).on('click', '#addFileData', function(e) {
		e.preventDefault();
		var formData = new FormData($('#fileDataForm')[0]);

		$.ajax({
			url: "{{ route('fileUpload') }}",
			method: 'POST',
			data: formData,
			dataType: "json",
			contentType: false,
			processData: false,
			success: function(response) {
				if (response.code == 200) {
					location.reload();
				} else {}
			},
		});
	});

	$(document).on('click', '.createVoter', function(e) {
		e.preventDefault();
		var formData = new FormData($('#createVoterForm')[0]);

		$.ajax({
			url: "{{ route('store_voter') }}",
			method: 'POST',
			data: formData,
			dataType: "json",
			contentType: false,
			processData: false,
			success: function(response) {
				if (response.code == 200) {
					$(".error").html('');
					window.location.href = "{{ route('voterList') }}";
				} else {
					$("#login_error").text(response.message);
				}
			},
		});
	});

	$(document).ready(function() {
		$('.btnNext').click(function() {
			$('.panel-tabs .active').parent().next('li').find('a').trigger('click');
		});

		$('.btnPrevious').click(function() {
			$('.panel-tabs .active').parent().prev('li').find('a').trigger('click');
		});
	});
</script>
@endsection