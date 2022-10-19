
@extends("layouts.admin")
@section('content')


<div class="main-content-inner">

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Create a News Item
  </button>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>

        <form>

            <div class="modal-body">

                    <div class="form-group">
                     <label for="title">Title</label>
                     <input type="text" class="form-control" id="text" aria-describedby="textHelp" placeholder="Enter Name">

                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                     <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                 </div>
                    <div class="form-group form-check">
                     <input type="checkbox" class="form-check-input" id="exampleCheck1">
                     <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>

            </div>

        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
        </form>

      </div>
    </div>
  </div>

  <!-- End Modal -->

    <div class="card-area">


        @include('includes.flash-message')
        <div class="row">

            @foreach ($news as $newsitem)
            <div class="col-lg-4 col-md-6 mt-5">
                <div class="card card-bordered">
                    <a href="{{ route('news.show', $newsitem)}}"><img src="{{ asset($newsitem->newsPhotoPath) }}" class = "image-rect" alt="img"></a>
                    <div class = "image-caption">{{ $newsitem->newsPhotoCaption}}</div>

                    <div class="card-body">
                        <h5 class="title"><div class = "post-title" ><span class = "news-headlines">News Headlines:</span><a href="{{ route('news.show', $newsitem) }}"><span class= "headline-style">{{ $newsitem->title}}</span></a></div>
                            </h5>
                        <p class="card-text">   <div class = "small-content">

                            <div class ="small-text"><b>Posted:&nbsp;</b>{{$newsitem->created_at->format("d/m/y  H:i a")}}&nbsp;<b>By:</b>{{ $newsitem->user->name }}</div>

                        <div class = "news-brief">
                            {{ substr(strip_tags($newsitem->body), 0, 120) }}
                            {{ strlen(strip_tags($newsitem->body)) > 50 ? "......" : "" }}</div>
                        </div></p>
                                            </div>

                    <div class="flex-container">
                        <div><a href="{{  route('news.show',$newsitem)}}" class="btn btn-sm btn-primary">
                        </i>Read More
                      </a></div>


                        <div>

                            @auth
                            @if (Auth::user() && Auth::user()->utype == 'ADM')

                            <a href="{{ route('news.edit', $newsitem) }}" class="btn btn-sm btn-primary">
                            Edit
                            </a>
                            </div>





                        <div>    <form action = "{{ route('news.delete', $newsitem)}}" method = "post">
                            @csrf
                             @method('delete')

                            <button class="btn btn-sm btn-primary" input type = "submit" value = "delete">Delete</button>
                        </form>
                        </div>
                      </div>




                    @endif
                    @endauth
                </div>


            </div>




            @endforeach








        </div>



    </div>



</div>

<div class="d-flex justify-content-center">
    {{$news->links() }}
</div>
<!-- main content area end -->

@endsection

<script>
    $('#avatar').ijaboCropTool({
       preview : '.cropped_picture',
       setRatio:1,
       allowedExtensions: ['jpg', 'jpeg','png'],
       buttonsText:['CROP','QUIT'],
       buttonsColor:['#30bf7d','#ee5155', -15],
       processUrl:'{{ route("userCrop") }}',
       withCSRF:['_token','{{ csrf_token() }}'],
       onSuccess:function(message, element, status){
          alert(message);
       },
       onError:function(message, element, status){
         alert(message);
       }
    });
</script>

