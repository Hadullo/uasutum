
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
                            <div><h4 class="header-title"><b>Roles Information</b></h4></div>
                            <div> <div class = "create-button"><a href = "{{ route('roles.create') }}" class = "btn btn-primary "><i class="fa fa-plus-circle" style="font-size:16px;"></i> &nbsp;Create New Role</a></div></div>

                          </div>


                        <div class="single-table">
                            <div class="table-responsive">
                                <table class="table text-center">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Role</th>
                                            <th>Permission</th>
                                            <th>Date Posted</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($roles as $role )
                                            <tr>
                                                <td>{{ $role->id }}</td>
                                                <td>{{ $role->name }}</td>
                                                <td>
                                                    @foreach ($role->permissions as $permission )
                                                        <button class="btn btn-warning" role="button"><i class="fas fa-shield-alt"></i> {{ $permission->name }}</button>
                                                    @endforeach
                                                </td>
                                                <td><span class="tag tag-success">{{ $role->created_at }}</span></td>
                                                {{--  <td>
                                                    <a href="{{ route('role.show', $role->id ) }}" class="btn btn-info">Change Permission</a>
                                                    <a href="{{ route('role.destroy',$role->id ) }}" class="btn btn-danger">Delete</a>
                                                </td>  --}}
                                            </tr>
                                        @empty
                                            <tr>
                                                <td><i class="fas fa-folder-open"></i> No Record found</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <!-- table success end -->


    <div class="d-flex justify-content-center">

    </div>

</div>
<!-- main content area end -->








        </div>
        <!-- main content area end -->

@endsection
