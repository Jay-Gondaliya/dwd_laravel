<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="Azea - Admin Panel HTML template" name="description">
		<meta content="Spruko Private Limited" name="author">
		<meta name="keywords" content="admin, admin template, dashboard, admin dashboard, responsive, bootstrap, bootstrap 5, admin theme, admin themes, bootstrap admin template, scss, ui, crm, modern, flat">
        <title>Azea</title>
        <link rel="icon" href="{{ asset('assets/images/brand/favicon.ico') }}" type="image/x-icon"/>
    	<link id="style" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    	<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
		<link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" />
		<link href="{{ asset('assets/css/dark.css') }}" rel="stylesheet" />
		<link href="{{ asset('assets/css/skin-modes.css') }}" rel="stylesheet" />
    	<link href="{{ asset('assets/css/animated.css') }}" rel="stylesheet" />
    	<link href="{{ asset('assets/plugins/p-scrollbar/p-scrollbar.css') }}" rel="stylesheet" />
    	<link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" />
		<link rel="stylesheet" href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}">
		<link href="{{ asset('assets/plugins/morris/morris.css') }}" rel="stylesheet" />
		<link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
		<link href="{{ asset('assets/plugins/datatables/DataTables/css/dataTables.bootstrap4.min.css') }}" rel="stylesheet" />
		<link href="{{ asset('assets/plugins/datatables/Responsive/css/responsive.bootstrap4.min.css') }}" rel="stylesheet" />
		<link id="theme" href="{{ asset('assets/colors/color1.css') }}" rel="stylesheet" type="text/css"/>
	</head>
	<body class="register-2">
        @yield('content')
        <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
		<script src="{{ asset('assets/plugins/bootstrap/popper.min.js') }}"></script>
		<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
		<script src="{{ asset('assets/plugins/othercharts/jquery.sparkline.min.js') }}"></script>
		<script src="{{ asset('assets/js/circle-progress.min.js') }}"></script>
		<script src="{{ asset('assets/plugins/rating/jquery.rating-stars.js') }}"></script>
		<script src="{{ asset('assets/plugins/sidemenu/sidemenu.js') }}"></script>
		<script src="{{ asset('assets/plugins/p-scrollbar/p-scrollbar.js') }}"></script>
		<script src="{{ asset('assets/plugins/p-scrollbar/p-scroll1.js') }}"></script>
		<script src="{{ asset('assets/plugins/p-scrollbar/p-scroll.js') }}"></script>
		<script src="{{ asset('assets/plugins/flot/jquery.flot.js') }}"></script>
		<script src="{{ asset('assets/plugins/flot/jquery.flot.fillbetween.js') }}"></script>
		<script src="{{ asset('assets/plugins/flot/jquery.flot.pie.js') }}"></script>
		<script src="{{ asset('assets/js/dashboard.sampledata.js') }}"></script>
		<script src="{{ asset('assets/js/chart.flot.sampledata.js') }}"></script>
		<script src="{{ asset('assets/plugins/chart/chart.bundle.js') }}"></script>
		<script src="{{ asset('assets/plugins/chart/utils.js') }}"></script>
		<script src="{{ asset('assets/js/apexcharts.js') }}"></script>
		<script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>
		<script src="{{ asset('assets/js/index1.js') }}"></script>
		<script src="{{ asset('assets/plugins/datatables/DataTables/js/jquery.dataTables.js') }}"></script>
		<script src="{{ asset('assets/plugins/datatables/DataTables/js/dataTables.bootstrap5.js') }}"></script>
		<script src="{{ asset('assets/plugins/datatables/Responsive/js/dataTables.responsive.min.js') }}"></script>
		<script src="{{ asset('assets/plugins/datatables/Responsive/js/responsive.bootstrap5.min.js') }}"></script>
		<script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
		<script src="{{ asset('assets/js/select2.js') }}"></script>
		<script src="{{ asset('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>
		<script src="{{ asset('assets/js/rounded-barchart.js') }}"></script>
		<script src="{{ asset('assets/js/custom.js') }}"></script>
		<script>
		$(document).ready(function(){
            $("#profile_type").change(function() {
                var value = $(this).val();
                if(value=='manager'){
                    $("#type_redirect").attr('href','managers-dashboard.html');
                }
                else if(value=='fieldvolunteer'){
                    $("#type_redirect").attr('href','field-volunteer-dashboard.html');
                }
                else if(value=='supervisor'){
                    $("#type_redirect").attr('href','supervisors-dashboard.html');
                }
            });
		});
		</script>
	</body>
</html>
