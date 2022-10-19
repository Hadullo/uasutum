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
                    <div class = "item1"><h1>Single Enquiry Post </h1></div>
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
                                            <div class = "post-title" ><span class = "news-headlines">Subject:</span><span class= "white">{{ $enquiry->subject}}</span></a></div>


                                            <div class="mu-latest-course-single">


                                            <figure class="mu-latest-course-img ochi_2">

                                                <div class = "small-content">
                                            <div class =  "news-post-blue"><b>Posted on:&nbsp;</b><span class ="time-style">{{$enquiry->created_at->format("d/m/y   H:i A")}}</span>&nbsp;<b>By:</b>{{ $enquiry->name }}</div>

                                        <hr>
                                        <span class = highlight-heading>Read Full Content</span>


                                                    {!! $enquiry->comment !!}

                                        </div>

                                            </figure>

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

@endsection

