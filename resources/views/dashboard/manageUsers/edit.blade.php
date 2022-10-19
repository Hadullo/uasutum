
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
                        <h4 class="header-title"><b>Edit  User:{{ $user->name }}</b></h4>

                        <form  method = "POST" action = "{{ route('updateUsers',  $user->id) }}"   enctype="multipart/form-data" >

                        @csrf
                        {{ method_field('PUT') }}


                        @foreach ($roles as $role)

                        <div class =  "form-check">
                            <input type = "checkbox"  name = "roles[]" value  =  "{{ $role->id }}">
                            <label>{{ $role->name }}</label>
                        </div>
                        @endforeach

                        <button type="submit" class="btn btn-primary"><b>Update</b> </button>
                        </form>

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
