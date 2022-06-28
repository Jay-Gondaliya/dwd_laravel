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
				<div class="panel-body tabs-menu-body">
					<div class="tab-content" id="pills-tabContent">
						<div class="tab-pane fade show active" id="pills-1" role="tabpanel" aria-labelledby="demo1">
							<div class="row">

								<div class="col-lg-4">
									<div class="form-group">
										<label for="validationCustom01" class="form-label">First Name</label>
										<input type="email" class="form-control" id="validationCustom01" placeholder="First Name" required>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
										<label class="form-label">Middle Name</label>
										<input type="email" class="form-control" id="middlename" placeholder="Middle Name">
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
										<label class="form-label">Last Name</label>
										<input type="email" class="form-control" id="lastname" placeholder="Last Name">
									</div>
								</div>
								<!--<div class="col-lg-4">
												<div class="form-group">
													<label class="form-label">Age</label>
													<input type="email" class="form-control" id="age" placeholder="Age">
												</div>
											</div>-->
								<div class="col-lg-4">
									<!--<div class="form-group">
											<label class="form-label">Gender</label>
											<select class="form-control select2">
																<option>Select Gender</option>
																<option>Male</option>
																<option>Female</option>
															</select>
															</div>-->
									<label class="form-label">Gender</label>
									<ul class="new_inline_radio">
										<li>
											<label class="custom-control custom-radio">
												<input type="radio" class="custom-control-input" name="example-radios" value="option1" checked="">
												<span class="custom-control-label">Male</span>
											</label>
										</li>
										<li>
											<label class="custom-control custom-radio">
												<input type="radio" class="custom-control-input" name="example-radios" value="option2">
												<span class="custom-control-label">Female</span>
											</label>
										</li>
									</ul>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
										<label class="form-label">Date of Birth</label>
										<!--<input type="email" class="form-control" id="date" placeholder="Date of Birth">-->
										<div class="input-group">
											<div class="input-group-prepend">
												<div class="input-group-text">
													<svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18">
														<path d="M0 0h24v24H0V0z" fill="none" />
														<path d="M20 3h-1V1h-2v2H7V1H5v2H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 2v3H4V5h16zM4 21V10h16v11H4z" />
														<path d="M4 5.01h16V8H4z" opacity=".3" />
													</svg>
												</div>
											</div><input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="text">
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
										<input type="email" class="form-control" id="mobilenumber" placeholder="Mobile number">
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
										<label class="form-label">Enter OTP</label>
										<input type="email" class="form-control" id="enterotp" placeholder="Enter OTP">
										<a href="#" class="resend_otp">Resend OTP</a>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
										<label class="form-label">Email Address</label>
										<input type="email" class="form-control" id="emailaddress" placeholder="Email Address">
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
										<select class="form-control select2-show-search" data-placeholder="Choose one (with searchbox)">
											<option>Select State</option>
											<option value="1">ABIA</option>
											<option value="2">ADAMAWA</option>
											<option value="3">AKWA IBOM</option>
											<option value="4">ANAMBRA</option>
											<option value="5">BAUCHI</option>
											<option value="6">BAYELSA</option>
											<option value="7">BENUE</option>
											<option value="8">BORNO</option>
											<option value="9">CROSS RIVER</option>
											<option value="10">DELTA</option>
											<option value="11">EBONYI</option>
											<option value="12">EDO</option>
											<option value="13">EKITI</option>
											<option value="14">ENUGU</option>
											<option value="37">FEDERAL CAPITAL TERRITORY</option>
											<option value="15">GOMBE</option>
											<option value="16">IMO</option>
											<option value="17">JIGAWA</option>
											<option value="18">KADUNA</option>
											<option value="19">KANO</option>
											<option value="20">KATSINA</option>
											<option value="21">KEBBI</option>
											<option value="22">KOGI</option>
											<option value="23">KWARA</option>
											<option value="24">LAGOS</option>
											<option value="25">NASARAWA</option>
											<option value="26">NIGER</option>
											<option value="27">OGUN</option>
											<option value="28">ONDO</option>
											<option value="29">OSUN</option>
											<option value="30">OYO</option>
											<option value="31">PLATEAU</option>
											<option value="32">RIVERS</option>
											<option value="33">SOKOTO</option>
											<option value="34">TARABA</option>
											<option value="35">YOBE</option>
											<option value="36">ZAMFARA</option>
										</select>

									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
										<label class="form-label">LGA</label>
										<select class="form-control select2-show-search" data-placeholder="Choose one (with searchbox)">
											<option>Select LGA</option>
											<option value="01">AGEGE</option>
											<option value="02">AJEROMI/IFELODUN</option>
											<option value="03">ALIMOSHO</option>
											<option value="04">AMUWO-ODOFIN</option>
											<option value="05">APAPA</option>
											<option value="06">BADAGRY</option>
											<option value="07">EPE</option>
											<option value="08">ETI-OSA</option>
											<option value="09">IBEJU/LEKKI</option>
											<option value="10">IFAKO-IJAYE</option>
											<option value="11">IKEJA</option>
											<option value="12">IKORODU</option>
											<option value="13">KOSOFE</option>
											<option value="14">LAGOS ISLAND</option>
											<option value="15">LAGOS MAINLAND</option>
											<option value="16">MUSHIN</option>
											<option value="17">OJO</option>
											<option value="18">OSHODI/ISOLO</option>
											<option value="19">SOMOLU</option>
											<option value="20">SURULERE</option>
										</select>

									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
										<label class="form-label">Ward</label>
										<select class="form-control select2-show-search" data-placeholder="Choose one (with searchbox)">
											<option>Select Ward</option>
											<option value="5847">ISALE/IDIMANGORO</option>
											<option value="5848">ILORO/ONIPETESI</option>
											<option value="5849">ONIWAYA/PAPA-UKU</option>
											<option value="5850">AGBOTIKUYO/DOPEMU</option>
											<option value="5851">OYEWOLE/PAPA ASHAFA</option>
											<option value="5852">OKEKOTO</option>
											<option value="5853">KEKE</option>
											<option value="5854">DAROCHA</option>
											<option value="5855">TABON TABON/OKO OBA</option>
											<option value="5856">ORILE AGEGE/OKO OBA</option>
											<option value="5857">ISALE ODO</option>
										</select>
									</div>
								</div>
								<div class="col-lg-12">
									<div class="form-group">
										<label class="form-label">Resident Address</label>
										<textarea class="form-control" rows="4" placeholder="Resident Address"></textarea>
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
										<input type="text" class="form-control" id="facebook" placeholder="Facebook Username">
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
										<label class="form-label">Instagram</label>
										<input type="text" class="form-control" id="instagram" placeholder="Instagram Username">
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
										<label class="form-label">Twitter</label>
										<input type="text" class="form-control" id="twitter" placeholder="Twitter Username">
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
										<select class="form-control select2">
											<option>-- Select --</option>
											<option>Yes</option>
											<option>No</option>
										</select>
									</div>
								</div>
								<div class="col-lg-4">
									<div class="form-group">
										<label class="form-label">Reason for not having a PVC?</label>
										<select class="form-control select2">
											<option>-- Select --</option>
											<option>Not of age</option>
											<option>Not interested</option>
											<option>Lost faith in process</option>
											<option>Not enough education/information</option>
											<option>Sickness</option>
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
									<button class="btn btn-primary" type="submit">Save and Next</button>
								</div>
							</div>
						</div>
					</div>
				</div>
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