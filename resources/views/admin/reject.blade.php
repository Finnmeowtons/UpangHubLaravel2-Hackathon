@include('admin.shared.header')
@include('admin.shared.nav')

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Rejected Requests
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>User ID</th>
                        <th>Username</th>
                        <th>Good Moral</th>
                        <th>Form 137</th>
                        <th>Copy of Grades</th>
                        <th>Message</th>
                        <th>Amount</th>
                        <th>Done</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($rejects as $pending)
                        <tr>
                            <td>{{ $pending->user->id }}</td>
                            <td>{{ $pending->user->name }}</td>
                            <td>{{ $pending->goodmoral }}</td>
                            <td>{{ $pending->form }}</td>
                            <td>{{ $pending->grade }}</td>
                            <td>{{ $pending->message }}</td>
                            <td>{{ $pending->ammount }}</td>
                            {{-- <td>

                                <input type="submit" class="btn btn-danger ban-user" value="Ban this User"
                                    data-user-id="{{ $report->pet->user->id }}">

                            </td> --}}
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


@include('admin.shared.footer')
