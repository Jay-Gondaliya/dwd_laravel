@extends('admin.layouts.main')

@section('title') {{ $title }} @stop
@section('heading') {{ $title }} @stop

@section('content')
    <!--Page header-->
    <div class="page-header border-bottom">
        <div class="page-leftheader">
            <h4 class="page-title mb-0 text-primary">All Ward Coordinator</h4>
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
                <a href="{{route('admin.addward_coordinator')}}"  class="btn btn-primary btn-pill">
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
                    <div class="card-title">Ward Coordinator List</div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered text-nowrap" id="example1">
                            <thead>
                                <tr>
                                    <th class="wd-90p border-bottom-0"><strong>Local Government</strong></th>
                                    <th class="wd-90p border-bottom-0"><strong>Full Name</strong></th>
                                    <th class="wd-90p border-bottom-0"><strong>Mobile Number</strong></th>
                                    <th class="wd-90p border-bottom-0"><strong>Email Address</strong></th>
                                    <th class="wd-5p border-bottom-0"><strong>Action</strong></th>
                                </tr>
                            </thead>
                            <tbody>
                                @if(!empty($wardList->count()))
                                    @foreach($wardList as $ward)
                                        <tr>
                                            <td>{{ $ward->lga_name }}</td>
                                            <td>{{ $ward->fname }} {{ $ward->mname }} {{ $ward->lname }}</td>
                                            <td>{{ $ward->mobile }}</td>
                                            <td>{{ $ward->email }}</td>
                                            <td class="action_icon">
                                                <a href="{{ route('admin.editward_coordinator', $ward->id) }}" class="edit_"><i class="fa fa-edit"></i></a>
                                                <a href="javascript:void(0)" class="remove_ward" data-id="{{$ward->id}}"><i class="fa fa-trash"></i></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @else
                                    <tr>
                                        <td colspan="4" class="text-center">No Records.</td>
                                    </tr>
                                @endif
                            </tbody>
                        </table>
                        <div class="pagination" style="margin-left: 65%;">
                            {{ $wardList->links() }}
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
$(document).on('click', '.remove_ward', function(){
     var ele = $(this);
     var parent_row = ele.parents("tr");
     var id = ele.attr("data-id");

    $.ajax({
        url: "{{ route('admin.deleteward_coordinator') }}",
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