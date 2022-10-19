
@extends("layouts.admin")

<link rel="stylesheet" href="{{ asset('assets/admin/css/login-logout.css') }}">
@section('content')




<!-- main content area start -->
<div class="main-content">






    <div class="main-content-inner">
        <div class="row">

            <!-- table success start -->
            <div class="col-lg-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        @include('includes.flash-message')
                        <div class="flex-container3">
                            <div><h4 class="header-title"><b>Permission Information</b></h4></div>
                            <div> <div class = "create-button"><a href = "{{ route('permissions.create') }}" class = "btn btn-primary "><i class="fa fa-plus-circle" style="font-size:16px;"></i> &nbsp;Create New Permission</a></div></div>

                          </div>


                        <div class="single-table">
                            <div class="table-responsive">
                                <table class="table text-center">
                                    <thead class="text-uppercase bg-success">
                                        <tr class="text-white">
                                            <th>ID</th>
                                            <th>Name</th>
                                             <th>Date Posted</th>
                                            <th>Action</th>


                                        </tr>
                                    </thead>
                                    <tbody>

                                        @forelse ($permissions as $permission)
                                        <tr>
                                            <td>{{ $permission->id }}</td>
                                            <td>{{ $permission->name }}</td>
                                            <td>{{ $permission->created_at }}</td>
                                            <td>
                                                <a href="{{ route('permissions.edit', $permission->id) }}" class="btn btn-sm btn-warning">Edit Permission</a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>No Result Found</tr>
                                    @endforelse
                                    </tbody>
                                </table>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <!-- table success end -->

            <div class=" big-pagination">

                </div>
</div>
<!-- main content area end -->








        </div>
        <!-- main content area end -->

@endsection
