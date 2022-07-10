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
    <link rel="icon" href="{{ asset('assets/images/brand/favicon.ico') }}" type="image/x-icon" />

    <!--Bootstrap css -->
    <link id="style" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Style css -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/custom.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/dark.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/skin-modes.css') }}" rel="stylesheet" />

    <!-- Animate css -->
    <link href="{{ asset('assets/css/animated.css') }}" rel="stylesheet" />

    <!-- P-scroll bar css-->
    <link href="{{ asset('assets/plugins/p-scrollbar/p-scrollbar.css') }}" rel="stylesheet" />

    <!---Icons css-->
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" />

    <!-- Simplebar css -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/simplebar/css/simplebar.css') }}">

    <!-- INTERNAL Morris Charts css -->
    <link href="{{ asset('assets/plugins/morris/morris.css') }}" rel="stylesheet" />

    <!-- INTERNAL Select2 css -->
    <link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" />

    <!-- INTERNAL  Tabs css-->
    <link href="{{ asset('assets/plugins/tabs/style.css') }}" rel="stylesheet" />
    <!-- Data table css -->
    <link href="{{ asset('assets/plugins/datatables/DataTables/css/dataTables.bootstrap4.min.css') }}"
        rel="stylesheet" />
    <link href="{{ asset('assets/plugins/datatables/Responsive/css/responsive.bootstrap4.min.css') }}"
        rel="stylesheet" />

    <!-- Color Skin css -->

    <link href="{{ asset('assets/plugins/datatables/DataTables/css/dataTables.bootstrap5.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/datatables/Buttons/css/buttons.bootstrap5.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/plugins/datatables/Responsive/css/responsive.bootstrap5.min.css') }}"
        rel="stylesheet" />

    <link id="theme" href="{{ asset('assets/colors/color1.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/responsive.css') }}" rel="stylesheet" />

</head>

