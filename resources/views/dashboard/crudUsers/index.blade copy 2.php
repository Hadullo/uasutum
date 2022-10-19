
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
                        <h4 class="header-title"><b>Registered Users</b></h4>
                        <div class="single-table">
                            <div class="table-responsive">
                                <table class="table text-center">
                                    <thead class="text-uppercase bg-success">
                                        <tr class="user-headings">
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Roles</th>
                                            <th>User Type</th>
                                            <th>Action</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach($users as $user)
                                        <tr>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email}}</td>
                                        <td>{{ implode( ',', $user->roles()->pluck('name')->toArray())}}</td>
                                        <td>{{ $user->utype}}</td>
                                        <td>
                                            <a href = "{{ route('usercrud.show', $user->slug) }}"><i class = "fa fa-eye"></i></a>&nbsp;
                                            <a href = "users/{{$user['id'] }}"><i class = "fa fa-edit"></i></a>&nbsp;
                                            <a href = "users/{{$user['id'] }}" class="text-danger"><i class="ti-trash"></i></a>

                                        </td>

                                        </tr>
                                         @endforeach

                                    </tbody>
                                </table>

                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <!-- table success end -->


    <div class="d-flex justify-content-center">
        {!! $users->links() !!}
    </div>

</div>
<!-- main content area end -->








        </div>
        <!-- main content area end -->

@endsection
