@extends("layouts.frontend")
@section('content')


 <!-- Page breadcrumb -->


 <section id="mu-page-breadcrumb">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <div class="wrapper">

            <div class="mu-page-breadcrumb-area">
            <h6>Success comes from curiosity,  perseverance and self criticism:
                Albert Einstein</h6>
            <ol class="breadcrumb">


           </ol>
          </div>
            </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End breadcrumb -->

  <section id="mu-course-content">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-course-content-area">
             <div class="row">
               <div class="col-md-9">
                 <!-- start course content container -->
                 <div class="mu-course-container mu-course-details">
                   <div class="row">


                     <div class="col-md-12">
                       <div class="mu-latest-course-single">
                         <figure class="mu-latest-course-img">

                         </figure>
                         <div class="mu-latest-course-single-content">



                            <div class="main-content-inner">
                                <!-- accroding start -->
                                <div class="row">



                                              <!-- Working With Icons start -->
                                              <div class="col-lg-4 col-md-6 mt-5">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="header-title"> <p class="description text-center"><b>Name</b>
                                                            {{ $user->name}}
                                                          </p>

                                                     <b> Specialization</b><p class="profile-specialisation">
                                                          {{ $user->specialization}}</p>

                                                          <b>UASU Post</b><p class="profile-specialisation">
                                                            {{ $user->uasu_post}}</p> </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Working With Icons end -->


                                              <!-- Working With Icons start -->
                                              <div class="col-lg-4 col-md-6 mt-5">
                                                <div class="card">
                                                    <div class="card-body">


                                                        @if(Auth::user()->avatar)
                                                        <a href=""><img src="/assets/admin/images/avatars/{{$user->avatar}}" class = "img-round" alt="img"></a>

                                                        @else
                                                        <img src="{{ asset('assets/admin/images/profile/default.png') }}" class = "img-round">
                                                        @endif
                                                        <div class="header-title"><div class="container mt-3">

                                                        </div>
                                                          </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Working With Icons end -->


                                              <!-- Working With Icons start -->
                                              <div class="col-lg-4 col-md-6 mt-5">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <div class="header-title"> <p class="description text-center"><b>Section:</b>
                                                            {{ $user->school}}
                                                          </p>

                                                      <p class="profile-specialisation"><b>Email:</b>
                                                          {{ $user->email}}</p>

                                                          <p class="description text-center"><b>Mobile:</b>
                                                            {{ $user->mobile}}
                                                          </p>



                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <!-- Working With Icons end -->



                                            <!-- accordion style 5 start -->
                                    <div class="col-lg-12 mt-5">
                                        <div class="card">
                                            <div class="card-body">


                                                <h4 class="header-title"><b>About</b></h4>
                                                <div id="accordion5" class="according accordion-s2 gradiant-bg">
                                                    <div class="card">

                                                        <div id="accordion51" class="collapse show" data-parent="#accordion5">
                                                            <div class="card-body">
                                                                {!! $user->about !!}</div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- accordion style 5 end -->


                                    <!-- accordion style 5 start -->
                                    <div class="col-lg-12 mt-5">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="header-title"><b>Publications</b></h4>
                                                <div id="accordion5" class="according accordion-s2 gradiant-bg">
                                                    <div class="card">

                                                        <div id="accordion51" class="collapse show" data-parent="#accordion5">
                                                            <div class="card-body">
                                                                {!! $user->publications !!}</div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- accordion style 5 end -->


                                    <!-- accordion style 2 start -->
                                    <div class="col-lg-12 mt-5">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="header-title"><b>Experience</b></h4>
                                                <div id="accordion2" class="according accordion-s2">
                                                    <div class="card">

                                                        <div id="accordion21" class="collapse show" data-parent="#accordion2">
                                                            <div class="card-body">
                                                                {!! $user->experience !!}</div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                                <!-- accroding end -->
                            </div>



                         </div>
                       </div>
<!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->

                     </div>


                   </div>
