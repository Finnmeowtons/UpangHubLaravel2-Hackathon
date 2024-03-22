@include('admin.shared.header')
@include('admin.shared.nav')
<main>
    <div class="container-fluid px-4">
        <h1 class="mt-4" style="color: #fffffe;">Dashboard</h1>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">UpangHub</li>
        </ol>
        <div class="row">
            <div class="col-xl-3 col-md-6">
                <div class="card bg-primary text-white mb-4">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Successful Request</h5>
                        <div class="card-body d-2" style="font-size: 2rem;">{{ $doneCount }}</div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="">View Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>

                </div>

            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-success text-white mb-4">
                    <div class="card-body">
                        <h5 class="card-title mb-0">On Going</h5>
                        <div class="card-body d-2" style="font-size: 2rem;">{{ $acceptedCount }}</div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="{{ route('admin.accept.view') }}">View
                            Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-6">
                <div class="card bg-danger text-white mb-4">
                    <div class="card-body">
                        <h5 class="card-title mb-0">Rejected Request</h5>
                        <div class="card-body d-2" style="font-size: 2rem;">{{ $rejectCount }}</div>
                    </div>
                    <div class="card-footer d-flex align-items-center justify-content-between">
                        <a class="small text-white stretched-link" href="">View
                            Details</a>
                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Pending Request
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
                                <th>Accept</th>
                                <th>Reject</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pendings as $pending)
                                <tr>
                                    <td>{{ $pending->user->id }}</td>
                                    <td>{{ $pending->user->name }}</td>
                                    <td>{{ $pending->goodmoral }}</td>
                                    <td>{{ $pending->form }}</td>
                                    <td>{{ $pending->grade }}</td>
                                    <td>{{ $pending->message }}</td>
                                    <td>{{ $pending->ammount }}</td>

                                    <td>
                                        <form action="{{ route('admin.accept', ['id' => $pending->id]) }}"
                                            method="POST">
                                            @csrf
                                            @method('put')
                                            <input type="submit" class="btn btn-white" value="Accept">
                                        </form>
                                    </td>
                                    <td>
                                        <form action="{{ route('admin.reject', ['id' => $pending->id]) }}"
                                            method="POST">
                                            @csrf
                                            @method('put')
                                            <input type="submit" class="btn btn-white" value="Reject">
                                        </form>
                                    </td>
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




    </div>
</main>
@include('admin.shared.footer')
{{-- <script>
    $(document).ready(function() {
        $(document).on('click', '.delete-social', function(e) {
            e.preventDefault();
            var postId = $(this).data('post-id');

            console.log(postId);
            var confirmation = confirm("Are you sure you want to delete this?");
            if (confirmation) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "DELETE",
                    url: "/admin/pet-social/" + postId + "/delete",
                    success: function(response) {
                        console.log(response);
                        window.location.href = "/admin";
                    },
                    error: function(xhr, status, error) {
                        console.error('Error deleting post:', error);
                        // Handle the error here, such as displaying an alert or logging the error
                    }
                });
            }


        });
    });
</script>
<script>
    $(document).ready(function() {

        $(document).on('click', '.ban-user-social, .ban-user', function() {

            var userId = $(this).data('user-id');
            console.log(userId);

            var confirmation = confirm("Are you sure you want to ban this user?");
            if (confirmation) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "PUT",
                    url: "/admin/user/" + userId,
                    success: function(response) {
                        console.log(response);
                        window.location.href = "/admin";
                    }
                });
            }
        });

    });
</script> --}}
