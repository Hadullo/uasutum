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
      <div class="ochi-ken"><h4>Edit User Details</h4></div>

      @include('includes.flash-message')


      <form  method = "POST" action = ""   enctype="multipart/form-data" >
        @method('put')
        @csrf


        <div class="form-group">
            <label for ="email"><b>Name</b></label>
            <input type="text" class="form-control" id="name" name = "name" placeholder="Name"  value = "{{ Auth::user()->name }}">
        </div>

        @error('name')
        <div class = alert-danger>{{ $message }}</div>
        @enderror



        <div class="form-group">
            <label for ="email"><b>Email</b></label>
            <input type="text" class="form-control" id="email" name = "email" laceholder="Email"  value = "{{ Auth::user()->email }}">
        </div>

        @error('email')
        <div class = alert-danger>{{ $message }}</div>
        @enderror



        <div class="form-group">
            <label for ="password"><b>Password</b></label>
            <input type="text" class="form-control" id="password" name = "password" placeholder ="Password...."  minlength = "8">
        </div>

        @error('password')
        <div class = alert-danger>{{ $message }}</div>
        @enderror


        <div class="form-group">
            <label for ="password"><b>Confirm Password</b></label>
            <input type="text" class="form-control" id="password_confirmation" name = "password_confirmation" placeholder ="Password Confirmation..">
        </div>

        @error('password_confirmation')
        <div class = alert-danger>{{ $message }}</div>
        @enderror



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



