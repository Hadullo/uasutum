@extends("layouts.admin")

<!-- Main style sheet -->

@section('head')
<link href="{{ asset('assets/admin/css/editprofile.css') }}" rel="stylesheet">
@endsection

@section('head')
   <script src="https://cdn.ckeditor.com/4.16.2/standard/ckeditor.js"></script>
@endsection

@section('content')


<div class="editcontent">
    <div class="row">
      <div class="col-md-4">
        <div class="card card-user">

          <div class="card-body">
            @if(Auth::user()->avatar)
            <a href=""><center><img src="/assets/admin/images/avatars/{{$user->avatar}}" class = "img-round-edit-profile" alt="img"></center></a>

            @else
            <img src="{{ asset('assets/admin/images/profile/default.png') }}" class = "img-round">
            @endif
            <p class="description text-center">
              Dr. Kennedy Ochilo hadullo</p>

            <p class="profile-specialisation">
               Information System Analyst</p>

          </div>
        </div>




    </div>
      <div class="col-md-8">
        <div class="card card-user">
          <div class="card-header">

            @include('includes.flash-message')

          <form  method = "POST" action = "{{ route('updatePwd') }}"   enctype="multipart/form-data" >
            @method('PUT')
            @csrf


            <div class="form-group">
                <label for="newpassword"><b>Enter New Password</b></label>
                <input type="password" name="newpassword"  id="newpassword" class="form-control @error('newpassword') is-invalid @enderror" value="" required placeholder="New Password">
                @error('newpassword')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>


            <div class="form-group">
                <label for="newpassword_confirmation"><b>Confirm New Password</b></label>
                <input type="password" name="newpassword_confirmation"  id="newpassword_confirmation" class="form-control @error('newpassword_confirmation') is-invalid @enderror" value="" required placeholder="Confirm Password">
                @error('newpassword_confirmation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>





        <button type="submit" class="btn btn-primary mr-2"> Submit </button>
        <button class="btn btn-light">Cancel</button>

        </form>



        </div>
      </div>
    </div>
  </div>




</div>
<!-- main content area end -->

@endsection



