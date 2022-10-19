
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
                        <h4 class="header-title-ochi"><b>User Details Page</b></h4>
                        <div class="single-table">
                            <div class="table-responsive">



                                 <!-- Progress Table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Details for:{{$user->name }}</h4>
                                <div class="single-table">
                                    <div class="table-responsive">
                                        <table class="table table-hover progress-table text-center">
                                            <thead class="text-uppercase">
                                                <tr>

                                                    <th scope="col">Name</th>
                                                    <th scope="col">Email</th>
                                                    <th scope="col">Phone Number</th>
                                                    <th scope="col">Role</th>
                                                    <th scope="col">Permisions</th>
                                                    <th scope="col">Photo</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>

                                                    <td>{{$user->name }}</td>
                                                    <td>{{$user->email }}</td>
                                                    <td>{{$user->mobile }}</td>
                                                    <td>{{$user->role }}</td>
                                                    <td>{{$user->permissions}}</td>
                                                    <td>
                                                        @auth
                                                        @if(Auth::user()->avatar)
                                                        <img src="/assets/admin/images/avatars/{{Auth::user()->avatar}}" class =  "img-round" alt="img">
                                                         @else
                                                        <img class= "img-round" src="{{ asset('assets/admin/images/profile/default.png') }}" alt="avatar">
                                                        @endif
                                                        @endauth

                                                    </td>

                                                </tr>



                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Progress Table end -->

                            </div>


                        </div>
                    </div>
                </div>
            </div>
            <!-- table success end -->




</div>
<!-- main content area end -->








        </div>
        <!-- main content area end -->

@endsection






