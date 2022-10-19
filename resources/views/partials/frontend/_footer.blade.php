 <!-- Start footer -->
 <footer id="mu-footer">

    <!-- start footer bottom -->
    <div class="mu-footer-bottom">
      <div class="container">
        <div class="mu-footer-bottom-area">
          <p>&copy; 2022 All Right Reserved. Designed by <a href="https://www.uasutum.net">UASU TUM</a></p>
        </div>
      </div>
    </div>
    <!-- end footer bottom -->
  </footer>
  <!-- End footer -->

  <!-- jQuery library -->
  <script src="{{ asset('assets/frontend/js/jquery.min.js') }}"></script>
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="{{ asset('assets/frontend/js/bootstrap.js') }}"></script>
  <!-- Slick slider -->
  <script type="text/javascript" src="{{ asset('assets/frontend/js/slick.js') }}"></script>
  <!-- Counter -->
  <script type="text/javascript" src="{{ asset('assets/frontend/js/waypoints.js') }}"></script>
  <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.counterup.js') }}"></script>
  <!-- Mixit slider -->
  <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.mixitup.js') }}"></script>
  <!-- Add fancyBox -->
  <script type="text/javascript" src="{{ asset('assets/frontend/js/jquery.fancybox.pack.js') }}"></script>

  <!-- Custom js -->
  <script src="{{ asset('assets/frontend/js/custom.js') }} "></script>




<!-- Sweet Alert-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.js" integrity="sha512-MqEDqB7me8klOYxXXQlB4LaNf9V9S0+sG1i8LtPOYmHqICuEZ9ZLbyV3qIfADg2UJcLyCm4fawNiFvnYbcBJ1w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

@if (Session::has('status'))
<script>
swal("Congratulations", "{!! Session::get('status') !!}","success", {
    button: "OK"
});
</script>
@endif

@yield('scripts')

  </body>
</html>

