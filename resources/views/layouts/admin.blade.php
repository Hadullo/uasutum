@include('partials.admin._head')
@include('partials.admin._sidebar')
@include('partials.admin._header')
@include('partials.admin._header2')
@include('sweetalert::alert')




        <div class="content">
          @yield('content')
       </div>

@include('partials.admin._footer')
