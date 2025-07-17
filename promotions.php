<?PHP
$nonce = bin2hex(openssl_random_pseudo_bytes(8));
include(dirname(__FILE__).'/include/db_config.php');
include(dirname(__FILE__).'/include/function.inc.php');
$items_per_group = 3;
$results = mysql_query("SELECT COUNT(*) as t_records FROM promotion");
$total_records = mysql_fetch_array($results);
$total_groups = ceil($total_records['t_records']/$items_per_group);
?><!doctype html>
<html class="no-js" lang="en">
    <head>
        <?PHP
                $page='promotion';
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
        <style>
.animation_image {
    margin-right: auto;
    margin-left: auto;
    position: absolute;
    bottom: -22px;
    left: 50%;
    width: 50px;
}
</style>
    </head>
    <body style="background-image:url('images/aka/main/bg-main.jpg'); background-size: cover; background-position: 0 0;">
        <!-- navigation panel -->
        <?PHP include('inc-nav.php');?>
        <!-- end navigation panel -->





        <!-- slider -->
        <!-- <section class="content-top-margin promotions-banner no-padding">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 text-center promotions-banner-desktop">
                        <div class="row">
                            <img src="<?PHP echo $imgBanner;?>" alt="">
                        </div>
                    </div>
                    <div class="col-md-12 text-center promotions-banner-mobile">
                        <div class="row">
                            <img src="<?PHP echo $imgBanner;?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </section> -->
        <!-- end slider -->





        <!-- news -->
        <section class="position-relative">
            <div class="bg-banner-bottom-promotions">
                <img src="images/aka/main/bg-banner-bottom.png" alt="">
            </div>
            <div class="container position-relative">
                <div class="japan-text">
                    <img src="images/aka/main/japan-text.png" alt="">
                </div>
                <div class="row update-header">
                    <div class="col-md-12 update-zone">
                        <img src="images/aka/promotions/head.png" alt="" style="width: 230px;">
                    </div>
                </div>
                <div class="row blog-3col" id="results">
                <?php 
$query = getAllDetail("promotion","","promotion_id DESC LIMIT 0, 3");

    while($obj = mysql_fetch_array($query))
    {
        $detail_url = 'promotion/'.$obj['promotion_id'].'/'.urlReviseName($obj['title']);
        echo '<div class="col-md-4 col-sm-6 col-xs-6 blog-listing">
                        <div class="blog-image"><a href="'.$detail_url.'"><img src="'.$obj['tmb'].'" alt=""></a></div>
                        <div class="blog-details">
                            <div class="blog-date">'.$obj['title'].'</div>
                            <div class="blog-short-description headline-font yellow-text">'.$obj['promotion_date'].'</div>
                        </div>
                    </div>';
    }
?>
                </div>
            </div>
            <div class="col-md-12">
                <div class="text-center">
                    <img src="images/aka/news/btn-more.png" alt="" style="cursor: pointer;" id="btnMore">
                    <div class="animation_image" style="display:none;" align="center"><img src="images/ajax-loader.gif"></div>
                </div>
            </div>
        </section>
        <!-- end news -->





        <section>
            <div class="container-fluid" style="background-image:url('images/aka/promotions/bg-promotions.png'); background-size: cover; background-position: 0 0; margin-top: -200px;">
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
         <script type="text/javascript">
$(document).ready(function() {
    var track_load = 1; //total loaded record group(s)
    var loading  = false; //to prevents multipal ajax loads
    var total_groups = <?php echo $total_groups; ?>; //total record group(s)
    
    /*$('#results').load("include/autoload_process.php", {'group_no':track_load}, function() {
        track_load++;});*/ //load first group
    
    $("#btnMore").click(function(){
        if(track_load <= total_groups && loading==false) //there's more data to load
            {
                loading = true; //prevent further ajax loading
                $('.animation_image').show(); //show loading image
                
                //load data from the server using a HTTP POST request
                $.post('include/autoload_promotion_test.php',{'group_no': track_load}, function(data){
                                    
                    $("#results").append(data); //append received data into the element
                    //console.log(data);
                    //hide loading image
                    $('.animation_image').hide(); //hide loading image once data is received
                    
                    track_load++; //loaded group increment
                    loading = false; 
                    $('.modal-popup').magnificPopup({
                        type: 'inline',
                        preloader: false,
                        // modal: true,
                        blackbg: true
                    });
                
                }).fail(function(xhr, ajaxOptions, thrownError) { //any errors?
                    
                    alert(thrownError); //alert with HTTP error
                    $('.animation_image').hide(); //hide loading image
                    loading = false;
                
                });
                
            }
     });
    
});
</script>
<?PHP include('inc-script-nav.php');?>
    </body>
</html>
