<!DOCTYPE html>
<html lang="en" class="no-js">
  <!-- Head -->
  <head>
    <title>Contacts | Stream - UI Kit</title>

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

    <!-- Web Fonts -->
    <link href="//fonts.googleapis.com/css?family=Playfair+Display:400,700%7COpen+Sans:300,400,600,700" rel="stylesheet">

    <!-- Bootstrap Styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/assets/vendors/bootstrap/css/bootstrap.css">

    <!-- Components Vendor Styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/assets/vendors/font-awesome/css/fontawesome-all.min.css">

    <!-- Theme Styles -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri()?>/assets/css/styles.css">
  </head>
  <!-- End Head -->

  <body>
    <?php get_header() ?>

      <!-- Promo Block -->
      <section class="js-parallax u-promo-block u-promo-block--mheight-500 u-overlay u-overlay--dark text-white" style="background-image: url(<?php echo get_template_directory_uri()?>/assets/img-temp/1920x1080/contact.jpg);">
        <!-- Promo Content -->
        <div class="container u-overlay__inner u-ver-center u-content-space">
          <div class="row justify-content-center">
            <div class="col-12">
              <div class="text-center">
                <h1 class="display-sm-4 display-lg-3">Got a Question?</h1>
                <p class="h6 text-uppercase u-letter-spacing-sm mb-0">It is good to meet you</p>
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
      <!-- Icon Block -->
      <section class="container-fluid">
        <div class="row text-center u-icon-block">
          <!-- Icon Block Column -->
          <div class="col-lg-4 u-icon-block__col">
            <span class="u-icon u-icon-primary u-icon--size--xl rounded-circle mb-4">
              <span class="fas fa-map u-icon__inner text-white"></span>
            </span>
            <h3 class="h5">Address</h3>
            <p class="mb-0">61 Oxford str., London, 3DG</p>
          </div>
          <!-- End Icon Block Column -->

          <!-- Icon Block Column -->
          <div class="col-lg-4 u-icon-block__col u-icon-block__col--left-brd">
            <span class="u-icon u-icon-primary u-icon--size--xl rounded-circle mb-4">
              <span class="fas fa-mobile u-icon__inner text-white"></span>
            </span>
            <h3 class="h5">Phone Number</h3>
            <p class="mb-0">1-800-643-4500</p>
          </div>
          <!-- End Icon Block Column -->

          <!-- Icon Block Column -->
          <div class="col-lg-4 u-icon-block__col u-icon-block__col--left-brd">
            <span class="u-icon u-icon-primary u-icon--size--xl rounded-circle mb-4">
              <span class="fas fa-envelope-open u-icon__inner text-white"></span>
            </span>
            <h3 class="h5">Email</h3>
            <p class="mb-0">mail@htmlstream.com</p>
          </div>
          <!-- End Icon Block Column -->
        </div>
      </section>
      <!-- End Icon Block -->

      <!-- Contact Form -->
      <section class="u-content-space">
        <div class="container">
          <header class="text-center w-md-50 mx-auto mb-8">
            <h2 class="h1">Tell us about yourself</h2>
            
          </header>

          <form class="text-center w-md-75 mx-auto" action="#">
            <div class="row">
              <div class="col-lg-6 form-group mb-4">
                <input class="form-control form-control-lg" placeholder="Name" type="text">
              </div>

              <div class="col-lg-6 form-group mb-4">
                <input class="form-control form-control-lg" placeholder="Email" type="email">
              </div>

              <div class="col-lg-6 form-group mb-4">
                <input class="form-control form-control-lg" placeholder="Subject" type="text">
              </div>

              <div class="col-lg-6 form-group mb-4">
                <input class="form-control form-control-lg" placeholder="Phone" type="tel">
              </div>

              <div class="col-lg-12 form-group mb-6">
                <textarea class="form-control form-control-lg" rows="7" placeholder="Message"></textarea>
              </div>
            </div>

            <div class="text-center">
              <button class="btn btn-lg btn-danger py-3 px-4" type="submit">Send Your Message</button>
            </div>
          </form>
        </div>
      </section>
      <!-- End Contact Form -->
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

    <!-- Theme Settings and Calls -->
    <script src="<?php echo get_template_directory_uri()?>/assets/js/global.js"></script>

    <!-- Theme Components and Settings -->
    <script src="<?php echo get_template_directory_uri()?>/assets/js/vendors/parallax.js"></script>
    <!-- END JAVASCRIPTS -->
  </body>
  <!-- End Body -->
</html>