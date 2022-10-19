@extends("layouts.frontend")


@section('head')
   <!--===============================================================================================-->
   <link rel="icon" type="image/png" href="assets/frontend/login/images/icons/favicon.ico"/>
   <!--===============================================================================================-->

   <!--===============================================================================================-->
       <link rel="stylesheet" type="text/css" href="assets/frontend/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
   <!--===============================================================================================-->
       <link rel="stylesheet" type="text/css" href="assets/frontend/login/vendor/animate/animate.css">
   <!--===============================================================================================-->
       <link rel="stylesheet" type="text/css" href="assets/frontend/login/vendor/css-hamburgers/hamburgers.min.css">
   <!--===============================================================================================-->
       <link rel="stylesheet" type="text/css" href="assets/frontend/login/vendor/animsition/css/animsition.min.css">
   <!--===============================================================================================-->
       <link rel="stylesheet" type="text/css" href="assets/frontend/login/vendor/select2/select2.min.css">
   <!--===============================================================================================-->
       <link rel="stylesheet" type="text/css" href="assets/frontend/login/vendor/daterangepicker/daterangepicker.css">
   <!--===============================================================================================-->
       <link rel="stylesheet" type="text/css" href="assets/frontend/login/css/util.css">
       <link rel="stylesheet" type="text/css" href="assets/frontend/login/css/main.css">
   <!--===============================================================================================-->
@endsection

@section('content')




 <!-- Page breadcrumb -->
 <section id="mu-page-breadcrumb">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-page-breadcrumb-area">
            <h6>Success comes from curiosity,  perseverance and self criticism:
                Albert Einstein</h6>
            <ol class="breadcrumb">

           </ol>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End breadcrumb -->


  <div class="limiter">
    <div class="container-login100">
        <div class="wrap-login100">


            <form class="login100-form validate-form p-l-55 p-r-55 p-t-130"
                   method="POST" action="{{ route('register') }}">
                @csrf

                <span class="login100-form-title">
                    UASU TUM Registration Form
                </span>

                <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter your Name">

                <input class="input100" @error('name') is-invalid @enderror name="name" value="{{ old('name') }}" required autocomplete="name" autofocus
                placeholder="Your Name">
                <span class="focus-input100"></span>

                @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                </div>


                <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter your Email Address">
                <input class="input100" id="email" type="email" @error('email') is-invalid @enderror  name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Your Email">
                <span class="focus-input100"></span>

                @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Please enter password">
                    <input class="input100" id="password" type="password"  @error('password') is-invalid @enderror name="password" required autocomplete="new-password" placeholder="Password">

                    <span class="focus-input100"></span>

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class = "form-spacer"></div>


                <div class="wrap-input100 validate-input m-b-16" data-validate="Please Re-enter your Password">
                    <input class="input100" id="password-confirm" type="password" name="password_confirmation" required autocomplete="new-password"  placeholder="Password Confirmation">
                    <span class="focus-input100"></span>

                </div>



                <div class="text-right p-t-13 p-b-23">

                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Register
                    </button>
                </div>

                <div class="flex-col-c p-t-10 p-b-40">

                </div>


            </form>
        </div>
    </div>
</div>




          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End gallery  -->

  @endsection
