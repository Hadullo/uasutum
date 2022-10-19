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
                    <div class = "item1"><h1>Chapter Report Page</h1></div>

                    @auth
                    @if (Auth::user() && Auth::user()->utype == 'ADM')

                    <div class = "item2"><a href="{{ route('report.create') }}" class="btn btn-primary" role="button" aria-pressed="true">Create a Report</a></div>

                    @endif
                    @endauth

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
                        @include('includes.flash-message')

                        <div class="product-categorie-box">
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane fade show active" id="grid-view">
                                    <div class="row">

                                        @foreach ($reports as $report)

                                        <div class="col-md-6 col-sm-6 ochi-spacer-2">

                                            <div class="mu-latest-course-single-content">
                                                <div class = "post-title" ><span class = "news-headlines">Report Title:</span><span class= "white">{{ $report->title}}</span></a></div>

                                             </div>

                                            <div class="mu-latest-course-single">

                                            <figure class="mu-latest-course-img ochi_2">



                                             <div class = "small-content">

                                              <div class =  "news-post-blue"><b>Posted:&nbsp;</b>{{$report->created_at->diffForHumans()}}&nbsp;<b>By:</b>{{ $report->user->name }}</div>
                                             <hr>

                                                <b>Report Highlights</b>
                                                {!! $report->body !!}</div>

                                            </figure>

                                          </div>
                                            <div class="col-md-12 col-sm-12">
                                            <div class = "row">


                                            @auth
                                            @if (Auth::user() && Auth::user()->utype == 'ADM')

                                            <div class="col-md-3 col-sm-3 ochi-spacer"><a href="{{ route('report.edit', $report) }}" class="btn btn-success adminbtn" role="button" aria-pressed="true">Edit Details</a> </div>
                                            <div class="col-md-4 col-sm-4 ochi-spacer">
                                                    <form action = "{{ route('report.delete', $report)}}" method = "post">
                                                                @csrf
                                                                 @method('delete')

                                                                <button class="deletebutton delbtn" input type = "submit" value = "delete">Delete Post</button>
                                                </div>
                                                    </form>

                                            @endif
                                            @endauth

                                            <div class="col-md-5 col-sm-5 ochi-spacer"> <a href="{{ asset($report->reportFilePath) }}"><button class="downloadbtn delbtn"><i class="fa fa-download"></i> Download Report</button></a></div>



                                           </div>
                                           </div>


                                        </div>

                                        @endforeach

                                    </div>


                                </div>


                            </div>
                        </div>



                    </div>

                    <div class = "pagination"> {{ $reports->links() }}</div>
                </div>

            </div>

        </div>
        <center><div class = "share-this-page">Share this Page</div><div class="ss-box" data-ss-link="https://github.com/assisfery/SocialShareJS"></div></center>

    </div>
    <!-- End Shop Page -->
    <center><div class = "share-this-page">Share this Page</div><div class="ss-box" data-ss-link="https://github.com/assisfery/SocialShareJS"></div></center>
@endsection

