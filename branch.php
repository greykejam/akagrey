<?php
$nonce = bin2hex(openssl_random_pseudo_bytes(8));
  header('Access-Control-Allow-Origin: *');
  header("Cache-Control: no-cache, must-revalidate"); //HTTP 1.1
  header("Pragma: no-cache"); //HTTP 1.0
  header('Expires: '.gmdate('D, d M Y H:i:s \G\M\T', time() + (60))); // Date in the past
include(dirname(__FILE__).'/include/db_config.php');
include(dirname(__FILE__).'/include/function.inc.php');
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
$domain = $_SERVER['HTTP_HOST'];
?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
    <?PHP
        $page='branch';
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
        <style>
       #map {
        height: 400px;
        width: 100%;
       }
       .controls {
        margin-top: 10px;
        border: 1px solid transparent;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        height: 32px;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
      }

      .pac-container {
        font-family: Roboto;
      }

      #type-selector {
        color: #fff;
        background-color: #4d90fe;
        padding: 5px 11px 0px 11px;
      }

      #type-selector label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }
      #target {
        width: 345px;
      }
      .styling-wizard-app {
          position: absolute; 
          bottom: 130px; 
          right: 0px;
          background: white;
          background-image: url(<?=$protocol . "://" . $domain;?>/images/icon-cow.png);
          background-size: 18px 18px;
          background-repeat: no-repeat;
          background-position: 4px 4px;
          border: 1px solid transparent;
          border-radius: 2px;
          box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px;
          margin-right: 10px;
          height: 26px;
          width: 26px;
          z-index: 99;
      }
      #map a:hover {
    color: #ff0000 !important;
}
      #location-control{
        display: none;
      }
        li.active {
            height: auto;
        }
    </style>
    
    
    
    </head>
    <body style="background-image:url('images/aka/main/bg-main.jpg'); background-size: cover; background-position: 0 0;">
        <!-- navigation panel -->
        <?PHP include('inc-nav.php');?>
        <!-- end navigation panel -->





        <!-- slider -->
        <section class="content-top-margin page-title parallax parallax-fix" style="background: url('img_shabu/banner_main.jpg') 50% 0; margin-top: -20px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <!-- page title -->
                        <p class="white-text font-40 sub-title animated fadeInDown">à¸ªà¸²à¸‚à¸²à¸‚à¸­à¸‡ AKA YAKINIKU à¹à¸¥à¸° AKA SHABU</p>
                        <!-- end page title -->
                        <!-- page title tagline -->
                        <p class="white-text headline-font font-50 animated fadeInUp">BRANCHES</p>
                        <!-- end title tagline -->
                    </div>
                </div>
            </div>
        </section>
        <!-- end slider -->





        <!-- branches -->
        <section class="position-relative">
            <div class="bg-banner-bottom">
                <img src="images/aka/main/bg-banner-bottom.png" alt="">
            </div>
            <div class="container position-relative">
                <div class="japan-text">
                    <img src="images/aka/main/japan-text.png" alt="">
                </div>
                <div class="row">
                    <!-- tab -->
                    <div class="col-md-12">
                        <div class="tab-style5">
                            <div class="row">
                                <div class="col-md-4">
                                    <h2 class="white-text" style="padding-bottom: 15px;">AKA YAKINIKU BRANCHES</h2>
                                    <!-- tab navigation -->
                                    <ul class="flat-list-floor branch-list" style="overflow-y: scroll; height:300px; margin-bottom: 30px;">
                                        <?PHP
                                        $sqlBranch="select * from branch where is_status='0' order by order_hot asc";
                                        $rsBranch=mysql_query($sqlBranch) or die(mysql_error());
                                        $i=0;
                                        while ($rowBranch=mysql_fetch_array($rsBranch)) {
                                            $floorID=$rowBranch['floor_id'];
                                            if($i==0){
                                                $active='';
                                                $longitude=$rowBranch['longitude'];
                                                $latitude=$rowBranch['latitude'];
                                            }elseif($i==1){
                                                $active='';
                                            }else{
                                                $active='';
                                            }
                                            $sqlfloor="select * from floor where floor_id='".$floorID."' and is_status='0' limit 1";
                                            $rsfloor=mysql_query($sqlfloor) or die(mysql_error());
                                            $rowfloor=mysql_fetch_array($rsfloor);
                                              echo '<li class="'.$active.'"><a class="branch" data-bussiness_hour="'.$rowBranch['bussiness_hour'].'" data-des="'.$rowBranch['des'].'" data-tel="'.$rowBranch['tel'].'" data-title="'.$rowBranch['title'].'" data-longitude="'.$rowBranch['longitude'].'" data-latitude="'.$rowBranch['latitude'].'" href="#tab5_sec'.$rowBranch['branch_id'].'" data-toggle="tab">&#8226 <span>'.$rowBranch['title'].'</span></a><div class="branch-list-floor">'.$rowfloor['no_title'].'<sup>'.$rowfloor['suf_title'].'</sup> '.$rowfloor['des_title'].'</div></li>';
                                            // }
                                            $i++;
                                        }
                                        ?>
                                    </ul>
                                    <!-- end tab navigation -->
                                     <h2 class="white-text" style="padding-bottom: 15px;">AKA SHABU BRANCHES</h2>
                                     <!-- tab navigation -->
                                    <ul class="flat-list-floor branch-list" style="overflow-y: scroll; height:50px;">
                                        <li class=""><a class="branch" 
                                            data-bussiness_hour="10:00à¸™. - 22:00à¸™. à¸—à¸¸à¸à¸§à¸±à¸™" 
                                            data-des="à¹€à¸¥à¸‚à¸—à¸µà¹ˆ 7/222  à¸­à¸²à¸„à¸²à¸£à¸¨à¸¹à¸™à¸¢à¹Œà¸à¸²à¸£à¸„à¹‰à¸²à¹€à¸‹à¹‡à¸™à¸—à¸£à¸±à¸¥ à¸›à¸´à¹ˆà¸™à¹€à¸à¸¥à¹‰à¸²  à¸«à¹‰à¸­à¸‡à¹€à¸¥à¸‚à¸—à¸µà¹ˆ 117  à¸Šà¸±à¹‰à¸™ 1  à¸–à¸™à¸™à¸šà¸£à¸¡à¸£à¸²à¸Šà¸Šà¸™à¸™à¸µ  à¹à¸‚à¸§à¸‡à¸­à¸£à¸¸à¸“à¸­à¸¡à¸£à¸´à¸™à¸—à¸£à¹Œ  à¹€à¸‚à¸•à¸šà¸²à¸‡à¸à¸­à¸à¸™à¹‰à¸­à¸¢  à¸à¸£à¸¸à¸‡à¹€à¸—à¸žà¸¡à¸«à¸²à¸™à¸„à¸£  10700" 
                                            data-tel="095-960-9794" 
                                            data-title="CENTRALPLAZA PINKLAO" 
                                            data-longitude="13.777100612692008" 
                                            data-latitude="100.47636012328731" href="#tab5_secShabu" 
                                            data-toggle="tab">&#8226 <span>CENTRALPLAZA PINKLAO</span></a><div class="branch-list-floor">1<sup>st</sup> FLOOR</div></li>
                                    </ul>
                                    <!-- end tab navigation -->
                                </div>
                                <div class="col-md-8">
                                    <!-- tab content section -->
                                    <div class="tab-content position-relative overflow-hidden">
                                        <?PHP
                                        $rsBranch=mysql_query($sqlBranch) or die(mysql_error());
                                        $i=0;
                                        while ($rowBranch=mysql_fetch_array($rsBranch)) {
                                            $floorID=$rowBranch['floor_id'];
                                            if($i==0){
                                                $active='active';
                                            }else{
                                                $active='';
                                            }
                                            $tel=$rowBranch['tel'];
                                            if($rowBranch['tel_des']!=''){
                                                $tel.=''.$rowBranch['tel_des'];
                                            }
                                            $sqlfloor="select * from floor where floor_id='".$floorID."' and is_status='0'";
                                            $rsfloor=mysql_query($sqlfloor) or die(mysql_error());
                                            $rowfloor=mysql_fetch_array($rsfloor);
                                            $des_branch='<div class="tab-pane fade in '.$active.'" id="tab5_sec'.$rowBranch['branch_id'].'">
                                            <div class="branch-detail-head">'.$rowBranch['title'].' <br><span>'.$rowfloor['no_title'].'<sup>'.$rowfloor['suf_title'].'</sup> '.$rowfloor['des_title'].'</span></div>
                                            <div class="branch-detail-body">'.$rowBranch['des'].'<br><span>'.nl2br($rowBranch['bussiness_hour']).'</span></div>
                                            <div class="branch-detail-tel"><span class="icon-tel"><img src="images/aka/branch/icon-tel.png" alt=""></span>'.$tel.' 
                                                <a href="tel:'.$rowBranch['tel'].'"><img src="images/aka/branch/btn-call.png" alt=""></a>
                                            </div>
                                        </div>';
                                            // if($i!=0){
                                                echo $des_branch;
                                            // }
                                            
                                            $i++;
                                        }
                                        ?>
                                        <div class="tab-pane fade in " id="tab5_secShabu">
                                            <div class="branch-detail-head">CENTRALPLAZA PINKLAO <br><span>1<sup>st</sup> FLOOR</span></div>
                                            <div class="branch-detail-body">à¹€à¸¥à¸‚à¸—à¸µà¹ˆ 7/222  à¸­à¸²à¸„à¸²à¸£à¸¨à¸¹à¸™à¸¢à¹Œà¸à¸²à¸£à¸„à¹‰à¸²à¹€à¸‹à¹‡à¸™à¸—à¸£à¸±à¸¥ à¸›à¸´à¹ˆà¸™à¹€à¸à¸¥à¹‰à¸²  à¸«à¹‰à¸­à¸‡à¹€à¸¥à¸‚à¸—à¸µà¹ˆ 117  à¸Šà¸±à¹‰à¸™ 1  à¸–à¸™à¸™à¸šà¸£à¸¡à¸£à¸²à¸Šà¸Šà¸™à¸™à¸µ  à¹à¸‚à¸§à¸‡à¸­à¸£à¸¸à¸“à¸­à¸¡à¸£à¸´à¸™à¸—à¸£à¹Œ  à¹€à¸‚à¸•à¸šà¸²à¸‡à¸à¸­à¸à¸™à¹‰à¸­à¸¢  à¸à¸£à¸¸à¸‡à¹€à¸—à¸žà¸¡à¸«à¸²à¸™à¸„à¸£  10700<br><span>10:00à¸™. - 22:00à¸™. à¸—à¸¸à¸à¸§à¸±à¸™</span></div>
                                            <div class="branch-detail-tel"><span class="icon-tel"><img src="images/aka/branch/icon-tel.png" alt=""></span>095-960-9794 
                                                <a href="tel:095-960-9794"><img src="images/aka/branch/btn-call.png" alt=""></a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end tab content section -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end tab -->
                </div>
            </div>
        </section>
        <!-- end branches -->





        <section class="no-padding-bottom sm-no-padding">
            <div class="container-fuild">
                <div class="row no-margin">
                <div id="location-control" class="style-scope styling-wizard-app" ></div>
                    <div id="map"></div>
                </div>
            </div>
        </section>
        




        <!-- footer -->
        <?PHP include('inc-footer.php');?>
        <!-- end footer -->





        <script nonce="<?=$nonce;?>" type="text/javascript">
    
      var map;
      var infoWindow;

      function initAutocomplete() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 13.7513124, lng: 100.4813836},
          zoom: 12,
          mapTypeId: 'roadmap'
        });

        addMarkers();
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            map.setCenter(pos);
            $('#location-control').css('display', 'block');
          }, function() {});
        }

      }
        $("#location-control").click(function () { 
                navigator.geolocation.getCurrentPosition(function(position) {
                  var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                  };

                  map.setCenter(pos);
                }, function() {
                });
        });

  function addMarkers() {
      var image = '<?=$protocol . "://" . $domain;?>/images/icon-cow.png';
      //navigator.geolocation.getCurrentPosition(function(position) {

        $.getJSON("<?=$protocol . "://" . $domain;?>/map_markers.php",function(result){
          $.each(result, function(i, record){
              var markerPos = {lat: parseFloat(record.lat), lng: parseFloat(record.lng)};
              // console.log(markerPos);
              // Add the markerto the map
              var marker = new google.maps.Marker({
                  map: map,
                  animation: google.maps.Animation.DROP,
                  position: markerPos,
                  icon: image
              });


              var infoWindowContent = '<h4>'+record.title+'</h4><div>'+record.des+'<br>Tel. : '+record.tel+'<br>Open : '+record.bussiness_hour+'<br>'+'<a href="#" onclick="window.open(\'https://maps.google.com?saddr=Current+Location&daddr='+record.lat+','+ record.lng+'\', \'_system\', \'location=yes\'); return false;" style="" >à¹€à¸ªà¹‰à¸™à¸—à¸²à¸‡</a>'+"</div>";



              addInfoWindow(marker, infoWindowContent, record);
          });
        });
      //});
  }

  function addInfoWindow(marker, message, record) {
 
      marker.addListener('click', function () {
          if (infoWindow) {
            infoWindow.close();
          }
          infoWindow = new google.maps.InfoWindow({
              content: message
          });
          infoWindow.open(map, marker);
      });
  }
    </script>
    <script language="javascript" src="https://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyC-i2F91bq9110krSnN6JHKUlr-fBLvcHc&libraries=places&language=th&callback=initAutocomplete"></script>
        <script nonce="<?=$nonce;?>" type="text/javascript">
            
            $(document).ready(function() {
                $(".branch").on('click', function() {
                    $('a.branch').parent().removeClass('active');
                    var Lat=$(this).attr("data-longitude");
                    var Lng=$(this).attr("data-latitude");
                    var title=$(this).attr("data-title");
                    var des=$(this).attr("data-des");
                    var tel=$(this).attr("data-tel");
                    var bussiness_hour=$(this).attr("data-bussiness_hour");

                    var message = '<h4>'+title+'</h4><div>'+des+'<br>Tel. : '+tel+'<br>Open : '+bussiness_hour+'<br>'+'<a href="#" onclick="window.open(\'https://maps.google.com?saddr=Current+Location&daddr='+Lat+','+ Lng+'\', \'_system\', \'location=yes\'); return false;" >à¹€à¸ªà¹‰à¸™à¸—à¸²à¸‡</a>'+"</div>";
                    
                    //alert("Lat : "+Lat+"\nLng : "+Lng);            
                    var map = new google.maps.Map(
                        document.getElementById('map'), {
                        center: new google.maps.LatLng(Lat, Lng),
                        zoom: 13,
                        mapTypeId: google.maps.MapTypeId.ROADMAP
                      });

                    var marker = new google.maps.Marker({
                        position: new google.maps.LatLng(Lat, Lng),
                        animation: google.maps.Animation.DROP,
                        icon: "<?=$protocol . "://" . $domain;?>/images/icon-cow.png",
                        map: map
                    });
                    marker.addListener('click', function () {
                    window.open('https://maps.google.com?saddr=Current+Location&daddr='+Lat+','+ Lng+'');
                      /*
                      if (infoWindow) {
                        infoWindow.close();
                      }
                      infoWindow = new google.maps.InfoWindow({
                          content: message
                      });
                      infoWindow.open(map, marker);
                      */
                    });
                });
            });
        </script>
        <?PHP include('inc-script-nav.php');?>
    </body>
</html>
