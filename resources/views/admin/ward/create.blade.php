@extends('admin.layouts.main')

@section('title') {{ $title }} @stop
@section('heading') {{ $title }} @stop

@section('content')
<div class="page-header border-bottom pb-3">
    <div class="page-leftheader">
        <h4 class="page-title mb-0 text-primary">Add New Ward Coordinator</h4>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <form class="mt-5" id="addWardCoordinatorForm">
                @csrf
                <input type="hidden" name="id" value="{{ $editWardCoordinator->id }}"/>
                <div class="card-body pb-2">
                    <div class="row row-sm">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-label">Select State</label>
                                <select class="form-control select2" name="select_state" id="select_state">
                                    <option value="">Select State</option>
                                    @if(!empty($stateList))
                                        @foreach($stateList as $state)
                                            <option value="{{ $state->id }}" @if($editWardCoordinator->state_id == $state->id) {{'selected'}} @endif>{{ $state->fname }}</option>
                                        @endforeach
                                    @endif
                                </select>
                                <span class="text-danger error" id="ward_select_state"></span>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-label">Select Local Government</label>
                                <select class="form-control select2" name="select_lga" id="select_lga">
                                    <option value="">Select Local Government</option>
                                    @if(!empty($lgaList) && !empty($editWardCoordinator->id))
                                        @foreach($lgaList as $lga)
                                            <option value="{{ $lga->id }}" @if($editWardCoordinator->lga_id == $lga->id) {{'selected'}} @endif>{{ $lga->fname }}</option>
                                        @endforeach
                                    @endif
                                </select>
                                <span class="text-danger error" id="ward_select_lga"></span>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="validationCustom01" class="form-label">First Name</label>
                                <input type="text" class="form-control" placeholder="First Name" name="fname" id="fname" value="{{ $editWardCoordinator->fname }}" required>
                                <span class="text-danger error" id="ward_fname"></span>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="validationCustom01" class="form-label">Middle Name</label>
                                <input type="text" class="form-control" placeholder="Middle Name" name="mname" value="{{ $editWardCoordinator->mname }}" required>
                                <span class="text-danger error" id="ward_mname"></span>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="validationCustom01" class="form-label">Last Name</label>
                                <input type="text" class="form-control" placeholder="Last Name" name="lname" value="{{ $editWardCoordinator->lname }}" required>
                                <span class="text-danger error" id="ward_lname"></span>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="validationCustom01" class="form-label">Username</label>
                                <input type="text" class="form-control" placeholder="Username" name="username" id="username" value="{{ $editWardCoordinator->username }}" required>
                                <span class="text-danger error" id="ward_username"></span>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-md-8 form-group">
                                    <label for="validationCustom01" class="form-label">Password</label>
                                    <input type="text" class="form-control" placeholder="Password" id="password" name="password" required>
                                    <span class="text-danger error" id="ward_password"></span>
                                </div>
                                <div class="col-md-4 mt-3 form-group">
                                    <a href="javascript:void(0)" id="gen_code" class="btn btn-success mt-4"><i class="fa fa-refresh"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-label">Age</label>
                                <input type="email" class="form-control" name="age" value="{{ $editWardCoordinator->age }}" placeholder="Age">
                                <span class="text-danger error" id="ward_age"></span>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-label">Gender</label>
                                <select class="form-control select2" name="gender">
                                    <option value="">Select Gender</option>
                                    <option value="male" @if($editWardCoordinator->gender == "male") {{'selected'}}@endif>Male</option>
                                    <option value="female" @if($editWardCoordinator->gender == "female") {{'selected'}}@endif>Female</option>
                                    <option value="other" @if($editWardCoordinator->gender == "other") {{'selected'}}@endif>Other</option>
                                </select>
                                <span class="text-danger error" id="ward_gender"></span>
                            </div>
                        </div>
                        <div class="col-lg-4">
                        <div class="form-group">
                        <label class="form-label">Date of Birth</label>
                        <div class="wd-200 mg-b-30">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text">
                                            <svg class="svg-icon" xmlns="http://www.w3.org/2000/svg" height="18" viewBox="0 0 24 24" width="18"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M20 3h-1V1h-2v2H7V1H5v2H4c-1.1 0-2 .9-2 2v16c0 1.1.9 2 2 2h16c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 2v3H4V5h16zM4 21V10h16v11H4z"/><path d="M4 5.01h16V8H4z" opacity=".3"/></svg>
                                        </div>
                                    </div><input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="date" name="dob" value="{{ $editWardCoordinator->dob }}"/>
                                </div>
                                <span class="text-danger error" id="ward_dob"></span>
                            </div>
                        </div>
                        </div>
                            <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-label">Mobile number</label>
                                <input type="email" class="form-control" name="mobile" value="{{ $editWardCoordinator->mobile }}" placeholder="Mobile Number">
                                <span class="text-danger error" id="ward_mobile"></span>
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
                                <input type="email" class="form-control" name="email" value="{{ $editWardCoordinator->email }}" placeholder="Email Address">
                                <span class="text-danger error" id="ward_email"></span>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-label">Enter OTP</label>
                                <input type="email" class="form-control" id="enterotp" placeholder="Enter OTP">
                                <a href="#" class="resend_otp">Resend OTP</a>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label class="form-label">Resident Address</label>
                                <textarea class="form-control" rows="4" placeholder="Resident Address" name="address">{{ $editWardCoordinator->address }}</textarea>
                                <span class="text-danger error" id="ward_address"></span>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-4">
                            <div class="custom-controls-stacked">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="policy" value="1">
                                    <span class="custom-control-label">I agree for the company to use these details.</span>
                                </label>
                                <span class="text-danger error" id="ward_policy"></span>
                            </div>
                        </div>
                        <div class="col-12 mb-2">
                            <button class="btn btn-primary" type="button" id="addWardCoordinator">Submit</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $("#select_state").change(function () {
            var state = this.value;
            console.log(state);
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
    });

	$(document).on('click', '#addWardCoordinator', function(e) {
		e.preventDefault();
		var formData = new FormData($('#addWardCoordinatorForm')[0]);

		$.ajax({
			url: "{{ route('admin.storeward_coordinator') }}",
			method: 'POST',
			data: formData,
			dataType: "json",
			contentType: false,
			processData: false,
			success: function(response) {
				if (response.code == 200) {
					$(".error").html('');
					window.location.href = "{{ route('admin.ward_coordinatorlist') }}";
				} else {
                    $(".error").html('');
                    $.each(response.error, function(key, value) {
                        $("#ward_" + key).html(value);
                    });
				}
			},
		});
	});

    function makepassword(length) {
        var result = '';
        var characters = '!~@#$%^&*ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        var charactersLength = characters.length;
        for (var i = 0; i < length; i++) {
            result += characters.charAt(Math.floor(Math.random() * charactersLength));
        }
        return result;
    }

    $(document).on('click','#gen_code',function() {
        $('#password').val(makepassword(8));
    });

    function makeusername(length) {
        var result = '';
        var characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        var charactersLength = characters.length;
        for (var i = 0; i < length; i++) {
            result += characters.charAt(Math.floor(Math.random() * charactersLength));
        }
        return result;
    }

    $('#fname').keyup(function() {
        var fname = $(this).val();
        $('#username').val(fname+"_"+makeusername(5));
    });
</script>
@endsection