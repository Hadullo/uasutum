@extends("layouts.frontend")
@section('content')


<!-- Start All Title Box -->
<div class="all-title-box">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
            <div class = "heading-edited">Don't watch the clock; do what it does. Keep going.
               </div>

            </div>
        </div>
    </div>
</div>
<!-- End All Title Box -->



     <!-- Start Shop Page  -->
     <div class="shop-box-inner">
        <div class="container">
            <div class="title-all text-center">

                <div class = "ochi-headings">
                    <div class = "item1"><h1>Single Meeting Post </h1></div>
                </div>


            </div>
             <hr>


            <div class="row">



                <div class="col-xl-3 col-lg-3 col-sm-12 col-xs-12 sidebar-shop-left">
                    <div class="product-categori">

                        @include('partials.admin.adminnavbar')

                    </div>
                </div>




                <div class="col-xl-9 col-lg-9 col-sm-12 col-xs-12 shop-content-right">
                    <div class="right-product-box">


                        <div class="product-categorie-box">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                    <div class="row">


                                        <div class="col-md-12 col-sm-12">
                                            <div class = "post-title" ><span class = "news-headlines">Meeting Agenda:</span><span class= "white">{{ $meeting->title}}</span></a></div>






                                            <div class="mu-latest-course-single">


                                            <figure class="mu-latest-course-img ochi_2">


                                                <a href="#"><img src="{{ asset($meeting->meetingPhotoPath) }}" alt="img"></a>
                                                <div class = "image-caption">{{ $meeting->meetingPhotoCaption}}</div>
                                              <div class = "small-content">
                                              <b>Date of Meeting:&nbsp;</b>{{ $meeting->meeting_date}}<br>
                                              <b>Posted:&nbsp;</b>{{$meeting->created_at->diffForHumans()}}&nbsp;<b>By:</b>{{ $meeting->user->name }}<br>
                                              <b>Updated:&nbsp;</b>{{$meeting->updated_at->diffForHumans()}}&nbsp;<b>By:</b>{{ $meeting->user->name }}<br></div>


                                            </figure>
                                            <div class="mu-blog-description">

                                                <span class = highlight-heading>Meeting Agenda</span>

                                                <div class = "highlights">

                                                 {!! $meeting->body !!}</div>

                                                @auth
                                                @if (auth()->user()->id === $meeting->user->id)

                                                @endif
                                                @endauth

                                               </div>
                                          </div>
                                        </div>


                                    </div>
                                </div>


                            </div>
                        </div>



                    </div>
                </div>




            </div>
        </div>
    </div>
    <!-- End Shop Page -->

    <center><div class = "share-this-page">Share this Page</div><div class="ss-box" data-ss-link="https://github.com/assisfery/SocialShareJS"></div></center>

@endsection

