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


            <form  method="POST" action="{{ route('login') }}"
                class="login100-form validate-form p-l-55 p-r-55 p-t-178">
                @csrf

                <span  class="login100-form-title">
                    UASU TUM Log  In
                </span>

                <div class="wrap-input100 validate-input m-b-16" data-validate="Please enter Email Adress">
                    <input id="email" type="email"  @error('email') is-invalid @enderror  name="email" value="{{ old('email') }}" required autocomplete="email" autofocus   class="input100"  placeholder="Email">

                    <span class="focus-input100"></span>

                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>

                <div class="wrap-input100 validate-input" data-validate = "Please enter password">


                    <input id="password" type="password"  @error('password') is-invalid @enderror  name="password" required autocomplete="current-password" class="input100"  placeholder="Password">
                    <span class="focus-input100"></span>

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>

                <div class="remember-me">
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                    <label class="form-check-label" for="remember">
                        {{ __('Remember Me') }}
                    </label>
                    </div>
                </div>

                <div class="text-right p-t-13 p-b-23">
                    <span class="txt1">
                        Forgot
                    </span>

                    @if (Route::has('password.request'))
                    <a class="btn btn-link txt2" href="{{ route('password.request') }}">
                        {{ __('Your Username/Password?') }}
                    </a>
                    @endif

                </div>

                <div class="container-login100-form-btn">
                    <button class="login100-form-btn">
                        Sign in
                    </button>
                </div>

                <div class="flex-col-c p-t-50 p-b-40">
                    <span class="txt1 p-b-9">
                        Don’t have an account?
                    </span>

                    <a href="{{ route('register') }}" class="txt3">
                        Sign up now
                    </a>
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
