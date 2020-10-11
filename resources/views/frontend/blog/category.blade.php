<!doctype html>
<!--[if IE 8 ]>
<html class="ie ie8" lang="en">
<![endif]-->
<!--[if (gte IE 9)|!(IE)]>
<html lang="en" class="no-js">
<![endif]-->
<html lang="en">
  <head>
    <!-- Basic -->
    <title>
      Stecongroup | Homepage
    </title>
    <!-- Define Charset -->
    <meta charset="utf-8">
    <!-- Responsive Metatag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Page Description and Author -->
    <meta name="description" content="ConBiz - Responsive HTML5 Template">
    <meta name="author" content="Grayrids">
    
    <!-- Bootstrap CSS  -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css" type="text/css" media="screen">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css" type="text/css" media="screen">
    <!-- Icon -->
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.css" type="text/css" media="screen">
    <!-- ConBiz Iocn -->
    <link rel="stylesheet" href="assets/fonts/flaticon.css" type="text/css" media="screen">
    <!-- rs style -->
    <link rel="stylesheet" type="text/css" href="assets/css/settings.css" media="screen">
    <!-- ConBiz CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="assets/css/main.css" media="screen">
    <!-- Responsive CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css" media="screen">
    <!-- Css3 Transitions Styles  -->
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css" media="screen">
    <!-- Slicknav  -->
    <link rel="stylesheet" type="text/css" href="assets/css/slicknav.css" media="screen">

    <!-- Selected Preset -->
    <link rel="stylesheet" type="text/css" href="assets/css/colors/emerald.css" media="screen" />

    <!-- Color CSS Styles  -->
    <link rel="stylesheet" type="text/css" href="assets/css/colors/emerald.css" title="emerald" media="screen" />

    <!--[if IE 8]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Full Body Container -->
    <div id="container">
      <!-- Start Header Section -->
      <header id="header-wrap" class="site-header clearfix">
        <!-- Start Top Bar -->
        @include('frontend.includes.top_bar')
        <!-- End Top Bar -->

        <!-- Start  Logo & Navigation  -->
        @include('frontend.includes.nav_bar')
        <!-- End Header Logo & Navigation -->
      </header>
      <!-- End Header Section --> 

      <!-- Start Page Header -->
      @include('frontend.includes.breadlink')
      <!-- End Page Header -->        
      
      <!-- Divider -->
      <div class="hr5" style="margin-top:50px; margin-bottom:55px;"></div>

      <!-- Start Service -3 Section -->
      <div class="service-3">
        <div class="container">
          <div class="row">
            @foreach($categories as $category)
              <div class="col-md-4 col-sm-4">
                <div class="service-item">
                  <div class="icon">
                    <i class="flaticon-shovel23"></i>
                  </div>
                  <h3><a href="#">{{ $category->name }}</a></h3>
                  <p>{{ $category->description }}</p>
                  <a href="#" class="btn btn-effect">List All <i class="icon-arrow-right"></i></a>
                </div>
              </div>

              @if ($loop->iteration % 3 === 0 && !($loop->last))
                </div>
                <!-- Divider -->
                <div class="hr5" style="margin-top:30px; margin-bottom:35px;"></div>
                <div class="row">
              @endif

            @endforeach     
          </div>

          <!-- Divider -->
          <div class="hr5" style="margin-top:50px; margin-bottom:55px;"></div>

        </div>
      </div>
      <!-- End Service -3 Section -->
     
      </section>
      <!-- End Content Section  -->
    
      <!-- Start Footer Section -->
      @include('frontend.includes.footer')
      <!-- End Footer Section -->

      <!-- Start Copyright -->
      @include('frontend.includes.Copyright')

    </div>
    <!-- End Full Body Container -->

    <!-- Main JS  -->
    <script type="text/javascript" src="assets/js/jquery-min.js"></script>      
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="assets/js/modernizrr.js"></script>
    <script type="text/javascript" src="assets/js/nivo-lightbox.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.mixitup.min.js"></script>
    <script type="text/javascript" src="assets/js/jquery.appear.js"></script>
    <script type="text/javascript" src="assets/js/count-to.js"></script>
    <script type="text/javascript" src="assets/js/jquery.parallax.js"></script>
    <script type="text/javascript" src="assets/js/smooth-scroll.js"></script>
    <script type="text/javascript" src="assets/js/jquery.slicknav.js"></script>
    <script type="text/javascript" src="assets/js/main.js"></script>

    <!-- Revelosition slider js -->
    <script src="assets/js/jquery.themepunch.revolution.min.js"></script>
    <script src="assets/js/jquery.themepunch.tools.min.js"></script>

  </body>
</html>
