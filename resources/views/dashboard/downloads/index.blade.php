
   @extends("layouts.frontend")
   @section('content')

   <!-- Start All Title Box -->
   <div class="all-title-box">
       <div class="container">
           <div class="row">
               <div class="col-lg-12">
                   <h2>Downloads</h2>

               </div>
           </div>
       </div>
   </div>
   <!-- End All Title Box -->

    <!-- Start Products  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Chapter Downloads Page</h1>
                        <hr>

                    </div>
                </div>
            </div>


            <div class="row special-list">

                <div class="col-lg-3 col-md-6 special-grid best-seller  ochi-nav-ext">

                    <div class="products-single fix ">


                        @include('partials.admin.adminnavbar')


                    </div>
                </div>


                <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix ochi-border">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="new">Users</p>
                            </div>
                            <div class = "ochi-image"><img src="{{ asset('assets/images/icons/users.png') }}" class="img-fluid" alt="Image"></div>

                        </div>
                        <div class="why-text">
                            <h4>LO Officials</h4>
                            <h5>Visit the Page</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix ochi-border">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="new">News Desk</p>
                            </div>
                            <div class = "ochi-image"><img src="{{ asset('assets/images/icons/news.png') }}" class="img-fluid" alt="Image"></div>

                        </div>
                        <div class="why-text">
                            <h4>Chapter News</h4>
                            <h5>Visit the Page</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix ochi-border">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="new">Downloads</p>
                            </div>
                            <div class = "ochi-image"><img src="{{ asset('assets/images/icons/downloads.png') }}" class="img-fluid" alt="Image"></div>

                        </div>
                        <div class="why-text">
                            <h4>Documents for Downloads</h4>
                            <h5>Visit the Page</h5>
                        </div>
                    </div>
                </div>





                <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix ochi-border">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="new">Chapter Meetings</p>
                            </div>
                            <div class = "ochi-image"><img src="{{ asset('assets/images/icons/meeting.png') }}" class="img-fluid" alt="Image"></div>

                        </div>
                        <div class="why-text">
                            <h4>Meeting Minutes for Download</h4>
                            <h5>Visit the Page</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix ochi-border">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="new">Enquiries</p>
                            </div>
                            <div class = "ochi-image"><img src="{{ asset('assets/images/icons/enquiries.png') }}" class="img-fluid" alt="Image"></div>

                        </div>
                        <div class="why-text">
                            <h4>Enquiries from UASU members</h4>
                            <h5>Visit the Page</h5>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 special-grid top-featured">
                    <div class="products-single fix ochi-border">
                        <div class="box-img-hover">
                            <div class="type-lb">
                                <p class="new">Reports</p>
                            </div>
                            <div class = "ochi-image"><img src="{{ asset('assets/images/icons/reports.png') }}" class="img-fluid" alt="Image"></div>

                        </div>
                        <div class="why-text">
                            <h4>Reports for Download</h4>
                            <h5>Visit the Page</h5>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!-- End Products  -->

@endsection
