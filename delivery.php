<?PHP
$nonce = bin2hex(openssl_random_pseudo_bytes(8));
include(dirname(__FILE__).'/include/db_config.php');
include(dirname(__FILE__).'/include/function.inc.php');
?>
<!doctype html>
<html class="no-js" lang="en">
<head>
    
    <?PHP
        $page='menu';
        $sqlBanner="SELECT * FROM `page_banner` WHERE `is_status` = '0' AND `page_name` = '".$page."'";
        $rsBanner=mysql_query($sqlBanner);
        $rowBanner=mysql_fetch_array($rsBanner);
        $imgBanner = $rowBanner['img'];
    ?>
    <title><?PHP echo $rowBanner['meta_title'];?></title>
    <meta name="description" content="<?PHP echo $rowBanner['meta_description'];?>">
    <meta name="keywords" content="<?PHP echo $rowBanner['meta_keywords'];?>">
    <meta charset="utf-8">
    <meta name="author" content="AKA Yakiniku">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,maximum-scale=1" />
    <meta property="og:title" content="AKA Yakiniku"/>
    <meta property="og:type" content="restaurant.restaurant"/>
    <meta property="og:image" content="http://www.akayakiniku.com/images/aka/menu/banner.jpg"/>
    <meta property="og:description" content="à¸£à¹‰à¸²à¸™à¸­à¸²à¸«à¸²à¸£à¸à¸µà¹ˆà¸›à¸¸à¸™ AKA YAKINIKU à¹ƒà¸«à¹‰à¸šà¸£à¸´à¸à¸²à¸£ à¸—à¸±à¹‰à¸‡à¹à¸šà¸š A LA CART à¹à¸¥à¸° BUFFET à¹‚à¸”à¸¢à¸¡à¸µà¸ªà¸²à¸‚à¸²à¸¡à¸²à¸à¸à¸§à¹ˆà¸² 17 à¸ªà¸²à¸‚à¸² à¹ƒà¸™à¸›à¸£à¸°à¹€à¸—à¸¨à¹„à¸—à¸¢ à¸„à¸£à¸­à¸šà¸„à¸¥à¸¸à¸¡à¸žà¸·à¹‰à¸™à¸—à¸µà¹ˆà¸à¸£à¸¸à¸‡à¹€à¸—à¸žà¸¡à¸«à¸²à¸™à¸„à¸£à¹à¸¥à¸°à¹€à¸¡à¸·à¸­à¸‡à¸«à¸¥à¸±à¸à¹† à¸•à¸²à¸¡à¸ à¸¹à¸¡à¸´à¸ à¸²à¸„à¸•à¹ˆà¸²à¸‡à¹† à¸‚à¸­à¸‡à¸›à¸£à¸°à¹€à¸—à¸¨"/>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9754282630311346" crossorigin="anonymous"></script>
    <?PHP
    $sqlBanner="SELECT * FROM `delivery_banner` WHERE `is_status` = 0 ORDER BY `order_hot` ASC";
    $rsBanner=mysql_query($sqlBanner);
    ?>
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
    </head>
    <body style="background-image:url('images/aka/main/bg-main.jpg'); background-size: cover; background-position: 0 0;">
        <!-- navigation panel -->
        <?PHP include('inc-nav.php');?>
        <!-- end navigation panel -->





        <!-- slider -->
        <section id="slider" class="no-padding" style="margin-top: -20px;"> 
            <div id="owl-demo" class="owl-carousel owl-theme owl-half-slider light-pagination square-pagination dark-pagination-without-next-prev-arrow corporate-slider">
                <!-- slider item -->
            <?php  
            while ($rowBanner=mysql_fetch_array($rsBanner)) {
            ?>
                <div class="item owl-bg-img" style="background-image:url('<?php echo $rowBanner['img'] ?>');">
                    <div class="container position-relative">
                    </div>
                </div>
            <?php  
            }
            ?>
                <!-- end slider item -->
            </div>
        </section>
        <!-- end slider -->





        <!-- intro delivery -->
        <section class="position-relative no-padding-bottom">
            <div class="bg-banner-bottom">
                <img src="images/aka/main/bg-banner-bottom.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="delivery-intro">
                            <h1 class="white-text" style="margin-bottom: 10px;">AKA DELIVERY</h1>
                            <p class="white-text title-med text-center">à¸ªà¹ˆà¸‡à¸•à¸£à¸‡à¸„à¸§à¸²à¸¡à¸­à¸´à¹ˆà¸¡à¸ˆà¸¸à¸ à¸­à¸£à¹ˆà¸­à¸¢à¸–à¸¶à¸‡à¸šà¹‰à¸²à¸™ <br>à¸ªà¸±à¹ˆà¸‡ "à¸­à¸²à¸à¸°" à¸–à¸¶à¸‡à¸šà¹‰à¸²à¸™à¹„à¸”à¹‰à¹à¸¥à¹‰à¸§!! à¸—à¸µà¹ˆ <b>LINE MAN | GRAB FOOD | GET!</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end intro delivery -->





        <!-- delivery -->
        <section class="position-relative" style="padding: 40px 0 40px 0;">
            <div class="container position-relative">
                <div class="row">
                    <!-- post item -->
                <?php  
                $q_delivery_brand = getAllDetail("delivery_brand","","order_hot asc");
                while ( $row = mysql_fetch_array($q_delivery_brand)) {
                ?>
                    <div class="col-md-4 col-sm-4 col-xs-4 blog-listing">
                        <div class="blog-image"><a href="<?php echo $row['link'] ?>" target="_blank"><img src="<?php echo $row['img'] ?>" alt=""></a></div>
                        <div class="blog-details" style="margin-top: 30px; text-align: center;">
                            <div class="blog-short-description headline-font white-text" style="width: 100%;"><?php echo $row['name'] ?></div>
                        </div>
                    </div>
                <?php  
                }
                ?>
                    <!-- end post item -->
                </div>
            </div>
        </section>
        <!-- end delivery -->




        <!-- delivery -->
        <section class="position-relative" style="padding: 0 0 80px 0;">
            <div class="container position-relative">
                <div class="delivery-pic">
                <?php  
                $row_menu = getData("1","delivery_menu");
                ?>
                    <img src="<?php echo $row_menu['img']; ?>" alt="Delivery Menu">
                </div>
            </div>
        </section>
        <!-- end delivery -->




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
