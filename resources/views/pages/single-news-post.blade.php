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
                            <a href="{{ route('fnews.show', $newsitem)}}"><img src="{{ asset($newsitem->newsPhotoPath) }}" class = "image-rect" alt="img"></a>
                            <div class = "caption">{{ $newsitem->newsPhotoCaption}}</div>
                         </figure>
                         <div class="mu-latest-course-single-content">
                        <div class = "post-title" ><span class = "news-headlines">News Headlines:</span><a href="{{ route('news.show', $newsitem) }}"><span class= "white">{{ $newsitem->title}}</span></a></div>

                        <div class =  "fe-posted-by"><b>Posted:&nbsp;</b>{{$newsitem->created_at->diffForHumans()}}&nbsp;<b>By:</b>{{ $newsitem->user->name }}</div>

                        <div class = "news-content">
                        <span class ="newshead">The Full Story</span><br>
                        <div class = news-body> {!! $newsitem->body !!}</div>

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


