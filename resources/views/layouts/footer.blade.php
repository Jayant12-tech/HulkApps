
  <footer>
  
    <section class="w3l-footer">
      <div class="w3l-footer-16-main py-2">
        <div class="container">
          
          <div class="d-flex below-section justify-content-between align-items-center">
            <div class="columns text-lg-left text-center">
              <p>&copy; 2022 The Lehkaks. All rights reserved.
              </p>
            </div>
           
          </div>
        </div>
      </div>
  
        
      <script>
        $(function () {
          $('.navbar-toggler').click(function () {
            $('body').toggleClass('noscroll');
          })
        });
      </script>
    </section>
    <!-- //footer -->
  </footer>
  <!-- Template JavaScript -->
  <script src="{{url('public/js/jquery-3.3.1.min.js')}}"></script>
  <script src="{{url('assets/js/theme-change.js')}}"></script>
  <!-- stats number counter-->
  <script src="{{url('public/js/jquery.waypoints.min.js')}}"></script>
  <script src="{{url('public/js/jquery.countup.js')}}"></script>
  <script>
    $('.counter').countUp();
  </script>
  <!-- //stats number counter -->
  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->

  <script src="{{url('public/js/bootstrap.min.js')}}"></script>

</body>

</html>
