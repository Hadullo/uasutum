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
                    <div class = "item1"><h1>Chapter Enquiries Page</h1></div>

                    @auth
                    @if (Auth::user() && Auth::user()->utype == 'ADM')

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

                                        @foreach ($enquiries as $enquiry)

                                        <div class="col-md-6 col-sm-6 ochi-spacer-2">

                                            <div class="mu-latest-course-single-content">
                                                <div class = "post-title" ><span class = "news-headlines">Subject:</span><a href=""><span class= "white">{{ $enquiry->subject}}</span></a></div>

                                             </div>

                                            <div class="mu-latest-course-single">

                                            <figure class="mu-latest-course-img ochi_2">

                                             <div class = "small-content">

                                            <b>Posted on:&nbsp;</b>{{$enquiry->created_at->format("d/m/y  H:i A")}}&nbsp;<b>By:</b>{{ $enquiry->name }}<br>

                                             <hr><div class = "news-brief">
                                              {{ substr(strip_tags($enquiry->comment), 0, 140) }}
                                              {{ strlen(strip_tags($enquiry->comment)) > 50 ? "......" : "" }}</div>
                                            </div>



                                            </figure>

                                          </div>
                                            <div class="col-md-12 col-sm-12">
                                            <div class = "row">
                                            <div class="col-md-3 col-sm-3 ochi-spacer"><a href="{{ route('enquiry.show', $enquiry->id) }}" class="btn btn-success adminbtn" role="button" aria-pressed="true">Read More </a> </div>

                                            @auth
                                            @if (Auth::user() && Auth::user()->utype == 'ADM')


                                            <div class="col-md-3 col-sm-3 ochi-spacer">
                                                    <form action = "" method = "post">
                                                                @csrf
                                                                 @method('archive')

                                                                <button class="archivebutton delbtn" input type = "submit" value = "delete">Archive Post</button>
                                                </div>
                                                    </form>





                                            <div class="col-md-6 col-sm-6 ochi-spacer"> <a href="{{ asset($enquiry->attachmentFilePath) }}"><button class="downloadbtn delbtn"><i class="fa fa-download"></i> Download Attachment</button></a></div>



                                            @endif
                                            @endauth

                                           </div>
                                           </div>


                                        </div>

                                        @endforeach

                                    </div>


                                </div>


                            </div>
                        </div>



                    </div>


                    <div class = "pagination"> {{ $enquiries->links() }}</div>
                </div>

            </div>

        </div>

    </div>
    <!-- End Shop Page -->
@endsection

