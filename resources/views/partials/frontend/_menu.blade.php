 <!-- Start menu -->
 <section id="mu-menu">
    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->
          <a class="navbar-brand" href="{{ route('home-page') }}"><img src="{{ asset('assets/frontend/img/logo.png') }}" alt="logo" class="responsive"></a>
        </div>

        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li class="active"><a href="{{ route('home-page') }}">Home</a></li>
            <li class="active"><a href="{{ route('about') }}">About Us</a></li>
            <li class="active"><a href="/uasu">Members</a></li>
            <li class="active"><a href="{{ route('officials') }}"> Officials</a></li>
            <li class="active"><a href="{{ route('reportDownload') }}">Downloads</a></li>
            <li class="active"><a href="{{ route('contact') }}">Contact Us</a></li>



          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
  </section>
  <!-- End menu -->
