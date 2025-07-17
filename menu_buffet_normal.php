<?PHP
include(dirname(__FILE__).'/include/db_config.php');
?><!doctype html>
<html class="no-js" lang="en">

<head>
    
    <?PHP
                $page='menu';
                $sqlBanner="SELECT * FROM `page_banner` WHERE `is_status` = '0' AND `page_name` = '".$page."'";
                $rsBanner=mysql_query($sqlBanner);
                $rowBanner=mysql_fetch_array($rsBanner);
                $imgBanner = $rowBanner['img'];
        ?>
        <?PHP include('inc-meta.php');?>
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/apple-touch-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
    <!-- animation -->
    <link rel="stylesheet" href="css/animate.css" />
    <!-- bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <!-- et line icon -->
    <link rel="stylesheet" href="css/et-line-icons.css" />
    <!-- font-awesome icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <!-- revolution slider -->
    <link rel="stylesheet" href="css/extralayers.css" />
    <link rel="stylesheet" href="css/settings.css" />
    <!-- magnific popup -->
    <link rel="stylesheet" href="css/magnific-popup.css" />
    <!-- owl carousel -->
    <link rel="stylesheet" href="css/owl.carousel.css" />
    <link rel="stylesheet" href="css/owl.transitions.css" />
    <link rel="stylesheet" href="css/full-slider.css" />
    <!-- text animation -->
    <link rel="stylesheet" href="css/text-effect.css" />
    <!-- hamburger menu  -->
    <link rel="stylesheet" href="css/menu-hamburger.css" />
    <!-- common -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- responsive -->
    <link rel="stylesheet" href="css/responsive.css" />
    <!-- aka -->
    <link rel="stylesheet" href="css/aka.css" />
    <!--[if IE]>
            <link rel="stylesheet" href="css/style-ie.css" />
        <![endif]-->
    <!--[if IE]>
            <script src="js/html5shiv.js"></script>
        <![endif]-->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9754282630311346" crossorigin="anonymous"></script>
</head>

