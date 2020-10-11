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

      @include('frontend.includes.breadlink')
      
      <!-- Start Content Section -->
      <section id="content">
        <!-- Start Products Section -->
        <div class="container-fullscreen">
          <div class="container">
            <div class="row">
              <!-- Products controls -->
              <div class="controls text-center">
                <a class="filter active" data-filter="all">All</a>
                <a class="filter" data-filter=".buildings">Drill</a>
                <a class="filter" data-filter=".hospital">Hand Tools</a>
                <a class="filter" data-filter=".school">Tools</a>
              </div>
              <!-- End Products Controls -->

              <!-- Products  -->
              <div id="products">
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 mix buildings school">
                  <div class="product">
                    <div class="post-featured">
                      <img src="assets/img/shop/img1.png" alt="">
                      <div class="esg-overlay">
                        <div class="icon">
                          <a href="assets/img/shop/img1.png" class="lightbox"><i class="icon-magnifier"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="post-content">
                      <h4>Hammer Drill</h4>
                      <div class="product-price">
                        <span class="amount">&#8358;199.00</span>
                      </div>
                      <a href="#" class="btn btn-cart"><i class="icon-basket"></i> Add to cart</a>
                    </div>
                  </div>           
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 mix buildings hospital">
                  <div class="product">
                    <div class="post-featured">
                      <img src="assets/img/shop/img2.png" alt="">
                      <div class="esg-overlay">
                        <div class="icon">
                          <a href="assets/img/shop/img2.png" class="lightbox"><i class="icon-magnifier"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="post-content">
                      <h4>Brick Trowel</h4>
                      <div class="product-price">
                        <span class="amount">&#8358;39.00</span>
                      </div>
                      <a href="#" class="btn btn-cart"><i class="icon-basket"></i> Add to cart</a>
                    </div>
                  </div>            
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 mix buildings mall">
                  <div class="product">
                    <div class="post-featured">
                      <img src="assets/img/shop/img3.png" alt="">
                      <div class="esg-overlay">
                        <div class="icon">
                          <a href="assets/img/shop/img3.png" class="lightbox"><i class="icon-magnifier"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="post-content">
                      <h4>Concrete Grinders</h4>
                      <div class="product-price">
                        <span class="amount">&#8358;199.00</span>
                      </div>
                      <a href="#" class="btn btn-cart"><i class="icon-basket"></i> Add to cart</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 mix school">
                  <div class="product">
                    <div class="post-featured">
                      <img src="assets/img/shop/img4.png" alt="">
                      <div class="esg-overlay">
                        <div class="icon">
                          <a href="assets/img/shop/img4.png" class="lightbox"><i class="icon-magnifier"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="post-content">
                      <h4>Laser Levels</h4>
                      <div class="product-price">
                        <span class="amount">&#8358;89.00</span>
                      </div>
                      <a href="#" class="btn btn-cart"><i class="icon-basket"></i> Add to cart</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 mix buildings school">
                  <div class="product">
                    <div class="post-featured">
                      <img src="assets/img/shop/img5.png" alt="">
                      <div class="esg-overlay">
                        <div class="icon">
                          <a href="assets/img/shop/img5.png" class="lightbox"><i class="icon-magnifier"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="post-content">
                      <h4>Cleaning Machines</h4>
                      <div class="product-price">
                        <span class="amount">&#8358;179.00</span>
                      </div>
                      <a href="#" class="btn btn-cart"><i class="icon-basket"></i> Add to cart</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 mix buildings mall">
                  <div class="product">
                    <div class="post-featured">
                      <img src="assets/img/shop/img6.png" alt="">
                      <div class="esg-overlay">
                        <div class="icon">
                          <a href="assets/img/shop/img6.png" class="lightbox"><i class="icon-magnifier"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="post-content">
                      <h4>Gaulk Guns</h4>
                      <div class="product-price">
                        <span class="amount">&#8358;49.00</span>
                      </div>
                      <a href="#" class="btn btn-cart"><i class="icon-basket"></i> Add to cart</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 mix buildings mall">
                  <div class="product">
                    <div class="post-featured">
                      <img src="assets/img/shop/img7.png" alt="">
                      <div class="esg-overlay">
                        <div class="icon">
                          <a href="assets/img/shop/img7.png" class="lightbox"><i class="icon-magnifier"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="post-content">
                      <h4>Concrete Saws</h4>
                      <div class="product-price">
                        <span class="amount">&#8358;749.00</span>
                      </div>
                      <a href="#" class="btn btn-cart"><i class="icon-basket"></i> Add to cart</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 col-xs-12 mix buildings mall">
                  <div class="product">
                    <div class="post-featured">
                      <img src="assets/img/shop/img8.png" alt="">
                      <div class="esg-overlay">
                        <div class="icon">
                          <a href="assets/img/shop/img8.png" class="lightbox"><i class="icon-magnifier"></i></a>
                        </div>
                      </div>
                    </div>
                    <div class="post-content">
                      <h4>Cement Mixers</h4>
                      <div class="product-price">
                        <span class="amount">&#8358;229.00</span>
                      </div>
                      <a href="#" class="btn btn-cart"><i class="icon-basket"></i> Add to cart</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- End Products -->

            </div>
          </div>        
        </div>
        <!-- End Products Section -->
      </section>
      <!-- End Content Section  -->
    
      <!-- Start Footer Section -->
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
