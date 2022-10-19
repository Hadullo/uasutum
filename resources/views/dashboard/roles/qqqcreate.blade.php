
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
                        <div class="flex-container3">
                            <div><h4 class="header-title"><b>Create  Roles </b></h4></div>
                            <div> <div class = "create-button"><a href = "" class = "btn btn-primary "><i class="fa fa-plus-circle" style="font-size:16px;"></i> &nbsp;Create New Role</a></div></div>

                          </div>
                          <div id="app">
                            <role></role>
                          </div>

                </div>
            </div>
            <!-- table success end -->


</div>
<!-- main content area end -->

<script src = "{{ asset('js/app.js') }}"></script>






        </div>
        <!-- main content area end -->

@endsection
