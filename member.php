<?PHP
include(dirname(__FILE__).'/include/db_config.php');
include(dirname(__FILE__).'/include/function.inc.php');
?><!doctype html>
<html class="no-js" lang="en">
    <head>

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
        <section class="member-banner cover-background" style="background: url('<?PHP echo $imgBanner;?>') 50% 0;">
        </section>
        <!-- end slider -->





        <!-- intro -->
        <section class="position-relative member-card">
            <div class="container">
                <div class="row">
                    <!-- features item -->
                    <div class="col-md-6 col-sm-6 sm-margin-bottom-five">
                        <div class="text-center"><img src="images/aka/member/card.png" alt=""></div>
                    </div>
                    <!-- end features item -->
                    <!-- features item -->
                    <div class="col-md-6 col-sm-6 member-card-content">
                        <div class="headline-font white-text text-center">
                            <!--<p class="title-extra-large">AKA LIFESTYLE YAKINIKU</p>-->
                            <p class="body-font font-40 font-we">
                                <span class="red-text">à¸ªà¸¡à¸±à¸„à¸£à¸ªà¸¡à¸²à¸Šà¸´à¸à¸­à¸²à¸à¸°à¸§à¸±à¸™à¸™à¸µà¹‰ <span class="font-50 font-weight-700">à¹€à¸žà¸µà¸¢à¸‡ 200 à¸šà¸²à¸—</span></span>
                                <br><span class="font-50 font-weight-700">à¸£à¸±à¸šà¸ªà¹ˆà¸§à¸™à¸¥à¸”à¸ªà¸¹à¸‡à¸ªà¸¸à¸” 10% à¸—à¸±à¸™à¸—à¸µ <br>à¸ªà¸³à¸«à¸£à¸±à¸šà¹€à¸¡à¸™à¸¹à¸›à¸à¸•à¸´</span>
                                <br><span class="red-text">à¹à¸¥à¸°à¹€à¸¡à¸™à¸¹à¸šà¸¸à¸Ÿà¹€à¸Ÿà¹ˆà¸•à¹Œ à¸žà¸£à¹‰à¸­à¸¡à¸£à¸±à¸šà¸„à¸¹à¸›à¸­à¸‡à¸ªà¹ˆà¸§à¸™à¸¥à¸”</span>
                                <br>à¹à¸¥à¸°à¸ªà¸´à¸—à¸˜à¸´à¸›à¸£à¸°à¹‚à¸¢à¸Šà¸™à¹Œà¸¡à¸²à¸à¸¡à¸²à¸¢</p>
                            <a class="modal-popup" href="#modal-popup"><img src="images/aka/member/btn-condition.png" alt=""></a>
                        </div>
                        <!-- modal popup -->
                        <div id="modal-popup" class="white-popup-block mfp-hide col-lg-6 col-md-6 col-sm-7 col-xs-11 center-col bg-black modal-popup-main">
                            <div class="margin-four no-margin-lr text-center"><img src="images/aka/member/member-card.jpg" alt=""></div>
                            <p class="title-med white-text">à¹€à¸‡à¸·à¹ˆà¸­à¸™à¹„à¸‚
                            <br>- à¸œà¸¹à¹‰à¸–à¸·à¸­à¸šà¸±à¸•à¸£à¸¢à¸­à¸¡à¸£à¸±à¸šà¹à¸¥à¸°à¸•à¸à¸¥à¸‡à¸›à¸à¸´à¸šà¸±à¸•à¸´à¸•à¸²à¸¡à¸‚à¹‰à¸­à¸•à¸à¸¥à¸‡à¹à¸¥à¸°à¹€à¸‡à¸·à¹ˆà¸­à¸™à¹„à¸‚à¸‚à¸­à¸‡à¸£à¹‰à¸²à¸™
                            <br>- à¹‚à¸›à¸£à¸”à¹à¸ªà¸”à¸‡à¸šà¸±à¸•à¸£à¸à¹ˆà¸­à¸™à¸Šà¸³à¸£à¸°à¹€à¸‡à¸´à¸™à¸—à¸¸à¸à¸„à¸£à¸±à¹‰à¸‡à¹€à¸žà¸·à¹ˆà¸­à¸£à¸±à¸šà¸ªà¹ˆà¸§à¸™à¸¥à¸”à¸•à¸²à¸¡à¹€à¸‡à¸·à¹ˆà¸­à¸™à¹„à¸‚ à¸”à¸±à¸‡à¸™à¸µà¹‰
                            <br>- 10% à¹€à¸¡à¸·à¹ˆà¸­à¸Šà¸³à¸£à¸°à¸”à¹‰à¸§à¸¢à¹€à¸‡à¸´à¸™à¸ªà¸” / à¸£à¸±à¸šà¸ªà¹ˆà¸§à¸™à¸¥à¸” 5% à¹€à¸¡à¸·à¹ˆà¸­à¸Šà¸³à¸£à¸°à¸”à¹‰à¸§à¸¢à¸šà¸±à¸•à¸£à¹€à¸„à¸£à¸”à¸´à¸•
                            <br>- à¸šà¸±à¸•à¸£à¸™à¸µà¹‰à¹„à¸¡à¹ˆà¸ªà¸²à¸¡à¸²à¸£à¸–à¹ƒà¸Šà¹‰à¸£à¹ˆà¸§à¸¡à¸à¸±à¸šà¸£à¸²à¸¢à¸à¸²à¸£à¸ªà¹ˆà¸‡à¹€à¸ªà¸£à¸´à¸¡à¸à¸²à¸£à¸‚à¸²à¸¢à¹à¸¥à¸°à¸ªà¹ˆà¸§à¸™à¸¥à¸”à¸­à¸·à¹ˆà¸™à¹†
                            <br>- à¸—à¸²à¸‡à¸šà¸£à¸´à¸©à¸±à¸—à¸¯ à¸‚à¸­à¸ªà¸‡à¸§à¸™à¸ªà¸´à¸—à¸˜à¸´à¹Œà¹ƒà¸™à¸à¸²à¸£à¹€à¸›à¸¥à¸µà¹ˆà¸¢à¸™à¹à¸›à¸¥à¸‡à¹€à¸‡à¸·à¹ˆà¸­à¸™à¹„à¸‚à¹‚à¸”à¸¢à¹„à¸¡à¹ˆà¹à¸ˆà¹‰à¸‡à¸¥à¹ˆà¸§à¸‡à¸«à¸™à¹‰à¸²
                            <br>- à¸à¸£à¸¸à¸“à¸²à¹€à¸à¹‡à¸šà¸£à¸±à¸à¸©à¸²à¸šà¸±à¸•à¸£à¸™à¸µà¹‰à¹„à¸§à¹‰à¸­à¸¢à¹ˆà¸²à¸‡à¸”à¸µ à¸—à¸²à¸‡à¸šà¸£à¸´à¸©à¸±à¸—à¸¯ à¹„à¸¡à¹ˆà¸ªà¸²à¸¡à¸²à¸£à¸–à¸—à¸³à¸šà¸±à¸•à¸£à¹ƒà¸«à¸¡à¹ˆà¹„à¸”à¹‰à¸«à¸²à¸à¹€à¸à¸´à¸”à¸à¸²à¸£à¸Šà¸³à¸£à¸¸à¸”à¸«à¸£à¸·à¸­à¸ªà¸¹à¸à¸«à¸²à¸¢</p>
                        </div>
                        <!-- end modal popup -->
                    </div>
                    <!-- end features item -->
                </div>
            </div>
        </section>
        <!-- end intro -->





        <!-- news -->
        <section>
            <div class="container position-relative">
                <div class="japan-text">
                    <img src="images/aka/main/japan-text.png" alt="">
                </div>
                <div class="row blog-3col">
                    <!-- post item -->
                    <?PHP
                    $sqlMEM="select * from member where is_status='0' and member_type_id='1'";
                    $rsMem=mysql_query($sqlMEM);
                    $rowMem=mysql_fetch_array($rsMem);
                    $title=$rowMem['title'];
                    $tmb=$rowMem['tmb'];
                    $img=$rowMem['img'];
                    $des=$rowMem['des'];
                    $date=$rowMem['member_date'];
                    ?>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="member-thumb-head">
                            <img src="images/aka/member/header-privilege.png" alt="" style="width: 230px;">
                        </div>
                        <div class="blog-listing">
                            <div class="blog-image"><a class="modal-popup" href="#modal-popup-1"><img src="<?PHP echo $tmb;?>" alt=""></a></div>
                            <div class="blog-details">
                                <div class="blog-date"><?PHP echo $title;?></div>
                                <div class="blog-short-description headline-font yellow-text"><?PHP echo $date;?></div>
                            </div>
                            <!-- modal popup -->
                        <div id="modal-popup-1" class="white-popup-block mfp-hide col-lg-6 col-md-6 col-sm-7 col-xs-11 center-col bg-black modal-popup-main">
                            <div class="content-date"><?PHP echo $date;?></div>
                            <div class="title-extra-large white-text"><?PHP echo $title;?></div>
                            <div class="margin-four no-margin-lr text-center"><img src="<?PHP echo $img;?>" alt=""></div>
                            <p class="title-med white-text"><?PHP echo $des;?></p>
                        </div>
                        <!-- end modal popup -->
                        </div>
                    </div>
                    <!-- end post item -->
                    <?PHP
                    $sqlMEM="select * from member where is_status='0' and member_type_id='2'";
                    $rsMem=mysql_query($sqlMEM);
                    $rowMem=mysql_fetch_array($rsMem);
                    $title=$rowMem['title'];
                    $tmb=$rowMem['tmb'];
                    $img=$rowMem['img'];
                    $des=$rowMem['des'];
                    $date=$rowMem['member_date'];
                    ?>
                    <!-- post item -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="member-thumb-head">
                            <img src="images/aka/member/header-activity.png" alt="" style="width: 230px;">
                        </div>
                        <div class="blog-listing">
                            <div class="blog-image"><a class="modal-popup" href="#modal-popup-2"><img src="<?PHP echo $tmb;?>" alt=""></a></div>
                            <div class="blog-details">
                                <div class="blog-date"><?PHP echo $title;?></div>
                                <div class="blog-short-description headline-font yellow-text"><?PHP echo $date;?></div>
                            </div>
                            <!-- modal popup -->
                        <div id="modal-popup-2" class="white-popup-block mfp-hide col-lg-6 col-md-6 col-sm-7 col-xs-11 center-col bg-black modal-popup-main">
                            <div class="content-date"><?PHP echo $date;?></div>
                            <div class="title-extra-large white-text"><?PHP echo $title;?></div>
                            <div class="margin-four no-margin-lr text-center"><img src="<?PHP echo $img;?>" alt=""></div>
                            <p class="title-med white-text"><?PHP echo $des;?></p>
                        </div>
                        <!-- end modal popup -->
                        </div>
                    </div>
                    <!-- end post item -->
                    <?PHP
                    $sqlMEM="select * from member where is_status='0' and member_type_id='3'";
                    $rsMem=mysql_query($sqlMEM);
                    $rowMem=mysql_fetch_array($rsMem);
                    $title=$rowMem['title'];
                    $tmb=$rowMem['tmb'];
                    $img=$rowMem['img'];
                    $des=$rowMem['des'];
                    $date=$rowMem['member_date'];
                    ?>
                    <!-- post item -->
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="member-thumb-head">
                            <img src="images/aka/member/header-menu.png" alt="" style="width: 230px;">
                        </div>
                        <div class="blog-listing">
                            <div class="blog-image"><a class="modal-popup" href="#modal-popup-3"><img src="<?PHP echo $tmb;?>" alt=""></a></div>
                            <div class="blog-details">
                                <div class="blog-date"><?PHP echo $title;?></div>
                                <div class="blog-short-description headline-font yellow-text"><?PHP echo $date;?></div>
                            </div>
                            <!-- modal popup -->
                        <div id="modal-popup-3" class="white-popup-block mfp-hide col-lg-6 col-md-6 col-sm-7 col-xs-11 center-col bg-black modal-popup-main">
                            <div class="content-date"><?PHP echo $date;?></div>
                            <div class="title-extra-large white-text"><?PHP echo $title;?></div>
                            <div class="margin-four no-margin-lr text-center"><img src="<?PHP echo $img;?>" alt=""></div>
                            <p class="title-med white-text"><?PHP echo $des;?></p>
                        </div>
                        <!-- end modal popup -->
                        </div>
                    </div>
                    <!-- end post item -->
                </div>
            </div>
        </section>
        <!-- end news -->





        <section class="no-padding-bottom">
            <div class="container-fluid" style="background-image:url('images/aka/member/bg-member.png'); background-size: cover; background-position: 0 0; margin-top: -150px;">
                <div class="container">
                    <div class="japan-text-meat">
                        <img src="images/aka/main/japan-text-meat.png" alt="">
                    </div>
                </div>
            </div>
        </section>





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
