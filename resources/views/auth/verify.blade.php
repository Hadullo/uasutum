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

 <section id="mu-gallery">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="mu-gallery-area">
           <!-- start title -->

           <div class = "email-verification">

             <h2>Verify Your Email Address</h2>
             <p>
                @if (session('resent'))
                           <div class="alert alert" role="alert">
                               {{ __('A fresh verification link has been sent to your email address.') }}
                           </div>
                       @endif

                      <p> {{ __('Before proceeding, please check your email for a verification link.') }}</p>
                       {{ __('If you did not receive the email') }},
                       <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                           @csrf
                           <button type="submit" class="btn btn-link p-0 m-0 align-baseline email-verify">{{ __('click here to request another') }}</button>.
                       </form>
            </div>

           <!-- end title -->
           <!-- start gallery content -->


          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End gallery  -->


  @endsection
