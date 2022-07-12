@extends('admin.layouts.main')

@section('title') {{ $title }} @stop
@section('heading') {{ $title }} @stop

@section('content')
<div class="page-header border-bottom pb-3">
    <div class="page-leftheader">
        <h4 class="page-title mb-0 text-primary">Add New Cell Coordinator</h4>
    </div>
</div>
<div class="row">
    <div class="col-lg-12 col-md-12">
        <div class="card">
            <form class="mt-5" id="addCellCoordinatorForm">
                @csrf
                <input type="hidden" name="id" value="{{ $editCellCoordinator->id }}"/>
                <div class="card-body pb-2">
                    <div class="row row-sm">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-label">Select State</label>
                                <select class="form-control select2" name="select_state" id="select_state">
                                    <option value="">Select State</option>
                                    @if(!empty($stateList))
                                        @foreach($stateList as $state)
                                            <option value="{{ $state->id }}" @if($editCellCoordinator->state_id == $state->id) {{'selected'}} @endif>{{ $state->fname }}</option>
                                        @endforeach
                                    @endif
                                </select>
                                <span class="text-danger error" id="cell_select_state"></span>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-label">Select Local Government</label>
                                <select class="form-control select2" name="select_lga" id="select_lga">
                                    <option value="">Select Local Government</option>
                                    @if(!empty($lgaList) && !empty($editCellCoordinator->id))
                                        @foreach($lgaList as $lga)
                                            <option value="{{ $lga->id }}" @if($editCellCoordinator->lga_id == $lga->id) {{'selected'}} @endif>{{ $lga->fname }}</option>
                                        @endforeach
                                    @endif
                                </select>
                                <span class="text-danger error" id="cell_select_lga"></span>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-label">Select Ward</label>
                                <select class="form-control select2" name="select_ward" id="select_ward">
                                    <option value="">Select Ward</option>
                                    @if(!empty($wardList) && !empty($editCellCoordinator->id))
                                        @foreach($wardList as $ward)
                                            <option value="{{ $ward->id }}" @if($editCellCoordinator->ward_id == $ward->id) {{'selected'}} @endif>{{ $ward->fname }}</option>
                                        @endforeach
                                    @endif
                                </select>
                                <span class="text-danger error" id="cell_select_ward"></span>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="validationCustom01" class="form-label">First Name</label>
                                <input type="text" class="form-control" placeholder="First Name" name="fname" id="fname" value="{{ $editCellCoordinator->fname }}" required>
                                <span class="text-danger error" id="cell_fname"></span>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="validationCustom01" class="form-label">Middle Name</label>
                                <input type="text" class="form-control" placeholder="Middle Name" name="mname" value="{{ $editCellCoordinator->mname }}" required>
                                <span class="text-danger error" id="cell_mname"></span>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="validationCustom01" class="form-label">Last Name</label>
                                <input type="text" class="form-control" placeholder="Last Name" name="lname" value="{{ $editCellCoordinator->lname }}" required>
                                <span class="text-danger error" id="cell_lname"></span>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label for="validationCustom01" class="form-label">Username</label>
                                <input type="text" class="form-control" placeholder="Username" name="username" id="username" value="{{ $editCellCoordinator->username }}" required>
                                <span class="text-danger error" id="cell_username"></span>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="row">
                                <div class="col-md-8 form-group">
                                    <label for="validationCustom01" class="form-label">Password</label>
                                    <input type="text" class="form-control" placeholder="Password" id="password" name="password" required>
                                    <span class="text-danger error" id="cell_password"></span>
                                </div>
                                <div class="col-md-4 mt-3 form-group">
                                    <a href="javascript:void(0)" id="gen_code" class="btn btn-success mt-4"><i class="fa fa-refresh"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-label">Age</label>
                                <input type="email" class="form-control" name="age" value="{{ $editCellCoordinator->age }}" placeholder="Age">
                                <span class="text-danger error" id="cell_age"></span>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-label">Gender</label>
                                <select class="form-control select2" name="gender">
                                    <option value="">Select Gender</option>
                                    <option value="male" @if($editCellCoordinator->gender == "male") {{'selected'}}@endif>Male</option>
                                    <option value="female" @if($editCellCoordinator->gender == "female") {{'selected'}}@endif>Female</option>
                                    <option value="other" @if($editCellCoordinator->gender == "other") {{'selected'}}@endif>Other</option>
                                </select>
                                <span class="text-danger error" id="cell_gender"></span>
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
                                    </div><input class="form-control fc-datepicker" placeholder="MM/DD/YYYY" type="date" name="dob" value="{{ $editCellCoordinator->dob }}"/>
                                </div>
                                <span class="text-danger error" id="cell_dob"></span>
                            </div>
                        </div>
                        </div>
                            <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-label">Mobile number</label>
                                <input type="email" class="form-control" name="mobile" value="{{ $editCellCoordinator->mobile }}" placeholder="Mobile Number">
                                <span class="text-danger error" id="cell_mobile"></span>
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
                                <input type="email" class="form-control" name="email" value="{{ $editCellCoordinator->email }}" placeholder="Email Address">
                                <span class="text-danger error" id="cell_email"></span>
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
                                <textarea class="form-control" rows="4" placeholder="Resident Address" name="address">{{ $editCellCoordinator->address }}</textarea>
                                <span class="text-danger error" id="cell_address"></span>
                            </div>
                        </div>
                        <div class="col-lg-12 mb-4">
                            <div class="custom-controls-stacked">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" name="policy" value="1">
                                    <span class="custom-control-label">I agree for the company to use these details.</span>
                                </label>
                                <span class="text-danger error" id="cell_policy"></span>
                            </div>
                        </div>
                        <div class="col-12 mb-2">
                            <button class="btn btn-primary" type="button" id="addCellCoordinator">Submit</button>
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
    });

	$(document).on('click', '#addCellCoordinator', function(e) {
		e.preventDefault();
		var formData = new FormData($('#addCellCoordinatorForm')[0]);

		$.ajax({
			url: "{{ route('admin.storecell_coordinator') }}",
			method: 'POST',
			data: formData,
			dataType: "json",
			contentType: false,
			processData: false,
			success: function(response) {
				if (response.code == 200) {
					$(".error").html('');
                    $('#thankyouModal').modal('show');
                    setTimeout(function() {
                        window.location.href = "{{ route('admin.cell_coordinatorlist') }}";
                    }, 3000);
				} else {
                    $(".error").html('');
                    $.each(response.error, function(key, value) {
                        $("#cell_" + key).html(value);
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