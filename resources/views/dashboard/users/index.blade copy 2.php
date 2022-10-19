
@extends("layouts.admin")

<link rel="stylesheet" href="{{ asset('assets/admin/css/login-logout.css') }}">
@section('content')




<!-- main content area start -->






    <div class="main-content-inner">
        <div class="row">

            <!-- table success start -->
            <div class="col-lg-12 mt-5">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">Thead success</h4>
                        <div class="single-table">
                            <div class="table-responsive">
                                <table class="table text-center">
                                    <thead class="text-uppercase bg-success">
                                        <tr class="text-white">
                                            <th scope="col">ID</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">date</th>
                                            <th scope="col">price</th>
                                            <th scope="col">action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>09 / 07 / 2018</td>
                                            <td>$120</td>
                                            <td><i class="ti-trash"></i></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>jone</td>
                                            <td>09 / 07 / 2018</td>
                                            <td>$150</td>
                                            <td><i class="ti-trash"></i></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>Mark</td>
                                            <td>09 / 07 / 2018</td>
                                            <td>$120</td>
                                            <td><i class="ti-trash"></i></td>
                                        </tr>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>jone</td>
                                            <td>09 / 07 / 2018</td>
                                            <td>$150</td>
                                            <td><i class="ti-trash"></i></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- table success end -->

        </div>
    </div>










        </div>
        <!-- main content area end -->

@endsection
