@extends('admin.layouts.main')

@section('title') {{ $title }} @stop
@section('heading') {{ $title }} @stop

@section('content')
    <!--Page header-->
    <div class="page-header border-bottom">
        <div class="page-leftheader">
            <h4 class="page-title mb-0 text-primary">All Local Government Area Coordinator</h4>
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
                <a href="{{route('admin.addlga_coordinator')}}"  class="btn btn-primary btn-pill">
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
                    <div class="card-title">Local Government Area Coordinator List</div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap" id="example1">
                            <thead>
                                <tr>
                                    <th class="wd-90p border-bottom-0"><strong>State</strong></th>
                                    <th class="wd-90p border-bottom-0"><strong>Full Name</strong></th>
                                    <th class="wd-90p border-bottom-0"><strong>Mobile Number</strong></th>
                                    <th class="wd-90p border-bottom-0"><strong>Email Address</strong></th>
                                    <th class="wd-5p border-bottom-0"><strong>Action</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($lgaList->count()))
                                    @foreach($lgaList as $lga)
                                        <tr>
                                            <td>{{ $lga->state_name }}</td>
                                            <td>{{ $lga->fname }} {{ $lga->mname }} {{ $lga->lname }}</td>
                                            <td>{{ $lga->mobile }}</td>
                                            <td>{{ $lga->email }}</td>
                                            <td class="action_icon">
                                                <a href="{{ route('admin.editlga_coordinator', $lga->id) }}" class="edit_"><i class="fa fa-edit"></i></a>
                                                <a href="javascript:void(0)" class="remove_lga" data-id="{{$lga->id}}"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="5" class="text-center">No Records Found.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                        <div class="pagination" style="margin-left: 65%;">
                            {{ $lgaList->links() }}
                        </div>
                    </div>
                </div>
            </div>
            <!--/div-->
        </div>
    </div>
    <!-- /Row -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).on('click', '.remove_lga', function(){
     var ele = $(this);
     var parent_row = ele.parents("tr");
     var id = ele.attr("data-id");

    $.ajax({
        url: "{{ route('admin.deletelga_coordinator') }}",
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
@endsection