<body style="background-image:url('images/aka/main/bg-main.jpg'); background-size: cover; background-position: 0 0;">
    <!-- navigation panel -->
    <?PHP include('inc-nav.php');?>
    <!-- end navigation panel -->

    <!-- slider -->
    <section class="content-top-margin page-title parallax parallax-fix" style="background: url('img_shabu/banner_yakiniku.jpg') 50% 0; margin-top: -20px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <!-- page title -->
                    <p class="white-text font-40 sub-title animated fadeInDown">PASSION FOR GRILL</p>
                    <!-- end page title -->
                    <!-- page title tagline -->
                    <p class="white-text headline-font font-50 animated fadeInUp">AKA YAKINIKU</p>
                    <!-- end title tagline -->
                </div>
            </div>
        </div>
    </section>
    <!-- end slider -->
    <!-- intro -->
    <section class="position-relative">

        <div class="bg-banner-bottom">
            <img src="images/aka/main/bg-banner-bottom.png" alt="">
        </div>

        <div class="container">

            <div class="row">
                <div class="menu-header">
                    <div class="col-md-6 col-xs-6">
                        <div class="headline-font title-med gray-text">
                            <a href="menu_buffet_diy.php">DIY</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-xs-6">
                        <div class="headline-font title-med white-text">NORMAL</div>
                    </div>
                    <!-- <div class="col-md-4 col-xs-4">
                        <div class="headline-font title-med gray-text">
                            <a href="menu_buffet_tourist.php">TOURIST</a>
                        </div>
                    </div> -->
                    <div class="col-md-12 col-xs-12">
                        <img src="images/aka/menu/line-2.png" alt="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <!-- tab -->
                    <div class="tab-style1">
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <!-- tab navigation -->
                                <ul class="nav nav-tabs nav-tabs-light text-center image-tab">
                                    <li class="active menu-thumb-buffet"><a href="#tab_sec1" data-toggle="tab"><p>RED BUFFET</p><img src="images/2025/normal/button_normal_red_225x90_01.png" alt=""></a></li>
                                    <li class="menu-thumb-buffet"><a href="#tab_sec2" data-toggle="tab"><p>SILVER BUFFET</p><img src="images/2025/normal/button_normal_silver_225x90_02.png" alt=""></a></li>
                                    <li class="menu-thumb-buffet"><a href="#tab_sec3" data-toggle="tab"><p>GOLD BUFFET</p><img src="images/2025/normal/button_normal_gold_225x90_03.png" alt=""></a></li>
                                    <li class="menu-thumb-buffet"><a href="#tab_sec4" data-toggle="tab"><p>PLATINUM BUFFET</p><img src="images/2025/normal/button_normal_platinum_225x90_04.png" alt=""></a></li>
                                </ul>
                                <!-- tab end navigation -->
                            </div>
                        </div>
                        <!-- tab content section -->
                        <div class="tab-content">
                            <!-- tab content -->
                            <div class="tab-pane med-text fade in active" id="tab_sec1">
                                <div class="row">
                                    <div class="col-md-12 text-center buffet399-desktop">
                                        <img src="images/2025/normal/WEB_Normal_RED.jpg" alt="">
                                    </div>
                                    <div class="col-md-12 text-center buffet399-mobile">
                                        <img src="images/2025/normal/MOBLIE_Normal_RED.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- end tab content -->
                            <!-- tab content -->
                            <div class="tab-pane fade in" id="tab_sec2">
                                <div class="row">
                                    <div class="col-md-12 text-center buffet499-desktop">
                                        <img src="images/2025/normal/WEB_Normal_SILVER.jpg" alt="">
                                    </div>
                                    <div class="col-md-12 text-center buffet499-mobile">
                                        <img src="images/2025/normal/MOBLIE_Normal_SILVER.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- end tab content -->
                            <!-- tab content -->
                            <div class="tab-pane fade in" id="tab_sec3">
                                <div class="row">
                                    <div class="col-md-12 text-center buffet499-desktop">
                                        <img src="images/2025/normal/WEB_Normal_GOLD.jpg" alt="">
                                    </div>
                                    <div class="col-md-12 text-center buffet499-mobile">
                                        <img src="images/2025/normal/MOBLIE_Normal_GOLD.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- end tab content -->
                                <!-- tab content -->
                            <div class="tab-pane fade in" id="tab_sec4">
                                <div class="row">
                                    <div class="col-md-12 text-center buffet499-desktop">
                                        <img src="images/2025/normal/WEB_Normal_PLATINUM.jpg" alt="">
                                    </div>
                                    <div class="col-md-12 text-center buffet499-mobile">
                                        <img src="images/2025/normal/MOBLIE_Normal_PLATINUM.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <!-- end tab content -->
                        </div>
                        <!-- end tab content section -->
                    </div>
                    <!-- end tab -->
                </div><!-- end col -->
            </div><!-- end row -->

        </div><!-- end container -->
    </section>
    <!-- end intro -->

    <!-- footer -->
    <?PHP include('inc-footer.php');?>
    <!-- end footer -->
    <!-- javascript libraries / javascript files set #1 -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/modernizr.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/bootstrap-hover-dropdown.js"></script>
    <script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
    <script type="text/javascript" src="js/skrollr.min.js"></script>
    <script type="text/javascript" src="js/smooth-scroll.js"></script>
    <!-- jquery appear -->
    <script type="text/javascript" src="js/jquery.appear.js"></script>
    <!-- animation -->
    <script type="text/javascript" src="js/wow.min.js"></script>
    <!-- page scroll -->
    <script type="text/javascript" src="js/page-scroll.js"></script>
    <!-- easy piechart-->
    <script type="text/javascript" src="js/jquery.easypiechart.js"></script>
    <!-- parallax -->
    <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>
    <!--portfolio with shorting tab -->
    <script type="text/javascript" src="js/jquery.isotope.min.js"></script>
    <!-- owl slider  -->
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <!-- magnific popup  -->
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/popup-gallery.js"></script>
    <!-- text effect  -->
    <script type="text/javascript" src="js/text-effect.js"></script>
    <!-- revolution slider  -->
    <script type="text/javascript" src="js/jquery.tools.min.js"></script>
    <script type="text/javascript" src="js/jquery.revolution.js"></script>
    <!-- counter  -->
    <script type="text/javascript" src="js/counter.js"></script>
    <!-- countTo -->
    <script type="text/javascript" src="js/jquery.countTo.js"></script>
    <!-- fit videos  -->
    <script type="text/javascript" src="js/jquery.fitvids.js"></script>
    <!-- imagesloaded  -->
    <script type="text/javascript" src="js/imagesloaded.pkgd.min.js"></script>
    <!-- hamburger menu-->
    <script type="text/javascript" src="js/classie.js"></script>
    <script type="text/javascript" src="js/hamburger-menu.js"></script>
    <!-- setting -->
    <script type="text/javascript" src="js/main.js"></script>
    <?PHP include('inc-script-nav.php');?>
</body>

</html>