<body class="app sidebar-mini">
    <div class="page">
        <div class="page-main">

            @include('admin.layouts.sidebar')

            <!-- App-Content -->
            <div class="app-content main-content">
                <div class="side-app">

                    @include('admin.layouts.header')

                    <!--Page header-->
                    <div class="page-header border-bottom">
                        <div class="page-leftheader">
                            <h4 class="page-title mb-0 text-primary">Voter's Analysis</h4>
                        </div>
                    </div>

                    <!--End Page header-->

                    <!-- Row-1 -->
                    <div class="page-rightheader">
                        <div class="row">
                            <div class="col-9">
                            </div>
                            <div class="col-3">
                                <div class="btn-list" style="float:right;">
                                    <a href="javascript:void(0);" class="btn btn-success btn-pill" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        Filters</a>
                                    <div class="dropdown-menu border-0">
                                        <a class="dropdown-item" href="javascript:void(0);">Today</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Yesterday</a>
                                        <a class="dropdown-item active" href="javascript:void(0);">Last 7 days</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Last 30 days</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Last 6 months</a>
                                        <a class="dropdown-item" href="javascript:void(0);">Last year</a>
                                    </div>
                                    <a href="{{route('voter_add')}}" class="btn btn-primary btn-pill">
                                        Add New</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Row-1 -->

                    <!-- Row -->
                    <form method="POST" action="{{ route('voters-analysis') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 col-lg-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Filters</h3>
                                    </div>
                                    <div class="card-body p-3">
                                        <div class="panel panel-primary">
                                            <div class="tab_wrapper first_tab">
                                                <ul class="tab_list">
                                                    <li class="">Personal Info</li>
                                                    <li>Contact Info</li>
                                                    <li>Location</li>
                                                    <li>Social Media</li>
                                                    <li>Voter Mobilization</li>
                                                    <li>Voter Engagement</li>
                                                </ul>
                                                <div class="content_wrapper">
                                                    <div class="tab_content active mobile_p_10">
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="card">
                                                                    <div class="card-body p-3">
                                                                        <div class="panel panel-primary">
                                                                            <div class=" tab-menu-heading p-0 bg-light">
                                                                                <div class="tabs-menu1 ">
                                                                                    <!-- Tabs -->
                                                                                    <ul class="nav panel-tabs">
                                                                                        <li class=""><a href="#tab5"
                                                                                                class="active"
                                                                                                data-bs-toggle="tab">Name</a>
                                                                                        </li>
                                                                                        <li><a href="#tab6"
                                                                                                data-bs-toggle="tab">Gender</a>
                                                                                        </li>
                                                                                        <li><a href="#tab7"
                                                                                                data-bs-toggle="tab">Age</a>
                                                                                        </li>
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <div class="panel-body tabs-menu-body">
                                                                                <div class="tab-content">
                                                                                    <div class="tab-pane active " id="tab5">
                                                                                        <div class="">
                                                                                            <div class="row row-sm">
                                                                                                <div class="col-lg-4">
                                                                                                    <div class="form-group">
                                                                                                        <label
                                                                                                            for="validationCustom01"
                                                                                                            class="form-label">First
                                                                                                            Name</label>
                                                                                                        <input type="text"
                                                                                                            class="form-control"
                                                                                                            id="validationCustom01"
                                                                                                            placeholder="First Name"
                                                                                                            name="fname"
                                                                                                            value="{{ $searchResult['fname'] }}"
                                                                                                            />
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-lg-4">
                                                                                                    <div class="form-group">
                                                                                                        <label
                                                                                                            class="form-label">Middle
                                                                                                            Name</label>
                                                                                                        <input type="text"
                                                                                                            class="form-control"
                                                                                                            id="middlename"
                                                                                                            name="mname"
                                                                                                            value="{{ $searchResult['mname'] }}"
                                                                                                            placeholder="Middle Name"/>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="col-lg-4">
                                                                                                    <div class="form-group">
                                                                                                        <label
                                                                                                            class="form-label">Last
                                                                                                            Name</label>
                                                                                                        <input type="text"
                                                                                                            class="form-control"
                                                                                                            id="lastname"
                                                                                                            name="lname"
                                                                                                            value="{{ $searchResult['lname'] }}"
                                                                                                            placeholder="Last Name"/>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="tab-pane " id="tab6">
                                                                                        <div class="">
                                                                                            <ul class="display-inline">
                                                                                                <li>
                                                                                                    <label
                                                                                                        class="custom-control custom-radio">
                                                                                                        <input type="radio"
                                                                                                            class="custom-control-input"
                                                                                                            value="male"
                                                                                                            name="gender" {{ $searchResult['gender'] == "male" ? 'checked' : null }} />
                                                                                                        <span
                                                                                                            class="custom-control-label">Male</span>
                                                                                                    </label>
                                                                                                </li>
                                                                                                <li>
                                                                                                    <label
                                                                                                        class="custom-control custom-radio">
                                                                                                        <input type="radio"
                                                                                                            class="custom-control-input"
                                                                                                            name="gender"
                                                                                                            value="female" {{ $searchResult['gender'] == "female" ? 'checked' : null }}/>
                                                                                                        <span
                                                                                                            class="custom-control-label">Female</span>
                                                                                                    </label>
                                                                                                </li>
                                                                                            </ul>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="tab-pane " id="tab7">
                                                                                        <div class="">
                                                                                            <div class="row">
                                                                                                <div class="col-lg-12">
                                                                                                    <ul
                                                                                                        class="display-inline">
                                                                                                        <li>
                                                                                                            <label
                                                                                                                class="custom-control custom-radio">
                                                                                                                <input
                                                                                                                    type="radio"
                                                                                                                    class="custom-control-input"
                                                                                                                    name="example-radios1"
                                                                                                                    value="option3"
                                                                                                                    checked="">
                                                                                                                <span
                                                                                                                    class="custom-control-label">Below</span>
                                                                                                            </label>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <input
                                                                                                                type="email"
                                                                                                                class="form-control"
                                                                                                                id=""
                                                                                                                placeholder="">
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                                <div class="col-lg-12">
                                                                                                    <ul
                                                                                                        class="display-inline">
                                                                                                        <li>
                                                                                                            <label
                                                                                                                class="custom-control custom-radio">
                                                                                                                <input
                                                                                                                    type="radio"
                                                                                                                    class="custom-control-input"
                                                                                                                    name="example-radios1"
                                                                                                                    value="option4">
                                                                                                                <span
                                                                                                                    class="custom-control-label">Above</span>
                                                                                                            </label>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <input
                                                                                                                type="email"
                                                                                                                class="form-control"
                                                                                                                id=""
                                                                                                                placeholder="">
                                                                                                        </li>
                                                                                                    </ul>
                                                                                                </div>
                                                                                                <div class="col-lg-12">
                                                                                                    <ul
                                                                                                        class="display-inline">
                                                                                                        <li>
                                                                                                            <label
                                                                                                                class="custom-control custom-radio">
                                                                                                                <input
                                                                                                                    type="radio"
                                                                                                                    class="custom-control-input"
                                                                                                                    name="example-radios1"
                                                                                                                    value="option5">
                                                                                                                <span
                                                                                                                    class="custom-control-label">Between</span>
                                                                                                            </label>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <input
                                                                                                                type="email"
                                                                                                                class="form-control mb-3"
                                                                                                                id=""
                                                                                                                placeholder="">
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <span
                                                                                                                class="between-textbox">To</span>
                                                                                                        </li>
                                                                                                        <li>
                                                                                                            <input
                                                                                                                type="email"
                                                                                                                class="form-control"
                                                                                                                id=""
                                                                                                                placeholder="">
                                                                                                        </li>
                                                                                                    </ul>
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
                                                        </div>
                                                    </div>
                                                    <div class="tab_content">
                                                        <div class="card-body p-3">
                                                            <div class="panel panel-primary">
                                                                <div class=" tab-menu-heading p-0 bg-light">
                                                                    <div class="tabs-menu1 ">
                                                                        <!-- Tabs -->
                                                                        <ul class="nav panel-tabs">
                                                                            <li class=""><a href="#mobile" class="active"
                                                                                    data-bs-toggle="tab">Mobile</a></li>
                                                                            <li><a href="#email"
                                                                                    data-bs-toggle="tab">Email</a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                                <div class="panel-body tabs-menu-body">
                                                                    <div class="tab-content">
                                                                        <div class="tab-pane active " id="mobile">
                                                                            <div class="row">
                                                                                <div class="col-lg-4">
                                                                                    <div class="form-group">
                                                                                        <label class="form-label">Having
                                                                                            Mobile Number</label>
                                                                                        <select
                                                                                            class="form-control select2" name="is_mobile">
                                                                                            <option value="">-- Select --</option>
                                                                                            <option value="1" @if($searchResult['is_mobile'] == "1") {{'selected'}}@endif>Yes</option>
                                                                                            <option value="0" @if($searchResult['is_mobile'] == "0") {{'selected'}}@endif>No</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-4">
                                                                                    <div class="form-group">
                                                                                        <label class="form-label">Enter
                                                                                            Mobile Number</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            id="mobile-number"
                                                                                            name="mobile"
                                                                                            value="{{ $searchResult['mobile'] }}"
                                                                                            placeholder="Enter Mobile Number"/>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="tab-pane " id="email">
                                                                            <div class="row">
                                                                                <div class="col-lg-4">
                                                                                    <div class="form-group">
                                                                                        <label class="form-label">Having
                                                                                            Email</label>
                                                                                        <select
                                                                                            class="form-control select2">
                                                                                            <option>-- Select --</option>
                                                                                            <option>Yes</option>
                                                                                            <option>No</option>
                                                                                        </select>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-lg-4">
                                                                                    <div class="form-group">
                                                                                        <label class="form-label">Enter
                                                                                            Email</label>
                                                                                        <input type="text"
                                                                                            class="form-control"
                                                                                            id="mobile-number"
                                                                                            name="email"
                                                                                            value="{{ $searchResult['email'] }}"
                                                                                            placeholder="Enter Email"/>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab_content">
                                                        <div class="row">

                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">State</label>
                                                                    <select class="form-control"
                                                                        data-placeholder="Choose one (with searchbox)" name="filter_state">
                                                                        <option>Select State</option>
                                                                        @if(!empty($stateList))
                                                                            @foreach($stateList as $state)
                                                                                <option value="{{ $state->id }}" @if($searchResult['filter_state'] == $state->id) {{'selected'}} @endif>{{ $state->fname }}</option>
                                                                            @endforeach
                                                                        @endif
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">LGA</label>
                                                                    <select class="form-control"
                                                                        data-placeholder="Choose one (with searchbox)" name="filter_lga">
                                                                        <option>Select LGA</option>
                                                                        @if(!empty($lgaList))
                                                                            @foreach($lgaList as $lga)
                                                                                <option value="{{ $lga->id }}" @if($searchResult['filter_lga'] == $lga->id) {{'selected'}} @endif>{{ $lga->fname }}</option>
                                                                            @endforeach
                                                                        @endif
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">Ward</label>
                                                                    <select class="form-control"
                                                                        data-placeholder="Choose one (with searchbox)" name="filter_ward">
                                                                        <option>Select Ward</option>
                                                                        @if(!empty($wardList))
                                                                            @foreach($wardList as $ward)
                                                                                <option value="{{ $ward->id }}" @if($searchResult['filter_ward'] == $ward->id) {{'selected'}} @endif>{{ $ward->fname }}</option>
                                                                            @endforeach
                                                                        @endif
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab_content">
                                                        <div class="row">
                                                            <div class="col-lg-2">
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input"
                                                                            name="fb_filter" value="1"  {{ $searchResult['fb_filter'] == "1" ? 'checked' : null }}>
                                                                        <span class="custom-control-label">Facebook</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input"
                                                                            name="insta_filter" value="1"  {{ $searchResult['insta_filter'] == "1" ? 'checked' : null }}>
                                                                        <span class="custom-control-label">Instagram</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-2">
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input"
                                                                            name="twitter_filter" value="1"  {{ $searchResult['twitter_filter'] == "1" ? 'checked' : null }}>
                                                                        <span class="custom-control-label">Twitter</span>
                                                                    </label>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="tab_content">
                                                        <div class="row">
                                                            <div class="col-lg-2">
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input"
                                                                            name="is_pvc" value="1" {{ $searchResult['is_pvc'] == "1" ? 'checked' : null }}>
                                                                        <span class="custom-control-label">Voters with
                                                                            PVC</span>
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab_content">
                                                        <div class="row">
                                                            <div class="col-lg-4">
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input"
                                                                            name="example-checkbox5"
                                                                            value="votedlastelection">
                                                                        <span class="custom-control-label">Voted Last
                                                                            Election</span>
                                                                    </label>
                                                                </div>
                                                                <div class="pt-2 ml_30">
                                                                    <div class="form-group">
                                                                        <label class="form-label">Reason for not voting
                                                                        </label>
                                                                        <select class="form-control select2">
                                                                            <option>-- Select --</option>
                                                                            <option>Moved to new location</option>
                                                                            <option>Not of age</option>
                                                                            <option>Not interested</option>
                                                                            <option>Lost faith in process</option>
                                                                            <option>Not enough education/information
                                                                            </option>
                                                                            <option>Sickness</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">Voted for? </label>
                                                                    <select class="form-control select2">
                                                                        <option>-- Select --</option>
                                                                        <option>Lorem Ipsum dolor sit amet</option>
                                                                        <option>Lorem Ipsum dolor sit amet Lorem Ipsum dolor
                                                                            sit amet</option>
                                                                        <option>Lorem Ipsum</option>
                                                                        <option>Lorem Ipsum dolor sit amet</option>
                                                                        <option>Lorem Ipsum dolor sit amet Lorem Ipsum dolor
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">Sympathetic to?</label>
                                                                    <select class="form-control select2">
                                                                        <option>-- Select --</option>
                                                                        <option>Lorem Ipsum dolor sit amet</option>
                                                                        <option>Lorem Ipsum dolor sit amet Lorem Ipsum dolor
                                                                            sit amet</option>
                                                                        <option>Lorem Ipsum</option>
                                                                        <option>Lorem Ipsum dolor sit amet</option>
                                                                        <option>Lorem Ipsum dolor sit amet Lorem Ipsum dolor
                                                                        </option>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="form-group">
                                                                    <label class="form-label">Things important to
                                                                        voter</label>
                                                                    <select class="form-control select2">
                                                                        <option>-- Select --</option>
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
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input"
                                                                            name="example-checkbox6" value="movedregister">
                                                                        <span class="custom-control-label">Moved from
                                                                            registered ward to new one?</span>
                                                                    </label>
                                                                </div>
                                                                <div class="pt-2 ml_30">
                                                                    <div class="custom-controls-stacked">
                                                                        <label class="custom-control custom-checkbox">
                                                                            <input type="checkbox"
                                                                                class="custom-control-input"
                                                                                name="example-checkbox7" value="newward">
                                                                            <span class="custom-control-label">Registered in
                                                                                new ward?</span>
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input"
                                                                            name="example-checkbox8"
                                                                            value="registeredelction">
                                                                        <span class="custom-control-label">Registered for
                                                                            2022 elections</span>
                                                                    </label>
                                                                </div>

                                                            </div>
                                                            <div class="col-lg-4">
                                                                <div class="custom-controls-stacked">
                                                                    <label class="custom-control custom-checkbox">
                                                                        <input type="checkbox" class="custom-control-input"
                                                                            name="example-checkbox9" value="donate">
                                                                        <span class="custom-control-label">Would like to
                                                                            donate</span>
                                                                    </label>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <div class="show-result-button text-right">
                                                    <div class="btn-list mt-5 mx-5">
                                                        <button type="submit" class="btn btn-success ml-4">
                                                            <i class="fa fa-search" aria-hidden="true"></i> Show Result
                                                        </button>
                                                        <!-- <a href="javascript:void(0);" class="btn btn-pill btn-success"
                                                            id="show-result">Show Result</a> -->
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="show-result-box mt-5">
                                                    <div class="card">
                                                        <div class="card-header">
                                                            <div class="card-title">Responsive DataTable</div>
                                                        </div>
                                                        <div class="card-body">
                                                            <div class="all_buttons_datatable">
                                                                <ul>
                                                                    <li><a href="{{route('download_pdf_voters')}}"
                                                                            class="datatable_buttons btn btn-primary">Generate PDF</a>
                                                                    </li>
                                                                    <li><button type="button"
                                                                            class="datatable_buttons btn btn-primary" onclick="printDiv()">Print</button>
                                                                    </li>
                                                                    <li><button type="button"
                                                                            class="datatable_buttons btn btn-primary">Expert</button>
                                                                    </li>
                                                                    <li><button type="button"
                                                                            class="datatable_buttons btn btn-primary">Add /
                                                                            Remove Columns</button></li>
                                                                    <li><button type="button"
                                                                            class="datatable_buttons btn btn-primary">SMS</button>
                                                                    </li>
                                                                    <li><button type="button"
                                                                            class="datatable_buttons btn btn-primary">Email</button>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="table-responsive">
                                                                <table class="table table-bordered text-nowrap">
                                                                    <thead>
                                                                        <tr>
                                                                            <th class="wd-15p border-bottom-0">First name</th>
                                                                            <th class="wd-15p border-bottom-0">Last name</th>
                                                                            <th class="wd-15p border-bottom-0">Date Of Birth</th>
                                                                            <th class="wd-25p border-bottom-0">E-mail</th>
                                                                            <th class="wd-5p border-bottom-0">Action</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @if(!empty($voterList->count()))
                                                                            @foreach($voterList as $voter)
                                                                                <tr>
                                                                                    <td>{{ $voter->fname }} {{ $voter->mname }}</td>
                                                                                    <td>{{ $voter->lname }}</td>
                                                                                    <td>{{ $voter->dob }}</td>
                                                                                    <td>{{ $voter->email }}</td>
                                                                                    <td class="action_icon">
                                                                                        <!-- <a href="#" class="eye_"><i class="fa fa-eye"></i></a> -->
                                                                                        <a href="{{ route('edit_voter', $voter->id) }}" class="edit_"><i class="fa fa-edit"></i></a>
                                                                                        <a href="javascript:void(0)" class="remove_voter" data-id="{{ $voter->id }}"><i class="fa fa-trash"></i></a>
                                                                                    </td>
                                                                                </tr>
                                                                            @endforeach
                                                                        @else
                                                                            <tr>
                                                                                <td colspan="7" class="text-center">No Records Found.</td>
                                                                            </tr>
                                                                        @endif
                                                                    </tbody>
                                                                </table>
                                                            <div class="pagination" style="margin-left: 65%;">
                                                                {{ $voterList->links() }}
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row d-none" id="printarea">
                                                    <div class="col-12">
                                                        <div class="card">
                                                            <div class="card-body">
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered text-nowrap">
                                                                        <thead>
                                                                            <tr>
                                                                                <th class="wd-15p border-bottom-0">First name</th>
                                                                                <th class="wd-15p border-bottom-0">Last name</th>
                                                                                <th class="wd-15p border-bottom-0">Date Of Birth</th>
                                                                                <th class="wd-25p border-bottom-0">E-mail</th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            @if(!empty($printVoterList))
                                                                                @foreach($printVoterList as $voter)
                                                                                    <tr>
                                                                                        <td>{{ $voter->fname }} {{ $voter->mname }}</td>
                                                                                        <td>{{ $voter->lname }}</td>
                                                                                        <td>{{ $voter->dob }}</td>
                                                                                        <td>{{ $voter->email }}</td>
                                                                                    </tr>
                                                                                @endforeach
                                                                            @else
                                                                                <tr>
                                                                                    <td colspan="4" class="text-center">No Records.</td>
                                                                                </tr>
                                                                            @endif
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--/div-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <!-- End Row -->

                </div>
            </div>
            <!-- End app-content-->

            <!--Footer-->
            <footer class="footer">
                <div class="container">
                    <div class="row align-items-center flex-row-reverse">
                        <div class="col-md-12 col-sm-12 text-center">
                            Copyright © 2021 <a href="javascript:void(0);">DWD</a>. Designed with <span
                                class="fa fa-heart text-danger"></span> by <a href="javascript:void(0);"></a> All rights
                            reserved
                        </div>
                    </div>
                </div>
            </footer>
            <!-- End Footer-->
        </div>
    </div>

    <!-- Back to top -->
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

    <!--INTERNAL Flot Charts js-->
    <script src="{{ asset('assets/plugins/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/jquery.flot.fillbetween.js') }}"></script>
    <script src="{{ asset('assets/plugins/flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ asset('assets/js/dashboard.sampledata.js') }}"></script>
    <script src="{{ asset('assets/js/chart.flot.sampledata.js') }}"></script>

    <!-- INTERNAL Chart js -->
    <script src="{{ asset('assets/plugins/chart/chart.bundle.js') }}"></script>
    <script src="{{ asset('assets/plugins/chart/utils.js') }}"></script>

    <!-- INTERNAL Apexchart js -->
    <script src="{{ asset('assets/js/apexcharts.js') }}"></script>

    <!--INTERNAL Moment js-->
    <script src="{{ asset('assets/plugins/moment/moment.js') }}"></script>

    <!--INTERNAL Index js-->
    <script src="{{ asset('assets/js/index1.js') }}"></script>

    <!-- INTERNAL Data tables -->
    <script src="{{ asset('assets/plugins/datatables/DataTables/js/jquery.dataTables.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/DataTables/js/dataTables.bootstrap5.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/Buttons/js/dataTables.buttons.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/Buttons/js/buttons.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/JSZip/jszip.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/pdfmake/pdfmake.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/pdfmake/vfs_fonts.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/Buttons/js/buttons.html5.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/Buttons/js/buttons.print.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/Buttons/js/buttons.colVis.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/Responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/Responsive/js/responsive.bootstrap5.min.js') }}"></script>
    <script src="{{ asset('assets/js/datatables.js') }}"></script>

    <!-- INTERNAL Select2 js -->
    <script src="{{ asset('assets/plugins/select2/select2.full.min.js') }}"></script>
    <script src="{{ asset('assets/js/select2.js') }}"></script>

    <!-- Simplebar JS -->
    <script src="{{ asset('assets/plugins/simplebar/js/simplebar.min.js') }}"></script>

    <!-- Rounded bar chart js-->
    <script src="{{ asset('assets/js/rounded-barchart.js') }}"></script>
    <script src="{{ asset('assets/plugins/prism/prism.js') }}"></script>
    <script src="{{ asset('assets/plugins/prism/prism.js') }}"></script>
    <!--- INTERNAL Tabs js-->
    <script src="{{ asset('assets/plugins/tabs/jquery.multipurpose_tabcontent.js') }}"></script>
    <script src="{{ asset('assets/js/tabs.js') }}"></script>
    <!-- Custom js-->
    <script src="{{ asset('assets/js/custom.js') }}"></script>


    <script>
        $(document).ready(function() {
            $(".show-result-box").show();
        });
        function printDiv(){
            $(".show-result-box").show();
            var printContents="<h3>Voters List</h3>";
            printContents+="<hr/>";
            printContents += document.getElementById("printarea").innerHTML;
            var originalContents = document.body.innerHTML;
            
            document.body.innerHTML = printContents;
            window.print();
            document.body.innerHTML = originalContents;
        }

        $(document).on('click', '.remove_voter', function(){
            var ele = $(this);
            var parent_row = ele.parents("tr");
            var id = ele.attr("data-id");

            $.ajax({
                url: "{{ route('delete_voter') }}",
                method: "DELETE",
                data: {_token: '{{ csrf_token() }}',id: id},
                dataType: "json",
                success: function (response) {
                    if(response.code == 1){
                        location.reload();
                    }
                }
            });
        });
    </script>
</body>

</html>