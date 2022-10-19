
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
                    <div class = "item1"><h1>Chapter Meetings Page</h1></div>

                    @auth
                    @if (Auth::user() && Auth::user()->utype == 'ADM')

                    <div class = "item2"><a href="{{ route('meeting.create') }}" class="btn btn-primary" role="button" aria-pressed="true">Create a Meeting</a></div>

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

                                        @foreach ($meetings as $meeting )

                                        <div class="col-md-6 col-sm-6 ochi-spacer-2">

                                            <div class="mu-latest-course-single-content">
                                                <div class = "post-title" ><span class = "news-headlines">Meeting Agenda:</span><a href="{{ route('meeting.show', $meeting) }}"><span class= "white">{{ $meeting->title}}</span></a></div>

                                             </div>



                                            <div class="mu-latest-course-single">

                                            <figure class="mu-latest-course-img ochi_2">
                                              <a href="#"><img src="{{ asset($meeting->meetingPhotoPath) }}" alt="img"></a>
                                              <div class = "image-caption">{{ $meeting->meetingPhotoCaption}}</div>

                                             <div class = "small-content">
                                              <b>Date of Meeting:&nbsp;</b>{{ $meeting->meeting_date}}<br>
                                              <b>Posted:&nbsp;</b>{{$meeting->created_at->diffForHumans()}}&nbsp;<b>By:</b>{{ $meeting->user->name }}<br>
                                              <b>Updated:&nbsp;</b>{{$meeting->updated_at->diffForHumans()}}&nbsp;<b>By:</b>{{ $meeting->user->name }}<br>

                                            </div>
                                            </figure>



                                          </div>

                                            <div class="col-md-12 col-sm-12">
                                            <div class = "row">
                                            <div class="col-md-3 col-sm-3 ochi-spacer"><a href="{{ route('meeting.show',$meeting) }}" class="btn btn-success adminbtn" role="button" aria-pressed="true">Read More </a> </div>

                                            @auth
                                            @if (Auth::user() && Auth::user()->utype == 'ADM')

                                            <div class="col-md-4 col-sm-4 ochi-spacer"><a href="{{ route('meeting.edit', $meeting) }}" class="btn btn-success adminbtn" role="button" aria-pressed="true">Edit Details</a> </div>
                                            <div class="col-md-5 col-sm-5 ochi-spacer">
                                                    <form action = "{{ route('meeting.delete', $meeting)}}" method = "post">
                                                                @csrf
                                                                 @method('delete')

                                                                <button class="deletebutton delbtn" input type = "submit" value = "delete">Delete Post</button>
                                                </div>
                                                    </form>


                                            @endif
                                            @endauth


                                           </div>
                                           </div>





                                           <div class="col-md-12 col-sm-12">
                                            <div class = "row">


                                            <div class="col-md-6 col-sm-6 ochi-spacer"> <a href="{{ asset($meeting->attendanceFilePath) }}"><button class="downloadbtn delbtn"><i class="fa fa-download"></i> Download Attendance</button></a></div>
                                            <div class="col-md-6 col-sm-6 ochi-spacer"> <a href="{{ asset($meeting->minutesFilePath) }}"><button class="downloadbtn delbtn"><i class="fa fa-download"></i> Download Minutes</button></a></div>
                                           </div>
                                           </div>





                                        </div>



                                        @endforeach

                                    </div>


                                </div>


                            </div>
                        </div>



                    </div>
                    <div class = "pagination"> {{ $meetings->links() }}</div>
                </div>

            </div>

        </div>

    </div>
    <!-- End Shop Page -->



@endsection

