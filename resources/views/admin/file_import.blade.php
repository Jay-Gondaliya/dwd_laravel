<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<!-- Meta data -->
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="DWD" name="description">
		<meta content="Discern with Data" name="author">
		<meta name="keywords" content="Discern with Data">

		<!-- Title -->
		<title>DWD</title>

		<!--Favicon -->
		<link rel="icon" href="{{ asset('assets/images/brand/favicon.ico') }}" type="image/x-icon"/>

		<!--Bootstrap css -->
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
		<link id="theme" href="{{ asset('assets/colors/color1.css') }}" rel="stylesheet" type="text/css"/>
		 
	</head>

	<body class="app sidebar-mini">

		<!-- Page -->
		<div class="page">
			<div class="page-main">

                @include('admin.layouts.sidebar')

				<!-- App-Content -->
				<div class="app-content main-content">
					<div class="side-app">

                        @include('admin.layouts.header')
						<div class="page-header border-bottom pb-3">
							<div class="page-leftheader">
								<h4 class="page-title mb-0 text-primary">Create Voter</h4>
							</div>
						</div>
						<!--End Page header-->
						
                        <div class="row">
                            @if(Session::has('type') && ((Session::get('type') == 'national') || (Session::get('type') == 'state'))|| (Session::get('type') == 'lga') || (Session::get('type') == 'ward'))
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
                            @endif

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
                                                                        </div><input class="form-control fc-datepicker" max="{{ date('Y-m-d') }}" value="{{ $editVoter->dob }}" type="date" name="dob">
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
                                                                    <label class="form-label">Select State</label>
                                                                    <select class="form-control" name="state" id="select_state">
                                                                        <option value="">Select State</option>
                                                                        @if(!empty($stateList))
                                                                        @foreach($stateList as $state)
                                                                        <option value="{{ $state->id }}" @if($editVoter->state == $state->id) {{'selected'}} @endif>{{ $state->fname }}</option>
                                                                        @endforeach
                                                                        @endif
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">Select Local Government</label>
                                                                    <select class="form-control" name="lga" id="select_lga">
                                                                        <option value="">Select Local Government</option>
                                                                        @if(!empty($lgaList) && !empty($editVoter->id))
                                                                        @foreach($lgaList as $lga)
                                                                        <option value="{{ $lga->id }}" @if($editVoter->lga == $lga->id) {{'selected'}} @endif>{{ $lga->fname }}</option>
                                                                        @endforeach
                                                                        @endif
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">Select Ward</label>
                                                                    <select class="form-control" name="ward" id="select_ward">
                                                                        <option value="">Select Ward</option>
                                                                        @if(!empty($wardList) && !empty($editVoter->id))
                                                                        @foreach($wardList as $ward)
                                                                        <option value="{{ $ward->id }}" @if($editVoter->ward == $ward->id) {{'selected'}} @endif>{{ $ward->fname }}</option>
                                                                        @endforeach
                                                                        @endif
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">Select Cell</label>
                                                                    <select class="form-control" name="cell" id="select_cell">
                                                                        <option value="">Select Cell</option>
                                                                        @if(!empty($cellList) && !empty($editVoter->id))
                                                                        @foreach($cellList as $cell)
                                                                        <option value="{{ $cell->id }}" @if($editVoter->cell == $cell->id) {{'selected'}} @endif>{{ $cell->fname }}</option>
                                                                        @endforeach
                                                                        @endif
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
                                                                    <select class="form-control select2" name="question_1">
                                                                        <option value="">-- Select --</option>
                                                                        <option value="1" @if($editVoter->question_1 == "1") {{'selected'}}@endif>Yes</option>
                                                                        <option value="0" @if($editVoter->question_1 == "0") {{'selected'}}@endif>No</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">Reason for not voting in last election?</label>
                                                                    <select class="form-control select2" name="question_2">
                                                                        <option value="">-- Select --</option>
                                                                        <option value="1" @if($editVoter->question_2 == "1") {{'selected'}}@endif>Moved to new location</option>
                                                                        <option value="2" @if($editVoter->question_2 == "2") {{'selected'}}@endif>Not of age</option>
                                                                        <option value="3" @if($editVoter->question_2 == "3") {{'selected'}}@endif>Not interested</option>
                                                                        <option value="4" @if($editVoter->question_2 == "4") {{'selected'}}@endif>Lost faith in process</option>
                                                                        <option value="5" @if($editVoter->question_2 == "5") {{'selected'}}@endif>Not enough education/information</option>
                                                                        <option value="6" @if($editVoter->question_2 == "6") {{'selected'}}@endif>Sickness</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">Whom did you vote for in the last election?</label>
                                                                    <select class="form-control select2" name="question_3">
                                                                        <option value="">-- Select --</option>
                                                                        <option value="1" @if($editVoter->question_3 == "1") {{'selected'}}@endif>Patry A</option>
                                                                        <option value="2" @if($editVoter->question_3 == "2") {{'selected'}}@endif>Party B</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">What party are you sympathetic to?</label>
                                                                    <select class="form-control select2" name="question_4">
                                                                        <option value="">-- Select --</option>
                                                                        <option value="1" @if($editVoter->question_4 == "1") {{'selected'}}@endif>Patry A</option>
                                                                        <option value="2" @if($editVoter->question_4 == "2") {{'selected'}}@endif>Party B</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">What things are important to you that you think the government Should provide?</label>
                                                                    <select class="form-control select2" name="question_5">
                                                                        <option value="">-- Select --</option>
                                                                        <option value="1" @if($editVoter->question_5 == "1") {{'selected'}}@endif>Education</option>
                                                                        <option value="2" @if($editVoter->question_5 == "2") {{'selected'}}@endif>Employment</option>
                                                                        <option value="3" @if($editVoter->question_5 == "3") {{'selected'}}@endif>Cleanliness</option>
                                                                        <option value="4" @if($editVoter->question_5 == "4") {{'selected'}}@endif>Environment</option>
                                                                        <option value="5" @if($editVoter->question_5 == "5") {{'selected'}}@endif>Crime</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">Moved from a registered ward to a new one?</label>
                                                                    <select class="form-control select2" name="question_6">
                                                                        <option value="">-- Select --</option>
                                                                        <option value="1" @if($editVoter->question_6 == "1") {{'selected'}}@endif>Yes</option>
                                                                        <option value="0" @if($editVoter->question_6 == "0") {{'selected'}}@endif>No</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">If yes, Have you registered in the new ward?</label>
                                                                    <select class="form-control select2" name="question_7">
                                                                        <option value="">-- Select --</option>
                                                                        <option value="1" @if($editVoter->question_7 == "1") {{'selected'}}@endif>Yes</option>
                                                                        <option value="0" @if($editVoter->question_7 == "0") {{'selected'}}@endif>No</option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">Have you registered for the Feb 2022 elections?</label>
                                                                    <select class="form-control select2" name="question_8">
                                                                        <option value="">-- Select --</option>
                                                                        <option value="1" @if($editVoter->question_8 == "1") {{'selected'}}@endif>Yes</option>
                                                                        <option value="0" @if($editVoter->question_8 == "0") {{'selected'}}@endif>No</option>
                                                                    </select>
                                                                </div>
                                                            </div>

                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">Would you like to support a deserving candidate via donations?</label>
                                                                    <select class="form-control select2" name="question_9">
                                                                        <option value="">-- Select --</option>
                                                                        <option value="1" @if($editVoter->question_9 == "1") {{'selected'}}@endif>Yes</option>
                                                                        <option value="0" @if($editVoter->question_9 == "0") {{'selected'}}@endif>No</option>
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
				</div><!-- right app-content-->
			</div>

			<!--Footer-->
			<footer class="footer">
				<div class="container">
					<div class="row align-items-center flex-row-reverse">
						<div class="col-md-12 col-sm-12 text-center">
							Copyright © 2021 <a href="javascript:void(0);">DWD</a>. Designed with <span class="fa fa-heart text-danger"></span> by <a href="javascript:void(0);"></a> All rights reserved
						</div>
					</div>
				</div>
			</footer>
			<!-- End Footer-->

		</div>

        <div class="modal fade" id="anotherRecordsModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Not Add Records</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="table-responsive" id="another_records">
                        </div>
                    </div>
                </div>
            </div>
        </div>
		<!-- End Page -->

		<!-- Back to top -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
		<a href="#top" id="back-to-top"><i class="fe fe-chevron-up"></i></a>

		<!-- Jquery js-->
		<script src="{{ asset('assets/js/jquery.min.js') }}"></script>

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

    <script>
        $(document).ready(function(){
            $('.btnNext').click(function() {
                $('.panel-tabs .active').parent().next('li').find('a').trigger('click');
            });

            $('.btnPrevious').click(function() {
                $('.panel-tabs .active').parent().prev('li').find('a').trigger('click');
            });
        });

        $(document).on('click', '.close', function (e) {
            $('.modal').modal('hide');
            location.reload();
        });
        
        $(document).on('click', '#addFileData', function (e) {
            e.preventDefault();
            var formData = new FormData($('#fileDataForm')[0]);

            $.ajax({
                url: "{{ route('fileUpload') }}",
                method: 'POST',
                data: formData,
                dataType: "json",
                contentType: false,
                processData: false,
                success: function (response) {
                    if (response.code == 200) {
                        $('#anotherRecordsModal').modal('show');
                        $('#another_records').html(response.anotherCoordinatorList);
                        // $('#thankyouModal').modal('show');
                        // setTimeout(function() {
                        //     window.location.href = "{{ route('voters-analysis') }}";
                        // }, 3000);
                    } else {
                    }
                },
            });
        });

        $(document).on('click', '.createVoter', function (e) {
            e.preventDefault();
            var formData = new FormData($('#createVoterForm')[0]);

            $.ajax({
                url: "{{ route('store_voter') }}",
                method: 'POST',
                data: formData,
                beforeSend: function() {
                    $('#createVoterForm')[0].reset();
                },
                dataType: "json",
                contentType: false,
                processData: false,
                success: function (response) {
                    if (response.code == 200) {
                        $(".error").html('');
                        $('#thankyouModal').modal('show');
                        setTimeout(function() {
                            window.location.href = "{{ route('voters-analysis') }}";
                        }, 3000);
                    } else {
                        $("#login_error").text(response.message);
                    }
                },
            });
        });

        $("#select_state").change(function () {
            var state = this.value;
            var _token = $('input[name="_token"]').val();
            var str = "";

            if (state != '') {
                $.ajax({
                    type: "post",
                    url: "{{ route('admin.getRecords') }}",
                    datatype: "json",
                    data: {value: state, from: 'state', _token: _token},
                    success: function (response) {
                        $('#select_lga').html('<option value="">Select Local Government</option>');
                        $.each(response.success, function (key, value) {
                            $("#select_lga").append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    }
                });
            } else {
                $('#select_lga').html('');
            }
        });

        $("#select_lga").change(function () {
            var state = this.value;
            var _token = $('input[name="_token"]').val();
            var str = "";

            if (state != '') {
                $.ajax({
                    type: "post",
                    url: "{{ route('admin.getRecords') }}",
                    datatype: "json",
                    data: {value: state, from: 'lga', _token: _token},
                    success: function (response) {
                        $('#select_ward').html('<option value="">Select Ward</option>');
                        $.each(response.success, function (key, value) {
                            $("#select_ward").append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    }
                });
            } else {
                $('#select_ward').html('');
            }
        });

        $("#select_ward").change(function () {
            var ward = this.value;
            var _token = $('input[name="_token"]').val();
            var str = "";

            if (ward != '') {
                $.ajax({
                    type: "post",
                    url: "{{ route('admin.getRecords') }}",
                    datatype: "json",
                    data: {value: ward, from: 'ward', _token: _token},
                    success: function (response) {
                        $('#select_cell').html('<option value="">Select Cell</option>');
                        $.each(response.success, function (key, value) {
                            $("#select_cell").append('<option value="' + value.id + '">' + value.name + '</option>');
                        });
                    }
                });
            } else {
                $('#select_cell').html('');
            }
        });
    </script>
	</body>
</html>