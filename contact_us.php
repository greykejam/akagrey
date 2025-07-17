<?PHP
$nonce = bin2hex(openssl_random_pseudo_bytes(8));
include(dirname(__FILE__).'/include/db_config.php');
?><!doctype html>
<html class="no-js" lang="en">
    <head>
        <?PHP
                $page='contact_us';
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
        <section class="position-relative no-padding-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="head-contact font-40">
                            <span>à¸‚à¹‰à¸­à¹€à¸ªà¸™à¸­à¹à¸™à¸° / à¸•à¸´à¸”à¸•à¹ˆà¸­à¹€à¸£à¸²</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <form id="agencycontactform"  action="contact_send.php"  onsubmit="return validation();" method="post" enctype="multipart/form-data">
                    <div class="col-md-6">
                            <div id="success" class="no-margin-lr" style="display: none;"></div>
                            <input name="txtSubject" id="txtSubject" type="text" placeholder="SUBJECT" required>
                            <input name="txtName" id="txtName" type="text" placeholder="NAME" required>
                            <input name="txtEmail" id="txtEmail" type="email" placeholder="E-MAIL" required>
                            <input name="txtPhone" id="txtPhone" type="text" placeholder="TEL">
                        
                    </div>
                    <div class="col-md-6 position-relative">
                        <textarea placeholder="COMMENT" name="txtDes" id="txtDes" style="height: 224px;" required></textarea>
                        <div class="position-absolute attach-btn"><img src="images/aka/contact/attach-images.png" id="attach-file" style="cursor: pointer;"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p class="white-text title-med">
                            <label>
                                <input type="checkbox" name="txtaccept" id="txtaccept" value="1" required> à¸‚à¹‰à¸²à¸žà¹€à¸ˆà¹‰à¸²à¹„à¸”à¹‰à¸­à¹ˆà¸²à¸™à¹à¸¥à¸°à¸¢à¸­à¸¡à¸£à¸±à¸šà¹€à¸‡à¸·à¹ˆà¸­à¸™à¹„à¸‚à¸•à¸²à¸¡à¸—à¸µà¹ˆà¸£à¸°à¸šà¸¸à¹„à¸§à¹‰à¹ƒà¸™ <a class="red-text" href="privacy.php" target="_blank">à¸™à¹‚à¸¢à¸šà¸²à¸¢à¸„à¸§à¸²à¸¡à¹€à¸›à¹‡à¸™à¸ªà¹ˆà¸§à¸™à¸•à¸±à¸§</a> à¸—à¸¸à¸à¸›à¸£à¸°à¸à¸²à¸£ à¹à¸¥à¸°à¹ƒà¸«à¹‰à¸„à¸§à¸²à¸¡à¸¢à¸´à¸™à¸¢à¸­à¸¡à¹ƒà¸™à¸à¸²à¸£à¹€à¸à¹‡à¸šà¸£à¸§à¸šà¸£à¸§à¸¡à¹ƒà¸Šà¹‰ à¹à¸¥à¸°à¹€à¸›à¸´à¸”à¹€à¸œà¸¢à¸‚à¹‰à¸­à¸¡à¸¹à¸¥à¸ªà¹ˆà¸§à¸™à¸šà¸¸à¸„à¸„à¸¥à¸‚à¸­à¸‡à¸‚à¹‰à¸²à¸žà¹€à¸ˆà¹‰à¸² à¸•à¸²à¸¡à¸§à¸±à¸•à¸–à¸¸à¸›à¸£à¸°à¸ªà¸‡à¸„à¹Œà¸—à¸µà¹ˆà¹„à¸”à¹‰à¸¡à¸µà¸à¸²à¸£à¹à¸ˆà¹‰à¸‡à¹„à¸§à¹‰à¸‚à¹‰à¸²à¸‡à¸•à¹‰à¸™
                            </label>
                        </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-xs-6">
                    <input type="file" id="fileToUpload" name="fileToUpload" style="display: none;" />
                        <input id="contact-us-button" name="send" type="submit" value="send" class="btn btn-black no-margin-top f-right no-margin-lr">
                    </div>
                    <div class="col-md-6 col-xs-6">
                        <input id="contact-us-button" name="reset" type="reset" value="reset" class="btn btn-black no-margin-top f-left no-margin-lr" style="-webkit-appearance: none; border-radius: 7px;">
                    </div>
                </div>
                </form>
            </div>
        </section>
        <!-- end intro -->





        <!-- news -->
        <section class="no-padding">
            <div class="container position-relative">
                <div class="">
                    <div class="body-font white-text text-center">
                        <p class="font-40">à¸šà¸£à¸´à¸©à¸±à¸— à¸­à¸²à¸à¸°à¸­à¸´à¸™à¹€à¸•à¸­à¸£à¹Œà¸Ÿà¸¹à¹‰à¸”à¸ªà¹Œ à¸ˆà¸³à¸à¸±à¸”<br><span class="font-30">à¹€à¸¥à¸‚à¸—à¸µà¹ˆ 662 à¸‹à¸­à¸¢à¸­à¹ˆà¸­à¸™à¸™à¸¸à¸Š 17 à¹à¸‚à¸§à¸‡à¸ªà¸§à¸™à¸«à¸¥à¸§à¸‡ à¹€à¸‚à¸•à¸ªà¸§à¸™à¸«à¸¥à¸§à¸‡ à¸ˆà¸±à¸‡à¸«à¸§à¸±à¸”à¸à¸£à¸¸à¸‡à¹€à¸—à¸žà¸¯ 10250 <br>à¹‚à¸—à¸£à¸¨à¸±à¸žà¸—à¹Œ : 02-019-5000</span></p>
                    </div>
                </div>
            </div>
        </section>
        <!-- end news -->





        <section class="no-padding-bottom">
            <div class="container-fluid" style="background-image:url('images/aka/contact/bg-contact.png'); background-size: cover; background-position: 0 0; margin-top: -150px;">
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
        <script nonce="<?=$nonce;?>" type="text/javascript">
        $(document).ready(function () {
            $("#attach-file").click(function() {
                $("#fileToUpload").click();
            });
        });
  function validation()
  {
    var msg ="";
    if(document.getElementById("txtSubject").value==""){
      alert("à¸à¸£à¸¸à¸“à¸²à¸à¸£à¸­à¸ à¸«à¸±à¸§à¸‚à¹‰à¸­à¸‚à¹‰à¸­à¹€à¸ªà¸™à¸­à¹à¸™à¸° / à¸•à¸´à¸”à¸•à¹ˆà¸­à¹€à¸£à¸²");
      document.getElementById('txtSubject').focus();
      return false;
    }
    if(document.getElementById("txtName").value==""){
      alert("à¸à¸£à¸¸à¸“à¸²à¸à¸£à¸­à¸ à¸Šà¸·à¹ˆà¸­-à¸ªà¸à¸¸à¸¥");
      document.getElementById('txtName').focus();
      return false;
    }
    if(document.getElementById("txtEmail").value==""){
      alert("à¸à¸£à¸¸à¸“à¸²à¸à¸£à¸­à¸ à¸­à¸µà¹€à¸¡à¸¥");
      document.getElementById('txtEmail').focus();
      return false;
    }else{
      if(document.getElementById('txtEmail').value!=""){
        if(!check_email(document.getElementById('txtEmail').value)){
          alert("à¸à¸£à¸¸à¸“à¸²à¸à¸£à¸­à¸ à¸­à¸µà¹€à¸¡à¸¥ à¹ƒà¸«à¹‰à¸–à¸¹à¸à¸•à¹‰à¸­à¸‡");  
          return false ;
        }
      }
    }
    if(document.getElementById("txtaccept").checked == false){
      alert("à¸à¸£à¸¸à¸“à¸²à¸à¸”à¸¢à¸­à¸¡à¸£à¸±à¸šà¹€à¸‡à¸·à¹ˆà¸­à¸™à¹„à¸‚");
      return false;
    }
    return true;
  }
  function checkIt(evt) {
    //onKeyPress="return checkIt(event)"
    evt = (evt) ? evt : window.event
    var charCode = (evt.which) ? evt.which : evt.keyCode
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
      status = "This field accepts numbers only."
        //alert(charCode);
        return false
      }
      status = ""
      return true
    }

    function check_email(e) {
      ok = "1234567890qwertyuiop[]asdfghjklzxcvbnm.@-_QWERTYUIOPASDFGHJKLZXCVBNM";
      for(i=0; i < e.length ;i++){
        if(ok.indexOf(e.charAt(i))<0){ return (false);} 
      } 

      if (document.images) {
        re = /(@.*@)|(\.\.)|(^\.)|(^@)|(@$)|(\.$)|(@\.)/;
        re_two = /^.+\@(\[?)[a-zA-Z0-9\-\.]+\.([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
        if (!e.match(re) && e.match(re_two)) {return (-1);} 
      }
    }
    function emailChars(val){ 
    //Define the element 
    event.keyCode = val; 
    //Restrict the keys you can press 
    if( event.keyCode != 65 && 
      event.keyCode != 66 && 
      event.keyCode != 67 && 
      event.keyCode != 68 && 
      event.keyCode != 69 && 
      event.keyCode != 70 && 
      event.keyCode != 71 && 
      event.keyCode != 72 && 
      event.keyCode != 73 && 
      event.keyCode != 74 && 
      event.keyCode != 75 && 
      event.keyCode != 76 && 
      event.keyCode != 77 && 
      event.keyCode != 78 && 
      event.keyCode != 79 && 
      event.keyCode != 80 && 
      event.keyCode != 81 && 
      event.keyCode != 82 && 
      event.keyCode != 83 && 
      event.keyCode != 84 && 
      event.keyCode != 85 && 
      event.keyCode != 86 && 
      event.keyCode != 87 && 
      event.keyCode != 88 && 
      event.keyCode != 89 && 
      event.keyCode != 90 && 
      event.keyCode != 97 && 
      event.keyCode != 98 && 
      event.keyCode != 99 && 
      event.keyCode != 100 && 
      event.keyCode != 101 && 
      event.keyCode != 102 && 
      event.keyCode != 103 && 
      event.keyCode != 104 && 
      event.keyCode != 105 && 
      event.keyCode != 106 && 
      event.keyCode != 107 && 
      event.keyCode != 108 && 
      event.keyCode != 109 && 
      event.keyCode != 110 && 
      event.keyCode != 111 && 
      event.keyCode != 112 && 
      event.keyCode != 113 && 
      event.keyCode != 114 && 
      event.keyCode != 115 && 
      event.keyCode != 116 && 
      event.keyCode != 117 && 
      event.keyCode != 118 && 
      event.keyCode != 119 && 
      event.keyCode != 120 && 
      event.keyCode != 121 && 
      event.keyCode != 122 && 
      event.keyCode != 48 && 
      event.keyCode != 49 && 
      event.keyCode != 50 && 
      event.keyCode != 51 && 
      event.keyCode != 52 && 
      event.keyCode != 53 && 
      event.keyCode != 54 && 
      event.keyCode != 55 && 
      event.keyCode != 56 && 
      event.keyCode != 57 && 
      event.keyCode != 45 &&
      event.keyCode != 46 && 
      event.keyCode != 64 &&
      event.keyCode != 95) { 
        //character invalid 
        //alert(event.keyCode);
        return false 
      } else { 
        //Character value 
        return true; 
      } 
    } 
    </script>
    <?PHP include('inc-script-nav.php');?>
    </body>
</html>