<!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->

                 </div>
                 <!-- end course content container -->

                 <!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->

               </div>


               <div class="col-md-3">
                 <!-- start sidebar -->
                 <aside class="mu-sidebar ochi-border">
                   <!-- start single sidebar -->
                   <div class="mu-single-sidebar">
                     <h3>Categories</h3>
                     <div class = "mpf">
                        <div class="flex-container">
                            <div><div class="avatar me-3 imgochi">
                                <img src="{{ asset('assets/admin/images/profile/ken.jpg') }}"  alt="kal" class="border-radius-lg shadow">
                            </div>
                              </div>
                            <div><div class = "memeber-details"><h6>Dr. Kennedy Ochillo Hadullo</h6>
                                <p class = "info">Information System Analyst</p>
                            <p class = "info"><a href  = "{{ route('userProfile') }}">Read  More</a><p></div></div>

                          </div>
                    </div>

                    <div class = "mpf">
                        <div class="flex-container">
                            <div><div class="avatar me-3 imgochi">
                                <img src="{{ asset('assets/admin/images/profile/ken.jpg') }}"  alt="kal" class="border-radius-lg shadow">
                            </div>
                              </div>
                            <div><div class = "memeber-details"><h6>Dr. Kennedy Ochillo Hadullo</h6>
                                <p class = "info">Information System Analyst</p>
                            <p class = "info"><a href  = "{{ route('userProfile') }}">Read  More</a><p></div></div>

                          </div>
                    </div>

                    <div class = "mpf">
                        <div class="flex-container">
                            <div><div class="avatar me-3 imgochi">
                                <img src="{{ asset('assets/admin/images/profile/ken.jpg') }}"  alt="kal" class="border-radius-lg shadow">
                            </div>
                              </div>
                            <div><div class = "memeber-details"><h6>Dr. Kennedy Ochillo Hadullo</h6>
                                <p class = "info">Information System Analyst</p>
                            <p class = "info"><a href  = "{{ route('userProfile') }}">Read  More</a><p></div></div>

                          </div>
                    </div>

                    <div class = "mpf">
                        <div class="flex-container">
                            <div><div class="avatar me-3 imgochi">
                                <img src="{{ asset('assets/admin/images/profile/ken.jpg') }}"  alt="kal" class="border-radius-lg shadow">
                            </div>
                              </div>
                            <div><div class = "memeber-details"><h6>Dr. Kennedy Ochillo Hadullo</h6>
                                <p class = "info">Information System Analyst</p>
                            <p class = "info"><a href  = "{{ route('userProfile') }}">Read  More</a><p></div></div>

                          </div>
                    </div>

                    <div class = "mpf">
                        <div class="flex-container">
                            <div><div class="avatar me-3 imgochi">
                                <img src="{{ asset('assets/admin/images/profile/ken.jpg') }}"  alt="kal" class="border-radius-lg shadow">
                            </div>
                              </div>
                            <div><div class = "memeber-details"><h6>Dr. Kennedy Ochillo Hadullo</h6>
                                <p class = "info">Information System Analyst</p>
                            <p class = "info"><a href  = "{{ route('userProfile') }}">Read  More</a><p></div></div>

                          </div>
                    </div>

                    <div class = "mpf">
                        <div class="flex-container">
                            <div><div class="avatar me-3 imgochi">
                                <img src="{{ asset('assets/admin/images/profile/ken.jpg') }}"  alt="kal" class="border-radius-lg shadow">
                            </div>
                              </div>
                            <div><div class = "memeber-details"><h6>Dr. Kennedy Ochillo Hadullo</h6>
                                <p class = "info">Information System Analyst</p>
                            <p class = "info"><a href  = "{{ route('userProfile') }}">Read  More</a><p></div></div>

                          </div>
                    </div>

                    <div class = "mpf">
                        <div class="flex-container">
                            <div><div class="avatar me-3 imgochi">
                                <img src="{{ asset('assets/admin/images/profile/ken.jpg') }}"  alt="kal" class="border-radius-lg shadow">
                            </div>
                              </div>
                            <div><div class = "memeber-details"><h6>Dr. Kennedy Ochillo Hadullo</h6>
                                <p class = "info">Information System Analyst</p>
                            <p class = "info"><a href  = "{{ route('userProfile') }}">Read  More</a><p></div></div>

                          </div>
                    </div>


                   </div>
                   <!-- end single sidebar -->



                 </aside>
                 <!-- / end sidebar -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




  @endsection


