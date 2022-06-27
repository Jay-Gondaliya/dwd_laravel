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
                            <div class="text-center mb-5">
                                <img src="{{ asset('assets/images/brand/logo1.png') }}" class="header-brand-img desktop-lgo" alt="Azea logo">
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <div class="text-center mb-3">
                                        <h1 class="mb-2">Log In</h1>
                                        <a href="javascript:void(0);" class="">Welcome Back !</a>
                                    </div>
                                    <form class="mt-5" id="checkLoginForm">
                                        @csrf
                                        <div class="input-group mb-4">
                                                <div class="input-group-text">
                                                    <i class="fe fe-user"></i>
                                                </div>
                                            <input type="text" class="form-control" placeholder="Username" name="username" id="username"/>
                                        </div>
                                        
                                        <div class="input-group mb-4">
                                            <div class="input-group" id="Password-toggle1">
                                                <a href="" class="input-group-text">
                                                    <i class="fe fe-eye" aria-hidden="true"></i>
                                                </a>
                                                <input class="form-control" type="password" placeholder="Confirm Password" name="password" id="password"/>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" />
                                                <span class="custom-control-label">Remember me</span>
                                            </label>
                                        </div>
                                        <span class="tex-danger error" id="login_error"></span>
                                        <div class="form-group text-center mb-3">
                                            <button type="button" class="btn btn-primary btn-lg w-100 br-7" id="checkLogin">Log In</button>
                                        </div>
                                        <div class="form-group fs-13 text-center">
                                            <a href="{{ route('forgot-password') }}">Forget Password ?</a>
                                        </div>
                                        
                                    </form>
                                </div>
                            </div>
                            <div class="text-center register-icons">
                                <div class="small text-white mb-4">Login with</div>
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
     $(document).on('click', '#checkLogin', function(e) {
          e.preventDefault();
          var formData = new FormData($('#checkLoginForm')[0]);

          $.ajax({
                url: "{{ route('admin.checkLogin') }}",
               method: 'POST',
               data: formData,
               dataType: "json",
               contentType: false,
               processData: false,
               success: function(response) {
                    if (response.code == 200) {
                        $(".error").html('');
                        window.location.href = "{{ route('dashboard') }}";
                    } else {
                        $("#login_error").text(response.message);
                    }
              },
          });
     });
</script>
@endsection
