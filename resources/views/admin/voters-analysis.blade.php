@extends('admin.layouts.main')

@section('title') {{ $title }} @stop
@section('heading') {{ $title }} @stop

@section('content')
        <div class="page-header border-bottom">
            <div class="page-leftheader">
                <h4 class="page-title mb-0 text-primary">Voter's Analysis</h4>
            </div>
        </div>

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
                                        <li class=""><a href="#tab5" class="active" data-bs-toggle="tab">Name</a></li>
                                        <li><a href="#tab6" data-bs-toggle="tab">Gender</a></li>
                                        <li><a href="#tab7" data-bs-toggle="tab">Age</a></li>
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
                            </div>
                            </div>
                                    </div>
                                    <div class="tab-pane " id="tab6">
                                    <div class="">
                                        <ul class="display-inline">
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
                                    </div>
                                    <div class="tab-pane " id="tab7">
                                        <div class="">
                                        <div class="row">
                                        <div class="col-lg-12">
                                        <ul class="display-inline">
                                        <li>
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="example-radios1" value="option3" checked="">
                                            <span class="custom-control-label">Below</span>
                                        </label>
                                        </li>
                                        <li>
                                        <input type="email" class="form-control" id="" placeholder="">
                                        </li>
                                        </ul>
                                        </div>
                                        <div class="col-lg-12">
                                        <ul class="display-inline">
                                        <li>
                                        <label class="custom-control custom-radio">
                                            <input type="radio" class="custom-control-input" name="example-radios1" value="option4">
                                            <span class="custom-control-label">Above</span>
                                        </label>
                                        </li>
                                        <li>
                                        <input type="email" class="form-control" id="" placeholder="">
                                        </li>
                                        </ul>
                                        </div>
                                        <div class="col-lg-12">
                                        <ul class="display-inline">
                                        <li>
                                        <label class="custom-control custom-radio">
                                        <input type="radio" class="custom-control-input" name="example-radios1" value="option5">
                                            <span class="custom-control-label">Between</span>
                                            </label>
                                        </li>
                                        <li>
                                        <input type="email" class="form-control mb-3" id="" placeholder="">
                                        </li>
                                        <li>
                                        <span class="between-textbox">To</span>
                                        </li>
                                        <li>
                                        <input type="email" class="form-control" id="" placeholder="">
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
                                        <li class=""><a href="#mobile" class="active" data-bs-toggle="tab">Mobile</a></li>
                                        <li><a href="#email" data-bs-toggle="tab">Email</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="panel-body tabs-menu-body">
                                <div class="tab-content">
                                    <div class="tab-pane active " id="mobile">
                                    <div class="row">
                                    <div class="col-lg-4">
                                    <div class="form-group">
                                    <label class="form-label">Having Mobile Number</label>
                                    <select class="form-control select2">
                                                <option>-- Select --</option>
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>
                                            </div>
                                            </div>
                                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-label">Enter Mobile Number</label>
                                    <input type="text" class="form-control" id="mobile-number" placeholder="Enter Mobile Number">
                                </div>
                            </div>
                            </div>
                                    </div>
                                    <div class="tab-pane " id="email">
                                    <div class="row">
                                    <div class="col-lg-4">
                                    <div class="form-group">
                                    <label class="form-label">Having Email</label>
                                    <select class="form-control select2">
                                                <option>-- Select --</option>
                                                <option>Yes</option>
                                                <option>No</option>
                                            </select>
                                            </div>
                                            </div>
                                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-label">Enter Email</label>
                                    <input type="text" class="form-control" id="mobile-number" placeholder="Enter Email">
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
                                    </div>
                                    </div>
                                    <div class="tab_content">
                                        <div class="row">
                            <div class="col-lg-2">
                            <div class="custom-controls-stacked">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="facebook">
                                            <span class="custom-control-label">Facebook</span>
                                        </label>
                                    </div>
                            </div>
                            <div class="col-lg-2">
                            <div class="custom-controls-stacked">
                            <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox2" value="instagram">
                                            <span class="custom-control-label">Instagram</span>
                                        </label>
                                        </div>
                            </div>
                            <div class="col-lg-2">
                            <div class="custom-controls-stacked">
                            <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox3" value="twitter">
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
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox4" value="voterspvc">
                                            <span class="custom-control-label">Voters with PVC</span>
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
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox5" value="votedlastelection">
                                            <span class="custom-control-label">Voted Last Election</span>
                                        </label>
                                        </div>
                                        <div class="pt-2 ml_30">
                                        <div class="form-group">
                                            <label class="form-label">Reason for not voting </label>
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
                            </div>
                                <div class="col-lg-4">
                                <div class="form-group">
                                            <label class="form-label">Voted for? </label>
                                            <select class="form-control select2">
                                                <option>-- Select --</option>
                                                <option>Lorem Ipsum dolor sit amet</option>
                                                <option>Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet</option>
                                                <option>Lorem Ipsum</option>
                                                <option>Lorem Ipsum dolor sit amet</option>
                                                <option>Lorem Ipsum dolor sit amet Lorem Ipsum dolor</option>
                                            </select>
                                        </div>
                            </div>
                                <div class="col-lg-4">
                                <div class="form-group">
                                            <label class="form-label">Sympathetic to?</label>
                                            <select class="form-control select2">
                                                <option>-- Select --</option>
                                                <option>Lorem Ipsum dolor sit amet</option>
                                                <option>Lorem Ipsum dolor sit amet Lorem Ipsum dolor sit amet</option>
                                                <option>Lorem Ipsum</option>
                                                <option>Lorem Ipsum dolor sit amet</option>
                                                <option>Lorem Ipsum dolor sit amet Lorem Ipsum dolor</option>
                                            </select>
                                        </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                            <label class="form-label">Things important to voter</label>
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
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox6" value="movedregister">
                                            <span class="custom-control-label">Moved from registered ward to new one?</span>
                                        </label>
                                        </div>
                                        <div class="pt-2 ml_30">
                                    <div class="custom-controls-stacked">
                            <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox7" value="newward">
                                            <span class="custom-control-label">Registered in new ward?</span>
                                        </label>
                                        </div>
                                        </div>
                            </div>
                            <div class="col-lg-4">
                            <div class="custom-controls-stacked">
                            <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox8" value="registeredelction">
                                            <span class="custom-control-label">Registered for 2022 elections</span>
                                        </label>
                                        </div>
                                    
                            </div>
                            <div class="col-lg-4">
                            <div class="custom-controls-stacked">
                            <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" name="example-checkbox9" value="donate">
                                            <span class="custom-control-label">Would like to donate</span>
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
                                            <a href="javascript:void(0);" class="btn btn-pill btn-success" id="show-result">Show Result</a>
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
                    <li><button type="button" class="datatable_buttons btn btn-primary">Print</button></li>
                    <li><button type="button" class="datatable_buttons btn btn-primary">Expert</button></li>
                    <li><button type="button" class="datatable_buttons btn btn-primary">Add / Remove Columns</button></li>
                    <li><button type="button" class="datatable_buttons btn btn-primary">SMS</button></li>
                    <li><button type="button" class="datatable_buttons btn btn-primary">Email</button></li>
                    </ul>
                    </div>
                        <div class="table-responsive">
                            <table class="table table-bordered text-nowrap" id="example2">
                                <thead>
                                    <tr>
                                        <th class="wd-15p border-bottom-0">First name</th>
                                        <th class="wd-15p border-bottom-0">Last name</th>
                                        <th class="wd-20p border-bottom-0">Position</th>
                                        <th class="wd-15p border-bottom-0">Start date</th>
                                        <th class="wd-10p border-bottom-0">Salary</th>
                                        <th class="wd-25p border-bottom-0">E-mail</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Bella</td>
                                        <td>Chloe</td>
                                        <td>System Developer</td>
                                        <td>2018/03/12</td>
                                        <td>$654,765</td>
                                        <td>b.Chloe@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Donna</td>
                                        <td>Bond</td>
                                        <td>Account Manager</td>
                                        <td>2012/02/21</td>
                                        <td>$543,654</td>
                                        <td>d.bond@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Harry</td>
                                        <td>Carr</td>
                                        <td>Technical Manager</td>
                                        <td>20211/02/87</td>
                                        <td>$86,000</td>
                                        <td>h.carr@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Lucas</td>
                                        <td>Dyer</td>
                                        <td>Javascript Developer</td>
                                        <td>2014/08/23</td>
                                        <td>$456,123</td>
                                        <td>l.dyer@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Karen</td>
                                        <td>Hill</td>
                                        <td>Sales Manager</td>
                                        <td>2010/7/14</td>
                                        <td>$432,230</td>
                                        <td>k.hill@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Dominic</td>
                                        <td>Hudson</td>
                                        <td>Sales Assistant</td>
                                        <td>2015/10/16</td>
                                        <td>$654,300</td>
                                        <td>d.hudson@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Herrod</td>
                                        <td>Chandler</td>
                                        <td>Integration Specialist</td>
                                        <td>2012/08/06</td>
                                        <td>$137,500</td>
                                        <td>h.chandler@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Jonathan</td>
                                        <td>Ince</td>
                                        <td>junior Manager</td>
                                        <td>2012/11/23</td>
                                        <td>$345,789</td>
                                        <td>j.ince@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Leonard</td>
                                        <td>Ellison</td>
                                        <td>Junior Javascript Developer</td>
                                        <td>2010/03/19</td>
                                        <td>$205,500</td>
                                        <td>l.ellison@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Madeleine</td>
                                        <td>Lee</td>
                                        <td>Software Developer</td>
                                        <td>20215/8/23</td>
                                        <td>$456,890</td>
                                        <td>m.lee@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Karen</td>
                                        <td>Miller</td>
                                        <td>Office Director</td>
                                        <td>2012/9/25</td>
                                        <td>$87,654</td>
                                        <td>k.miller@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Lisa</td>
                                        <td>Smith</td>
                                        <td>Support Lead</td>
                                        <td>2011/05/21</td>
                                        <td>$342,000</td>
                                        <td>l.simth@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Morgan</td>
                                        <td>Keith</td>
                                        <td>Accountant</td>
                                        <td>2012/11/27</td>
                                        <td>$675,245</td>
                                        <td>m.keith@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Nathan</td>
                                        <td>Mills</td>
                                        <td>Senior Marketing Designer</td>
                                        <td>2014/10/8</td>
                                        <td>$765,980</td>
                                        <td>n.mills@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Ruth</td>
                                        <td>May</td>
                                        <td>office Manager</td>
                                        <td>2010/03/17</td>
                                        <td>$654,765</td>
                                        <td>r.may@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Penelope</td>
                                        <td>Ogden</td>
                                        <td>Marketing Manager</td>
                                        <td>2013/5/22</td>
                                        <td>$345,510</td>
                                        <td>p.ogden@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Sean</td>
                                        <td>Piper</td>
                                        <td>Financial Officer</td>
                                        <td>2014/06/11</td>
                                        <td>$725,000</td>
                                        <td>s.piper@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Trevor</td>
                                        <td>Ross</td>
                                        <td>Systems Administrator</td>
                                        <td>2011/05/23</td>
                                        <td>$237,500</td>
                                        <td>t.ross@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Vanessa</td>
                                        <td>Robertson</td>
                                        <td>Software Designer</td>
                                        <td>2014/6/23</td>
                                        <td>$765,654</td>
                                        <td>v.robertson@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Una</td>
                                        <td>Richard</td>
                                        <td>Personnel Manager</td>
                                        <td>2014/5/22</td>
                                        <td>$765,290</td>
                                        <td>u.richard@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Justin</td>
                                        <td>Peters</td>
                                        <td>Development lead</td>
                                        <td>2013/10/23</td>
                                        <td>$765,654</td>
                                        <td>j.peters@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Adrian</td>
                                        <td>Terry</td>
                                        <td>Marketing Officer</td>
                                        <td>2013/04/21</td>
                                        <td>$543,769</td>
                                        <td>a.terry@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Cameron</td>
                                        <td>Watson</td>
                                        <td>Sales Support</td>
                                        <td>2013/9/7</td>
                                        <td>$675,876</td>
                                        <td>c.watson@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Evan</td>
                                        <td>Terry</td>
                                        <td>Sales Manager</td>
                                        <td>2013/10/26</td>
                                        <td>$66,340</td>
                                        <td>d.terry@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Angelica</td>
                                        <td>Ramos</td>
                                        <td>Chief Executive Officer</td>
                                        <td>20217/10/15</td>
                                        <td>$6,234,000</td>
                                        <td>a.ramos@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Connor</td>
                                        <td>Johne</td>
                                        <td>Web Developer</td>
                                        <td>2011/1/25</td>
                                        <td>$92,575</td>
                                        <td>C.johne@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Jennifer</td>
                                        <td>Chang</td>
                                        <td>Regional Director</td>
                                        <td>2012/17/11</td>
                                        <td>$546,890</td>
                                        <td>j.chang@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Brrighten</td>
                                        <td>Wagner</td>
                                        <td>Software Engineer</td>
                                        <td>2013/07/14</td>
                                        <td>$206,850</td>
                                        <td>b.wagner@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Fiona</td>
                                        <td>Green</td>
                                        <td>Chief Operating Officer</td>
                                        <td>2015/06/23</td>
                                        <td>$345,789</td>
                                        <td>f.green@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Shou</td>
                                        <td>Itou</td>
                                        <td>Regional Marketing</td>
                                        <td>2013/07/19</td>
                                        <td>$335,300</td>
                                        <td>s.itou@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Michelle</td>
                                        <td>House</td>
                                        <td>Integration Specialist</td>
                                        <td>2016/07/18</td>
                                        <td>$76,890</td>
                                        <td>m.house@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Suki</td>
                                        <td>Burks</td>
                                        <td>Developer</td>
                                        <td>2010/11/45</td>
                                        <td>$678,890</td>
                                        <td>s.burks@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Prescott</td>
                                        <td>Bartlett</td>
                                        <td>Technical Author</td>
                                        <td>2014/12/25</td>
                                        <td>$789,100</td>
                                        <td>p.bartlett@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Gavin</td>
                                        <td>Cortez</td>
                                        <td>Team Leader</td>
                                        <td>2015/1/19</td>
                                        <td>$345,890</td>
                                        <td>g.cortez@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Martena</td>
                                        <td>Mccray</td>
                                        <td>Post-Sales support</td>
                                        <td>2011/03/09</td>
                                        <td>$324,050</td>
                                        <td>m.mccray@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Unity</td>
                                        <td>Butler</td>
                                        <td>Marketing Designer</td>
                                        <td>2014/7/28</td>
                                        <td>$34,983</td>
                                        <td>u.butler@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Howard</td>
                                        <td>Hatfield</td>
                                        <td>Office Manager</td>
                                        <td>2013/8/19</td>
                                        <td>$98,000</td>
                                        <td>h.hatfield@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Hope</td>
                                        <td>Fuentes</td>
                                        <td>Secretary</td>
                                        <td>2015/07/28</td>
                                        <td>$78,879</td>
                                        <td>h.fuentes@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Vivian</td>
                                        <td>Harrell</td>
                                        <td>Financial Controller</td>
                                        <td>2010/02/14</td>
                                        <td>$452,500</td>
                                        <td>v.harrell@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Timothy</td>
                                        <td>Mooney</td>
                                        <td>Office Manager</td>
                                        <td>20216/12/11</td>
                                        <td>$136,200</td>
                                        <td>t.mooney@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Jackson</td>
                                        <td>Bradshaw</td>
                                        <td>Director</td>
                                        <td>2011/09/26</td>
                                        <td>$645,750</td>
                                        <td>j.bradshaw@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Olivia</td>
                                        <td>Liang</td>
                                        <td>Support Engineer</td>
                                        <td>2014/02/03</td>
                                        <td>$234,500</td>
                                        <td>o.liang@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Bruno</td>
                                        <td>Nash</td>
                                        <td>Software Engineer</td>
                                        <td>2015/05/03</td>
                                        <td>$163,500</td>
                                        <td>b.nash@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Sakura</td>
                                        <td>Yamamoto</td>
                                        <td>Support Engineer</td>
                                        <td>2010/08/19</td>
                                        <td>$139,575</td>
                                        <td>s.yamamoto@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Thor</td>
                                        <td>Walton</td>
                                        <td>Developer</td>
                                        <td>2012/08/11</td>
                                        <td>$98,540</td>
                                        <td>t.walton@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Finn</td>
                                        <td>Camacho</td>
                                        <td>Support Engineer</td>
                                        <td>2016/07/07</td>
                                        <td>$87,500</td>
                                        <td>f.camacho@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Serge</td>
                                        <td>Baldwin</td>
                                        <td>Data Coordinator</td>
                                        <td>2017/04/09</td>
                                        <td>$138,575</td>
                                        <td>s.baldwin@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Zenaida</td>
                                        <td>Frank</td>
                                        <td>Software Engineer</td>
                                        <td>2018/01/04</td>
                                        <td>$125,250</td>
                                        <td>z.frank@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Zorita</td>
                                        <td>Serrano</td>
                                        <td>Software Engineer</td>
                                        <td>2017/06/01</td>
                                        <td>$115,000</td>
                                        <td>z.serrano@datatables.net</td>
                                    </tr>
                                    <tr>
                                        <td>Jennifer</td>
                                        <td>Acosta</td>
                                        <td>Junior Javascript Developer</td>
                                        <td>2017/02/01</td>
                                        <td>$75,650</td>
                                        <td>j.acosta@datatables.net</td>
                                    </tr>
                                </tbody>
                            </table>
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
        <!-- End Row -->
        
<script>
$(document).ready(function(){
    $("#show-result").click(function(){
        $(".show-result-box").show();
    });
});
</script>
@endsection