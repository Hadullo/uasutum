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
               <div class="col-md-12">
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


                                                        @if($user->avatar)
                                                        <a href=""><img src="/assets/admin/images/avatars/{{$user->avatar}}"  class = "profile-pict" alt="Profile Picture"></a><p><b>Profile Photo</b></p>

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
                                            <div class="flex1-container">
                                                <div><p class="profile-specialisation"><b>Name:</b>
                                                    {{ $user->name}}</p></div>
                                                <div><p class="profile-specialisation"><b>Email:</b>
                                                    {{ $user->email}}</p></div>
                                                <div><p class="profile-specialisation"><b>Mobile:</b>
                                                    {{ $user->mobile}}</p></div>

                                              </div>

                                            <!-- accordion style 5 start -->



                                            <!-- Working With Icons end -->
                                            <div class="flex1-container">
                                                <div><p class="profile-specialisation"><b>School:</b>
                                                    {{ $user->school}}</p></div>
                                                <div><p class="profile-specialisation"><b>Career:</b>
                                                    {{ $user->specialization}}</p></div>


                                              </div>

                                            <!-- accordion style 5 start -->


                                    <div class="col-lg-12 mt-5">


                                    <!-- accordion style 5 end -->


                                    <!-- accordion style 5 start -->
                                    <div class="col-lg-12 mt-5">
                                        <div class="card">
                                            <div class="card-body">
                                                <h4 class="header-title"><b>About </b></h4>
                                                <div id="accordion5" class="according accordion-s2 gradiant-bg">
                                                    <div class="card">

                                                        <div id="accordion51" class="collapse show" data-parent="#accordion5">
                                                            <div class="card-body profile-content">
                                                                {!! $user->about !!}</div>
                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-lg-12 mt-5">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="header-title"><b>Publications</b></h4>
                                                    <div id="accordion5" class="according accordion-s2 gradiant-bg">
                                                        <div class="card">

                                                            <div id="accordion51" class="collapse show" data-parent="#accordion5">
                                                                <div class="card-body profile-content">
                                                                    {!! $user->publications !!}</div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                            </div>


                                        <div class="col-lg-12 mt-5">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="header-title"><b>Work Experience </b></h4>
                                                    <div id="accordion5" class="according accordion-s2 gradiant-bg">
                                                        <div class="card">

                                                            <div id="accordion51" class="collapse show" data-parent="#accordion5">
                                                                <div class="card-body profile-content">
                                                                    {!! $user->experience !!}</div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                        </div>



                                        <div class="col-lg-12 mt-5">
                                            <div class="card">
                                                <div class="card-body">
                                                    <h4 class="header-title"><b>Consultancy</b></h4>
                                                    <div id="accordion5" class="according accordion-s2 gradiant-bg">
                                                        <div class="card">

                                                            <div id="accordion51" class="collapse show" data-parent="#accordion5">
                                                                <div class="card-body profile-content">
                                                                    {!! $user->consultancy !!}</div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>
                                        </div>

                                            <div class="col-lg-12 mt-5">
                                                <div class="card">
                                                    <div class="card-body">
                                                        <h4 class="header-title"><b>Education</b></h4>
                                                        <div id="accordion5" class="according accordion-s2 gradiant-bg">
                                                            <div class="card-body profile-content">

                                                                <div id="accordion51" class="collapse show" data-parent="#accordion5">
                                                                    <div class="card-body">
                                                                        {!! $user->education!!}</div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>

                                    <!-- accordion style 5 end -->






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







            </div>
          </div>
        </div>
      </div>
    </div>
  </section>




  @endsection


