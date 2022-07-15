<div class="table-responsive">
    <table class="table table-bordered text-nowrap" id="example1">
        <thead>
            <tr>
                <th class="wd-90p border-bottom-0"><strong>Full Name</strong></th>
                <th class="wd-90p border-bottom-0"><strong>Mobile Number</strong></th>
                <th class="wd-90p border-bottom-0"><strong>Email Address</strong></th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($anotherCoordinatorList->count()))
                @foreach($anotherCoordinatorList as $another)
                    <tr>
                        <td>{{ $another->fname }} {{ $another->mname }} {{ $another->lname }}</td>
                        <td>{{ $another->mobile }}</td>
                        <td>{{ $another->email }}</td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="3" class="text-center">No Records.</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>