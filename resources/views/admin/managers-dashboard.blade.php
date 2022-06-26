@extends('admin.layouts.main')

@section('title') {{ $title }} @stop
@section('heading') {{ $title }} @stop

@section('content')
    <div class="page-header border-bottom">
        <div class="page-leftheader">
            <h4 class="page-title mb-0 text-primary">Manager’s Dashboard</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-4 col-xm-12">
        <a href="managers-supervisor-team.html">
            <div class="card overflow-hidden dash1-card border-0 dash1">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                                <h4 class="mb-2 number-font carn1 font-weight-bold">Manage Supervisors</h4>
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-xm-12">
        <a href="managers-field-volunteers-team.html">
            <div class="card overflow-hidden dash1-card border-0 dash2">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                                <h4 class="mb-2 mt-1 number-font carn2 font-weight-bold">Manage Field Volunteers</h4>
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-xm-12">
        <a href="all-voters.html">
            <div class="card overflow-hidden dash1-card border-0 dash3">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                                <h4 class="mb-2 mt-1 number-font carn2 font-weight-bold">Manage Voters</h4>
                        </div>
                    </div>
                </div>
            </div>
            </a>
        </div>
    </div>
@endsection