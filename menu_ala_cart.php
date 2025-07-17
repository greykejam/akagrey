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
        <style type="text/css">
            .itemActive {
                color: #ffffff !important;
            }
            .thumbActive img{
                opacity: 1 !important;
                transition-timing-function: ease-in-out !important;
                -moz-transition-timing-function: ease-in-out !important;
                -webkit-transition-timing-function: ease-in-out !important;
                -o-transition-timing-function: ease-in-out !important;
                transition-duration: .2s !important;
                -moz-transition-duration: .2s !important;
                -webkit-transition-duration: .2s !important;
                -o-transition-duration: .2s !important;
            }
        </style>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-9754282630311346" crossorigin="anonymous"></script>
</head>

<body style="background-image:url('images/aka/main/bg-main.jpg'); background-size: cover; background-position: 0 0;">
    <!-- navigation panel -->
    <?PHP include('inc-nav.php');?>
    <!-- end navigation panel -->
    
    <!-- slider -->
    <section class="content-top-margin page-title parallax parallax-fix" style="background: url('<?PHP echo $imgBanner;?>') 50% 0; margin-top: -20px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <!-- page title -->
                    <p class="white-text font-40 sub-title animated fadeInDown">à¸­à¸²à¸à¸° à¸£à¹‰à¸²à¸™à¸­à¸²à¸«à¸²à¸£à¸›à¸´à¹‰à¸‡à¸¢à¹ˆà¸²à¸‡à¸ªà¹„à¸•à¸¥à¹Œà¸à¸µà¹ˆà¸›à¸¸à¹ˆà¸™</p>
                    <!-- end page title -->
                    <!-- page title tagline -->
                    <p class="white-text headline-font font-50 animated fadeInUp">MENU</p>
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
            <div class="row menu-header">
                <div class="col-md-5 col-xs-5">
                    <div class="headline-font title-med white-text">A LA CART</div>
                </div>
                <div class="col-md-2 col-xs-2">
                    <img src="images/aka/menu/line-1.png" alt="">
                </div>
                <div class="col-md-5 col-xs-5">
                    <div class="headline-font title-med gray-text">
                        <!-- <a href="menu_buffet.php">BUFFET</a> -->
                        <a href="menu_buffet.php">BUFFET</a>
                    </div>
                </div>
                <div class="col-md-12 line-menu-header">
                    <img src="images/aka/menu/line-2.png" alt="">
                </div>
            </div>






                <div class="col-md-12">


                    <!-- tab -->
                    <div class="row">
                        <!-- brand logo slider -->
                        <div id="menu-slider" class="owl-carousel owl-theme light-pagination owl-no-pagination owl-prev-next-simple">
                            <?PHP
                            $sqlCate = "select * from category where is_status='0' order by order_hot asc";
                            $rsCate = mysql_query($sqlCate);
                            $i=0;
                            while ($rowCate=mysql_fetch_array($rsCate)) {
                                if($i==0){
                                    $itemActive='itemActive';
                                }else{
                                    $itemActive='';
                                }
                                echo '<div class="item menu-cate-list ">
                                <h5 class="margin-ten no-margin-bottom xs-margin-top-five ">'.$rowCate['title'].'</h5>
                                <a href="#tab_sec'.$rowCate['cate_id'].'" data-id="tab_sec'.$rowCate['cate_id'].'" data-toggle="tab"><img src="'.$rowCate['img'].'" alt="" /></a>
                            </div>';
                            $i++;
                            }
                            ?>
                        </div>
                        <a data-slide="prev" href="#catePrev" class="left carousel-control prevCate"> <img alt="" src="images/aka/menu/menu-arrow-1.png"> </a>
                        <a data-slide="next" href="#cateNext" class="right carousel-control nextCate"> <img alt="" src="images/aka/menu/menu-arrow-2.png"> </a>
                        <!-- end brand logo slider -->
                    </div>
                    <!-- end tab -->


                    <!-- tab content section -->
                    <div class="tab-content">
                        <!-- tab content set 1 -->
                        <div class="tab-pane med-text fade in active margin-two no-margin-bottom" id="tab_sec">
                            <div class="row menu-detail-main">
                            <div class="col-md-12">
                                <!-- detail -->
                                <div class="tab-content text-center" style="margin: 30px 0;">
                                <img src="images/new-menu.png">
                                </div>
                            </div>
                            </div>
                        </div>
                    <!-- end tab content section -->
                        <?PHP
                            $sqlCate = "select * from category where is_status='0' order by order_hot asc";
                            $rsCate = mysql_query($sqlCate);
                            $i=0;
                            $thumbScript="";
                            $thumbNav="";
                            $thumbMenu="";
                            while ($rowCate=mysql_fetch_array($rsCate)) {
                                $cateID=$rowCate['cate_id'];
                                if($i==0){
                                    $active='active';
                                    $first='first';
                                }else{
                                    $active='';
                                    $first='';
                                }
                                $thumbScript.='$("#thumb-slider'.$cateID.'").owlCarousel({
        navigation: false,
        items: 5,
        itemsDesktop: [1200, 3],
        itemsTablet: [800, 3],
        itemsMobile: [700, 3]
    });';
                                echo '<div class="tab-pane med-text fade in '.$first.' margin-two no-margin-bottom" id="tab_sec'.$cateID.'">
                            <div class="row menu-detail-main">
                            <div class="col-md-12"><div class="tab-content">';
                                $sqlMenu="select * from menu where is_status='0' and cate_id='".$cateID."'";
                                $rsMenu=mysql_query($sqlMenu);
                                $menu=0;
                                $thumb="";
                                
                                while ($rowMenu=mysql_fetch_array($rsMenu)) {
                                    $menuID= $rowMenu['menu_id'];
                                    if($menu==0){
                                        $active='active';
                                        $first='first';
                                        $thumbActive="thumbActive";
                                    }else{
                                        $active='';
                                        $thumbActive="";
                                        $first='';
                                    }
                                    echo '<div class="tab-pane med-text fade in '.$first.' margin-two no-margin-bottom" id="tab_detail_'.$menuID.'">
                                            <div class="menu-sign">
                                                <img src="'.$rowCate['small_img'].'" alt="">
                                            </div>
                                            <div class="menu-big-pic">
                                                <img src="'.$rowMenu['img'].'" alt="">
                                            </div>
                                            <div class="menu-price fadeInDown">
                                                <div class="headline-font white-text title-small border-title">'.$rowMenu['title'].'
                                                    <br><span class="body-font gray-text title-large">'.$rowMenu['des'].'</span></div>
                                                <div class="white-text title-extra-large price">'.number_format($rowMenu['price'], 0, '.', ',').' à¸šà¸²à¸— <span class="gray-text">/ BAHT</span></div>';
                                    if($rowMenu['normal_price']!='0'){
                                        echo '<div class="white-text title-small price">(à¸ˆà¸²à¸à¸£à¸²à¸„à¸²à¸›à¸à¸•à¸´ '.$rowMenu['normal_price'].' à¸šà¸²à¸—)</div>';
                                    }
                                    if($rowMenu['a_la_carte']!='0'){
                                        echo '<div class="white-text title-small price">A LA CARTE '.$rowMenu['a_la_carte'].' à¸šà¸²à¸— <span class="gray-text">/ BAHT</span></div>';
                                    }
                                            echo '</div></div>';
                                    $thumb.='<div class="item menu-thumb menu-thumb'.$cateID.' '.$thumbActive.'">
                                                <a href="#tab_detail_'.$menuID.'" data-toggle="tab"><img src="'.$rowMenu['tmb'].'" alt="" /></a>
                                            </div>';
                                    $thumbMenu.='
                                    $("#thumb-slider'.$cateID.' .owl-item").click(function(){
                                        $(".menu-thumb'.$cateID.'").removeClass(\'thumbActive\');
                                        $(this).find(".menu-thumb'.$cateID.'").addClass(\'thumbActive\');
                                    });';
                                    $menu++;
                                }
                                echo '</div>
                                <!-- end detail -->

                                <!-- thumb -->
                                <div class="col-md-12" style="margin : 50px 0;">
                                    <div class="row no-padding">
                                    <div id="thumb-slider'.$cateID.'" class="owl-carousel owl-theme light-pagination owl-no-pagination owl-prev-next-simple">';
                                $thumbNav.='
                                    var owl'.$cateID.' = $("#thumb-slider'.$cateID.'");
                                    owl'.$cateID.'.owlCarousel();
                                    // Custom Navigation Events
                                    $(".menuNext'.$cateID.'").click(function(){
                                        owl'.$cateID.'.trigger(\'owl.next\');
                                    })
                                    $(".menuPrev'.$cateID.'").click(function(){
                                        owl'.$cateID.'.trigger(\'owl.prev\');
                                    });';
                                echo $thumb;
                                echo '</div>
                                        <a data-slide="prev" href="#menuPrev'.$cateID.'" class="left carousel-control menuPrev'.$cateID.'"> <img alt="" src="images/aka/menu/menu-arrow-1.png"> </a>
                                        <a data-slide="next" href="#menuNext'.$cateID.'" class="right carousel-control menuNext'.$cateID.'"> <img alt="" src="images/aka/menu/menu-arrow-2.png"> </a>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>';
                            $i++;
                            }
                           
                            ?>


                    </div>
                    <!-- end tab content section -->


                </div>






        </div>
        </div>
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
    <script type="text/javascript">
    $(document).ready(function () {
        var owl = $("#menu-slider");
        owl.owlCarousel();
        // Custom Navigation Events
        $(".nextCate").click(function(){
            owl.trigger('owl.next');
        })
        $(".prevCate").click(function(){
            owl.trigger('owl.prev');
        });
        $("#menu-slider .owl-item").click(function(){
            $(".menu-cate-list h5").removeClass('itemActive');
            $(this).find(".menu-cate-list h5").addClass('itemActive');
            $(".first").addClass('active');
        });
        /*$("#thumb-slider1 .owl-item").click(function(){
            $(".menu-thumb").removeClass('thumbActive');
            $(this).find(".menu-thumb").addClass('thumbActive');
        });*/
    });
    </script>
    <script type="text/javascript">
    $(document).ready(function () {
        <?PHP echo $thumbScript;?>
    });
    </script>
    <script type="text/javascript">
    $(document).ready(function () {
        <?PHP echo $thumbNav;?>
    });
    </script>
    <script type="text/javascript">
    $(document).ready(function () {
        <?PHP echo $thumbMenu;?>
    });
    </script>
    <?PHP include('inc-script-nav.php');?>
</body>

</html>
