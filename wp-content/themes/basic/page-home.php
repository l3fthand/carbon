<!DOCTYPE html>
<html lang="en" class="no-js">
  <!-- Head -->
  <head>
    <title>Home Page | Stream - UI Kit</title>

    <!-- Meta -->
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="Bootstrap Theme, Freebies, UI Kit, MIT license">
    <meta name="description" content="Stream - UI Kit">
    <meta name="author" content="htmlstream.com">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- Web Fonts -->
    <link href="//fonts.googleapis.com/css?family=Playfair+Display:400,700%7COpen+Sans:300,400,600,700" rel="stylesheet">

    <!-- Bootstrap Styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/assets/vendors/bootstrap/css/bootstrap.css">

    <!-- Components Vendor Styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/assets/vendors/font-awesome/css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/assets/vendors/slick-carousel/slick.css">

    <!-- Theme Styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/assets/css/styles.css">

    <style type="text/css">
    </style>
  </head>
  <!-- End Head -->
  <body>
   <?php get_header() ?>
      <!-- Promo Block -->
      <section class="js-parallax u-promo-block u-promo-block--mheight-600 u-overlay u-overlay--dark text-white" style="background-image:  url(<?php echo get_template_directory_uri()?>/assets/img-temp/1920x1080/Cycling.jpg);">
        <!-- Promo Content -->
        <div class="container u-overlay__inner u-ver-center u-content-space">
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="text-center">
                <p class="text-uppercase u-letter-spacing-sm mb-0">Sustainability is a <strong>lifestyle</strong></p>
                <h1 class="display-sm-4 display-lg-3 mb-3"><span class="js-display-typing"></span></h1>
                
              </div>
            </div>
          </div>
        </div>
        <!-- End Promo Content -->
      </section>
      <!-- End Promo Block -->
    </header>
    <!-- End Header -->

    <main role="main">

      <!-- Why We? -->
      <section class="u-content-space">
        <div class="container">
          <header class="text-center w-md-50 mx-auto mb-8">
            <h2 class="h1">Who are We?</h2>
            <p class="h5">We are standing up to the fossil fuel industry to stop all new coal, oil and gas projects in New Zealand and build a fossil-free future for all.</p>
          </header>

          
        </div>
      </section>
      <!-- End Why We? -->


      

      <!-- Our Pricing -->
      <section class="bg-light u-content-space">
        <div class="container">
          <!-- Our Pricing: Header -->
          <header class="text-center w-md-50 mx-auto mb-8">
            <h2 class="h1">Our Pricing</h2>
            <p class="h5">No additional costs. Pay only fixed monthly fee and the rest we will handle for you!</p>
          </header>
          <!-- End Our Pricing: Header -->

          <!-- Row -->
          <div class="row text-center">
            <div class="col-lg-4 mb-5 mb-lg-0">
              <div class="display-4 text-primary mb-2">
                <i class="fab fa-grav"></i>
              </div>
              <h4 class="h5">Creative ideas</h4>
              <p>CurabiturAchieve virtually any look and layout from within the one template.</p>
              <a href="#!">
                Learn More <i class="fas fa-arrow-right ml-1"></i>
              </a>
            </div>

            <div class="col-lg-4 mb-5 mb-lg-0">
              <div class="display-4 text-primary mb-2">
                <i class="fab fa-connectdevelop"></i>
              </div>
              <h4 class="h5">Excellent features</h4>
              <p>We strive to figure out ways to help your audience grow through all platforms.</p>
              <a href="#!">
                Learn More <i class="fas fa-arrow-right ml-1"></i>
              </a>
            </div>

            <div class="col-lg-4 mb-5 mb-lg-0">
              <div class="display-4 text-primary mb-2">
                <i class="fas fa-cubes"></i>
              </div>
              <h4 class="h5">Fully responsive</h4>
              <p>Find what you need in one template and combine features at will.</p>
              <a href="#!">
                Learn More <i class="fas fa-arrow-right ml-1"></i>
              </a>
            </div>
          </div>
              <!-- Pricing -->
              
              <!-- End Pricing -->
            </div>
          </div>
        </div>
      </section>
      <!-- End Our Pricing -->

     
    </main>

    <?php get_footer() ?>

    <!-- JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) -->
    <!-- Global Vendor -->
    <script src="<?php echo get_template_directory_uri()?>/assets/vendors/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/assets/vendors/jquery.migrate.min.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/assets/vendors/popper.min.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/assets/vendors/bootstrap/js/bootstrap.min.js"></script>

    <!-- Components Vendor  -->
    <script src="<?php echo get_template_directory_uri()?>/assets/vendors/jquery.parallax.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/assets/vendors/typedjs/typed.min.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/assets/vendors/slick-carousel/slick.min.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/assets/vendors/counters/waypoint.min.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/assets/vendors/counters/counterup.min.js"></script>

    <!-- Theme Settings and Calls -->
    <script src="<?php echo get_template_directory_uri()?>/assets/js/global.js"></script>

    <!-- Theme Components and Settings -->
    <script src="<?php echo get_template_directory_uri()?>/assets/js/vendors/parallax.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/assets/js/vendors/carousel.js"></script>
    <script src="<?php echo get_template_directory_uri()?>/assets/js/vendors/counters.js"></script>
    <!-- END JAVASCRIPTS -->

    <script>
      $(document).on('ready', function () {
        // initialization of text animation (typing)
        $(".js-display-typing").typed({
          strings: [
            "Recycle",
            "Reduce",
            "Resell"
          ],
          typeSpeed: 60,
          loop: true,
          backDelay: 2500
        });
      });
    </script>
  </body>
  <!-- End Body -->
</html>