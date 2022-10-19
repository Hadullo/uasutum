@include('partials.frontend._head')
@include('partials.frontend._header')
@include('partials.frontend._menu')
@include('sweetalert::alert')

        <div class="content">
          @yield('content')
       </div>

@include('partials.frontend._footer')

