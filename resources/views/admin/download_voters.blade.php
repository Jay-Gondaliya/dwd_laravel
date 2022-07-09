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
                <table class="table">
                    <thead>
                        <tr>
                            <th class="wd-15p border-bottom-0">Personal Information</th>
                            <th class="wd-15p border-bottom-0">Location</th>
                            <th class="wd-20p border-bottom-0">Social Media</th>
                            <th class="wd-15p border-bottom-0">Voter's Mobilization</th>
                            <th class="wd-25p border-bottom-0">Voter's Engagement</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if(!empty($voterList))
                            @foreach($voterList as $voter)
                                <tr>
                                    <td>{{ $voter->fname }} {{ $voter->mname }} {{ $voter->lname }}</td>
                                    <td>{{ $voter->gender }}</td>
                                    <td>{{ $voter->dob }}</td>
                                    <td>{{ $voter->mobile }}</td>
                                    <td>{{ $voter->email }}</td>
                                    <td>{{ $voter->state_name }}</td>
                                    <td>{{ $voter->lga_name }}</td>
                                    <td>{{ $voter->wardname }}</td>
                                    <td>{{ $voter->cell_name }}</td>
                                    <td>{{ $voter->address }}</td>
                                    <td>{{ $voter->fb }}</td>
                                    <td>{{ $voter->insta }}</td>
                                    <td>{{ $voter->twitter }}</td>
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