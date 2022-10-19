@extends("layouts.frontend")
@section('content')


  <!-- Start Slider -->
  <section id="mu-slider">
    <!-- Start single slider item -->
    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="assets/frontend/img/slider/1.jpg"  width = "1920" height = "auto" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">


        <h5>The official opening of the TUM UASU Chapter ofice on in Msa County</h5>
        <p>a group photo between the NSG Dr. Wasong PhD and the NT, Dr. Kumba and the TUM family  infront of the office premise
            .</p>

      </div>
    </div>
    <!-- Start single slider item -->

    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="assets/frontend/img/slider/2.jpg" width = "1920" height = "auto" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">


        <h5 >Cake cutting Ceremony during the official opening of the office</h5>
        <p>NSG Dr. Wasonga and the TUM freternity  during the opening ceremony of the occasion.</p>

      </div>
    </div>
    <!-- Start single slider item -->

    <div class="mu-slider-single">
      <div class="mu-slider-img">
        <figure>
          <img src="assets/frontend/img/slider/3.jpg" width = "1920" height = "auto" alt="img">
        </figure>
      </div>
      <div class="mu-slider-content">


        <h5 >TUM's UASU, KUSU & KUDHIEHA demonstrate for the implemenation of the 2017-2021 CBA</h5>
        <p>The demonstrations delivered the diagonal implemenation of the CBA in Sept 2021.</p>

      </div>
    </div>
    <!-- Start single slider item -->
  </section>
  <!-- End Slider -->





  <section id="mu-course-content">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-course-content-area">


            <div class="row">


               <div class="col-md-9">
                 <!-- start course content container -->
                 <div class="mu-course-container">


                   <div class="row">

                    @foreach ($news as $newsitem)
                     <div class="col-md-6 col-sm-6">
                     <div class="mu-latest-course-single">
                       <figure class="mu-latest-course-img">
                        <div class="img-hover-zoom">
                        <a href="{{ route('news.show', $newsitem)}}"><img src="{{ asset($newsitem->newsPhotoPath) }}" class = "image-rect" alt="img"></a>
                        </div>
                        <div class = "caption">{{ $newsitem->newsPhotoCaption}}</div>



                       </figure>
                       <div class="mu-latest-course-single-content">
                        <div class = "post-title" ><span class = "news-headlines">News Headlines:</span><a href="{{ route('news.show', $newsitem) }}"><span class= "white">{{ $newsitem->title}}</span></a></div>

                        <div class = "fe-intro-content">
                        <div class =  "fe-posted-by"><b>Posted:&nbsp;</b>{{$newsitem->created_at->format("d/m/y  H:i a")}}&nbsp;<b>By:</b>{{ $newsitem->user->name }}</div>

                        <div class = "fe-news-brief">
                            {{ substr(strip_tags($newsitem->body), 0, 160) }}
                            {{ strlen(strip_tags($newsitem->body)) > 70 ? "........" : "" }}<br><a href = "{{ route('fnews.show', $newsitem) }}"><span class = "read-more-link">Read More >></span></a></div>
                        </div>



                       </div>
                     </div>
                   </div>
                    @endforeach


                   </div>

                   <div class=" big-pagination">
                    {{$news->links() }}
                    </div>



                 </div>
                 <!-- end course content container -->





               </div>







              <div class="col-md-3">
                <!-- start sidebar -->
                <aside class="mu-sidebar">

                    <div class="mu-single-sidebar">
                        <button type="button" class="btn btn-success btn-lg btn-block"><b>Quick Links</b></button>
                        <ul class="mu-sidebar-catg">
                            <li><a href="{{ route('mandate') }}">Our Mandate</a></li>
                          <li><a href="/uasu">Registered Members</a></li>
                          <li><a href="{{ route('officials') }}">TUM UASU Officials</a></li>


                        </ul>
                      </div>
                  <!-- start single sidebar -->
                  <div class="mu-single-sidebar">
                    <div class = uasu-sidebar>
                    <div class = "fe-title">Chapter Secretary</div>

                    <img src="{{ asset('assets/frontend/img/officials/odalo.jpg') }}" class = "img-round" width = "150" height ="150"><br>

                    <span class ="fe-name">Prof.Josiah Ochieng Odalo</span>
                    </div>
                  </div>

                  <div class="mu-single-sidebar">
                    <div class = uasu-sidebar>
                    <div class = "fe-title">Chapter Chairman</div>

                    <img src="{{ asset('assets/frontend/img/officials/oloo.jpg') }}" class = "img-round" width = "150" height ="150"><br>

                    <span class ="fe-name">Dr. Darius Otieno Oloo</span>
                    </div>
                  </div>

                  <div class="mu-single-sidebar">
                    <div class = uasu-sidebar>
                    <div class = "fe-title">Chapter Treasurer</div>

                    <img src="{{ asset('assets/frontend/img/officials/hassan.jpg') }}" class = "img-round" width = "150" height ="150"><br>

                    <span class ="fe-name">Mr. Hassan Shee</span>
                    </div>
                  </div>



                   <!-- start single sidebar -->

                  <!-- end single sidebar -->
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
