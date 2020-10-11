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
      Stecongroup | Contact
    </title>
    <!-- Define Charset -->
    <meta charset="utf-8">
    <!-- Responsive Metatag -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Page Description and Author -->
    <meta name="description" content="Olanda Stecongroup Project">
    <meta name="author" content="Olanda">
    
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
        <!-- End Header Logo & Navigation -->
      </header>
      <!-- End Header Section -->  

      <!-- Start Page Header -->
      <div class="page-header">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2 class="entry-title">Contact</h2>
              <div class="breadcrumb">
                <span>You are here:</span>
                <a href="#">Home</a>
                <span class="crumbs-spacer"><i class="fa fa-angle-double-right"></i></span>
                <span class="current">Contact</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- End Page Header -->        
      
      <!-- Start Content Section -->
      <section id="content">
        <div class="container">
          <div class="row">
            <div class="col-md-9">
              <h2 class="big-title">Contact Form</h2>   

              <!-- Start Contact Form -->
              {{ html()->form('POST', route('frontend.contact.send'))->open() }}
                          <div class="row">
                              <div class="col">
                                  <div class="form-group">
                                      {{ html()->label(__('validation.attributes.frontend.name'))->for('name') }}

                                      {{ html()->text('name', optional(auth()->user())->name)
                                          ->class('form-control')
                                          ->placeholder(__('validation.attributes.frontend.name'))
                                          ->attribute('maxlength', 191)
                                          ->required()
                                          ->autofocus() }}
                                  </div><!--form-group-->
                              </div><!--col-->
                          </div><!--row-->

                          <div class="row">
                              <div class="col">
                                  <div class="form-group">
                                      {{ html()->label(__('validation.attributes.frontend.email'))->for('email') }}

                                      {{ html()->email('email', optional(auth()->user())->email)
                                          ->class('form-control')
                                          ->placeholder(__('validation.attributes.frontend.email'))
                                          ->attribute('maxlength', 191)
                                          ->required() }}
                                  </div><!--form-group-->
                              </div><!--col-->
                          </div><!--row-->

                          <div class="row">
                              <div class="col">
                                  <div class="form-group">
                                      {{ html()->label(__('validation.attributes.frontend.phone'))->for('phone') }}

                                      {{ html()->text('phone')
                                          ->class('form-control')
                                          ->placeholder(__('validation.attributes.frontend.phone'))
                                          ->attribute('maxlength', 191)
                                          ->required() }}
                                  </div><!--form-group-->
                              </div><!--col-->
                          </div><!--row-->

                          <div class="row">
                              <div class="col">
                                  <div class="form-group">
                                      {{ html()->label(__('validation.attributes.frontend.message'))->for('message') }}

                                      {{ html()->textarea('message')
                                          ->class('form-control')
                                          ->placeholder(__('validation.attributes.frontend.message'))
                                          ->attribute('rows', 3)
                                          ->required() }}
                                  </div><!--form-group-->
                              </div><!--col-->
                          </div><!--row-->

                          @if(config('access.captcha.contact'))
                              <div class="row">
                                  <div class="col">
                                      @captcha
                                      {{ html()->hidden('captcha_status', 'true') }}
                                  </div><!--col-->
                              </div><!--row-->
                          @endif

                          <div class="row">
                              <div class="col">
                                  <div class="form-group mb-0 clearfix">
                                      {{ form_submit(__('labels.frontend.contact.button')) }}
                                  </div><!--form-group-->
                              </div><!--col-->
                          </div><!--row-->
                      {{ html()->form()->close() }}    
              <!-- End Contact Form -->

            </div>
            <div class="col-md-3">
              <h2 class="big-title">Headquarters</h2>   
              <div class="information">              
                <div class="contact-datails">
                  <p><i class="icon-pointer"></i> 12 Tottenham Road, London, England.</p>
                  <p><i class="icon-call-out"></i> +880 123 456 789 </p>
                  <p><i class="icon-envelope"></i> info@wingtheme.com </p>
                  <p><i class="icon-clock"></i> Sun-Sat (9am-5pm)</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Content Section  -->
    
      <!-- Start Footer Section -->
      @include('frontend.includes.footer')
      <!-- End Footer Section -->

      <!-- Start Copyright -->
      @include('frontend.includes.Copyright')

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
    <script type="text/javascript" src="assets/js/form-validator.min.js"></script>  
    <script type="text/javascript" src="assets/js/contact-form-script.js"></script>


    <!-- Revelosition slider js -->
    <script src="assets/js/jquery.themepunch.revolution.min.js"></script>
    <script src="assets/js/jquery.themepunch.tools.min.js"></script>

  </body>
</html>
