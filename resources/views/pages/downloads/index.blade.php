   @extends("layouts.frontend")
   @section('content')

    <!-- Page breadcrumb -->


 <section id="mu-page-breadcrumb">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <div class="wrapper">

            <div class="mu-page-breadcrumb-area">
            <h6>Success comes from curiosity,  perseverance and self criticism:
                Albert Einstein</h6>
            <ol class="breadcrumb">


           </ol>
          </div>
            </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End breadcrumb -->



    <!-- Start Products  -->
    <div class="products-box">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="title-all text-center">
                        <h1>Welcome to our Downloads Page</h1>
                        <hr class = "line">

                    </div>
                </div>
            </div>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">


        <!-- /.row -->
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">UASU Downloads</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Report Title</th>
                      <th>Report Highlights</th>
                      <th>Date Posted</th>
                      <th>Posted By</th>
                      <th>Downloads</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach ($reports as $report)
                    <tr>
                      <td>{{ $report->id}}</td>
                      <td>{{ $report->title}}</td>
                      <td>{!! $report->body !!}</td>
                      <td>{{$report->created_at->diffForHumans()}}</td>
                      <td><span class="tag tag-success">{{ $report->user->name }}</span></td>

                      <td><a href="{{ asset($report->reportFilePath) }}"><button class="downloadbtn delbtn"><i class="fa fa-download"></i> Download</button></a></div></td>
                      <td><a href="{{ asset($report->reportFilePath) }}"></td>
                      <td>@auth
                        @if (Auth::user() && Auth::user()->utype == 'ADM')<a href="{{ route('report.edit', $report) }}" class="btn btn-success adminbtn" role="button" aria-pressed="true">Edit Details</a> </td>
                      <td><form action = "{{ route('report.delete', $report)}}" method = "post">
                        @csrf
                         @method('delete')
                        <button class="deletebutton delbtn" input type = "submit" value = "delete">Delete Post</button></form>
                        @endif
                        @endauth
                    </td>

                    </tr>
                    @endforeach




                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row -->



      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


                <div class = "pagination"> {{ $reports->links() }}</div>




        </div>
    </div>
    <!-- End Products  -->

@endsection

