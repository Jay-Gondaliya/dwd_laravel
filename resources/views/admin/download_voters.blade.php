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
    table, th, td {
        border: 1px solid black;
    }
    </style>
    <body>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <table style="width: 100%;">
                        <thead>
                            <tr>
                                <th>First Name</th>
                                <th>Middle Name</th>
                                <th>Last Name</th>
                                <th>Gender</th>
                                <th>Mobile Number</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!empty($voterList))
                                @foreach($voterList as $voter)
                                    <tr>
                                        <td>{{ $voter->fname }}</td>
                                        <td>{{ $voter->mname }}</td>
                                        <td>{{ $voter->lname }}</td>
                                        <td>{{ $voter->gender }}</td>
                                        <td>{{ $voter->mobile }}</td>
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
    </body>
</html>