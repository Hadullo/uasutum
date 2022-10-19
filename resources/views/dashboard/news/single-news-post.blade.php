
@extends("layouts.admin")
@section('content')

<div class="main-content-innerxx">
    <div class="card-area">
        @include('includes.flash-message')
        <div class="row">

            <div class="card card-bordered">
                <a href="{{ route('news.show', $newsitem)}}"><img src="{{ asset($newsitem->newsPhotoPath) }}" class = "image-rect" alt="img"></a>
                <div class = "image-caption">{{ $newsitem->newsPhotoCaption}}</div>


                <div class="card-body">
                    <h5 class="title"><div class = "post-title" ><span class = "news-headlines">News Headlines:</span><a href="{{ route('news.show', $newsitem) }}"><span class= "headline-style">{{ $newsitem->title}}</span></a></div>
                    </h5>

                    <div class = "news-content">
                        <span class ="news-post">Posted on :&nbsp;</b>{{$newsitem->created_at->format("d/m/y H:i A")}}&nbsp;<b>By:</b>{{ $newsitem->user->name }}</span><br>

                              <hr>
                              <span class ="newshead">News in Full</span><br>

                              <div class = news-body> {!! $newsitem->body !!}</div>



                      </div>
                      <div class="col-md-6 col-lg-12 clearfix">


<!-- ShareThis BEGIN --><div class="sharethis-inline-share-buttons"></div><!-- ShareThis END -->
                </div>

            </div>
            </div>











        </div>
    </div>
</div>

<!-- main content area end -->

@endsection

