    <!-- Jquery --> 
    <script src="{{ asset('js/fram/jquery-1.12.4-min.js') }}"></script>
    <script src="{{ asset('js/fram/jquery-ui-min.js') }}"></script>
    <script src="{{ asset('js/fram/jquery.min.js') }}"></script>

    <!-- BOOTSTRAP JavaScript -->
    <script src="{{ asset('js/fram/bootstrap.min.js') }}"></script>

    <!-- SWIPER JavaScript -->
    <script src="{{ asset('js/fram/swiper.min.js') }}"></script>
    <script src="{{ asset('js/fram/popper.min.js') }}"></script>

    <!-- Mon JavaScript & jquery -->
    <script src="{{ asset('js/modif/swiper_modif.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="{{ asset('js/search.js') }}"></script>
    <script src="{{ asset('js/avatar.js') }}"></script>
    <script src="{{ asset('js/connexion_user.js') }}"></script>
    <script src="{{ asset('js/backtop.js') }}"></script>

    @stack('script')

    @include('flashy::message')
    
  </body>
</html>