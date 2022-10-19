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


                              <!--News Title Add Modal -->
                              <div class="modal fade" id="titleAddModal" tabindex="-1" role="dialog" aria-labelledby="titleAddModal" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                    <div class="modal-header">
                                      <h5 class="modal-title" id="titleAddModal"><b>News Title</b></h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                      </button>
                                    </div>


                                <form  method = "POST" action = "{{ route('newsTitle.create') }}"   enctype="multipart/form-data" >
                                    @csrf


                                    <div class="modal-body">

                                        <div class="form-group">
                                            <label for="title">Enter News title here </label>
                                            <input type="text" class="form-control" name = "title" >
                                        </div>

                                        @error('title')
                                        <div class = alert-danger>{{ $message }}</div>
                                        @enderror
                                    </div>

                                <div class="modal-footer">
                                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                  <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                                </form>


                                  </div>
                                </div>
                              </div>

                            <!-- Button trigger modal -->



        @include('includes.flash-message')<br>
        <div class ="create-news-item"><h5>Create a News Item</h5></p>

        <div class="single-table">
            <div class="table-responsive">


                <table class="table text-left">

                    <tbody>
                        <tr>

                            <td><b>News Title</b></td>
                            <td><b></b></td>
                            <td><a href="#"><i class="fa fa-edit fa-2x" data-toggle="modal" data-target="#titleAddModal"></a></td>
                        </tr>

                        <tr>

                            <td><b>News Body</b></td>

                            <td><b></b></td>

                            <td><i class="ti-trash"></i></td>
                        </tr>

                        <tr>

                            <td><b>Upload News Image</b></td>
                            <td></td>

                            <td><i class="ti-trash"></i></td>
                        </tr>

                        <tr>

                            <td><b>Image Caption</b></td>
                            <td><b></b></td>


                            <td><i class="ti-trash"></i></td>
                        </tr>


                    </tbody>
                </table>




            </div>
        </div>













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

