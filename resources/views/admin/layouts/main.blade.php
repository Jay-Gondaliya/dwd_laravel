<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta content="DWD" name="description">
		<meta content="Discern with Data" name="author">
		<meta name="keywords" content="Discern with Data">
		<title>DWD</title>
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
		<style>
			/*--thank you pop starts here--*/
			.thank-you-pop{
				width:100%;
				padding:20px;
				text-align:center;
			}
			.thank-you-pop img{
				width:76px;
				height:auto;
				margin:0 auto;
				display:block;
				margin-bottom:25px;
			}

			.thank-you-pop h1{
				font-size: 42px;
				margin-bottom: 25px;
				color:#5C5C5C;
			}
			.thank-you-pop p{
				font-size: 20px;
				margin-bottom: 27px;
				color:#5C5C5C;
			}
			#ignismyModal .modal-header{
				border:0px;
			}
			/*--thank you pop ends here--*/
		</style>
	</head>
	<body class="app sidebar-mini">
		<div class="page">
			<div class="page-main">
				@include('admin.layouts.sidebar')
				<div class="app-content main-content">
        			<div class="side-app">
						@include('admin.layouts.header')
						@yield('content')
						<div class="modal fade" id="thankyouModal" role="dialog">
							<div class="modal-dialog">
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal" aria-label=""><span>×</span></button>
									</div>
									
									<div class="modal-body">
										<div class="thank-you-pop">
											<img src="http://goactionstations.co.uk/wp-content/uploads/2017/03/Green-Round-Tick.png" alt="">
											<h1>Thank You!</h1>
											<p>Your Record Successfully Added!</p>
										</div>                        
									</div>					
								</div>
							</div>
						</div>
					</div>
				</div>
				<footer class="footer">
					<div class="container">
						<div class="row align-items-center flex-row-reverse">
							<div class="col-md-12 col-sm-12 text-center">
								Copyright © 2021 <a href="javascript:void(0);">DWD</a>. Designed with <span class="fa fa-heart text-danger"></span> by <a href="javascript:void(0);"></a> All rights reserved
							</div>
						</div>
					</div>
				</footer>
			</div>
		</div>
		<a href="#top" id="back-to-top"><i class="fe fe-chevron-up"></i></a>
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
	</body>
</html>