@extends('admin.layouts.main')

@section('title') {{ $title }} @stop
@section('heading') {{ $title }} @stop

@section('content')
    <div class="page-header border-bottom">
        <div class="page-leftheader">
            <h4 class="page-title mb-0 text-primary">Create Voter</h4>
        </div>
    </div>
    <div class="row">
        <form class="mt-5" id="fileDataForm">
            @csrf
            <div class="row">
                <div class="col-md-6 input-group mb-4">
                    <div class="input-group-text">
                        <i class="fe fe-user"></i>
                    </div>
                    <input type="file" class="form-control" name="file_data" id="file_data"/>
                </div>
                <div class="col-md-3 input-group mb-4">
                    <button type="button" class="btn btn-primary btn-sm" id="addFileData">Voter File Upload</button>
                </div>    
            </div>
        </form>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script type="text/javascript">
     $(document).on('click', '#addFileData', function(e) {
          e.preventDefault();
          var formData = new FormData($('#fileDataForm')[0]);

          $.ajax({
                url: "{{ route('fileUpload') }}",
               method: 'POST',
               data: formData,
               dataType: "json",
               contentType: false,
               processData: false,
               success: function(response) {
                    if (response.code == 200) {
                        location.reload();
                    } else {
                    }
              },
          });
     });
</script>
@endsection