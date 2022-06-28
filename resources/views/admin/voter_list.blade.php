@extends('admin.layouts.main')

@section('title') {{ $title }} @stop
@section('heading') {{ $title }} @stop

@section('content')
    <!--Page header-->
    <div class="page-header border-bottom">
        <div class="page-leftheader">
            <h4 class="page-title mb-0 text-primary">All Voters</h4>
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
                <a href="{{route('voter_add')}}"  class="btn btn-primary btn-pill">
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
                    <div class="card-title">Voter’s List</div>
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
                                @if(!empty($voterList))
                                    @foreach($voterList as $voter)
                                        <tr>
                                            <td>{{ $voter->fname }} {{ $voter->mname }} {{ $voter->lname }}</td>
                                            <td class="action_icon">
                                                <a href="#" class="eye_"><i class="fa fa-eye"></i></a>
                                                <a href="edit-voter.html" class="edit_"><i class="fa fa-edit"></i></a>
                                                <a href="#" class="trash_"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="2" class="text-center">No Records.</td>
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
            <!--/div-->
        </div>
    </div>
    <!-- /Row -->
@endsection