@extends('admin.layouts.login_main')

@section('title') {{ $title }} @stop
@section('heading') {{ $title }} @stop

@section('content')
<div class="page">
    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col mx-auto">
                    <div class="row justify-content-center">
                        <div class="col-md-4">
                            <div class="text-center mb-6">
                                <img src="{{ asset('assets/images/brand/logo1.png') }}" class="header-brand-img desktop-lgo" alt="Azea logo">
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center mb-3">
                                        <h1 class="mb-2">Forget Password</h1>
                                        <a href="javascript:void(0);" class="">Create New Password</a>
                                    </div>
                                    <form class="mt-5" id="adminForgetPasswordForm">
                                        @csrf
                                        <div class="form-group row mb-4">
                                            <div class="col-md-12">
                                                <select class="form-control select2" name="profile_type" id="profile_type">
                                                    <option>Select your profile</option>
                                                    <option value="state">State Coordinator</option>
                                                    <option value="local">Local Government Area Coordinator</option>
                                                    <option value="ward">Ward Coordinator</option>
                                                    <option value="cell">Cell Coordinator</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="input-group mb-4">
                                                <div class="input-group-text">
                                                    <i class="fe fe-mail"></i>
                                                </div>
                                            <input type="email" class="form-control" placeholder="Email" name="email"/>
                                        </div>
                                        <div class="input-group mb-4">
                                                <div class="input-group-text">
                                                    <i class="fe fe-mail"></i>
                                                </div>
                                            <input type="password" class="form-control" placeholder="Password" name="password"/>
                                        </div>
                                        <!-- <div class="form-group">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" />
                                                <span class="custom-control-label">Send Recovery Mail</span>
                                            </label>
                                        </div> -->
                                        <div class="form-group text-center mb-3">
                                            <button class="btn btn-primary btn-lg w-100 br-7" id="adminForgetPassword">Send</button>
                                        </div>
                                        <div class="form-group fs-12 text-center">
                                            By Clicking Send ,You agree to our  <a href="javascript:void(0);" class="font-weight-bold">Terms & Conditions</a> and have read and acknowledge our  <a href="javascript:void(0);" class="font-weight-bold">Privacy & Services.</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="text-center register-icons">
                                <div class="small text-white mb-4">Login using with</div>
                                <button class="btn bg-white-50  text-white-50 font-weight-semibold w-12 google me-2" type="button"><i class="fa fa-google"></i></button>
                                <button class="btn bg-white-50  text-white-50 font-weight-semibold  w-12 facebook me-2" type="button"><i class="fa fa-facebook-f"></i></button>
                                <button class="btn bg-white-50  text-white-50 font-weight-semibold w-12 twitter me-2" type="button"><i class="fa fa-twitter"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).on('click', '#adminForgetPassword', function(e) {
		e.preventDefault();
		var formData = new FormData($('#adminForgetPasswordForm')[0]);

		$.ajax({
			url: "{{ route('forgot-password') }}",
			method: 'POST',
			data: formData,
			dataType: "json",
			contentType: false,
			processData: false,
			success: function(response) {
				if (response.code == 200) {
					$(".error").html('');
					window.location.href = "{{ route('index') }}";
				} else {
                    $(".error").html('');
                    $.each(response.error, function(key, value) {
                        $("#state_" + key).html(value);
                    });
				}
			},
		});
	});
</script>
@endsection