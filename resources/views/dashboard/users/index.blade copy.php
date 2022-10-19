@extends("layouts.frontend")
   @section('content')

 <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-page-breadcrumb-area">
            <h2>Chapter Meetings</h2>

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
                 <div class="col-md-3">
                 <!-- start sidebar -->
                 <aside class="mu-sidebar">
                    @include('partials.admin.adminnavbar')
                  <a href="{{ route('meeting.create') }}" class="btn btn-success" role="button" aria-pressed="true">Create a Meeting</a>
                   <!-- end single sidebar -->


                 </aside>
                 <!-- / end sidebar -->
              </div>




<div class="col-md-9">
                 <!-- start course content container -->


         <!-- start course content container -->
        <div class="mu-course-container">


        <div class="row">

            @foreach ($meetings as $meeting )
            <div class="col-md-6 col-sm-6">


                <div class="mu-latest-course-single-content">
                   <div class = "mbgreen" ><h4><a href="{{ route('post.show', $meeting) }}">{{ $meeting->title}}</a></h4></div>
                 </div>



                <div class="mu-latest-course-single">


                <figure class="mu-latest-course-img">
                  <a href="#"><img src="{{ asset($meeting->imagePath) }}" alt="img"></a>


                  <figcaption class="mu-latest-course-imgcaption">{{ $meeting->image_caption}}
                  </figcaption>
                </figure>

                <div class="mu-latest-course-single-content">

                  <b>Date of Meeting:</b>{{ $meeting->meeting_date}} </p>
                  <b>Posted:</b>{{$meeting->created_at->diffForHumans()}}&nbsp;<b>By:</b>{{ $meeting->user->name }}<br>

                <a href="{{ route('post.show',$meeting) }}"
                   class="btn btn-success" role="button" aria-pressed="true">Read More</a>

                </div>
              </div>
            </div>



            @endforeach



            </div>


          </div>
          <!-- end course content container -->


          <!-- start course pagination -->
          <div class="mu-pagination">
            <nav>
              <ul class="pagination">
                <li>
                  <a href="#" aria-label="Previous">
                    <span class="fa fa-angle-left"></span> Prev
                  </a>
                </li>
                <li class="active"><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li>
                  <a href="#" aria-label="Next">
                   Next <span class="fa fa-angle-right"></span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
          <!-- end course pagination -->
        </div>








               </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  @endsection
