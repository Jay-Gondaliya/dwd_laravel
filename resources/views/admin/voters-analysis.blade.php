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
                                <div class="btn-list">
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
                                                                                                    <input type="email"
                                                                                                        class="form-control"
                                                                                                        id="validationCustom01"
                                                                                                        placeholder="First Name"
                                                                                                        required>
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-4">
                                                                                                <div class="form-group">
                                                                                                    <label
                                                                                                        class="form-label">Middle
                                                                                                        Name</label>
                                                                                                    <input type="email"
                                                                                                        class="form-control"
                                                                                                        id="middlename"
                                                                                                        placeholder="Middle Name">
                                                                                                </div>
                                                                                            </div>
                                                                                            <div class="col-lg-4">
                                                                                                <div class="form-group">
                                                                                                    <label
                                                                                                        class="form-label">Last
                                                                                                        Name</label>
                                                                                                    <input type="email"
                                                                                                        class="form-control"
                                                                                                        id="lastname"
                                                                                                        placeholder="Last Name">
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
                                                                                                        name="example-radios"
                                                                                                        value="option1"
                                                                                                        checked="">
                                                                                                    <span
                                                                                                        class="custom-control-label">Male</span>
                                                                                                </label>
                                                                                            </li>
                                                                                            <li>
                                                                                                <label
                                                                                                    class="custom-control custom-radio">
                                                                                                    <input type="radio"
                                                                                                        class="custom-control-input"
                                                                                                        name="example-radios"
                                                                                                        value="option2">
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
                                                                                        Mobile Number</label>
                                                                                    <input type="text"
                                                                                        class="form-control"
                                                                                        id="mobile-number"
                                                                                        placeholder="Enter Mobile Number">
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
                                                                                        placeholder="Enter Email">
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
                                                                <select class="form-control select2-show-search"
                                                                    data-placeholder="Choose one (with searchbox)">
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
                                                                    <option value="37">FEDERAL CAPITAL TERRITORY
                                                                    </option>
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
                                                                <select class="form-control select2-show-search"
                                                                    data-placeholder="Choose one (with searchbox)">
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
                                                                <select class="form-control select2-show-search"
                                                                    data-placeholder="Choose one (with searchbox)">
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
                                                    </div>
                                                </div>
                                                <div class="tab_content">
                                                    <div class="row">
                                                        <div class="col-lg-2">
                                                            <div class="custom-controls-stacked">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        name="example-checkbox1" value="facebook">
                                                                    <span class="custom-control-label">Facebook</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <div class="custom-controls-stacked">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        name="example-checkbox2" value="instagram">
                                                                    <span class="custom-control-label">Instagram</span>
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-2">
                                                            <div class="custom-controls-stacked">
                                                                <label class="custom-control custom-checkbox">
                                                                    <input type="checkbox" class="custom-control-input"
                                                                        name="example-checkbox3" value="twitter">
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
                                                                        name="example-checkbox4" value="voterspvc">
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
                                                <div class="btn-list mt-5">
                                                    <a href="javascript:void(0);" class="btn btn-pill btn-success"
                                                        id="show-result">Show Result</a>
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
                                                                        <th class="wd-20p border-bottom-0">Position</th>
                                                                        <th class="wd-15p border-bottom-0">Date Of Birth</th>
                                                                        <th class="wd-10p border-bottom-0">Salary</th>
                                                                        <th class="wd-25p border-bottom-0">E-mail</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @if(!empty($voterList))
                                                                        @foreach($voterList as $voter)
                                                                            <tr>
                                                                                <td>{{ $voter->fname }} {{ $voter->mname }}</td>
                                                                                <td>{{ $voter->lname }}</td>
                                                                                <td>Supervisor</td>
                                                                                <td>{{ $voter->dob }}</td>
                                                                                <td>100000</td>
                                                                                <td>{{ $voter->email }}</td>
                                                                            </tr>
                                                                        @endforeach
                                                                    @else
                                                                        <tr>
                                                                            <td colspan="6" class="text-center">No Records.</td>
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
                                                                            <th class="wd-20p border-bottom-0">Position</th>
                                                                            <th class="wd-15p border-bottom-0">Date Of Birth</th>
                                                                            <th class="wd-10p border-bottom-0">Salary</th>
                                                                            <th class="wd-25p border-bottom-0">E-mail</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @if(!empty($printVoterList))
                                                                            @foreach($printVoterList as $voter)
                                                                                <tr>
                                                                                    <td>{{ $voter->fname }} {{ $voter->mname }}</td>
                                                                                    <td>{{ $voter->lname }}</td>
                                                                                    <td>Supervisor</td>
                                                                                    <td>{{ $voter->dob }}</td>
                                                                                    <td>100000</td>
                                                                                    <td>{{ $voter->email }}</td>
                                                                                </tr>
                                                                            @endforeach
                                                                        @else
                                                                            <tr>
                                                                                <td colspan="6" class="text-center">No Records.</td>
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
            $("#show-result").click(function() {
                $(".show-result-box").show();
            });
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
    </script>
</body>

</html>