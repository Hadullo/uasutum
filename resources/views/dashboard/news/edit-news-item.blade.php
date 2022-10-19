@extends("layouts.admin")
<link rel="stylesheet" href="{{ asset('assets/admin/includes/login-logout-tab.css') }}">

@section('head')
   <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
@endsection


@section('content')

    <!-- Main content -->


  </div>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">





          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">



  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg"><h5>Edit a News Item</h5></p>

      @include('includes.flash-message')


      <form  method = "POST" action = "{{ route('news.update', $newsitem) }}"   enctype="multipart/form-data" >
        @method('put')
        @csrf

            <div class="input-group mb-3">
                <input type="text" class="form-control" id="title" name = "title" placeholder="Title" value = "{{ $newsitem->title }}">
                <div class="input-group-append">
                  <div class="input-group-text">
                  </div>
                </div>
              </div>

        @error('title')
        <div class = alert-danger>{{ $message }}</div>
        @enderror



        <div class="input-group mb-3">
          <input type="file" name = "neimage" class="form-control-file"  id="neimage" placeholder="Upload  News  Photo">
          <div class = "form1">File Image must be 700px by 365px</div>
        </div>

        @if($errors->first('neimage'))
        <div class = alert-danger>{{ $errors->first('neimage') }}</div>
        @endif


        <div class="input-group mb-3">
            <input type="text" name = "newsPhotoCaption"  class="form-control" id= "newsPhotoCaption"  placeholder="News Photo Caption" value = "{{ $newsitem->newsPhotoCaption }}">
            <div class="input-group-append">
              <div class="input-group-text">
              </div>
            </div>
        </div>
          @error('newsPhotoCaption')
          <div class = alert-danger>{{ $message }}</div>
           @enderror



        <div class="input-group mb-3">

          <textarea class="form-control" id="body" name = "body">{{ $newsitem->body }}</textarea>

          <div class="input-group-append">
            <div class="input-group-text"></div>
          </div>

        </div>
        @if($errors->first('body'))
        <div class = alert-danger>{{ $errors->first('body') }}</div>
        @endif
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" value="reset" class="btn btn-primary">Reset</button>

    </form>


    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->




          </div><!-- /.container-fluid -->
        </section>

    @endsection

    @section('scripts')
    <script>CKEDITOR.replace( 'body' );</script>
    @endsection

