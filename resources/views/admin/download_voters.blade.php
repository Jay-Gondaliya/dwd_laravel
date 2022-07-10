<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Download Voter List</title>
</head>
<style>
  .card {
    border: 0px !important;
  }
  h1 {
    font-size: 4rem;
  }
  h3 {
    font-size: 2.75rem;
  }
  table, th, td {
  border: 1px solid black;
}
</style>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <table class="table " style="width: 100%;">
                    <thead>
                        <tr>
                            <th class="wd-15p border-bottom-0">Personal Information</th>
                            <th class="wd-15p border-bottom-0">Location</th>
                            <th class="wd-20p border-bottom-0">Social Media</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @if(!empty($voterList))
                            @foreach($voterList as $voter)
                                <tr>
                                    <td><p>{{ $voter->fname }} {{ $voter->mname }} {{ $voter->lname }}</p>
                                        <p>Gender:{{ $voter->gender }}  Date of birth:{{ $voter->dob }}</p>
                                        <p>Mobile:{{ $voter->mobile }} </p>
                                        <p>Mobile:{{ $voter->email }} </p>
                                    </td>
                                    <td>
                                        <p>State: {{ $voter->state_name }}</p>
                                        <p>LGA: {{ $voter->lga_name }}</p>
                                        <p>Ward: {{ $voter->wardname }}</p>
                                        <p>Cell: {{ $voter->cell_name }}</p>
                                        <p>{{ $voter->address }}</p>
                                    </td>
                                    <td><p>{{ $voter->fb }}</p>
                                    <p>{{ $voter->insta }}</p>
                                    <p>{{ $voter->twitter }}</p></td>
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
</body>
</html>