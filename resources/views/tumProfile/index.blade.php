@extends("layouts.frontend")
@section('content')


 <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">

    <div class="container">
      <div class="row">






        </div>
      </div>
    </div>

  </section>


  <!-- End breadcrumb -->


  <!-- Start gallery  -->
 <section id="mu-gallery">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-gallery-area">
           <!-- start title -->
           <div class="mu-title">
             <h2>Registered Members</h2>
           </div>
           <!-- end title -->

          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End gallery  -->



 <section id="mu-course-content">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-course-content-area">



             <div class="row">
               <div class="col-md-12">
                 <!-- start course content container -->
                 <div class="mu-course-container">
                   <div class="row">

                    @foreach($users as $user)

                    <div class="col-md-2 col-sm-2">
                        <div class="mu-latest-course-single">
                          <figure class="mu-latest-course-img">


                            @if($user->avatar)
                            <a href="/uasu/{{ $user->slug }}"><img src="/assets/admin/images/avatars/{{$user->avatar}}" class = "img-round-small"  alt="img"></a>

                            @else
                            <img src="{{ asset('assets/admin/images/profile/default.png') }}" class = "img-round-small">
                            @endif

                            <figcaption class="mu-latest-course-imgcaption">
                                <div class = "member-summary">

                                    <div class="flex-container">
                                        <div> <p> <a href = "/uasu/{{ $user->slug }}" ><p class="description text-center">
                                          <b>Name:</b>  {{ $user->name}}</a></p></div><br>
                                          <b>Mobile:</b>  {{ $user->mobile}}<br>
                                          <b>School:</b>  {{ $user->school}}<br>
                                          <b>Career:</b>  {{ $user->specialization}}


                                      </div>


                                </div>

                            </figcaption>

                          </figure>

                        </div>



                      </div>


                   @endforeach








                   </div>

                  <div class=" big-pagination">
                            {{$users->links() }}
                            </div>

                 </div>
                 <!-- end course content container -->

               </div>

            </div>

          </div>
        </div>
      </div>
    </div>
  </section>

  @endsection
