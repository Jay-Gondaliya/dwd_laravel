@extends('admin.layouts.main')

@section('title') {{ $title }} @stop
@section('heading') {{ $title }} @stop

@section('content')
    <!-- Data table css -->
    <link href="{{ asset('assets/plugins/datatables/DataTables/css/dataTables.bootstrap5.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/plugins/datatables/Buttons/css/buttons.bootstrap5.min.css') }}"  rel="stylesheet">
    <link href="{{ asset('assets/plugins/datatables/Responsive/css/responsive.bootstrap5.min.css') }}" rel="stylesheet" />

    <!-- Slect2 css -->
    <link href="{{ asset('assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />

    <!-- Color Skin css -->
    <link id="theme" href="{{ asset('assets/colors/color1.css') }}" rel="stylesheet" type="text/css"/>

    <!--Page header-->
    <div class="page-header border-bottom">
        <div class="page-leftheader">
            <h4 class="page-title mb-0 text-primary">Managers in my team</h4>
        </div>
        
    </div>
    <div class="page-header">
    <div class="page-leftheader">
    </div>
        <div class="page-rightheader">
        <div class="row">
        <div class="col-5">
            <div class="btn-list">
                <a href="javascript:void(0);"  class="btn btn-success btn-pill" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
            </div>
            </div>
            <div class="col-5">
            <div class="btn-list">
                <a href="add-new-managers.html"  class="btn btn-primary btn-pill">
                    Add New</a>
            </div>
            </div>
            </div>
        </div>
    </div>
    <!--End Page header-->

    <!-- Row -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Supervisor's List</div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap" id="example1">
                            <thead>
                                <tr>
                                    <th class="wd-90p border-bottom-0"><strong>Full name</strong></th>
                                    <th class="wd-5p border-bottom-0"><strong>Action</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Bella Chloe hill</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Donna Bond Hudson</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Harry Dyer Carr</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lucas Bond Dyer</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Karen Hill Harry</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Dominic Jonathan Ince</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Herrod Chandler Ellison</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jonathan Ince Lee</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Leonard Ellison Miller</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Madeleine Lee Miller</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Karen Smith Lisa</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Bella Chloe hill</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Donna Bond Hudson</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Harry Dyer Carr</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lucas Bond Dyer</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Karen Hill Harry</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Dominic Jonathan Ince</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Herrod Chandler Ellison</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jonathan Ince Lee</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Leonard Ellison Miller</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Madeleine Lee Miller</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Karen Smith Lisa</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Bella Chloe hill</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Donna Bond Hudson</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Harry Dyer Carr</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lucas Bond Dyer</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Karen Hill Harry</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Dominic Jonathan Ince</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Herrod Chandler Ellison</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jonathan Ince Lee</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Leonard Ellison Miller</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Madeleine Lee Miller</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Karen Smith Lisa</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Bella Chloe hill</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Donna Bond Hudson</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Harry Dyer Carr</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lucas Bond Dyer</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Karen Hill Harry</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Dominic Jonathan Ince</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Herrod Chandler Ellison</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jonathan Ince Lee</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Leonard Ellison Miller</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Madeleine Lee Miller</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Karen Smith Lisa</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Bella Chloe hill</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Donna Bond Hudson</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Harry Dyer Carr</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Lucas Bond Dyer</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Karen Hill Harry</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Dominic Jonathan Ince</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Herrod Chandler Ellison</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Jonathan Ince Lee</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Leonard Ellison Miller</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Madeleine Lee Miller</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Karen Smith Lisa</td>
                                    <td class="action_icon">
                                    <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                    <a href="#" class="edit_"><i class="fa fa-edit"></i></a>
                                    <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--/div-->
        </div>
    </div>
    <!-- /Row -->

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
    <script src="{{ asset('assets/js/custom.js') }}"></script>
@endsection