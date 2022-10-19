
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
                            <div><h4 class="header-title"><b>Permission Creation Page</b></h4></div>

                          </div>


                          <form method="POST" action="{{ route('permissions.store') }}">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Permission Name</label>
                                    <input type="text" name="name"  id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" required placeholder="Permission Name">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-unlock" aria-hidden="true" style="font-size:16px;"></i> &nbsp; Create Permission</button>
                            </div>
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
