
@extends("layouts.admin")

<link rel="stylesheet" href="{{ asset('assets/admin/css/login-logout.css') }}">
@section('content')


<!-- main content area start -->
<div class="main-content">






    <div class="main-content-inner">
        <div class="row">

            <!-- table success start -->
            <div class="col-lg-12 mt-5">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Add new Role</h3>
                        <div class="card-tools">
                            <a href="" class="btn btn-danger"><i class="fas fa-shield-alt"></i> See all Roles</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div id  = "app">
                            <Role/>
                        </div>
                    </div>
                    <script src = "{{ asset('js/app.js') }}"></script>
                </div>
            <!-- table success end -->




</div>
<!-- main content area end -->








        </div>
        <!-- main content area end -->

@endsection
